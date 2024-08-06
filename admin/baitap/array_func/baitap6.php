<!DOCTYPE html>
<html lang="en">
<?php 
	
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>JomaShop</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="../../assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include '../sidebar.php' ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

                <?php include '../template.php' ?>

                <div>
                    <?php
                        if(isset($_POST['replace'])) {
                            $str = $_POST['str'];
                            $msg = "";
                            if(!empty($str) or $str=='0') {
                                $isValid = true;
                                $array = createArray($str);
                                foreach($array as $x) {
                                    if(!filter_var($x, FILTER_VALIDATE_INT) and $x!='0') {
                                        $isValid = false;
                                        break;
                                    }
                                }
                                if($isValid) {
                                    sortArrayAsc($array);
                                    $ascending = printArray($array);
                                    sortArrayDesc($array);
                                    $descending = printArray($array);
                                } else $msg = "Mảng nhập vào không đúng định dạng";
                            } else $msg = "Mảng chưa được nhập";
                        }

                        function createArray($str) {
                            $array = explode(", ", $str);
                            return $array;
                        }

                        function printArray($array) {
                            $str = "";
                            foreach($array as $x) {
                                $str .= $x . " ";
                            }
                            return $str;
                        }

                        function sortArrayAsc(&$array) {
                            for($i=0; $i < count($array) - 1; $i++) {
                                for($j=$i+1; $j < count($array); $j++) {
                                    if($array[$i] >= $array[$j]) {
                                        $temp = $array[$i];
                                        $array[$i] = $array[$j];
                                        $array[$j] = $temp;
                                    }
                                }
                            }
                        }

                        function sortArrayDesc(&$array) {
                            for($i=0; $i < count($array) - 1; $i++) {
                                for($j=$i+1; $j < count($array); $j++) {
                                    if($array[$i] <= $array[$j]) {
                                        $temp = $array[$i];
                                        $array[$i] = $array[$j];
                                        $array[$j] = $temp;
                                    }
                                }
                            }
                        }
                    ?>
                    <form action="baitap6.php" name="calculator" method="post">
                        <table style="background: cyan; margin: 20px auto">
                            <tr>
                                <th colspan="2" style="background: purple; padding: 10px;">
                                    SẮP XẾP MẢNG
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Nhập các phần tử:
                                </td>
                                <td>
                                    <input type="text" name="str" value="<?php
                                        if(isset($_POST['str'])) echo $_POST['str'];
                                    ?>" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <input type="submit" name="replace" value="Sắp xếp tăng/giảm" style="padding: 5px; color: red; background: yellow;">
                                </td>
                            </tr>
                            <tr>
                                <td style="color: red; font-weight: bold; text-align: center;">
                                    Sau khi sắp xếp
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tăng dần:
                                </td>
                                <td>
                                    <input type="text" name="ascending" value="<?php
                                        if(isset($ascending)) echo $ascending;
                                    ?>" size="50" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Giảm dần:
                                </td>
                                <td>
                                    <input type="text" name="descending" value="<?php
                                        if(isset($descending)) echo $descending;
                                    ?>" size="50" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <span style="color: red;">(Ghi chú:</span> Các phần tử trong mảng được ngăn cách bằng dấu ", ")
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color: red;">
                                    <?php if(isset($msg)) echo $msg; else echo ""; ?>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="../../assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="../../assets/plugins/morris/morris.min.js"></script>
	<script src="../../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../../assets/js/chart.js"></script>

	<!-- Custom JS -->
	<script src="../../assets/js/app.js"></script>

</body>

</html>