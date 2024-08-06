<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>TutorConnectStudent</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include 'header_sidebar.php'; ?>
		<?php

		$report = "SELECT * FROM taikhoan WHERE taikhoan.MaPQ = 2 ";
		$stmt->prepare($report);
		$stmt->execute();
		$resultReport = $stmt->get_result();
		$countTutor = $resultReport->num_rows;

		$report = "SELECT * FROM taikhoan WHERE taikhoan.MaPQ = 3 ";
		$stmt->prepare($report);
		$stmt->execute();
		$resultReport = $stmt->get_result();
		$countStudent = $resultReport->num_rows;

		$report = "SELECT * FROM taikhoan WHERE taikhoan.MaPQ = 4 ";
		$stmt->prepare($report);
		$stmt->execute();
		$resultReport = $stmt->get_result();
		$countEmployee = $resultReport->num_rows;

		$report = "SELECT * FROM lophoc";
		$stmt->prepare($report);
		$stmt->execute();
		$resultReport = $stmt->get_result();
		$countClass = $resultReport->num_rows;

		?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">

					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Wellcome <?= ($isAdmin == 1) ? 'Admin: ' . $result['HoTen_NV'] : $result['HoTen_NV'] ?>!</h3>
							<!-- <ul class="breadcrumb">
								<li class="breadcrumb-item active"><?= $result['TenPQ'] ?></li>
							</ul> -->
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-graduation-cap"></i></span>
								<div class="dash-widget-info">
									<h3><?= (isset($countTutor) ? $countTutor : '') ?></h3>
									<span>TuTor</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-user"></i></span>
								<div class="dash-widget-info">
									<h3><?= (isset($countStudent) ? $countStudent : '') ?></h3>
									<span>Student</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-users"></i></span>
								<div class="dash-widget-info">
									<h3><?= (isset($countEmployee) ? $countEmployee : '') ?></h3>
									<span>Employee</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-server"></i></span>
								<div class="dash-widget-info">
									<h3><?= (isset($countClass) ? $countClass : '') ?></h3>
									<span>Class</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="./assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="./assets/js/popper.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="./assets/js/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="./assets/plugins/morris/morris.min.js"></script>
	<script src="./assets/plugins/raphael/raphael.min.js"></script>
	<script src="./assets/js/chart.js"></script>

	<!-- Custom JS -->
	<script src="./assets/js/app.js"></script>

</body>

</html>