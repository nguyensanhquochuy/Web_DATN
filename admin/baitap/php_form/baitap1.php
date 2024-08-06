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
                            $w = $_POST['width'];
                            $h = $_POST['height'];
                            if(is_numeric($w) and is_numeric($h)) {
                                if($w>0 and $h>0) {
                                    if($w>=$h) {
                                        $area = $w * $h;
                                    } else $msg = "Chiều dài phải lớn hơn chiều rộng";
                                } else $msg = "Chiều dài và rộng phải là số dương";
                            } else $msg = "Chiều dài và rộng phải là số";
                        }
                    ?>
                    <form action="" method="post">
                        <table style="background: beige; margin: 20px auto">
                            <tr style="background: lightpink;">
                                <th colspan="2">
                                    DIỆN TÍCH HÌNH CHỮ NHẬT
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    Chiều dài
                                </td>
                                <td>
                                    <input type="text" name="width" 
                                    value="<?php 
                                        if(isset($_POST['width'])) echo $_POST['width'];
                                    ?>" size="20"
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Chiều rộng
                                </td>
                                <td>
                                    <input type="text" name="height" 
                                    value="<?php 
                                        if(isset($_POST['height'])) echo $_POST['height'];
                                    ?>" size="20"
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Diện tích
                                </td>
                                <td>
                                    <input type="text" name="area" 
                                    value="<?php 
                                        if(isset($area)) echo $area;
                                    ?>" size="20" readonly style="background: lightpink;"
                                    >
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <input type="submit" name="cal" value="Tính">
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