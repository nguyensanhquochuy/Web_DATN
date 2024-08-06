<!DOCTYPE html>
<html lang="en">
<?php
include '../user/pages/config.php';
if (isset($_GET['edit'])) {
    $idTutor = $_GET['edit'];
    $sql = 'SELECT * FROM giasu
        WHERE MaGS LIKE ? ';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idTutor);
    $stmt->execute();
    $results = $stmt->get_result()->fetch_assoc();
    $status = $results['TrangThaiDuyet'];

    // $date = new DateTime($deliDate);
    // // Chuyển định dạng ngày tháng
    // $formattedDate = $date->format('d/m/Y');

    if (isset($_POST['save_bill'])) {
        $statuses = $_POST['statuses'];
        $deliDate = $_POST['deliDate'];

        $date = DateTime::createFromFormat('d/m/Y', $deliDate);
        $formattedDate = $date->format('Y/m/d');

        echo $statuses . " " . $deliDate . " " . $billId . " " . $formattedDate;

        $sql = 'UPDATE bills SET 
                billDeliveryDate = ?,
                billStatus = ?
            WHERE billId LIKE ?';
        $stmt = $conn->prepare($sql);


        echo $formattedDate;

        $stmt->bind_param("sii", $formattedDate, $statuses, $billId);
        if ($stmt->execute()) {
            echo '<script language="javascript">alert("Update successfully!");</script>';
            header("Refresh: 0; URL=bill.php");
        } else {
            echo '<script language="javascript">alert("Update failed!");</script>';
        }
    }
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

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

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
                            <h3 class="page-title">Watches</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Bills</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Edit Expense Modal -->
                <div id="edit_bill" class="custom-modal " role="dialog">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Tutor</h5>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="row">
                                        <!-- <div class="col-md-6">
											<div class="form-group">
												<label>Delivery Date</label>
												<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="deliDate" value="<?php if (isset($formattedDate)) echo $formattedDate ?>"></div>
											</div>
										</div> -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Trạng thái gia sư </label>
                                                <select class="select" name="statuses">
                                                    <option value="1" <?= (isset($status) && $status == 1) ? 'selected' : '' ?>>Đã duyệt</option>
                                                    <option value="0" <?= (isset($status) && $status == '0') ? 'selected' : '' ?>>Chưa duyệt</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-section">
                                        <a href="tutor.php" class="btn btn-dark submit-btn mr-4">Back</a>
                                        <button class="btn btn-success submit-btn ml-4" type="submit" name="save_bill">Save</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

    <!-- Add Watch Modal -->

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
    <script>
    </script>


</body>

</html>