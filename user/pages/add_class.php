<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();
if (isset($_GET['add'])) {
    $idAcc = $_GET['add'];
}
if (isset($_GET['add_tutor'])) {
    $inviteTutor = $_GET['add_tutor'];
}
?>

<head>
    <!--[if IE]><![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-dns-prefetch-control" content="on" />
    <!-- <link rel="dns-prefetch" href="//d1plicc6iqzi9y.cloudfront.net" /> -->
    <!--[if IE 9]>
<link rel="prefetch" href="//d1plicc6iqzi9y.cloudfront.net" />
<![endif]-->
    <!-- <link rel="shortcut icon" href="https://d1plicc6iqzi9y.cloudfront.net/sites/all/themes/blacasa/favicon.ico" type="image/vnd.microsoft.icon" /> -->
    <meta name="description" content="Blacasa là kênh kết nối dạy và học uy tín, chất lượng cao bao gồm kết nối trực tiếp gia sư với học viên, kết nối học viên với các trung tâm đào tạo uy tín." />
    <meta name="abstract" content="Blacasa là kênh kết nối dạy và học uy tín, chất lượng cao bao gồm kết nối trực tiếp gia sư với học viên, kết nối học viên với các trung tâm đào tạo uy tín." />
    <meta name="robots" content="follow, index" />
    <meta name="keywords" content="gia sư toán, gia sư tiếng anh" />
    <meta name="news_keywords" content="gia sư tiếng anh, gia sư toán" />
    <!-- <link rel="image_src" href="https://www.blacasa.vn/sites/all/themes/blacasa/images/blacasa-logo.png" /> -->
    <!-- <link rel="canonical" href="https://www.blacasa.vn/gioi-thieu" /> -->
    <meta name="rights" content="Blacasa Vietnam JSC" />
    <!-- <link rel="shortlink" href="https://www.blacasa.vn/node/579" /> -->
    <meta name="geo.position" content="21.0091795;105.790763" />
    <meta http-equiv="content-language" content="vi" />
    <meta name="geo.placename" content="BLACASA" />
    <meta name="geo.region" content="VN-64" />
    <meta name="revisit-after" content="1 day" />
    <meta name="icbm" content="21.0091795,105.790763" />
    <meta property="og:site_name" content="Blacasa Education" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.blacasa.vn/gioi-thieu" />
    <meta property="og:title" content="Giới thiệu về Blacasa | Kết nối dạy và học | Blacasa Education" />
    <meta property="og:updated_time" content="2018-11-01T18:27:53+07:00" />
    <meta property="og:description" content="Blacasa là kênh kết nối dạy và học uy tín, chất lượng cao bao gồm kết nối trực tiếp gia sư với học viên, kết nối học viên với các trung tâm đào tạo uy tín." />
    <meta property="og:see_also" content="https://www.blacasa.vn/tim-gia-su" />
    <meta property="og:see_also" content="https://www.blacasa.vn/dang-ky-gia-su" />
    <meta property="og:image" content="https://www.blacasa.vn/sites/all/themes/blacasa/images/blacasa-logo.png" />
    <meta property="og:see_also" content="https://www.blacasa.vn/class" />
    <meta property="og:image:url" content="https://www.blacasa.vn/sites/all/themes/blacasa/images/blacasa-logo.png" />
    <meta property="og:image:secure_url" content="https://www.blacasa.vn/sites/all/themes/blacasa/images/blacasa-logo.png" />
    <meta property="article:published_time" content="2017-04-14T15:51:06+07:00" />
    <meta property="article:modified_time" content="2018-11-01T18:27:53+07:00" />
    <meta property="video:tag" content="Gia sư công nghệ" />
    <meta property="video:tag" content="trung tâm gia sư" />
    <meta property="video:tag" content="blacasa" />
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="343419436516395" /> <!--App: Blacasa Support-->

    <meta property="fb:pages" content="1740255486293731" />
    <meta name="robots" content="index,follow" />
    <meta name="facebook-domain-verification" content="e098p10az6a0d6wmydb3yexuiozama" />

    <title>Giới thiệu về Blacasa | Kết nối dạy và học | Blacasa Education</title>
    <!-- <link rel="manifest" href="/sites/all/modules/customs/blacasa_push_notification/manifest.json"> -->
    <!-- <script async src="https://www.gstatic.com/firebasejs/5.2.0/firebase-app.js" ></script>
  <script async src="https://www.gstatic.com/firebasejs/5.2.0/firebase-messaging.js" ></script> -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,300&display=swap">
    <link type="text/css" rel="stylesheet" href="../assets/css/css__9cWqptSUNYq5YedfIwh33VxtugFVWjDdEsblT8GhLKI__quUjyhSfbEukHj.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__YeBfmnnLsPW9W1FSg1JOZA9NPbiccyw-oG-Cb-rlqvg__MMJLVmbGFCOCQ9.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css___wfAwuLKR7pVUkP9VbBDiP9QZAOQzH3wLcG7ZIg4SN0__LrH580BI6g282g.css" media="all" />

    <link type="text/css" rel="stylesheet" href="../assets/css/css__MKzQ3aciX1z3znKxxzWSRPQes2px8A1sneiR_NuCZb8__9TTu5IKZCRd9Zf.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__Ot9l09ZM71JgqUrkABNYpIf697NGNW91HhqmDQIPI2k__YtWorz7vEtwokW.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__zjm2aiKa_qJyEQxmjZDIpbbI9yEC7p6NkG4ZUWSwkmg__ZFpFb8wdlLmy92.css" media="all" />
    <script type="text/javascript" src="../assets/js/js__dU859nniAHOO3ZZ49DZUXr5Frl9T3QSa81hYdDf9Uas__LOGJbIpGkynalCS.js"></script>
    <script type="text/javascript" src="../assets/js/js__IxBpGC3NatX6P7dEN5hVBxBEGm6AzqoIcTK6bYbV8dQ__5gYxiRHtWORQMry.js"></script>
    <script type="text/javascript" src="../assets/js/js__NgnSGdtri6Bb9h2hOjakdeTtkBytuPSJ89uCyW2Xidw__1GAb2tV0-jxV9nf.js"></script>
    <script type="text/javascript" src="../assets/js/js__b4ArO9rnBau8jhwYeJKCH4rrblQNXnOaOsYFhrCL4nQ__sdRvOIUZXZS81RW.js"></script>
    <script type="text/javascript" src="../assets/js/js__bcCAN6VgMjVnLudQwXmKyBrXo9atl70SkprxOvrBQ5E__d43UiXeszJjDIN6.js"></script>

    <script type="text/javascript" src="../assets/js/js__2H5VHDfLOvpT-ZWWBqPpmQoETJQWSLU5RqZ6iprXOAQ__6pqGXWUeGNf05Fe.js"></script>
    <script type="text/javascript" src="../assets/js/js__I_3_005HciglOJyBxiQvaSLMYQsG33p9G0ihNQ_GR8U__Zuy3KzlHSmeJE8j.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <style>
        .group-tag label {
            border: 1px solid #CCC;
            padding: 5px;
            margin-right: 5px;
            font-size: 16px;
            background: #fff;
            color: #000;
            cursor: pointer;
            border-radius: 6px;
        }

        .group-tag input {
            display: none;
        }

        .lbl-active {
            background: #03ad03 !important;
            color: #fff !important;

        }

        .group-tag p {
            font-style: italic;
            color: #03ad03;
            font-size: 16px;
        }

        input[type="date"] {
            background-color: white;
            padding: 5px;

            color: #000;
            font-size: 16px;

            outline: none;
            border-radius: 5px;
        }

        ::-webkit-calendar-picker-indicator {
            background-color: #ffffff;
            padding: 5px;
            cursor: pointer;
            border-radius: 3px;
        }

        select,
        input[type="text"],
        input[type="number"],
        textarea {
            border-radius: 8px !important;
        }
    </style>
</head>


<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->
    <div class="container p-create-class-body" style="margin-bottom:20px;">
        <?php
        if (isset($idStudent)) {
            // tỉnh
            // $jsonData = file_get_contents('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json');
            // $data = json_decode($jsonData, true);
            // $cityData = [];
            // foreach ($data as $city) {
            //     $cityData[$city['code']] = $city['name'];
            // }
            // // quận
            // $jsonData = file_get_contents('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/quan_huyen.json');
            // $data = json_decode($jsonData, true);
            // // Tạo một mảng để lưu dữ liệu quận/huyện
            // $districtData = [];
            // // Lặp qua mảng dữ liệu và lưu vào mảng $districtData
            // foreach ($data as $district) {
            //     $districtData[$district['code']] = $district['name'];
            //     // if ($district['parent_code'] == $city) {
            //     //     $districtData[$district['code']] = $district['name'];
            //     // }
            // }

            // //xã
            // $jsonData = file_get_contents('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/xa_phuong.json');
            // $data = json_decode($jsonData, true);
            // // Tạo một mảng để lưu dữ liệu xã/phường
            // $wardData = [];
            // // Lặp qua mảng dữ liệu và lưu vào mảng $wardData
            // foreach ($data as $ward) {
            //     // if ($ward['parent_code'] == $district) {
            //     $wardData[$ward['code']] = $ward['name'];
            //     // }
            // }
            // quận

            // //xã
            // $jsonData = file_get_contents('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/xa_phuong.json');
            // $data = json_decode($jsonData, true);

            // // Tạo một mảng để lưu dữ liệu xã/phường
            // $wardData = [];

            // // Lặp qua mảng dữ liệu và lưu vào mảng $wardData
            // foreach ($data as $ward) {
            //     $wardData[$ward['code']] = $ward['name'];
            // }


            $sql = 'SELECT * FROM hocvien WHERE MaHV = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $idStudent);
            $stmt->execute();
            $resultStudent = $stmt->get_result()->fetch_assoc();
            $idStudent = $resultStudent['MaHV'];
            $fullName = $resultStudent['HoTen'];
            $phoneClass = $resultStudent['DienThoai'];
            // $cityName = $resultStudent['Tinh_TP'];
            $detailCity = $resultStudent['DiaChiCT'];
            // $sex = $resultStudent['GioiTinh'];
            // $description = $resultStudent['MoTa'];

            // tìm mã lichhoc và chude tiếp theo
            function next_id($conn, $type)
            {
                if ($type == 1) {
                    $sql = 'SELECT MAX(MaLop_CD) as max_lopcd FROM lophoc_chude';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $next_idLop_CD = $stmt->get_result()->fetch_assoc()['max_lopcd'] + 1;
                    return $next_idLop_CD;
                } else if ($type == 2) {
                    $sql = 'SELECT MAX(MaLichHoc) as max_lichhoc FROM lichhoc';
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    $next_idLichHoc = $stmt->get_result()->fetch_assoc()['max_lichhoc'] + 1;
                    return $next_idLichHoc;
                }
            }

            // hàm cắt chuỗi sử dụng cho lịch 
            function splitString($str)
            {
                // Tìm vị trí của dấu cách cuối cùng trong chuỗi
                $pos = strrpos($str, ' ');

                if ($pos !== false) {
                    // Cắt chuỗi thành 2 phần dựa vào vị trí tìm được
                    $part1 = substr($str, 0, $pos);
                    $part2 = substr($str, $pos + 1);

                    return array($part1, $part2);
                } else {
                    // Nếu không tìm thấy dấu cách, trả về mảng chứa chuỗi ban đầu và chuỗi rỗng
                    return array($str, '');
                }
            }


            if (isset($_POST['submit-info'])) {
                $nameClass = $_POST['name_class'];
                $subjectClass = $_POST['subject_class'];
                $price = $_POST['price_cost'];
                $duration = $_POST['duration'];
                $phoneClass = $_POST['phone_class'];
                $description = $_POST['introduce_class'];
                $timesPerWeek = $_POST['times_per_week'];
                $numberStudent = $_POST['number_student'];
                $dayStart = $_POST['day-start'];

                // echo $nameClass;
                // echo $subjectClass;
                // echo $price;
                // echo $duration;
                // echo $phoneClass;
                // echo $city;
                // echo $district;
                // echo $ward;

                // echo $detailCity;
                // echo $description;
                // echo $timesPerWeek;
                // echo $numberStudent;
                // echo $dayStart;

                if (isset($_POST['list-calendar'])) {
                    $listCalendars = $_POST['list-calendar']; // Lấy các giá trị được chọn từ checkbox
                    // foreach ($listCalendars as $calendar) {
                    //     echo "Giá trị của checkbox lịch được chọn: $calendar <br>";
                    // }
                } else {
                    // echo "Không có checkbox nào được chọn.";
                    $listCalendars = array();
                }

                if (isset($_POST['class_type'])) {
                    $typeClasses = $_POST['class_type']; // Lấy các giá trị được chọn từ checkbox
                    if (count($typeClasses) > 1) {
                        $typeClass = 3;
                    } else {
                        foreach ($typeClasses as $x) {
                            if ($x == 1) {
                                $typeClass = 1;
                            } else if ($x == 2) {
                                $typeClass = 2;
                            }
                        }
                    }
                    // echo 'hình thức học:' . $typeClass;
                    if ($typeClass == 1 || $typeClass == 3) {
                        $city = $_POST['place'];
                        $district = $_POST['district'];
                        // echo 'quan' . $district;
                        $ward = $_POST['ward'];
                        // echo 'xa' . $ward;
                        $detailCity = $_POST['address_class'];
                    }
                } else {
                    // echo "Không có checkbox nào được chọn.";
                    $typeClasses = array();
                }



                if (isset($_POST['sex'])) {
                    $teacher_sex = $_POST['sex']; // Lấy các giá trị được chọn từ checkbox
                    if (count($teacher_sex) > 1) {
                        $sex = 2;
                    } else {
                        foreach ($teacher_sex as $x) {
                            if ($x == 1) {
                                $sex = 1;
                            } else if ($x == 0) {
                                $sex = 0;
                            }
                        }
                    }
                    // echo 'giới tính gs:' . $sex;
                } else {
                    // echo "Không có checkbox nào được chọn.";
                    $teacher_sex = array();
                }
                if (isset($_POST['list_tag'])) {
                    $listTags = $_POST['list_tag']; // Lấy các giá trị được chọn từ checkbox
                    // foreach ($listTags as $tag) {
                    //     echo "Giá trị của checkbox chủ đề được chọn: $tag <br>";
                    // }
                } else {
                    // echo "Không có checkbox nào được chọn.";
                    $listTags = array();
                }

                $check = true;
                if (empty($nameClass)) {
                    $check = false;
                    $errNameClass = "Vui lòng nhập yêu cầu tìm gia sư";
                }
                if (empty($subjectClass)) {
                    $check = false;
                    $errSubjectClass = "Vui lòng chọn môn học";
                }
                if (empty($listTags)) {
                    $check = false;
                    $errListTags = "Vui lòng chọn chủ đề";
                }
                if (empty($price)) {
                    $check = false;
                    $errPrice = "Vui lòng nhập học phí";
                }
                if (empty($duration)) {
                    $check = false;
                    $errDuration = "Vui lòng chọn số giờ học 1 buổi";
                }
                if (empty($phoneClass)) {
                    $check = false;
                    $errPhoneClass = "Vui lòng nhập số điện thoại liên hệ";
                }
                if (empty($typeClasses)) {
                    $check = false;
                    $errTypeClasses = "Vui lòng chọn hình thức học";
                } else {
                    if ($typeClass == 1 || $typeClass == 3) {
                        if (empty($city)) {
                            $check = false;
                            $errCity = "Vui lòng chọn tỉnh/thành phố";
                        }
                        if (empty($district)) {
                            $check = false;
                            $errDistrict = "Vui lòng chọn quận/huyện";
                        }
                        if (empty($ward)) {
                            $check = false;
                            $errWard = "Vui lòng chọn xã/phường";
                        }
                        if (empty($detailCity)) {
                            $check = false;
                            $errDetailCity = "Vui lòng nhập địa chỉ cụ thể (số nhà, tên đường)";
                        }
                    }
                }

                if (empty($listCalendars)) {
                    $check = false;
                    $errListCalendars = "Vui lòng chọn thời gian có thể học";
                }
                if (empty($description)) {
                    $check = false;
                    $errDescription = "Vui lòng nhập mô tả nội dung";
                }
                if (empty($timesPerWeek)) {
                    $check = false;
                    $errTimesPerWeek = "Vui lòng chọn số buổi học trong tuần";
                }
                if (empty($numberStudent)) {
                    $check = false;
                    $errNumberStudent = "Vui lòng chọn số học viên";
                }
                if (empty($teacher_sex)) {
                    $check = false;
                    $errTeacherSex = "Vui lòng chọn giới tính gia sư cần dạy";
                }
                if (empty($dayStart)) {
                    $check = false;
                    $errDayStart = "Vui lòng chọn ngày dự kiến học";
                }
                // echo $check .'123';
                if ($check) {
                    $nullValue = NULL;
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $currentDateTime = date('Y-m-d H:i:s');
                    $statusClass = "Chưa duyệt";
                    $sql = 'INSERT INTO lophoc (TenLop, MaMH, MaHV, MaHT, Tinh_TP, Quan_Huyen, Xa_Phuong, SoGioHoc1Buoi, DienThoai, GioiTinhGS, SoHV, SoBuoiHoc1Tuan, HocPhi1Buoi, NoiDung, DiaChiCT, NgayBD, ThoiGianDang, MaNV, TenTTLop) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('siiisssdsiiidssssis', $nameClass, $subjectClass, $idStudent, $typeClass, $city, $district, $ward, $duration, $phoneClass, $sex, $numberStudent, $timesPerWeek, $price, $description, $detailCity, $dayStart, $currentDateTime, $nullValue, $statusClass);
                    if ($stmt->execute()) {

						echo '<script language="javascript">alert("Thêm lớp học thành công");</script>';
						// header("Refresh: 1");
					} else {
						echo '<script language="javascript">alert("Thêm lớp học thất bại");</script>';
					}

                    $idClass = $stmt->insert_id;
                    // insert lophoc_chude
                    $sql = 'INSERT INTO lophoc_chude (MaLop_CD, MaLop, MaCD) VALUES (?, ?, ?)';
                    $stmt = $conn->prepare($sql);
                    foreach ($listTags as $tag) {
                        $next_idLop_CD = next_id($conn, 1);
                        $stmt->bind_param("iii", $next_idLop_CD, $idClass, $tag);
                        $stmt->execute();
                    }

                    $sql = 'INSERT INTO lichhoc (MaLichHoc, TenThu, TenBuoi, MaLop) VALUES (?, ?, ?, ?)';
                    $stmt = $conn->prepare($sql);
                    foreach ($listCalendars as $calendar) {
                        $result_split = splitString($calendar);
                        // $result_split[0]; // Thứ 
                        // $result_split[1]; // Buổi
                        $next_idLichHoc = next_id($conn, 2);
                        $stmt->bind_param("issi", $next_idLichHoc, $result_split[0], $result_split[1], $idClass);
                        $stmt->execute();
                    }

                    // insert gia su duoc moi

                    if (!empty($inviteTutor)) {
                        $statusConnect = "Đã mời";
                        $sql = 'INSERT INTO ketnoigs_hv (MaLop, MaGS, TenTTDeNghi) VALUES (?, ?, ?)';
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("iis", $idClass, $inviteTutor, $statusConnect);
                        $stmt->execute();
                    } 
                }
            }
        }
        ?>
        <div class="gform form-article form-product form-nhom-hoc">
            <div class="body-form">

                <div class="w-100 d-flex justify-content-center" style="margin:0;padding-top:15px;">
                    <div class="" style="max-width:900px; padding:0 !important;">
                        <form id="create-class-form" action="" method="POST" enctype="multipart/form-data">
                            <div class="left-class-create bla-common-shadow" style="margin:unset;">
                                <div class="header-form">
                                    <h2 style="margin: 0;font-size: 24px;text-align: center;">Mô tả yêu cầu tìm gia sư</h2>
                                </div>
                                <div class="group-row">
                                    <div class="row">
                                        <!--Hướng dẫn & mời gia sư-->
                                        <div class="col-md-12">
                                            <div class="class-field-1 class-field">
                                                <input type="hidden" name="nid" value="">
                                                <p style="text-align: justify;line-height:1.8;font-size:15px;">
                                                    Xin chào, bạn chỉ cần <strong>đăng yêu cầu học</strong>, các gia sư sẽ <strong>gửi đề nghị dạy</strong>
                                                    tới bạn với mức học phí phù hợp để bạn lựa chọn. Nếu bạn cần tư vấn, xin vui lòng gọi điện tới chúng tôi:
                                                    <a href="telto:0989704869">0989.704.869 </a> hoặc
                                                    <a class="blacasa-btn-border-only" href="javascript:$('#arcontactus').contactUs('openMenu');" style="padding:2px 5px;">
                                                        <i class="fa fa-comments"></i> CHAT trực tuyến</a><br>
                                                        <?php 
                                                            if (isset($_GET['add_tutor'])) {
                                                                $inviteTutor = $_GET['add_tutor'];
                                                                $sql = 'SELECT * FROM giasu WHERE MaGS = ?';
                                                                $stmt = $conn->prepare($sql);
                                                                $stmt->bind_param('i', $inviteTutor);
                                                                $stmt->execute();
                                                                $result = $stmt->get_result()->fetch_assoc();
                                                                
                                                            ?>
                                                            
                                                            <span> Gia sư được mời:                               
                                                                <a class="name-tutor" href="account.php?view_tutor=<?= $inviteTutor ?>" style="font-size: 17px;">
                                                                    <img class="img-tutor" style="width: 50px;height: 50px;border-radius: 50%;margin-right: 10px;" typeof="foaf:Image" src="../assets/img/img_tutor/<?= $result['AnhDaiDien'] ?>" width="50" height="50" alt="">                                                        
                                                                    <?= $result['HoTen'] ?>

                                                                
                                                                </a>
                                                            </span>
                                                            <?php } ?>
                                       
                                       
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Tóm tắt + môn học + chủ đề-->
                                <div class="group-row">
                                    <div class="row">
                                        <div class="col-md-12 class-field">
                                            <p class="p-create-class-title">
                                                Tóm tắt yêu cầu tìm gia sư (1 câu, tối đa 100 ký tự) <span class="class-field-alert">*</span>
                                            </p>
                                            <input type="text" name="name_class" id="name_class" placeholder="Ví dụ: Tìm gia sư tiếng anh lớp 7 tại Hoàn kiếm, Hà Nội" maxlength="100" value="<?= isset($nameClass) ? $nameClass : '' ?>">
                                            <div style="color: red;"><?= isset($errNameClass) ? $errNameClass : '' ?></div>
                                        </div>
                                        <!--Môn học-->
                                        <div class="col-md-6">
                                            <div class="class-field-4 class-field">
                                                <p class="p-create-class-title">Môn học <span class="class-field-alert">*</span></p>
                                                <select name="subject_class" id="subject-class">
                                                    <option value="">Lựa chọn môn học</option>
                                                    <?php
                                                    $typeSubjects = 'SELECT * FROM monhoc';
                                                    $stmt = $conn->prepare($typeSubjects);
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    echo '<optgroup label="Môn học phổ thông">';
                                                    for ($i = 0; $i < 9; $i++) {
                                                        $row = $result->fetch_assoc();
                                                        $selected = ($subjectClass == $row['MaMH']) ? 'selected' : '';
                                                        echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                    }

                                                    echo '</optgroup>';
                                                    echo '<optgroup label="Ngoại ngữ">';
                                                    for ($i = 10; $i < 17; $i++) {
                                                        $row = $result->fetch_assoc();
                                                        $selected = ($subjectClass == $row['MaMH']) ? 'selected' : '';
                                                        echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                    }
                                                    echo '</optgroup>';
                                                    echo '<optgroup label="Học nghề">';
                                                    for ($i = 17; $i < 24; $i++) {
                                                        $row = $result->fetch_assoc();
                                                        $selected = ($subjectClass == $row['MaMH']) ? 'selected' : '';
                                                        echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                    }
                                                    echo '</optgroup>';
                                                    echo '<optgroup label="Thể thao - Nghệ thuật">';
                                                    for ($i = 24; $i < 30; $i++) {
                                                        $row = $result->fetch_assoc();
                                                        $selected = ($subjectClass == $row['MaMH']) ? 'selected' : '';
                                                        echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                    }
                                                    echo '</optgroup>';
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Chủ đề liên quan-->
                                        <div class="col-md-12">
                                            <div class="group-tag">
                                                <?php
                                                if (isset($subjectClass)) {
                                                    $sql = 'SELECT * FROM chude 
														    JOIN monhoc ON monhoc.MaMH = chude.MaMH
															WHERE chude.MaMH = ?';
                                                    $stmt = $conn->prepare($sql);
                                                    $stmt->bind_param('i', $subjectClass);
                                                    $stmt->execute();
                                                    $result = $stmt->get_result();
                                                    $row = $result->fetch_assoc();
                                                    $nameSubject = $row['TenMH'];
                                                ?>
                                                    <div id='tag-subject<?= $subjectClass ?>'>
                                                        <h4>Lựa chọn chủ đề cho môn <?= $nameSubject  ?> </h4>
                                                        <p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
                                                        <?php
                                                        $result->data_seek(0);
                                                        while ($row = $result->fetch_assoc()) {
                                                        ?>
                                                            <label class="<?= (in_array($row['MaCD'], $listTags)) ? 'lbl-active' : '' ?>" for="tag-<?= $row['MaCD'] ?>"><?= $row['TenCD'] ?></label><input id="tag-<?= $row['MaCD'] ?>" type="checkbox" name="list_tag[]" class="list_tag" value="<?= $row['MaCD'] ?>" <?= (in_array($row['MaCD'], $listTags)) ? 'checked' : '' ?>>
                                                        <?php } ?>
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Thông tin học phí, số giờ học, phone, place-->
                                <div class="group-row">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="class-field-6 class-field">
                                                <p class="p-create-class-title">Học phí dự kiến (vnđ/buổi) <span class="class-field-alert">*</span></p>
                                                <input type="number" class="form-control _numberOnly" autocomplete="off" maxlength="13" placeholder="Ví dụ:250,000" name="price_cost" id="price_cost" value="<?= isset($price) ? $price : '' ?>" data-original-title="" title="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="class-field-6 class-field class-time">
                                                <p class="p-create-class-title">Số giờ học 1 buổi <span class="class-field-alert">*</span></p>
                                                <input type="radio" name="duration" value="1" <?= (isset($duration) && ($duration == 1)) ? 'checked'  : '' ?>><label>1h</label>
                                                <input type="radio" name="duration" value="1.5" <?= (isset($duration) && ($duration == 1.5)) ? 'checked'  : '' ?>><label>1.5h</label>
                                                <input type="radio" name="duration" value="2" <?= (isset($duration) && ($duration == 2)) ? 'checked'  : '' ?>><label>2h</label>
                                                <input type="radio" name="duration" value="2.5" <?= (isset($duration) && ($duration == 2.5)) ? 'checked'  : '' ?>><label>2.5h</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="class-field-5 class-field">
                                                <p class="p-create-class-title">Điện thoại liên hệ <span class="class-field-alert">*</span></p>
                                                <input type="text" name="phone_class" id="phone_class" placeholder="Ví dụ: 091234567" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?= isset($phoneClass) ? $phoneClass : '' ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="class-field-2 class-field">
                                                <p class="p-create-class-title">Hình thức học <span class="class-field-alert">*</span></p>
                                                <div class="checkbox-wrapper-19" style="display: flex;">
                                                    <input type="checkbox" name="class_type[]" class="class-type" id="offline-type" value="1" <?= (isset($typeClass) and ($typeClass == 1 or $typeClass == 3))  ? 'checked' : "" ?>>
                                                    <label for="offline-type" class="check-box"></label>
                                                    <span style="margin: auto 36px auto 7px;">Gia sư tại nhà</span>

                                                    <input type="checkbox" name="class_type[]" class="class-type" id="online-type" value="2" <?= (isset($typeClass) and ($typeClass == 2 or $typeClass == 3))  ? 'checked' : "" ?>>
                                                    <label for="online-type" class="check-box"></label>
                                                    <span style="margin: auto 36px auto 7px;">(Online) Trực tuyến</span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!--address-->
                                    <div class="row address" style="display:<?= (isset($typeClass) and ($typeClass == 1 or $typeClass == 3)) ? '' : 'none' ?>">
                                        <div class="col-md-12">
                                            <p class="p-create-class-title">Địa điểm diễn ra lớp học (Chọn đủ tỉnh/quận-huyện/phường xã) <span class="class-field-alert">*</span></p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="class-field-6 class-field class-address">
                                                <select name="place" id="select-country-class">
                                                    <option selected disabled value>-Tỉnh/thành phố-</option>
                                                    <optgroup label='Địa điểm phổ biến'>
                                                        <option value='Hà Nội' <?= ((isset($city)) and ($city == "Hà Nội"))  ? "selected" : '' ?>>Hà Nội</option>
                                                        <option value='Hồ Chí Minh' <?= ((isset($city)) and ($city == "Hồ Chí Minh"))  ? "selected" : '' ?>>Hồ Chí Minh</option>
                                                        <option value='Hải Phòng' <?= ((isset($city)) and ($city == "Hải Phòng"))  ? "selected" : '' ?>>Hải Phòng</option>
                                                        <option value='Đà Nẵng' <?= ((isset($city)) and ($city == "Đà Nẵng"))  ? "selected" : '' ?>>Đà Nẵng</option>
                                                        <option value='Cần Thơ' <?= ((isset($city)) and ($city == "Cần Thơ"))  ? "selected" : '' ?>>Cần Thơ</option>
                                                    <optgroup id="other_province" label='Tỉnh, thành phố khác'>
                                                </select>

                                            </div>
                                        </div>
                                        <!-- Thêm quận huyện -->
                                        <div class="col-md-3">
                                            <div class="class-field-3 class-field class-address">
                                                <p class="p-create-class-title" style="color: #fff!important; display: none;"> Quận Huyện</p>
                                                <select id="district" name="district" class="form-control">
                                                    <option value="">- Lựa chọn Quận/Huyện -</option>
                                                </select><input type="hidden" id="place_name" value="Bình Thuận">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="class-field-3 class-field class-address">
                                                <p class="p-create-class-title" style="color: #fff!important; display: none;"> Phường/Xã</p>
                                                <select id="ward" name="ward" class="form-control">
                                                    <option value="">- Lựa chọn Phường/Xã -</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- E: Thêm quận huyên -->
                                        <div class="col-md-6">
                                            <div class="class-field-7 class-field class-address">
                                                <p class="p-create-class-title">Địa chỉ cụ thể diễn ra lớp học <span class="class-field-alert">*</span></p>
                                                <input type="text" name="address_class" id="address-class" placeholder="Nhập Tên đường, quận/huyện (rồi chọn từ danh sách)" value="<?= isset($detailCity) ? $detailCity : '' ?>">
                                            </div>
                                            <div class="class-field-7 class-field class-address">
                                                <input type="hidden" name="latitude" id="latitude" value="21.035280">
                                                <input type="hidden" name="longitude" id="longitude" value="105.809216">
                                            </div>
                                        </div>
                                        <!--display embed map-->
                                        <div class="col-md-12" style="display: none;">
                                            <div id="map-container">
                                                <iframe id="iframe-map" width="100%" height="250px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8&amp;q=21.03528,105.809216&amp;zoom=13&amp;maptype=roadmap" allowfullscreen="" data-ruffle-polyfilled="">
                                                </iframe>
                                            </div>
                                            <!--old code using dynamic map-->
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>

                                <!--Mô tả chi tiết nội dung  học-->
                                <div class="group-row">
                                    <div class="row">
                                        <!--Lịch có thể học-->
                                        <div class="col-md-12">
                                            <p class="p-create-class-title"><i class="fa fa-calendar" aria-hidden="true"></i> Thời gian có thể học</p>

                                            <div class="calendar-list-picker">
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 2</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 3</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 4</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 5</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 6</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Thứ 7</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                                <div class='row-calendar-check'>
                                                    <h4>Chủ nhật</h4>
                                                    <ul>
                                                        <li><label for='morning-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Sáng' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='afternoon-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Chiều' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
                                                        <li><label for='evening-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Tối' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Tối", $listCalendars)  ? 'checked' : '' ?>></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div style="width: 100%;text-align: center;">
                                                <p class="note-calender">Bấm để chọn lịch. <span>Màu xanh</span> là những buổi có thể học.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="class-field-12 class-field">
                                                <p class="p-create-class-title"><i class="fa fa-quote-right" aria-hidden="true"></i>Mô tả chi tiết nội dung muốn học <span class="class-field-alert">*</span></p>
                                                <textarea name="introduce_class" id="introduce-class" placeholder="Mô tả các nội dung muốn học tại đây... "><?= isset($description) ? $description : ''; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Các tùy chọn nâng cao-->
                                <div class="group-row">
                                    <fieldset>
                                        <legend style="text-align: center; border-bottom: none; color: #8a8a8a;font-weight: bold; font-size: 16px">THÔNG TIN THÊM</legend>
                                        <div class="row-read-more read-more-wrap">
                                            <div class="read-more-target row">

                                                <!--Số buổi học 1 tuần-->
                                                <div class="col-md-6">
                                                    <div class="class-field-6 class-field class-sum-day">
                                                        <p class="p-create-class-title">Số buổi học trong tuần</p>
                                                        <input type="radio" name="times_per_week" value="1" <?= (isset($timesPerWeek) && ($timesPerWeek == 1)) ? 'checked'  : '' ?>><label> 1 buổi</label>
                                                        <input type="radio" name="times_per_week" value="2" <?= (isset($timesPerWeek) && ($timesPerWeek == 2)) ? 'checked'  : '' ?>><label> 2 buổi</label>
                                                        <input type="radio" name="times_per_week" value="3" <?= (isset($timesPerWeek) && ($timesPerWeek == 3)) ? 'checked'  : '' ?>><label> 3 buổi</label>
                                                        <input type="radio" name="times_per_week" value="4" <?= (isset($timesPerWeek) && ($timesPerWeek == 4)) ? 'checked'  : '' ?>><label> từ 4 buổi</label>
                                                    </div>
                                                </div>

                                                <!--Số học viên-->
                                                <div class="col-md-6">
                                                    <div class="class-field-8 class-field">
                                                        <p class="p-create-class-title">Số học viên</p>
                                                        <input type="text" name="number_student" id="number_student" value="<?= isset($numberStudent) ? $numberStudent : '' ?>">
                                                    </div>
                                                </div>

                                                <!--Giới tính gia sư-->

                                                <div class="col-md-6">
                                                    <div class="class-field-8 class-field">
                                                        <p class="p-create-class-title">Giới tính gia sư</p>
                                                        <!-- <span style="padding-right:15px; min-width:60px;">
                                                            <input type="checkbox" name="sex[]" id="teacher_male" value="1" <?= (isset($sex) and ($sex == 1 or $sex == 2))  ? 'checked' : "" ?>> Nam
                                                        </span>
                                                        <span>
                                                            <input type="checkbox" name="sex[]" id="teacher_female" value="0" <?= (isset($sex) and ($sex == 0 or $sex == 2))  ? 'checked' : "" ?>> Nữ
                                                        </span> -->

                                                        <div class="checkbox-wrapper-19" style="display: flex;">
                                                        <input type="checkbox" name="sex[]" id="teacher_male" value="1" <?= (isset($sex) and ($sex == 1 or $sex == 2))  ? 'checked' : "" ?>>
                                                            <label for="teacher_male" class="check-box"></label>
                                                            <span style="margin: auto 36px auto 7px;">Nam</span>

                                                            <input type="checkbox" name="sex[]" id="teacher_female" value="0" <?= (isset($sex) and ($sex == 0 or $sex == 2))  ? 'checked' : "" ?>>
                                                            <label for="teacher_female" class="check-box"></label>
                                                            <span style="margin: auto 36px auto 7px;">Nữ</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--Ngày học dự kiến-->
                                                <div class="col-md-6">
                                                    <div class="class-field-9 class-field">
                                                        <p class="p-create-class-title">Ngày dự kiến học</p>
                                                        <input type="date" name="day-start" id="day-start" value="<?= isset($dayStart) ? $dayStart : '' ?>" class="hasDatepicker">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <!--b:TH Agency-->
                                <div class="group-row" style="display:none">
                                    <fieldset>
                                        <legend style="text-align: center; border-bottom: none; color: #8a8a8a;font-weight: bold; font-size: 16px">DÀNH CHO TRUNG TÂM</legend>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom: 20px">
                                                <input type="checkbox" name="tra_phi_sau"> Trả phí sau
                                            </div>
                                            <div class="col-md-6">
                                                <div class="class-field">
                                                    <p class="p-create-class-title">Trung tâm</p>
                                                    <select name="class_agency">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="class-field">
                                                    <p class="p-create-class-title">Tên phụ huynh</p>
                                                    <input type="text" name="class_requester_name" value="hao jan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="class-field">
                                                    <p class="p-create-class-title">Số điện thoại phụ huynh</p>
                                                    <input type="text" name="class_requester_phone" value="1231231235">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="class-field">
                                                    <p class="p-create-class-title">Email phụ huynh</p>
                                                    <input type="text" name="class_requester_email" value="abc12333@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <!--e:TH Agency-->

                                <!--TH Chưa đăng nhập-->

                                <!--Group: chính sách & button đăng-->
                                <div class="group-row">
                                    <!--Cam kết khi tạo mới-->
                                    <div class="row" style="font-size: 14px;max-width:500px;text-align:center;margin:auto; padding-bottom:10px;">
                                        <input type="checkbox" name="term_of_user" id="term-of-user" value="1" class="mr-2">
                                        <span id="text-term-of-use"> Tôi cam kết thông tin tạo lớp là thật và
                                            chấp nhận <a href="/terms-of-use" target="_blank" style="color:unset;"><i>các quy định</i></a> của Blacasa.</span>
                                    </div>

                                    <!--Button đăng, cập nhật-->
                                    <div style="text-align:center;padding:10px 0;">
                                        <input name="submit-info" type="submit" class="btn btn-success" style="font-weight:bold;border: none;" value="Đăng yêu cầu">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.body-form -->
        </div><!-- /.gform -->
    </div>
    <?php include 'footer.php' ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tinhThanhSelect = document.getElementById('select-country-class');
            var tinhThanhOtpgroup = document.getElementById('other_province');
            const huyenThanhSelect = document.getElementById('district');
            const xaPhuongSelect = document.getElementById('ward');



            const selectSubject = document.getElementById('select-subject');
            const subjectTag = document.getElementById('406-tag');
            const city = <?= isset($city) ? json_encode($city) : "''" ?>;
            const districtName = <?= isset($district) ? json_encode($district) : "''" ?>;
            const wardName = <?= isset($ward) ? json_encode($ward) : "''" ?>;




            // Lấy dữ liệu tỉnh/thành phố ban đầu từ URL
            fetch('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json')
                .then(response => response.json())
                .then(data => {
                    const options = [];
                    // Thêm các option cho thẻ select tỉnh/thành phố
                    Object.entries(data).forEach(([code, province]) => {
                        const option = document.createElement('option');
                        value_otp_main = ["Hà Nội", "Hồ Chí Minh", "Hải Phòng", "Đà Nẵng", "Cần Thơ"];
                        if (!value_otp_main.includes(code.toString())) {
                            option.value = province.name;
                            option.textContent = province.name;
                            if (option.value == city) {
                                option.selected = true;

                            }
                            options.push(option);
                            // tinhThanhOtpgroup.appendChild(option);
                        }
                    });

                    options.sort((a, b) => a.textContent.localeCompare(b.textContent));

                    // Thêm các option từ mảng đã sắp xếp vào thẻ select
                    options.forEach(option => {
                        tinhThanhOtpgroup.appendChild(option);
                    });
                })
                .catch(error => console.error('Error:', error));

            // Lấy dữ liệu tỉnh/thành phố ban đầu từ URL

            // Sự kiện khi người dùng thay đổi lựa chọn của thẻ select tỉnh/thành phố
            tinhThanhSelect.addEventListener('change', function() {
                const selectedProvinceCode = this.value;
                // Gửi yêu cầu Ajax để lấy dữ liệu về quận/huyện tương ứng
                fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/quan_huyen.json`)
                    .then(response => response.json())
                    .then(data => {
                        // Xóa tất cả các option cũ trong thẻ select quận/huyện
                        huyenThanhSelect.innerHTML = '<option value="">- Lựa chọn Quận/Huyện -</option>';
                        // Thêm các option mới tương ứng với dữ liệu mới
                        Object.entries(data).forEach(([code, district]) => {
                            const districtPath = district.path.split(', ')[1];
                            if (districtPath === selectedProvinceCode) {
                                const option = document.createElement('option');
                                option.value = district.name;
                                option.textContent = district.name;
                                huyenThanhSelect.appendChild(option);
                            }
                        });
                    })
                    .catch(error => console.error('Error:', error));
            });

            fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/quan_huyen.json`)
                .then(response => response.json())
                .then(data => {
                    // Xóa tất cả các option cũ trong thẻ select quận/huyện
                    huyenThanhSelect.innerHTML = '<option value="">- Lựa chọn Quận/Huyện -</option>';

                    // Thêm các option mới tương ứng với dữ liệu mới
                    Object.entries(data).forEach(([code, district]) => {
                        const districtPath = district.path.split(', ')[1];
                        if (districtPath === city) {

                            const option = document.createElement('option');
                            option.value = district.name;
                            option.textContent = district.name;
                            if (option.value == districtName) option.selected = true;
                            huyenThanhSelect.appendChild(option);
                        }
                    });
                })
                .catch(error => console.error('Error:', error));

            huyenThanhSelect.addEventListener('change', function() {
                const selectedDistrictCode = this.value;
                // Gửi yêu cầu Ajax để lấy dữ liệu về xã/phường tương ứng
                fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/xa_phuong.json`)
                    .then(response => response.json())
                    .then(data => {
                        // Xóa tất cả các option cũ trong thẻ select xã/phường
                        xaPhuongSelect.innerHTML = '<option value="">- Lựa chọn Xã/Phường -</option>';
                        // Thêm các option mới tương ứng với dữ liệu mới
                        Object.entries(data).forEach(([code, ward]) => {
                            const wardPath = ward.path.split(', ')[1];
                            if (wardPath === selectedDistrictCode) {
                                const option = document.createElement('option');
                                option.value = ward.name;
                                option.textContent = ward.name;
                                xaPhuongSelect.appendChild(option);
                            }
                        });
                    })
                    .catch(error => console.error('Error:', error));
            });

            fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/xa_phuong.json`)
                .then(response => response.json())
                .then(data => {
                    // Xóa tất cả các option cũ trong thẻ select xã/phường
                    xaPhuongSelect.innerHTML = '<option value="">- Lựa chọn Xã/Phường -</option>';
                    // Thêm các option mới tương ứng với dữ liệu mới
                    Object.entries(data).forEach(([code, ward]) => {
                        const wardPath = ward.path.split(', ')[1];
                        if (wardPath === districtName) {
                            const option = document.createElement('option');
                            option.value = ward.name;
                            option.textContent = ward.name;
                            if (option.value == wardName) option.selected = true;
                            xaPhuongSelect.appendChild(option);
                        }
                    });
                })
                .catch(error => console.error('Error:', error));


        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            // Lấy tất cả các checkbox có tên là "class_type[]"
            const classTypeInputs = document.querySelectorAll('.class-type');
            let address = document.querySelector('.address');

            classTypeInputs.forEach(function(input) {
                input.addEventListener('change', function() {
                    const checkedInputs = document.querySelectorAll('.class-type:checked');
                    if (checkedInputs.length === 2) {
                        // Xử lý khi cả hai checkbox được chọn
                        console.log("Cả hai checkbox được chọn");
                        address.style.display = '';
                    } else if (checkedInputs.length === 0) {
                        address.style.display = 'none';
                    } else {
                        checkedInputs.forEach(function(checkedInput) {
                            if (checkedInput.value === "1") {
                                address.style.display = '';
                                console.log("gặp mặt");
                            } else if (checkedInput.value === "2") {
                                address.style.display = 'none';
                                console.log("tt");
                            }
                        });
                    }
                });
            });

            // thêm lbl-active vào lịch học
            var inputs = document.querySelectorAll('.radio-calendar');

            inputs.forEach(function(input) {
                input.addEventListener('click', function() {
                    var label = this.parentElement.querySelector('label');
                    label.classList.toggle('lbl-active');
                });
            });
            console.log(inputs);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const selectSubject = document.getElementById('subject-class');
            const subjectTag = document.querySelector('.group-tag');
            const subjectNameMapping = {}; // Đối tượng để ánh xạ mã môn học với tên môn học

            // Lấy danh sách các môn học và mã môn học tương ứng từ PHP và lưu vào đối tượng subjectNameMapping
            <?php
            $typeSubjects = 'SELECT * FROM monhoc';
            $stmt = $conn->prepare($typeSubjects);
            $stmt->execute();
            $result = $stmt->get_result();
            while ($rows = $result->fetch_assoc()) {
                echo "subjectNameMapping['{$rows['MaMH']}'] = '{$rows['TenMH']}';";
            }
            ?>
            selectSubject.addEventListener('change', function() {
                // Lấy giá trị mới của select
                const selectedValue = this.value;

                if (selectedValue != "") {
                    // Tạo yêu cầu AJAX
                    const xhr = new XMLHttpRequest();
                    xhr.open("POST", "get_topic.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                    // Gửi yêu cầu AJAX với selectedValue như là dữ liệu
                    xhr.send("selectedValue=" + selectedValue);

                    // Xử lý phản hồi từ máy chủ
                    xhr.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            // Nhận kết quả từ máy chủ dưới dạng JSON
                            const topics = JSON.parse(this.responseText);

                            // Xử lý kết quả và cập nhật nội dung của subjectTag
                            // Ví dụ:
                            const subjectName = subjectNameMapping[selectedValue];
                            let topicHTML = '';
                            topics.forEach(function(topic) {
                                topicHTML += `<label for="tag-${topic.MaCD}">${topic.TenCD}</label><input id="tag-${topic.MaCD}" type="checkbox" name="list_tag[]" class="list_tag" value="${topic.MaCD}">`;
                            });
                            subjectTag.innerHTML = `<h4>Lựa chọn chủ đề cho môn ${subjectName} </h4>
                                        <p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
                                        ${topicHTML}`;
                        }
                    };

                } else {
                    subjectTag.innerHTML = "";
                }

            });

        });
        document.addEventListener('click', function(event) {
            if (event.target.classList.contains('list_tag')) {
                var label = document.querySelector('label[for="' + event.target.id + '"]');
                console.log(label);
                label.classList.toggle('lbl-active');
            }
        });
    </script>
    <script>
        var today = new Date().toISOString().split('T')[0];

        // Đặt ngày hiện tại là ngày nhỏ nhất có thể chọn
        document.getElementById("day-start").setAttribute("min", today);
    </script>


</body>

</html>