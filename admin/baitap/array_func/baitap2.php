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
                        if(isset($_POST['sum'])) {
                            $msg = "";
                            $sum = 0;
                            $str = $_POST['array'];
                            if(!empty($str)) {
                                $arr = explode(",", $str);
                                foreach($arr as $value) {
                                    if(!is_numeric($value))
                                    {
                                        $msg = "Nhập sai dữ liệu";
                                        $sum = 0;
                                        break;
                                    } else {
                                        $sum = $sum + strval($value);
                                    }
                                }
                            } else $msg = "Chưa có dữ liệu";
                        } 
                    ?>
                    <form action="baitap2.php" name="calculator" method="post">
                        <table style="background: cyan; margin: 20px auto">
                            <tr>
                                <th colspan="2" style="background: darkblue;">
                                    NHẬP VÀ TÍNH DÃY SỐ
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Nhập dãy số
                                </td>
                                <td>
                                    <input type="text" name="array" value="<?php
                                        if(isset($_POST['array'])) echo $_POST['array'];
                                    ?>" size="20">
                                    <span style="color: red;">(*)</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <input type="submit" name="sum" value="Tổng dãy số" style="padding: 5px;">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tổng dãy số
                                </td>
                                <td>
                                    <input type="text" name="result" value="<?php
                                        if(isset($sum)) echo $sum;
                                    ?>" size="10" readonly style="background: greenyellow;">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="color: red;">
                                    (*) Các số phân cách sau dấu ","!
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