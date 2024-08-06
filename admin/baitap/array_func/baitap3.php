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
                        if(isset($_POST['cal'])) {
                            $msg = "";
                            $n = $_POST['n'];
                            if(!empty($n) or $n=="0") {
                                if(filter_var($n, FILTER_VALIDATE_INT) and $n>0) {
                                    $array = createArray($n);
                                    $array_str = printArray($array);
                                    $minMax = findMinMax($array);
                                    $min = $minMax[0];
                                    $max = $minMax[1];
                                    $sum = sumArray($array);
                                } else $msg = 'Dữ liệu không phải là số nguyên dương';
                            } else $msg = 'Dữ liệu chưa được nhập';
                        }

                        function createArray($n) {
                            $array = array();
                            for($i=0; $i < $n; $i++) {
                                $array[$i] = rand(0, 20);
                            } 
                            return $array;
                        }

                        function printArray($array) {
                            $str = "";
                            foreach($array as $x) {
                                $str .= $x . " ";
                            }
                            return $str;
                        }

                        function findMinMax($array) {
                            $minMax = array();
                            $min = $array[0];
                            $max = $array[0];
                            foreach($array as $x) {
                                if($x < $min) $min = $x;
                                if($x > $max) $max = $x;
                            }
                            $minMax[0] = $min;
                            $minMax[1] = $max;
                            return $minMax;
                        }

                        function sumArray($array) {
                            $sum = 0;
                            foreach($array as $x) {
                                $sum += $x;
                            }
                            return $sum;
                        }
                    ?>
                    <form action="baitap3.php" name="calculator" method="post">
                        <table style="background: cyan; margin: 20px auto">
                            <tr>
                                <th colspan="2" style="background: purple; padding: 10px;">
                                    PHÁT SINH MẢNG VÀ TÍNH TOÁN
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Nhập số phần tử:
                                </td>
                                <td>
                                    <input type="text" name="n" value="<?php
                                        if(isset($_POST['n'])) echo $_POST['n'];
                                    ?>" size="16">
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <input type="submit" name="cal" value="Phát sinh và tính toán" style="padding: 5px; color: red; background: yellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mảng:
                                </td>
                                <td>
                                    <input type="text" name="array" value="<?php
                                        if(isset($array_str)) echo $array_str;
                                    ?>" size="30" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    GTLN trong mảng:
                                </td>
                                <td>
                                    <input type="text" name="max" value="<?php
                                        if(isset($max)) echo $max;
                                    ?>" size="12" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    GTNN trong mảng:
                                </td>
                                <td>
                                    <input type="text" name="min" value="<?php
                                        if(isset($min)) echo $min;
                                    ?>" size="12" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tổng mảng:
                                </td>
                                <td>
                                    <input type="text" name="sum" value="<?php
                                        if(isset($sum)) echo $sum;
                                    ?>" size="12" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <span style="color: red;">(Ghi chú:</span> Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)
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