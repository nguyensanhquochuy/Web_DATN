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
                        $first = $_POST['first'];
                        $second = $_POST['second'];
                        if(!empty($first) and !empty($second) or $first==0 or $second==0) {
                            $operation = $_POST['operation'];
                            if(is_numeric($first) and is_numeric($second)) {
                                switch ($operation){
                                    case 'Cộng' : $result = $first + $second;
                                        break;
                                    case 'Trừ' : $result = $first - $second;
                                        break;
                                    case 'Nhân' : $result = $first * $second;
                                        break;
                                    case 'Chia' : {
                                        if($second != 0) {
                                            $result = (float) $first / $second;
                                        } else $result = "Không thể chia cho 0";
                                    }
                                        break;
                                }
                            } else $result = "Dữ liệu phải là số";
                        } else $result = "Không được để trống";
                    ?>
                    <div>
                        <form action="" name="ketqua" method="post">
                            <table style="background: lightyellow; margin: 20px auto">
                                <tr style="background: orange;">
                                    <th colspan="2">
                                        PHÉP TÍNH TRÊN HAI SỐ
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        Chọn phép tính:
                                    </td>
                                    <td>
                                        <?php 
                                            if(isset($_POST['operation'])) echo $_POST['operation'];
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số thứ nhất:
                                    </td>
                                    <td>
                                        <input type="text" name="first" value="<?php
                                            if(isset($_POST['first'])) echo $_POST['first'];
                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Số thứ hai:
                                    </td>
                                    <td>
                                        <input type="text" name="second" value="<?php
                                            if(isset($_POST['second'])) echo $_POST['second'];
                                        ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kết quả:
                                    </td>
                                    <td>
                                        <input type="text" name="result" value="<?php
                                            if(isset($result)) echo $result; else echo "";
                                        ?>" readonly style="background: lightpink">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
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