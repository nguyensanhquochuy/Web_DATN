<!DOCTYPE html>
<html lang="en">
<?php

include '../user/pages/config.php';
$sql = 'SELECT * FROM monhoc

';

$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();


if (isset($_GET['delete'])) {
    $idSubject = $_GET['delete'];
    $delete = 'DELETE FROM monhoc WHERE MaMH = ? ';
    $stmt = $conn->prepare($delete);
    $stmt->bind_param("i", $idSubject);

    if ($stmt->execute()) {
        echo '<script language="javascript">alert("Delete successfull!");</script>';
        header("Refresh: 0; URL=subject.php");
    } else {
        echo '<script language="javascript">alert("Delete failed!");</script>';
    }
}


if (isset($_GET['searchSubject'])) {

    $name = $_GET['name'];
    $id = $_GET['id'];


    $sql = 'SELECT * FROM monhoc
    WHERE (1=1) 
    ';


    if (!empty($id)) {
        $sql .= " AND  monhoc.MaMH LIKE  '%$id%' ";
    }

    if (!empty($name)) {
        $sql .= " AND  monhoc.TenMH LIKE  '%$name%' ";
    }


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();
}

if (isset($_POST['add_subject'])) {
    $nameIns = $_POST['name'];
    $checkInsert = true;
    if (empty($nameIns)) {
        $errName = "The name field can't be blank";
        $checkInsert = false;
        echo '<script language="javascript">alert("Add failed! The name field cannot be blank ");</script>';
    }

    $sql = 'SELECT * FROM monhoc WHERE TenMH = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $nameIns);
    $stmt->execute();

    if ($stmt->get_result()->num_rows > 0) {
        $errName = "Name already exists";
        $checkInsert = false;
        echo '<script language="javascript">alert("Add failed! Name already exists");</script>';
    }

    if ($checkInsert) {
        $sql = 'INSERT INTO monhoc (TenMH) values (?)';
        $stmt->prepare($sql);
        $stmt->bind_param('s', $nameIns);
        if ($stmt->execute()) {
            echo '<script language="javascript">alert("Add Subject successfull!");</script>';
            header("Refresh: 0; URL=subject.php");
        } else {
            echo '<script language="javascript">alert("Add failed!");</script>';
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
        <?php
        if (isset($_GET['edit']) && isset($_GET['status'])) {

            $status = $_GET['status'];
            $idTutor = $_GET['edit'];


            $sql = 'UPDATE giasu SET 
                TrangThaiDuyet = ?,
                MaNV = ?
                WHERE MaGS = ?';
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("iii", $status, $idMan, $idTutor);
            if ($stmt->execute()) {
                echo '<script language="javascript">
                         alert("Update successfully!");
                         window.location.href = "tutor.php";
                        </script>';
            } else {
                echo '<script language="javascript">alert("Update failed!");</script>';
            }
        }

        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Môn học</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Môn học</li>
                            </ul>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_subject"><i class="fa fa-plus"></i>Thêm môn học</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <!-- Search Filter -->
                <!-- Search Filter -->
                <form method="GET" action="subject.php" id="search_Tutor">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="id" value="<?php if (isset($id)) echo ($id); ?>">
                                <label class="focus-label">ID môn học</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="name" value="<?php if (isset($name)) echo ($name); ?>">
                                <label class="focus-label">Tên môn học</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <button type="submit" class="btn btn-success btn-block" name="searchSubject">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="reset" class="btn btn-info btn-block" name="reset" onclick="resetForm('search_Tutor'); return false;">Nhập mới</button>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while ($row = $results->fetch_assoc()) {
                                    ?>
                                        <tr>

                                            <td><?= $row['MaMH'] ?></td>
                                            <td><?= $row['TenMH'] ?></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit_subject.php?edit=<?= $row['MaMH'] ?>"><i class="fa fa-pencil m-r-5"></i>Edit</a>

                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_subject<?= $row['MaMH'] ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>


                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Delete Employee Modal -->
                                        <div class="modal custom-modal fade" id="delete_subject<?= $row['MaMH'] ?>" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h3>Delete Subject</h3>
                                                            <p>Are you sure want to delete?</p>
                                                        </div>
                                                        <div class="modal-btn delete-action">
                                                            <form method="post" action="subject.php">
                                                                <div class="row">
                                                                    <div class="col-6">
                                                                        <a href="subject.php?delete=<?= $row['MaMH'] ?>" class="btn btn-primary continue-btn">Delete</a>
                                                                    </div>
                                                                    <div class="col-6">
                                                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Add Employee Modal -->
            <div id="add_subject" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Subject</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="subject.php">
                                <div class="row" style="justify-content: center;">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="col-form-label">Name<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" required name="name" value="<?php if (isset($nameIns)) echo $nameIns; ?>">
                                            <medium class="text-danger"><?php if (isset($errName)) echo $errName ?></medium>
                                        </div>
                                    </div>

                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn" type="submit" name="add_subject">Thêm</button>
                                </div>
                            </form>
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

    <script type="text/javascript">
        function resetForm(myFormId) {
            var myForm = document.getElementById(myFormId);

            for (var i = 0; i < myForm.elements.length; i++) {
                if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type) {
                    myForm.elements[i].checked = false;
                    myForm.elements[i].value = '';
                    myForm.elements[i].selectedIndex = 0;
                }
            }
            // Reset select2 elements
            $('#' + myFormId + ' .select2').val('').trigger('change');

        }
        $(document).ready(function() {
            // Initialize Select2 elements
            $('.select2').select2({
                width: '100%',
                minimumResultsForSearch: Infinity
            });
        });
    </script>




</body>

</html>