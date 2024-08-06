<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutorConnect Admin</title>
    <style>
        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('location: login.php');
}

include '../user/pages/config.php';

$sql = 'SELECT nhanvien.HoTen as HoTen_NV, nhanvien.AnhDaiDien as AnhDaiDien_NV, nhanvien.MaNV as MaNV, taikhoan.* FROM taikhoan
        JOIN phanquyen ON taikhoan.MaPQ = phanquyen.MaPQ
        JOIN nhanvien on nhanvien.MaTK = taikhoan.MaTK
        WHERE taikhoan.TenDN LIKE ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $_SESSION['username']);
$stmt->execute();

$result = $stmt->get_result()->fetch_assoc();
$idMan = $result['MaNV'];

$_SESSION['auth'] = $result['MaPQ'];

if ($_SESSION['auth'] != 1) {
    // $sql = 'SELECT * FROM accounts
    //     JOIN managers ON accounts.accId = managers.manAccount
    //     WHERE accounts.accUsername LIKE ?';
    // $stmt = $conn->prepare($sql);
    // $stmt->bind_param('s', $_SESSION['username']);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $manager = $result->fetch_assoc();
    $isAdmin = false;
} else {
    $isAdmin = true;
}
?>

<body>
    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="../admin/assets/img/tutorConnectStudent-removebg.png" style="width: 50%; height: auto;" alt="">
            </a>
        </div>
        <!-- /Logo -->

        <a id="toggle_btn" href="javascript:void(0);">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <!-- Header Title -->
        <div class="page-title-box">
            <h3>TutorConnect Admin</h3>
        </div>
        <!-- /Header Title -->

        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                    <form action="search.html">
                        <input class="form-control" type="text" placeholder="Search here">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </li>
            <!-- /Search -->

   

            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar-03.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar-06.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar-17.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets/img/profiles/avatar-13.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="activities.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- Message Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Messages</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/avatar-09.jpg">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">6 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/avatar-03.jpg">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">5 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/avatar-05.jpg">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">3 Mar</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">
                                                <img alt="" src="assets/img/profiles/avatar-08.jpg">
                                            </span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">27 Feb</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">View all Messages</a>
                    </div>
                </div>
            </li>
            <!-- /Message Notifications -->

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img src="../admin/assets/img/img_managers/<?= $result['AnhDaiDien_NV'] ?>" alt="">
                        <span class="status online"></span></span>
                    <span><?= $result['HoTen_NV'] ?></span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="detail_employee.php?detail=<?= $result['MaNV'] ?>">My Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.php">Logout</a>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="detail_employee.php?detail=<?= $result['MaNV'] ?>">My Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.php">Logout</a>

            </div>
        </div>
        <!-- /Mobile Menu -->
    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>TutorConnect Admin</span>
                    </li>
    
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="index.php"><i class="la la-dashboard"></i> <span>Quản lý</span></a>
                    </li>
         
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="employee.php"><i class="la la-user"></i> <span>Nhân Viên</span></a>
                    </li>
             
     
                    <li class="submenu <?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="#" class=""><i class="la la-book"></i> <span>Môn học - Chủ đề</span> <span class="menu-arrow" style="display: <?= $isAdmin ? 'block' : 'none' ?>;"></span></a>
                        <ul style="display: none;">
                            <li><a href="subject.php">Thông tin môn học</a></li>
                            <li><a href="topic.php">Thông tin chủ đề</a></li>
                        </ul>
                    </li>
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="method.php"><i class="la la-chalkboard"></i> <span>Hình thức</span></a>
                    </li>
      
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="student.php"><i class="la la-user-graduate"></i> <span>Học viên</span></a>
                    </li>

                    <li class="<?= $isAdmin ? '' : '' ?>">
                        <a href="tutor.php"><i class="la la-chalkboard-teacher"></i> <span>Gia sư</span></a>
                    </li>
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="typeTutor.php"><i class="la la-user-tie"></i> <span>Loại gia sư</span></a>
                    </li>
         
                    <li class="<?= $isAdmin ? '' : '' ?>">
                        <a href="class.php"><i class="la la-school"></i> <span>Lớp học</span></a>
                    </li>
                    <li class="<?= $isAdmin ? '' : 'disabled' ?>">
                        <a href="./report.php"><i class="la la-chart-line"></i> <span>Thống kê</span></a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->
</body>

</html>