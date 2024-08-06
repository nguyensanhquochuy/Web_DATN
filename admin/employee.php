<!DOCTYPE html>
<html lang="en">
<?php
include '../user/pages/config.php';
$sql = 'SELECT * FROM nhanvien';
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();

if (isset($_POST['add_employee'])) {
	$fullName = $_POST['fullname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$sex = $_POST['sex'];
	$authority = $_POST['accAuthority'];

	$errEmail = "";
	$errPassword = "";
	// Kiểm tra xem giá trị của email đã tồn tại trong bảng accounts chưa
	$sql = 'SELECT * FROM taikhoan WHERE TenDN = ? ';
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $email);
	$stmt->execute();
	$result = $stmt->get_result();


	if ($result->num_rows != 0) {
		$errEmail = "Email already exists";
		echo '<script language="javascript">alert("Failed to add employee! Email already exists");</script>';
	} else {
		$option = [
			'cost' => 12,
		];
		$passHash = password_hash($password, PASSWORD_DEFAULT, $option);
		$sql = 'INSERT INTO taikhoan (TenDN, DienThoai, MatKhau, MaPQ) VALUES (?, ?, ?, ?)';
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("sssi", $email, $phone, $passHash, $authority);
		$stmt->execute();

		$sql = 'SELECT * FROM taikhoan WHERE TenDN LIKE ?';
		$stmt = $conn->prepare($sql);
		$stmt->bind_param('s', $email);
		$stmt->execute();
		$result = $stmt->get_result()->fetch_assoc();
		$idAcc = $result['MaTK'];

		$emptyValue = "";
		$imgDefault = 'default_user.png';

		$sql = 'INSERT INTO nhanvien (HoTen, Email, DienThoai, DiaChiCT, GioiTinh, AnhBia, AnhDaiDien, MaTK) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$stmt = $conn->prepare($sql);
		$stmt->bind_param("ssssissi", $fullName, $email, $phone, $address, $sex, $emptyValue, $imgDefault, $idAcc);
		$stmt->execute();
		echo '<script language="javascript">alert("Employee added successfully!");</script>';
		header("Refresh: 1; URL=employee.php");
	}
}

if (isset($_GET['delete'])) {
	$manId = $_GET['delete'];

	$sql = 'SELECT * FROM nhanvien WHERE MaNV = ?';
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("i", $manId);
	$stmt->execute();
	$result = $stmt->get_result()->fetch_assoc();
	$manAcc = $result['MaTK'];


	$delete = 'DELETE FROM nhanvien WHERE MaNV = ? ';
	$stmt = $conn->prepare($delete);
	$stmt->bind_param("i", $manId);
	$stmt->execute();


	$sql = 'DELETE FROM taikhoan WHERE MaTK = ?';
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("i", $manAcc);

	if ($stmt->execute()) {
		echo '<script language="javascript">alert("Delete successfull!");</script>';

		header("Refresh: 0; URL=employee.php");
	} else {
		echo '<script language="javascript">alert("Delete failed!");</script>';
	}
}

if (isset($_GET['searchEmployee'])) {

	$id = $_GET['manId'];
	$name = $_GET['name'];

	$sql = 'SELECT * FROM nhanvien WHERE 1=1 ';

	if (!empty($id) and !empty($name)) {
		$sql .= ' AND nhanvien.MaNV LIKE CONCAT("%", ?, "%") AND nhanvien.HoTen  LIKE CONCAT("%", ?, "%")';

		$stmt = $conn->prepare($sql);
		$stmt->bind_param("is", $id, $name);
	} else {
		if (!empty($id)) {
			$sql .= ' AND nhanvien.MaNV LIKE CONCAT("%", ?, "%")';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("i", $id);
		}

		if (!empty($name)) {
			$sql .= ' AND  nhanvien.HoTen LIKE CONCAT("%", ?, "%")';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s", $name);
		}
	}

	if ((empty($id) and empty($name))) {
		$stmt = $conn->prepare($sql);
	}
	$stmt->execute();
	$results = $stmt->get_result();
}





?>





