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
                            $isValid = true;
                            $old = $_POST['old'];
                            $new = $_POST['new'];
                            $array = createArray($str);
                            foreach($array as $x) {
                                if(!filter_var($x, FILTER_VALIDATE_INT) and $x!='0') {
                                    $isValid = false;
                                    break;
                                }
                            }
                            if(!$isValid) $msg = "Mảng nhập vào không đúng định dạng";
                            if(empty($str) and $str!='0') $msg = "Mảng chưa được nhập";
                            $msg_old = "";
                            $msg_new = "";
                            if(!filter_var($old, FILTER_VALIDATE_INT)) $msg_old = "Giá trị cần thay thế phải là số nguyên";
                            if(empty($old) and $old != "0") $msg_old = "Chưa nhập giá trị cần thay thế";
                            if(!filter_var($new, FILTER_VALIDATE_INT)) $msg_new = "Giá trị thay thế phải là số nguyên";
                            if(empty($new) and $new != "0") $msg_new = "Chưa nhập giá trị thay thế";
                            if(empty($msg_new) and empty($msg_old)) {
                                $array_old = printArray($array);
                                searchAndReplaceArray($old, $new, $array);
                                $array_new = printArray($array);
                            }
                        }

                        function createArray($str) {
                            $array = explode(", ", $str);
                            return $array;
                        }

                        function searchAndReplaceArray($old, $new, &$array) {
                            for($i=0; $i < sizeof($array); $i++) {
                                if($array[$i] == $old) {
                                    $array[$i] = $new;
                                }
                            }
                        }

                        function printArray($array) {
                            $str = "";
                            foreach($array as $x) {
                                $str .= $x . " ";
                            }
                            return $str;
                        }
                    ?>
                    <form action="baitap5.php" name="calculator" method="post">
                        <table style="background: cyan; margin: 20px auto">
                            <tr>
                                <th colspan="2" style="background: purple; padding: 10px;">
                                    THAY THẾ
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
                                    Giá trị cần thay thế:
                                </td>
                                <td>
                                    <input type="text" name="old" value="<?php
                                        if(isset($_POST['old'])) echo $_POST['old'];
                                    ?>" size="10">
                                    <span style="color: red;"><?php if(isset($msg_old)) echo $msg_old; else echo ""; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Giá trị thay thế:
                                </td>
                                <td>
                                    <input type="text" name="new" value="<?php
                                        if(isset($_POST['new'])) echo $_POST['new'];
                                    ?>" size="10">
                                    <span style="color: red;"><?php if(isset($msg_new)) echo $msg_new; else echo ""; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                                <td>
                                    <input type="submit" name="replace" value="Thay thế" style="padding: 5px; color: red; background: yellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mảng cũ:
                                </td>
                                <td>
                                    <input type="text" name="array_old" value="<?php
                                        if(isset($array_old)) echo $array_old;
                                    ?>" size="50" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Mảng mới:
                                </td>
                                <td>
                                    <input type="text" name="array_new" value="<?php
                                        if(isset($array_new)) echo $array_new;
                                    ?>" size="50" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <span style="color: red;">(Ghi chú:</span> Các phần tử trong mảng được ngăn cách bằng dấu ", ")
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color: red; text-align: center;">
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