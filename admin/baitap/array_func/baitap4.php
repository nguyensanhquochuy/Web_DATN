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
                        if(isset($_POST['search'])) {
                            $str = $_POST['str'];
                            $msg = "";
                            if(!empty($str) or $str='0') {
                                $isValid = true;
                                $n = $_POST['n'];
                                $array = createArray($str);
                                foreach($array as $x) {
                                    if(!filter_var($x, FILTER_VALIDATE_INT) and $x!='0') {
                                        $isValid = false;
                                        break;
                                    }
                                }
                                if($isValid) {
                                    if(!empty($n) or $n=="0") {
                                        if(filter_var($n, FILTER_VALIDATE_INT) or $n=="0") {
                                            $result = searchInArray($n, $array);
                                        } else $msg = 'Dữ liệu tìm không phải là số';
                                    } else $msg = 'Dữ liệu chưa được nhập';
                                } else $msg = "Mảng nhập vào không đúng định dạng";
                            } else $msg = "Mảng chưa được nhập";
                        }

                        function createArray($str) {
                            $array = explode(", ", $str);
                            return $array;
                        }

                        function searchInArray($n, $array) {
                            $isFound = 0;
                            $foundList = array();
                            $count = 0;
                            for($i=0; $i < sizeof($array); $i++) {
                                if($array[$i] == $n) {
                                    $isFound = 1;
                                    $foundList[$count] = $i;
                                    $count++;
                                }
                            }
                            if($isFound) {
                                $str = "";
                                foreach($foundList as $x) {
                                    $str .= $x . ", ";
                                }
                                $str = substr($str, 0, -2);
                                return "Đã tìm thấy " . $n . " tại vị trí " . $str . " trong mảng";
                            } else return "Không tim thấy " . $n . " trong mảng";
                        }
                    ?>
                    <form action="baitap4.php" name="calculator" method="post">
                        <table style="background-color: #9933FF; margin: 20px auto">
                            <tr>
                                <th colspan="2" style="background-color: #CC0066; color: white;">
                                    TÌM KIẾM
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Nhập mảng:
                                </td>
                                <td>
                                    <input type="text" name="str" value="<?php
                                        if(isset($_POST['str'])) echo $_POST['str'];
                                    ?>" size="50">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nhập số cần tìm:
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
                                    <input type="submit" name="search" style="background-color: lightyellow; padding: 10px" value="Tìm kiếm">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mảng:
                                </td>
                                <td>
                                    <input type="text" value="<?php
                                        if(isset($str)) echo $str;
                                    ?>" size="50" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Kết quả tìm kiếm:
                                </td>
                                <td>
                                    <input type="text" name="result" value="<?php
                                        if(isset($result)) echo $result;
                                    ?>" size="50" readonly style="background: greenyellow; text-align: center;">
                                </td>
                            </tr>
                            <tr >
                                <td colspan="2" style="color: white; text-align: center;">(Các phần tử trong mảng sẽ cách nhau bằng dấu ", ")</td>
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