<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>JomaShop</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="assets/css/line-awesome.min.css">
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

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

		<?php include 'header_sidebar.php' ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="page-title">Nhân viên</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
								<li class="breadcrumb-item active">Nhân viên</li>
							</ul>
						</div>
						<div class="col-auto float-right ml-auto">
							<a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_employee"><i class="fa fa-plus"></i>Thêm nhân viên</a>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<!-- Search Filter -->
				<form method="GET" action="employee.php">
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="manId" value="<?php if (isset($id)) echo $id ?>">
								<label class="focus-label">Nhân viên ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating" name="name" value="<?php if (isset($name)) echo $name ?>">
								<label class="focus-label">Họ tên nhân viên</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<button type="submit" class="btn btn-success btn-block" name="searchEmployee">Tìm kiếm</button>
						</div>
					</div>
				</form>
				<!-- View Filter -->
				<!-- Pagination -->
				<div class="row" style="width: 100%;">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table datatable">
								<thead>
									<tr>
										<th>Id</th>
										<th>Employee</th>
										<th>Email</th>
										<th>Phone</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$count = 1;
									while ($row = $results->fetch_assoc()) {
									?>
										<tr>
											<td><?= $row['MaNV'] ?></td>
											<td>
                                                <h2 class="table-avatar">

                                                    <a class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: inline-block;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../admin/assets/img/img_managers/<?= $row['AnhDaiDien'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen'] ?></a>
                                                </h2>
                                            </td>
											<td><?= $row['Email'] ?></td>
											<td><?= $row['DienThoai'] ?></td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="detail_employee.php?detail=<?= $row['MaNV'] ?>"><i class="fa fa-eye m-r-5"></i>Detail</a>
														<a class="dropdown-item" href="employee.php?delete=<?= $row['MaNV'] ?>" onclick="return confirm('Are you sure want to delete?')" ;><i class="fa fa-trash-o m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Add Employee Modal -->
		<div id="add_employee" class="modal custom-modal fade" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add Employee</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="employee.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Full Name<span class="text-danger">*</span></label>
										<input class="form-control" type="text" required name="fullname" value="<?php if (isset($fullName)) echo $fullName; ?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Email<span class="text-danger">*</span></label>
										<input class="form-control" type="email" required name="email" value="<?php if (isset($email)) echo $email; ?>">
										<medium class="text-danger"><?php if (isset($errEmail)) echo $errEmail ?></medium>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Password<span class="text-danger">*</span></label>
										<input class="form-control" type="password" required name="password" value="<?php if (isset($password)) echo $password; ?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-form-label">Address<span class="text-danger">*</span></label>
										<input class="form-control" type="text" required name="address" value="<?php if (isset($address)) echo $address; ?>">

									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group m-b-0">
										<label class="col-form-label">Choose Your Gender<span class="text-danger">*</span></label>
										<div class="form-control" id="rating_scale_select_okr" style="border: none;">
											<label class="radio-inline custom_radio" style="margin-right: 20px;">
												<input type="radio" name="sex" value="1" required="" class="rating_scale" checked="">Nam <span class="checkmark"></span>
											</label>
											<label class="radio-inline custom_radio">
												<input type="radio" name="sex" value="0" required="" class="rating_scale">Nữ <span class="checkmark"></span>
											</label>

										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group">
										<label class="col-form-label">Phone<span class="text-danger">*</span></label>
										<input class="form-control" type="number" required name="phone">
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label class="col-form-label">Authority</label>
										<select class="select" name="accAuthority">
											<option value="4" <?php if (isset($authority) and $authority == 4) echo "selected" ?>>Nhân viên</option>
											<option value="1" <?php if (isset($authority) and $authority == 1) echo "selected" ?>>Admin</option>
										</select>
									</div>
								</div>
							</div>
							<div class="submit-section">
								<button class="btn btn-primary submit-btn" type="submit" name="add_employee">Thêm</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

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

	<!-- Select2 JS -->
	<script src="./assets/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="./assets/js/moment.min.js"></script>
	<script src="./assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Datatable JS -->
	<script src="./assets/js/jquery.dataTables.min.js"></script>
	<script src="./assets/js/dataTables.bootstrap4.min.js"></script>

	<!-- Custom JS -->
	<script src="./assets/js/app.js"></script>


</body>

</html>