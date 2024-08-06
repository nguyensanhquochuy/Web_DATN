<!DOCTYPE html>
<html lang="en">
<?php 
	
?>
<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"> -->

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
                        $fullname = $_POST['fullname'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $country = $_POST['country'];
                        $gender = $_POST['gender'];
                        $note = $_POST['note'];

                        $study = "";
                        if(isset($_POST['s1'])) {
                            $study .= $_POST['s1'] . ", ";
                        }
                        if(isset($_POST['s2'])) {
                            $study .= $_POST['s2'] . ", ";
                        }
                        if(isset($_POST['s3'])) {
                            $study .= $_POST['s3'] . ", ";
                        }
                        if(isset($_POST['s4'])) {
                            $study .= $_POST['s4'] . ", ";
                        }
                        $study = substr($study, 0, -2);

                        function printInfo($val) {
                            if(!empty($val)) {
                                return $val;
                            } else return "Dữ liệu không được nhập";
                        }
                    ?>
                    <div>
                        <fieldset>
                            <legend>Thành công!</legend>
                            <p>Bạn đã nhập thông tin thành công, dưới đây là thông tin bạn đã nhập:</p>
                            <table>
                                <tr>
                                    <td>
                                        Họ tên: 
                                    </td>
                                    <td><?php echo printInfo($fullname) ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Địa chỉ: 
                                    </td>
                                    <td><?php echo printInfo($address) ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Số điện thoại: 
                                    </td>
                                    <td><?php echo printInfo($phone) ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Giới tính: 
                                    </td>
                                    <td><?php if(!empty($gender)) {
                                        if($gender == "Male") echo "Nam";
                                        else echo "Nữ";
                                    } else echo "Dữ liệu không được nhập" ;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Quốc gia: 
                                    </td>
                                    <td><?php echo printInfo($country) ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Các môn đã học: 
                                    </td>
                                    <td><?php if(!empty($study)) echo $study; else echo "Chưa học môn nào" ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        Ghi chú: 
                                    </td>
                                    <td><?php if(!empty($note)) echo $note; else echo "Trống" ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="javascript:window.history.back(-1);">Trở về trang trước</a>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
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