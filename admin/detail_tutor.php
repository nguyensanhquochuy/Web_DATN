<!DOCTYPE html>
<html lang="en">
<?php
include '../user/pages/config.php';
if (isset($_GET['detail'])) {
    $idTutor = $_GET['detail'];
    echo $idTutor;
    $sql = 'SELECT giasu.*, loaigs.TenLoaiGS, hinhthuc.TenHT FROM giasu
            LEFT JOIN loaigs on loaigs.MaloaiGS = giasu.MaLoaiGS
            LEFT JOIN hinhthuc on hinhthuc.MaHT = giasu.MaHT
            WHERE giasu.MaGS = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idTutor);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $imgTutor = $result['AnhDaiDien'];

    $email =  $result['Email'];
    $phone =  $result['DienThoai'];
    $fullName = $result['HoTen'];
    $city = $result['Tinh_TP'];
    $address = $result['DiaChiCT'];
    $description = $result['MoTa'];

    $sex = $result['GioiTinh'];
    $fee = $result['HocPhi1H'];
    $nameTypeTuTor = $result['TenLoaiGS'];
    $method = $result['TenHT'];
    $degree = $result['AnhBangCap'];
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
            <div class="content container-fluid" style="padding: 10px 30px 30px 30px;">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Gia sư</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Gia sư</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">

                                            <a href="#"><img alt="" src="../user/assets/img/img_tutor/<?= $imgTutor ?>"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0"><?= $fullName ?></h3>
                                                    <h5 class="text-muted"><?= $email ?></h5>
                                                    <h5 class="text-muted">&nbsp</h5>
                                                    <medium class="text-muted"><?= $phone ?></medium>


                                                    <div class="staff-id">City : &nbsp<?= $city ?></div>

                                                    <medium class="text-muted">&nbsp<?= $address ?></medium>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="personal-info">

                                                    <li>
                                                        <div class="title">Type of Tutor:</div>
                                                        <div class="text"><a href="">&nbsp<?= $nameTypeTuTor ?></a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Teaching method:</div>
                                                        <div class="text">&nbsp<?= $method ?></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Tuition fee per hour:</div>
                                                        <div class="text">&nbsp<?= $fee ?></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Gender:</div>
                                                        <div class="text">&nbsp<?= ($sex == 1) ? 'Nam' : (($sex == '0') ? 'Nữ' : '')  ?></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Description:</div>
                                                        <div class="text">&nbsp<?= $description ?></div>
                                                    </li>
                                                    <li>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-content mt-2">

                    <!-- Profile Info Tab -->
                    <div id="emp_profile" class="pro-overview tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-5 d-flex ">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Degree Image </h3>
                                        <div class="personal-info" style="text-align: center;">
                                            <img src="../user/assets/img/img_tutor/<?= $degree ?>" style="width: 100%;" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Professional profile </h3>

                                        <ul class="personal-info">
                                            <li>
                                                <div class="title" style="width: 15%;">Subject</div>
                                                <div class="text">
                                                    <?php
                                                    if (isset($idTutor)) {

                                                        // Lấy dữ liệu môn học gia sư dạy
                                                        $sql = 'SELECT * FROM giasu_monhoc 
                                                                JOIN monhoc on giasu_monhoc.MaMH = monhoc.MaMH
                                                                WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
                                                        $stmt = $conn->prepare($sql);
                                                        $stmt->bind_param('i', $idTutor);
                                                        $stmt->execute();
                                                        $resultTutorSubjects = $stmt->get_result();

                                                        // Tạo một mảng lưu trữ các môn học mà giáo sư dạy
                                                        $typeSubjects = array();
                                                        while ($rowTutorSubject = $resultTutorSubjects->fetch_assoc()) {
                                                            $typeSubjects[] = $rowTutorSubject['TenMH'];
                                                        }
                                                        echo implode(', ', $typeSubjects);
                                                    }
                                                    ?>

                                                </div>
                                            </li>
                                            <li>
                                                <div class="title" style="width: 15%;">Topic</div>
                                                <div class="text">

                                                    <?php
                                                    if (isset($idTutor)) {

                                                        // Lấy dữ liệu môn học gia sư dạy
                                                        // Lấy dữ liệu chủ đề cho gia sư
                                                        $sql = 'SELECT * FROM giasu_chude  
                                                                JOIN chude ON chude.MaCD = giasu_chude.MaCD
                                                                WHERE MaGS = ?';
                                                        $stmt = $conn->prepare($sql);
                                                        $stmt->bind_param('i', $idTutor);
                                                        $stmt->execute();
                                                        $resultTutor_Tag = $stmt->get_result();
                                                        $listTags = array();

                                                        while ($rowTag = $resultTutor_Tag->fetch_assoc()) {
                                                            array_push($listTags, $rowTag['TenCD']);
                                                        }
                                                        echo implode(', ', $listTags);
                                                    }
                                                    ?>
                                                </div>
                                            </li>

                                        </ul>
                                        <hr>
                                        <h5 class="section-title">Schedule</h5>
                                        <style>
                                            .page-node .gblock-v2 .body-block {
                                                float: left;
                                                width: 100%;
                                            }

                                            .gblock-v2 .body-block {
                                                background: #fff;
                                                padding: 15px;
                                            }

                                            .gblock-v2 .body-block {
                                                width: 100%;
                                                flex-direction: row;
                                                justify-content: center;
                                                flex-wrap: wrap;
                                            }

                                            .row-calendar h3 {
                                                font-size: 16px;
                                                border: none !important;
                                                margin-top: 5px;
                                            }

                                            .row-calendar {
                                                min-width: 14.285%;
                                                padding: 5px;
                                                text-align: center;
                                                display: flex;
                                                flex-direction: column;
                                            }

                                            .row-calendar ul {
                                                text-align: center;
                                                padding: 0 !important;
                                                width: 100%;
                                            }

                                            ul,
                                            ol {
                                                margin-top: 0;
                                                margin-bottom: 10px;
                                            }

                                            .calendar-normal,
                                            .calendar-active {
                                                list-style: none;
                                                padding: 5px;
                                                margin-bottom: 10px;
                                                color: #9e9d9d;
                                                border: 1px solid #d3d3d3;
                                                border-radius: 2px;
                                            }

                                            .calendar-active {
                                                background: #03ad03;
                                                color: #fff;
                                            }
                                        </style>
                                        <div class="body-block block-calender d-flex" style="justify-content: center;">
                                            <?php
                                            if (isset($idTutor)) {
                                                // Lấy dữ liệu lich dạy gia sư
                                                $sql = 'SELECT * FROM lichday  WHERE MaGS = ?';
                                                $stmt = $conn->prepare($sql);
                                                $stmt->bind_param('i', $idTutor);
                                                $stmt->execute();
                                                $resultlistCalendars = $stmt->get_result();
                                                $listCalendars = array();

                                                while ($rowlistCalendars = $resultlistCalendars->fetch_assoc()) {
                                                    array_push($listCalendars, $rowlistCalendars['TenThu'] . " " . $rowlistCalendars['TenBuoi']);
                                                }
                                            }
                                            ?>
                                            <div class='row-calendar'>
                                                <h3>Thứ 2</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 2 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 2 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 2 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Thứ 3</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 3 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 3 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 3 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Thứ 4</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 4 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 4 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 4 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Thứ 5</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 5 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 5 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 5 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Thứ 6</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 6 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 6 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 6 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Thứ 7</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 7 Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 7 Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Thứ 7 Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                            <div class='row-calendar'>
                                                <h3>Chủ nhật</h3>
                                                <ul>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Chủ nhật Sáng", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>SÁNG</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Chủ nhật Chiều", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>CHIỀU</li>
                                                    <li class='<?= (isset($listCalendars)) &&  in_array("Chủ nhật Tối", $listCalendars)  ? 'calendar-active' : 'calendar-normal' ?>'>TỐI</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-md-12 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Review </h3>
                                        <?php
                                        if (isset($idTutor)) {

                                            // Lấy dữ liệu môn học gia sư dạy
                                            $sql = 'SELECT * FROM danhgiags 
                                                    WHERE MaGS = ?';
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param('i', $idTutor);
                                            $stmt->execute();
                                            $result = $stmt->get_result();
                                        }
                                        ?>

                                        <div class="table-responsive">

                                            <table class="table table-striped custom-table datatable" style="display: <?= ($result->num_rows > 0) ? '' : 'none' ?> ;">

                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Strengths</th>
                                                        <th>Weaknesses</th>
                                                        <th>Teaching Methodology</th>
                                                        <th>Soft Skills</th>
                                                        <th>Dedication</th>
                                                        <th>Punctuality</th>
                                                        <th>Pedagogical Skills</th>
                                                        <th>Evaluation Period</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    while ($row = $result->fetch_assoc()) {
                                                    ?>
                                                        <tr>
                                                            <td><?= $row['TieuDe'] ?></td>
                                                            <td><?= $row['DiemTot'] ?></td>
                                                            <td><?= $row['DiemChuaTot'] ?></td>
                                                            <td><?= $row['DiemPPDH'] ?></td>
                                                            <td><?= $row['DiemKNM'] ?></td>
                                                            <td><?= $row['DiemTT'] ?></td>
                                                            <td><?= $row['DiemDG'] ?></td>
                                                            <td><?= $row['DiemNVSP'] ?></td>
                                                            <td><?= $row['ThoiGianNX'] ?></td>
                                                            <td class="text-right">
                                                                <div class="dropdown dropdown-action">
                                                                    <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                        <a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>

                                                </tbody>


                                            </table>
                                            <div style="display: <?= ($result->num_rows > 0) ? 'none' : 'flex' ?>"> Chưa có đánh giá nào!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Bank information</h3>
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Bank name</div>
                                                <div class="text">ICICI Bank</div>
                                            </li>
                                            <li>
                                                <div class="title">Bank account No.</div>
                                                <div class="text">159843014641</div>
                                            </li>
                                            <li>
                                                <div class="title">IFSC Code</div>
                                                <div class="text">ICI24504</div>
                                            </li>
                                            <li>
                                                <div class="title">PAN No</div>
                                                <div class="text">TC000Y56</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Family Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#family_info_modal"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Relationship</th>
                                                        <th>Date of Birth</th>
                                                        <th>Phone</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Leo</td>
                                                        <td>Brother</td>
                                                        <td>Feb 16th, 2019</td>
                                                        <td>9876543210</td>
                                                        <td class="text-right">
                                                            <div class="dropdown dropdown-action">
                                                                <a aria-expanded="false" data-toggle="dropdown" class="action-icon dropdown-toggle" href="#"><i class="material-icons">more_vert</i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                                    <a href="#" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Education Informations <a href="#" class="edit-icon" data-toggle="modal" data-target="#education_info"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Arts and Science (UG)</a>
                                                            <div>Bsc Computer Science</div>
                                                            <span class="time">2000 - 2003</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">International College of Arts and Science (PG)</a>
                                                            <div>Msc Computer Science</div>
                                                            <span class="time">2000 - 2003</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card profile-box flex-fill">
                                    <div class="card-body">
                                        <h3 class="card-title">Experience <a href="#" class="edit-icon" data-toggle="modal" data-target="#experience_info"><i class="fa fa-pencil"></i></a></h3>
                                        <div class="experience-box">
                                            <ul class="experience-list">
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Zen Corporation</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Ron-tech</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="experience-user">
                                                        <div class="before-circle"></div>
                                                    </div>
                                                    <div class="experience-content">
                                                        <div class="timeline-content">
                                                            <a href="#/" class="name">Web Designer at Dalt Technology</a>
                                                            <span class="time">Jan 2013 - Present (5 years 2 months)</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- /Profile Info Tab -->

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

</body>

</html>