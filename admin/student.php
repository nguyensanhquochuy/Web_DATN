<!DOCTYPE html>
<html lang="en">
<?php
include '../user/pages/config.php';
$sql = 'SELECT * FROM hocvien';
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();
$count = 1;
if (isset($_GET['searchStudent'])) {

    $sex = $_GET['sex'];
    $name = $_GET['Name'];
    $sql = "SELECT * FROM hocvien WHERE 1=1 ";
        if (!empty($sex) || ($sex == '0')) {
            $sql .= " AND hocvien.GioiTinh = '$sex' ";
            
            // $stmt->bind_param("i", $sex);
            echo "sada";
        }

        if (!empty($name)) {
            $sql .= " AND  hocvien.HoTen LIKE  '%$name%' ";
        }

    echo $sql;
    $stmt = $conn->prepare($sql);
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

    <!-- <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css"> -->

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
                            <h3 class="page-title">Học viên</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Học viên</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <form action="student.php" method="get">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="Name" value="<?php if (isset($name)) echo $name ?>">
                                <label class="focus-label">Họ tên học viên</label>
                            </div>
                        </div>
     
              
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">  
							<div class="form-group form-focus select-focus">
								<select class="select floating" name="sex"> 
									<option value=""> -- Lựa chọn -- </option>
                                    <option value="1" <?= (isset($sex) && $sex == 1) ? 'selected' : '' ?>>Nam</option>
                                    <option value="0" <?= (isset($sex) && $sex == '0') ? 'selected' : '' ?>>Nữ</option>
								</select>
								<label class="focus-label">Giới tính</label>
							</div>
					   </div>

                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block" name="searchStudent">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
                <!-- View Filter -->
                <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th class="sorting_asc">Student</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $results->fetch_assoc()) {
                                    ?>
                                        <tr>
                           
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: inline-block;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../user/assets/img/img_student/<?= $row['AnhDaiDien'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen'] ?></a>
                                                </h2>
                                            </td>
                                            <td><?= $row['DienThoai'] ?></td>
                                            <td><?= $row['Email'] ?></td>
                                            <td><?= $row['Tinh_TP'] ?></td>
                                            <td><?= $row['DiaChiCT'] ?></td>
                                            <td><?= ($row['GioiTinh'] == 1) ?  'Nam' : 'Nữ' ?></td>

                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="detail_customer.php?detail=<?= $row['MaHV'] ?>"><i class="fa fa-pencil m-r-5"></i> Detail</a>
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


                <!-- Add customer Modal -->

                <!-- Edit customer Modal -->

                <!-- Delete customer Modal -->

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