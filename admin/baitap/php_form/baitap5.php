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
                            $start = $_POST['start'];
                            $end = $_POST['end'];
                            $price = 0;
                            $total = 0;
                            if(is_numeric($start) and is_numeric($end)) {
                                if($start <= $end) {
                                    if($start >= 10 and $end <= 24) {
                                        if($start >= 10 and $end <= 17) {
                                            $price = 20000;
                                            $total = ($end - $start) * $price;
                                        } elseif($start > 17 and $end <= 24) {
                                            $price = 45000;
                                            $total = ($end - $start) * $price;
                                        } else {
                                            $before = 17 - $start;
                                            $after = $end - 17;
                                            $total = $before * 20000 + $after * 45000;
                                        }
                                    } else $msg = "Quán không hoạt động trong thời gian này";
                                } else $msg = "Thời gian bắt đầu phải nhỏ hơn thời gian kết thúc";
                            } else $msg = "Thời gian bắt đầu và kết thúc phải là số và không để trống";
                        }
                    ?>
                    <div>
                        <form action="baitap5.php" name="baitap5" method="post">
                            <table style="background: lightpink; margin: 20px auto">
                                <tr style="background: red;">
                                    <th colspan="2">
                                        TÍNH TIỀN KARAOKE
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Giờ bắt đầu:
                                    </td>
                                    <td>
                                        <input type="text" name="start" value="<?php
                                            if(isset($_POST['start'])) echo $_POST['start'];
                                        ?>">
                                        <span>(h)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Giờ kết thúc:
                                    </td>
                                    <td>
                                        <input type="text" name="end" value="<?php
                                            if(isset($_POST['end'])) echo $_POST['end'];
                                        ?>">
                                        <span>(h)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Tiền thanh toán:
                                    </td>
                                    <td>
                                        <input type="text" name="total" value="<?php
                                            if(isset($total)) echo $total;
                                            else echo "";
                                        ?>" disabled style="background: lightyellow;">
                                        <span>(VND)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <input type="submit" name="cal" value="Tính tiền">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="color: red;">
                                        <?php if(isset($msg)) echo $msg; else echo "" ?>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
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