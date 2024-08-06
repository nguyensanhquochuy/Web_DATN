<!DOCTYPE html>
<?php 
	session_start();
	include '../user/pages/config.php';
	if(isset($_SESSION['username'])){
		unset($_SESSION['username']);
	}
	if(isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = 'SELECT * FROM taikhoan
			JOIN phanquyen ON taikhoan.MaPQ = phanquyen.MaPQ
			WHERE ((taikhoan.MaPQ = 1) OR (taikhoan.MaPQ = 4)) AND (taikhoan.TenDN LIKE ?)';
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s', $username);
		$stmt->execute();
		$result = $stmt->get_result();
		$nums = $result->num_rows;
		$acc = $result->fetch_assoc();

		$isValid = true;
		if($nums==0) {
			$msgUser = 'This username doesn\'t exist';
			$isValid = false;
		} else if(!password_verify($password,  $acc['MatKhau'])) {
			$msgPass = 'Wrong password';
			$isValid = false;
		}
		if(empty($password)) {
			$msgPass = 'This field is required';
			$isValid = false;
		} 
		if(empty($username)) {
			$msgUser = 'This field is required';
			$isValid = false;
		}
		if($isValid) {
			$_SESSION['username'] = $username;
			
			// $pass = $acc['MatKhau'];
			$idPQ = $acc['MaPQ'];
			echo $pq;
			if ($idPQ == 1 ) {
				header('location: index.php');
			} else {
				header('location: tutor.php');
			}
			
		}
	}

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - JOMASHOP Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="./assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="./assets/img/user.jpg" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to Administration Dashboard</p>
							
							<!-- Account Form -->
							<form method="post">
								<div class="form-group">
									<label>Username</label>
									<input class="form-control" type="text" name="username" value="<?= isset($username) ? $username : '' ?>">
									<span style="color: red;"><?= isset($msgUser) ? $msgUser : '' ?></span>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
										<div class="col-auto">
											<a class="text-muted" href="">
												Forgot password?
											</a>
										</div>
									</div>
									<input class="form-control" type="password" name="password">
									<span style="color: red;"><?= isset($msgPass) ? $msgPass : '' ?></span>
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit" name="login">Login</button>
								</div>
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="./assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="./assets/js/app.js"></script>
		
    </body>
</html>