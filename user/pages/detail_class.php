<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();
if (isset($_GET['view'])) {
    $idClass = $_GET['view'];
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
    <link type="text/css" rel="stylesheet" href="../assets/css/css__Ot9l09ZM71JgqUrkABNYpIf697NGNW91HhqmDQIPI2k__YtWorz7vEtwokW.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__zjm2aiKa_qJyEQxmjZDIpbbI9yEC7p6NkG4ZUWSwkmg__ZFpFb8wdlLmy92.css" media="all" />
    <script type="text/javascript" src="../assets/js/js__dU859nniAHOO3ZZ49DZUXr5Frl9T3QSa81hYdDf9Uas__LOGJbIpGkynalCS.js"></script>
    <script type="text/javascript" src="../assets/js/js__IxBpGC3NatX6P7dEN5hVBxBEGm6AzqoIcTK6bYbV8dQ__5gYxiRHtWORQMry.js"></script>
    <script type="text/javascript" src="../assets/js/js__bcCAN6VgMjVnLudQwXmKyBrXo9atl70SkprxOvrBQ5E__d43UiXeszJjDIN6.js"></script>

    <script type="text/javascript" src="../assets/js/js__2H5VHDfLOvpT-ZWWBqPpmQoETJQWSLU5RqZ6iprXOAQ__6pqGXWUeGNf05Fe.js"></script>
    <script type="text/javascript" src="../assets/js/js__I_3_005HciglOJyBxiQvaSLMYQsG33p9G0ihNQ_GR8U__Zuy3KzlHSmeJE8j.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
        .disabled-btn {
            pointer-events: none;
            cursor: not-allowed;
            opacity: 0.5;
            /* Tùy chọn: làm mờ nội dung khi bị vô hiệu hóa */
        }
    </style>

</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->

    <div class="container p-class-detail-body">
    </div>
    <?php
    if (isset($idClass)) {
        $sql = 'SELECT *, lophoc.DiaChiCT AS lophoc_DiaChiCT, lophoc.Tinh_TP AS lophoc_Tinh_TP, lophoc.DienThoai as DienThoai_Lop FROM lophoc
            JOIN monhoc ON monhoc.MaMH = lophoc.MaMH
            JOIN hinhthuc ON hinhthuc.MaHT = lophoc.MaHT
            JOIN hocvien ON hocvien.MaHV = lophoc.MaHV
            WHERE lophoc.MaLop = ? ';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idClass);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();

        $nameClass = $results['TenLop'];
        $nameStudent = $results['HoTen'];
        $subjectNameClass = $results['TenMH'];
        $price = $results['HocPhi1Buoi'];;
        $duration = $results['SoGioHoc1Buoi'];


        $phoneClass = $results['DienThoai_Lop'];

        $description = $results['NoiDung'];
        $timesPerWeek = $results['SoBuoiHoc1Tuan'];
        $numberStudent = $results['SoHV'];
        $dayStart = $results['NgayBD'];
        $timePublished = $results['ThoiGianDang'];
        $statusClass = $results['TenTTLop'];
        $teacher_sex = $results['GioiTinhGS'];
        $typeClass = $results['MaHT'];
        $nameTypeClass = $results['TenHT'];
        if ($typeClass == 1 || $typeClass == 3) {
            $cityName = $results['lophoc_Tinh_TP'];
            $districtName = $results['Quan_Huyen'];
            $wardName = $results['Xa_Phuong'];
            $detailCity = $results['lophoc_DiaChiCT'];
        }

        if ($teacher_sex == 1) {
            $sexName = "Nam";
        } else if ($teacher_sex == 0) {
            $sexName = "Nữ";
        } else {
            $sexName = "Nam, Nữ";
        }


        // Lấy dữ liệu lich hoc của lớp
        $sql = 'SELECT * FROM lichhoc  WHERE MaLop = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idClass);
        $stmt->execute();
        $resultlistCalendars = $stmt->get_result();
        $listCalendars = array();

        while ($rowlistCalendars = $resultlistCalendars->fetch_assoc()) {
            array_push($listCalendars, $rowlistCalendars['TenThu'] . " " . $rowlistCalendars['TenBuoi']);
        }
                    
                    
        $sql = 'SELECT * FROM ketnoigs_hv  
        WHERE MaLop = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idClass);
        $stmt->execute();
        $result = $stmt->get_result();
        $numberConnect = $result->num_rows;




    }
                  
        if (isset($idClass) && isset($idTutor)) {
            $sql = 'SELECT * FROM ketnoigs_hv  
                WHERE MaLop = ? AND MaGS = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ii', $idClass, $idTutor);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $checkConnect = true;
                $statusConnect = $result->fetch_assoc()['TenTTDeNghi'];
            } else {
                $checkConnect = false;
            }
        }
                             


    ?>
    
    <section class="header-study-group bg-gradient-blue">
        <div class="container">
            <div class="">
                <h1>

                  
                
                    <?= ($statusClass == "Chưa duyệt") ? ' <i class="fa fa-question-circle" aria-hidden="true" style="font-size: 24px;color: gray;margin-right: 2px;" title="Đã xác thực thông tin">
                    </i>'
                     : ' <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 24px;color: #03ad03;margin-right: 2px;" title="Đã xác thực thông tin"></i>'?>
                    <?= isset($nameClass) ? $nameClass : '' ?>

                </h1>
                <p class="name inline" style="padding-right: 20px;">
                    <i class="fa fa-user-o"></i> <a href="/nguyen-linh-khanh"><?= isset($nameStudent) ? $nameStudent : '' ?></a>
                </p>
                <p class="create inline" style="padding-right: 20px;">
                    <i class="fa fa-calendar"></i> <?= isset($timePublished) ? $timePublished : '' ?>
                </p>
                <p class="name inline">
                    Mã số lớp: <strong><?= isset($idClass) ? $idClass : '' ?></strong>
                </p>

                <!--Kiểu lớp: Tìm GIA SƯ-->
                <div class="row" style="padding:15px 0;border-top:1px solid #e7e7e7;">
                    <div class="col-md-4 col-sm-4">
                        <p class="no-padding">
                            <i class="fa fa-bookmark"></i> Trạng thái: <span style="font-weight: bold; color: #ff961e; text-transform: uppercase;">
                                <?= isset($statusClass) ? $statusClass : '' ?></span>
                        </p>
                        <p class="no-padding"><i class="fa fa-book"></i> Môn học:&nbsp;<?= isset($subjectNameClass) ? $subjectNameClass : '' ?>
                        </p>
                        <p class="no-padding"><i class="fa fa-tag"></i> Chủ đề:&nbsp;
                            <?php
                            if (isset($idClass)) {
                                // Lấy dữ liệu chủ đề cho gia sư
                                $sql = 'SELECT * FROM lophoc_chude  
                                JOIN chude ON chude.MaCD = lophoc_chude.MaCD
                                 WHERE lophoc_chude.MaLop = ?';
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param('i', $idClass);
                                $stmt->execute();
                                $resultClass_Tag = $stmt->get_result();
                                $listTags = array(); // Mảng để lưu các chủ đề

                                while ($rowTag = $resultClass_Tag->fetch_assoc()) {
                                    // Lưu tên của mỗi chủ đề vào mảng
                                    $listTags[] = $rowTag['TenCD'];
                                }

                                // Hiển thị các chủ đề, sử dụng implode() để nối chúng với dấu phẩy
                                echo implode(', ', $listTags);
                            }
                            ?>
                        </p>
                        <p><i class="fa fa-briefcase"></i> Hình thức học:
                            <?= isset($nameTypeClass) ? $nameTypeClass : '' ?>
                        </p>
                        <p class="no-padding" style="display: <?= ($typeClass == 1 || $typeClass == 3) ? '' : 'none' ?>;">
                            <a href="#class-map" title="Xem bản đồ vị trí lớp">
                                <i class="fa fa-map-marker"></i>
                                <?= isset($cityName) ? $cityName : '' ?> | <?= isset($detailCity) ? $detailCity : '' ?>, <?= isset($wardName) ? $wardName : '' ?>, <?= isset($districtName) ? $districtName : '' ?> </a>
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <p><i class="fa fa-venus-mars"></i> Tìm gia sư:
                            <?= isset($sexName) ? $sexName : '' ?> </p>
                        <p><i class="fa fa-user-o"></i>
                            Số học viên : <?= isset($numberStudent) ? $numberStudent : '' ?> </p>
                        <p><i class="fa fa-book"></i>
                            Thời lượng: Tuần <?= isset($timesPerWeek) ? $timesPerWeek : '' ?> buổi (<?= isset($duration) ? $duration : '' ?>h/buổi)
                        </p>
                        <p>
                            <i class="fa fa-money"></i> Học phí 1 buổi: <span class="class-tutor-fee"><?= isset($price) ? $price : '' ?> vnđ</span>
                        </p>
                        <p style="display: <?= (isset($phoneClass) && ($statusConnect == "Đề nghị dạy đã chấp nhận") ) ? '' :'none' ?>;">
                            <i  class="fa fa-phone"></i> Điện thoại: <span class=""><?= $phoneClass?></span>
                        </p>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="header-study-group-right">
                            <p style="display: none;">Phí nhận lớp:<span class="connection-fee"> 250,000 vnđ</span></p>

                            <span style="display: none;" class="connection-fee-note">( Chỉ thu khi nhận được lớp <a href="/chinh-sach-phi" target="_blank"><i class="fa fa-exclamation-circle fa-first"></i></a>)</span>


                            <p style="margin-top: 10px;">Đã có <b><?=  isset($numberConnect) ? $numberConnect : '' ?>/6</b> đề nghị dạy.
                            </p>

                            <div class="class-actions">
                                <a style="display:<?= (isset($typeAcc) && ($typeAcc == 2)) ? '' : 'none'  ?>" href="" class="btn-blueblacasa btn ctools-use-modal ctools-use-modal-processed  btn-use-modal <?= (isset($checkConnect) && ($checkConnect==true)) ? 'disabled-btn' : '' ?> ">Đề Nghị Dạy</a>
                                <a href="#p-class-suggest-teacher" class=" btn" style="background: #FF961E;display:<?= (isset($typeAcc) && ($typeAcc == 3)) ? '' : 'none'  ?>">Gợi ý gia sư phù hợp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="study-group-sec-main-content">
        <div class="container">
            <div class="row group-study-detail">
                <div class="gblock-v2 detail-content">
                    <div class="text">
                        <h3 style="margin-bottom: 1%;"><i class="fa fa-quote-right" aria-hidden="true"></i> Chi tiết nội dung cần học</h3>
                        <?= isset($description) ? $description : '' ?>
                    </div>

                    <!--Lịch có thể học-->
                    <div class="calender">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <h3 style="margin-top: 2%;"><i class="fa fa-calendar" aria-hidden="true"></i> Lịch học dự kiến (có thể thỏa thuận)</h3>
                                <div class="body-block block-calender">
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
                                <div class="page-studygroup-detail-notes">
                                    <p>Màu xanh là những buổi có thể học trong tuần</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Bản đồ lớp: nếu có học offline-->
                    <div id="class-map" style="display: none;">
                        <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Bản đồ vị trí lớp</h3>
                        <p>Địa chỉ: Nguyễn Đức Cảnh, Hoàng Mai</p>
                        <div class="map-container">
                            <iframe class="iframe-map" width="100%" height="350px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8
							&amp;q=,							&amp;zoom=13&amp;maptype=roadmap" allowfullscreen="" data-ruffle-polyfilled="">
                            </iframe>
                        </div>
                    </div>

                    <!--share-->
                    <div class="nav-menu-top-right" style="width: 100%;margin-top: 20px;">
                        <div class="fb-share-button" style="padding-top:1px;margin-bottom: 10px;" data-href="http://www.blacasa.vn/class/lop-tro-ly-hoc-tap-mon-tieng-anh-len-lop-7-nguyen-duc-canh-10604" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.blacasa.vn%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a>
                        </div>
                        <p style="font-style: italic;color: #ffc31e">Nhấn để chia sẻ lớp này lên facebook của bạn</p>
                    </div>
                </div>
            </div>
        </div> <!--page container-->
    </section>
    <!-- <section class="p-class-detail-steps bg-gradient-blue">
        <div class="container">
            <div class="row" style="justify-content: center;">
                <h2 class="p-home-section-title-left">Quy trình tìm gia sư trên TutorConnectStudent</h2>
            </div>
            <div class="row" style="justify-content: center;">
                <div class="col-md-5 col-sm-6 col-xs-12" style="display: none; padding:15px 0 0 0">
                    <a href="https://www.youtube.com/embed/fcB2uf3y-R8?autoplay=1" target="_blank" rel="nofollow">
                        <div class="bg-image-video bg-video-steps">
                            <div class="blacasa-play-button"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-7 col-sm-6 col-xs-12" style="padding-left:10px;">
                    <ul class="step-find-teacher">
                        <li>
                            <p class="header-step"><span class="step-number">1</span>Đăng yêu cầu (lớp) tìm gia sư.</p>
                            <p class="body-step">Tùy chọn: mời gia sư phù hợp được gợi ý bởi hệ thống giúp việc kết nối nhanh hơn.</p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">2</span>Các gia sư gửi đề nghị dạy.</p>
                            <p class="body-step">
                                Gia sư gửi đề nghị dạy đến các lớp mình muốn dạy.
                            </p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">3</span>Học viên lựa chọn đề nghị dạy.</p>
                            <p class="body-step">
                                Khi đã có một hoặc nhiều đề nghị dạy, học viên có thể lựa chọn chấp nhận đề nghị dạy phù hợp nhất.
                            </p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">4</span>Liên hệ hẹn buổi học đầu tiên.</p>
                            <p class="body-step">
                                Khi bạn chấp nhận 1 đề nghị dạy, số điện thoại của giáo viên sẽ hiện lên và bạn có thể gọi điện hẹn lịch học.
                            </p>
                        </li>
                    </ul>
                    <p style="text-align: center;">
                        <a href="/tao-lop-hoc" class="btn-bla-big btn-yellowblacasa">
                            Đăng yêu cầu tìm gia sư</a>
                    </p>
                    <div id="scroll-suggest-teacher"></div>
                    <p><strong>Lưu ý:</strong> Nếu bạn không tiện trong việc đăng yêu cầu tìm gia sư, bạn chỉ cần gọi điện hoặc liên hệ, chúng tôi sẽ hỗ trợ bạn:
                        Hotline: <a href="tel:1900636342">1900.63.63.42</a> hoặc
                        <a class="blacasa-btn-border-only" href="javascript:$zopim.livechat.window.show();">
                            <i class="fa fa-comment-alt"></i> chat tại đây</a>.
                    </p>
                </div>
            </div>
        </div>
    </section> -->
    <style>
        .section_steps {
    margin-bottom: 30px;
    margin-top: 30px;
}
.section-title {
    font-size: 2rem !important;
    /* line-height: 1.2; */
    line-height: 46px;
    font-weight: 700;
    color: #171f32;
    padding: 0px 0px 20px 0px;
    margin: 0 0 26px;
    position: relative;
}
.process-left-icon-1 i {
    right: 20%;
}
.process-left-icon-2 i {
    right: 45%;
}
.process-left-icon-3 i {
    left: 20%;
}
.process-left-icon i {
    font-size: 30px;
    border-radius: 50%;
    position: absolute;
    top: 86px;
    color: #fff;
    z-index: 9;
    background: #FF961E;
    width: 35px;
    height: 35px;
}
.section_steps .box-content {
    margin-top: 50px;
}
.section_steps .col-lg-3 {
    margin-bottom: 30px;
}
.process-box i {
    font-size: 48px;
    line-height: 72px;
    color: #069d86;
}
.plan-line:before {
    content: "";
    border: 1px dashed #e0e0e0;
    position: absolute;
    width: 67%;
    left: 65%;
    top: 50px;
}
    </style>

    <div class="section_steps" id="section_steps " style="display: <?= (isset($idStudent) ? '' :'none') ?>;"> 
      <div class="container">
        <div class="">
					<div class="section-title text-center">QUY TRÌNH TÌM GIA SƯ</div>
          <div class="section-subtitle text-muted text-center font-secondary pb-4">
						Quy trình tìm gia sư được thiết kế tối ưu giúp học viên nhanh chóng kết nối được với gia sư phù hợp <br> và đạt được sự tiến bộ chỉ sau một thời gian ngắn.  
					</div>
				</div>
        <div class="row">
           <div class="col-lg-4 text-center process-left-icon process-left-icon-1"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
           <div class="col-lg-4 text-center process-left-icon process-left-icon-2"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
           <div class="col-lg-4 text-center process-left-icon process-left-icon-3"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        </div>
        <div class="box-content row">
           <div class="col-lg-3 plan-line">
              <div class="text-center process-box">
                 <i class="fa fa-file-text-o"></i> 
                 <h4 class="pt-3 text-uppercase">1. Đăng yêu cầu (lớp) tìm gia sư</h4>
                 <p class="text-muted">Học viên sẽ đăng yêu cầu để tìm gia sư và có thể mời gia sư phù hợp được gợi ý bởi hệ thống giúp việc kết nối nhanh hơn.</p>
              </div>
           </div>
           <div class="col-lg-3 plan-line">
              <div class="text-center process-box">
                 <i class="fa fa-envelope-o"></i> 
                 <h4 class="pt-3 text-uppercase">2. Các gia sư gửi đề nghị dạy</h4>
                 <p class="text-muted">Gia sư gửi đề nghị dạy đến các lớp mình muốn dạy.</p>
              </div>
           </div>
           <div class="col-lg-3 plan-line">
              <div class="text-center process-box">
                 <i class="fa fa-check-square-o"></i> 
                 <h4 class="pt-3 text-uppercase">3. Học viên lựa chọn đề nghị dạy</h4>
                 <p class="text-muted">Khi đã có một hoặc nhiều đề nghị dạy, học viên có thể lựa chọn chấp nhận đề nghị dạy phù hợp nhất.</p>
              </div>
           </div>
           <div class="col-lg-3 ">
              <div class="text-center process-box">
                 <i class="fa fa-phone "></i> 
                 <h4 class="pt-3 text-uppercase">4. Liên hệ hẹn buổi học đầu tiên</h4>
                 <p class="text-muted">Khi bạn chấp nhận 1 đề nghị dạy, số điện thoại của giáo viên sẽ hiện lên và bạn có thể gọi điện hẹn lịch học.</p>
              </div>
           </div>
        </div>    
				<div class="mt-4 row w-100 justify-content-center">
						<a href="add_class.php" class="btnPopupRegister bla-shadow btn-bla-yellow" data-location="lp-bmentor-steps">ĐĂNG YÊU CẦU TÌM GIA SƯ</a>
				</div>
      </div> <!--endcontainer-->
    </div>
    
    <section class="p-class-suggest-teacher" id="p-class-suggest-teacher" style="background: #fff !important">
        <?php 
            $sqlSuggest = "SELECT * FROM giasu
            WHERE (1=1) 
                        AND EXISTS (
                            SELECT * FROM lophoc 
                            WHERE 
                                lophoc.MaLop = '$idClass'
                                AND (
                                    (lophoc.GioiTinhGS != 2 AND giasu.GioiTinh = lophoc.GioiTinhGS)
                                    OR (lophoc.GioiTinhGS = 2)
                                )
                             )
                         AND EXISTS (
                        SELECT * FROM lophoc
                        JOIN giasu_monhoc ON giasu_monhoc.MaMH = lophoc.MaMH
                
                        AND lophoc.MaLop = '$idClass'
                    ) 
                
                        and EXISTS (          
                          SELECT * FROM giasu_chude 
                        JOIN lophoc_chude ON lophoc_chude.MaCD = giasu_chude.MaCD 
                        WHERE giasu_chude.MaGS = giasu.MaGS 
                        AND lophoc_chude.MaLop = '$idClass')
             ";

            // // $sqlSuggest .= " AND (giasu.GioiTinh = 2 OR (
            // //     lophoc.GioiTinhGS != 2 AND EXISTS (
            // //         SELECT * FROM giasu 
            // //         WHERE lophoc.GioiTinhGS = giasu.GioiTinh 
            // //         AND giasu.MaGS = '$idTutor'
            // //     )
            // // ))";

            // // $sqlSuggest .= " AND EXISTS (
            // //     SELECT * FROM lophoc 
            // //     WHERE lophoc.MaMH = giasu_monhoc.MaMH 
            // //     AND lophoc.MaLop = '$idClass'
            // // )";

            // $sqlSuggest .= " AND EXISTS (
            //     SELECT * FROM giasu_chude 
            //     JOIN lophoc_chude ON lophoc_chude.MaCD = giasu_chude.MaCD 
            //     WHERE lophoc_chude.MaLop = lophoc.MaLop 
            //     AND lophoc_chude.MaLop = '$idClass'
            // )";

            // echo $sqlSuggest;

            $stmt = $conn->prepare($sqlSuggest);
            $stmt->execute();
            $resultsTutor = $stmt->get_result();
        
        ?>
        <div class="container" style="display: <?= (isset($idStudent) ? '' :'none') ?>;">
            <div class="find-teacher-list">
                <div class="content-category fixed">
                    <h2 class="p-home-section-title-left">Gợi ý các gia sư phù hợp</h2>
                    <div class="suggest-filter">
                        <div class="filter-select-boxes">
                            <div class="filter-lable">Bộ lọc</div>
                            <div class="filter-active-time">
                                <select id="sb-filter-time">
                                    <option value="0" selected="">- Thời gian truy cập -</option>
                                    <option value="1296000">15 ngày gần đây</option>
                                    <option value="2592000">30 ngày gần đây</option>
                                    <option value="5184000">60 ngày gần đây</option>
                                </select>
                            </div>
                            <div class="filter-teacher-type">
                                <select id="sb-filter-teacher-type">
                                    <option value="0" selected="">- Phân loại -</option>
                                    <option value="1">Sinh viên</option>
                                    <option value="3">Giáo viên</option>
                                    <option value="2">Người đi làm</option>
                                    <option value="8">Chuyên gia</option>
                                    <option value="9">Người nước ngoài</option>
                                </select>
                            </div>

                            <div class="filter-distance">
                                <select id="sb-filter-distance" class="distance-proccess">
                                    <option value="-1" selected="">- Khoảng cách -</option>
                                    <option value="2">2km</option>
                                    <option value="5">5km</option>
                                    <option value="10">10km</option>
                                </select>
                            </div>

                        </div>
                        <div class="suggest-tag">
                            <div class="filter-lable">Tag liên quan</div>
                            <div class="suggest-form-tag"><input type="text" placeholder="Ví dụ: Ielts">
                                <button type="button"><i class="fa fa-plus-circle"></i> Thêm</button>
                            </div>
                            <div id="suggest-list-tags"></div>
                        </div>
                    </div>
                    <div style="" class="row suggest-result">
                        <?php while ($row = $resultsTutor->fetch_assoc()) {
                             

                        
                        ?>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="account.php?view_tutor=<?= $row['MaGS']?>">
                                            <img src="../assets/img/img_tutor/<?= $row['AnhDaiDien'] ?>">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="account.php?view_tutor=<?= $row['MaGS']?>"><?= $row['HoTen'] ?></a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span><?= $row['Tinh_TP'] ?></span> |
                                            <?php
                                                // $typeSubjects = 'SELECT * FROM monhoc';
                                                // $stmt = $conn->prepare($typeSubjects);
                                                // $stmt->execute();
                                                // $resultSubjects = $stmt->get_result();

                                                // Lấy dữ liệu môn học gia sư dạy
                                                $sql = 'SELECT * FROM giasu_monhoc 
                                                JOIN monhoc on giasu_monhoc.MaMH = monhoc.MaMH
                                                WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
                                                $stmt = $conn->prepare($sql);
                                                $stmt->bind_param('i', $row['MaGS']);
                                                $stmt->execute();
                                                $resultTutorSubjects = $stmt->get_result();

                                                // Tạo một mảng lưu trữ các môn học mà giáo sư dạy
                                                $typeSubjects = array();
                                                while ($rowTutorSubject = $resultTutorSubjects->fetch_assoc()) {
                                                    $typeSubjects[] = $rowTutorSubject['TenMH'];
                                                }

                                                echo "<span>";
                                          
                                                    echo implode(', ', $typeSubjects);
                                               
                                                echo "</span>";
                                            ?>
                                        </p>
                                        <p class="cost">
                                            <span><?= $row['HocPhi1H'] ?> vnđ/h</span>
                                        </p>

                                        <!-- <span class="number ">N/A</span> -->
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            <?= $row['MoTa'] ?> </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="17950" data-type="user"></div>
                                        <a href="/invitation-teacher/17950" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="17950" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  } ?>
                        <!-- <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/nguyen-thi-thu-huong-020522">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202205/02/59285-07-25-08c6fb9ff7e299d56bc3e482dc9b189138.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/nguyen-thi-thu-huong-020522">Nguyễn Thị Thu Hường</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>250,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Tôi hi vọng chúng ta sẽ cùng nhau gặt hái thành tựu. Tôi là người có trách nhiệm và tôi mong bạn cũng vậy. Tôi rất vui khi được đồng hành với bạn để vượt qua khó khăn của môn Toán và Tiếng Anh☺️ </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="59285" data-type="user"></div>
                                        <a href="/invitation-teacher/59285" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="59285" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/nguyen-thi-thu-hoa">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/201804/23/nguyen-thi-thu-hoa-04-32-40453fb8a7f4577ec9f61946509aa56069.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/nguyen-thi-thu-hoa">Nguyễn Thị Thư Hòa</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Lý</span>
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>175,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Tôi học toán 1, trường chuyên Nguyễn Huệ; rồi học Đại Học Khoa học Tự Nhiên Hà Nội, ngành toán học và tốt nghiệp thạc sĩ ngành giải tích ứng dụng tại Orléans, Pháp.
                                            Tôi hiện là giảng viên, dạy khối sư phạm toán cấp 2 &amp; 3 hệ đại học các môn Toán Cambridge, Toán cao cấp, giải tích 1,2,3, phương trình vi phân, xác suất thống kê.
                                            Tôi đã dạy từ 2012 (6 năm kinh nghiệm) và luyện thi các cấp từ khi học đại học. </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="2705" data-type="user"></div>
                                        <a href="/invitation-teacher/2705" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="2705" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/hoang-tuan-anh-180119">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/02/-03-21-47af6c26f1c1cdbf967c4f82b0ce17b667.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/hoang-tuan-anh-180119">Hoàng Tuấn Anh</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>150,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            giải ba Vật Lý Thành Phố lớp 9 , giải khuyến khích Vật Lý tỉnh Yên Bái
                                            Tốt nghiệm THPT chuyên Nguyễn Tất Thành .
                                            Kinh nghiệm 1 năm gia sư Toán Lý cho học sinh 10, 11
                                            Kinh nghiệm dạy em trai học từ lớp 1 đến lớp 9 , kèm cặp em trai giúp em trai đỗ chuyên Toán , THPT Chuyên Nguyễn Tất Thành
                                            Điểm thi Đại Học 23 điểm
                                            Tốt nghiệm cử nhân ngành Tài Chính Ngân Hàng , khoa Tài Chính Doanh nghiệp
                                            Bằng Toeic 660 điểm, Đọc và tìm hiểu rất nhiều về văn hóa nước ngoài , đã đọc rất nhiều sách bằng tiếng anh về kinh doanh và phát triển bản thân
                                            Đặc điểm về thái độ : nhiệt tình , chăm chỉ , yêu công việc giáo dục , có tư duy đổi mới sáng tạo
                                        </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="12152" data-type="user"></div>
                                        <a href="/invitation-teacher/12152" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="12152" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/nguyen-thi-huyen">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/201803/20/Nguyen-Thi-Huyen--04-37-035a831730f841686731ff3495713a4646.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/nguyen-thi-huyen">Nguyễn Thị Huyền</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Hóa</span>
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>70,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Tính cách : hòa đồng, dễ gần, kiên nhẫn. Thế mạnh: -Môn tiếng Anh: chắc ngữ pháp, các skill khác tốt. Thi THPT quốc gia đạt 9,2. Thi học sinh giỏi từ lớp 6 đến lớp 12 và đạt được một số giải của huyện, tỉnh. -Toán: Toán cấp 2 là tốt nhất, Toán cấp 3 ổn. Thi THPT quốc gia đạt 8,6 -Hóa: vững về kiến thức hóa cấp 2 Bằng cấp: sinh viên năm 2 đại học ngoại ngữ - ĐHQGHN Kinh nghiệm: Dạy 2 học sinh lớp 7 môn tiếng Anh </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="1162" data-type="user"></div>
                                        <a href="/invitation-teacher/1162" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="1162" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/le-thi-phuong-thanh-260721">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202107/26/-05-02-39e2ece78341e8851cc0ec12f1b650190b.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/le-thi-phuong-thanh-260721">Lê Thị Phương Thanh</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>150,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Tôi tốt nghiệp cử nhân ngành Tài chính-Kế toán Đại học Anh quốc Việt Nam năm 2019.
                                            Tôi có chứng chỉ IELTS 7.0.
                                            Tôi có 1 năm kinh nghiệm làm việc trong mảng kế toán, mua hàng, và 1 năm dạy tiếng Anh.
                                            Tôi yêu thích tiếng Anh từ bé, luôn khao khát có thể nói chuyện được với những người đến từ những quốc gia khác, và mong muốn lan tỏa niềm yêu thích ngôn ngữ, giúp mọi người yêu thích hơn và giỏi hơn ở ngôn ngữ này. </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="47181" data-type="user"></div>
                                        <a href="/invitation-teacher/47181" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="47181" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/nguyen-thi-thu-ha-050621">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202106/06/-09-52-350a8e0a7716b6b75ae7d915dc492b295e.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/nguyen-thi-thu-ha-050621">Nguyễn Thị Thu Hà</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>350,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Mình tốt nghiệp loại Giỏi chuyên ngành Sư phạm Tiếng Anh, trường Đại học Sư phạm Hà Nội 2. Bằng cấp ngoại ngữ đạt trình độ C1. Hiện tại mình đang là chuyên viên phát triển học liệu các sản phẩm dạy - học tiếng Anh tại hệ thống giáo dục Học Mãi. Ngoài công việc chính, mình đang dạy các lớp gia sư cho các đối tượng học sinh luyện thi trường chuyên cũng như học sinh ở các cấp học, học sinh học quốc tế, mong muốn đạt các chứng chỉ ngoại ngữ.
                                            Mình đã bắt đầu đi dạy từ năm 2 đại học và hiện tại đã có 5 năm kinh nghiệm giảng dạy tại các trung tâm có tiếng trong thị trường giảng dạy Tiếng Anh như: Học viện đào tạo ngôn ngữ Cambridge, Trung tâm ngoại ngữ VietAction, Homey Academy,... và đã từng là trợ lý cho giáo viên nước ngoài Khoa Tiếng Anh tại trường đại học Sư phạm Hà Nội.
                                            Tất cả học sinh đều tiến bộ trong quá trình học tập: đạt các chứng chỉ quốc tế của Cambridge, thi đỗ các trường chuyên chất lượng cao tại Hà Nội như Nguyễn Tất Thành, Lương Thế Vinh, Cầu Giấy,... và đậu đại học với các mức điểm cao từ 8 - 9.6 điểm.
                                            Mình là người thân thiện, năng lượng và biết cách truyền năng lượng tích cực và niềm đam mê học Tiếng Anh tới học sinh. Từ đó, giúp phụ huynh định hướng đường hướng học tập cho con và giúp học sinh đạt được mục tiêu của mình.
                                        </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="44237" data-type="user"></div>
                                        <a href="/invitation-teacher/44237" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="44237" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/0962588408">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202112/15/-03-41-470836409b8db56a3ff2fe68819da49c39.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/0962588408">Đỗ Thị Thu Hoài</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Văn</span>
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>150,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Sinh viên đại học kinh tế - đại học quốc gia Hà Nội
                                            Phương châm sống: Luôn là phiên bản tốt nhất của chính mình. </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="53318" data-type="user"></div>
                                        <a href="/invitation-teacher/53318" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="53318" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/ngo-duc-minh-hang">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202108/15/-02-33-30ff3b25ae72975428dcefc01b8d1dcdbf.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/ngo-duc-minh-hang">Ngô Đức Minh Hằng</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>180,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Hiện tại là sinh viên năm 3 học Song bằng Sư phạm Tiếng Anh- Đại học Quốc Gia Hà Nội và Đại học Kinh tế, Đại học Quốc Gia Hà Nội. Tư duy tốt môn Tiếng Anh, 3 năm HSG tại lớp chọn 1 khối D01 trường THPT Trần Phú- Hoàn Kiếm với điểm tổng kết môn Tiếng Anh tất cả các kì luôn &gt;9.0. Từng Đỗ chuyên Anh trường THPT Chuyên Ngoại Ngữ( vì lý do gia đình nên không theo học). Điểm thi Đại học: Toán 9,4 ; Văn 9 ; Anh 9,6
                                            Đã có 5 năm chuyên giảng dạy các đối tượng học sinh từ mất gốc đến ôn thi chuyên chọn, trường quốc tế, ôn thi các cấp, ôn thi Đại học từ lớp 1 đến lớp 12. Đặc biệt là khối lớp 6-12. Trong quá trình dạy giúp 3 em đỗ Chuyên Ngữ, 5 em đỗ chuyên Anh Amsterdam, 11 em đỗ ĐH Ngoại thương, 16 em đỗ ĐH Kinh tế Quốc dân và rất nhiều em từ mất gốc đã đạt điểm 7,8 trong kì thi chuyển cấp. Trực tiếp soạn tài liệu cho các giáo viên tại các trung tâm và chấm bài. Đặc biệt có khả năng dạy học online theo phương pháp online để giúp học sinh dễ hiểu bài và học hành dễ tiến bộ. </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="48540" data-type="user"></div>
                                        <a href="/invitation-teacher/48540" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="48540" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/tran-duc-dao-nguyen">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202107/31/-11-16-419f775424750a0c819b3c958f5ac60317.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/tran-duc-dao-nguyen">Trần Đức Đào Nguyên</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Lý</span>
                                            <span>Tiếng Việt</span>
                                            <span>Tiếng Anh</span>
                                            <span>Kỹ năng mềm</span>
                                            <span>Sales - Marketing</span>
                                        </p>
                                        <p class="cost">
                                            <span>150,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Điểm thi THPT Quốc gia 27.1
                                            Với 9.2 Toán và 9.4 Anh
                                            Em từng k tự tin vào bản thân và có cơ hội học Gia sư môn Toán và Tiếng Anh nên em biết em cần làm gì để giúp đỡ các em </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="23557" data-type="user"></div>
                                        <a href="/invitation-teacher/23557" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="23557" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/khuat-minh-hang">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202005/11/-04-59-32a22d5ee01c469ea718744c25a2c5419d.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/khuat-minh-hang">Khuất Minh Hằng</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Tiếng Việt</span>
                                            <span>Tiếng Anh</span>
                                        </p>
                                        <p class="cost">
                                            <span>120,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Sinh viên năm 3 trường ĐH Kinh tế quốc dân, chuyên ngành Kinh doanh quốc tế chất lượng cao (học môn bằng tiếng anh)
                                            - GPA năm nhất: 8,33/10 và 3,54/4,0
                                            - Top 10 cuộc thi " Học sinh giỏi tiếng anh lớp 9 thành phố Hà Nội năm 2015"
                                            - Cấp 3 học lớp chuyên Anh của trường.
                                            - Có trách nhiệm, chăm chỉ, nhiệt tình, có khả năng nói chuyện với trẻ con.
                                            - Kinh nghiệm dạy gia sư tiếng anh cho học sinh cấp 2 (2 năm); dạy toán, tiếng việt cho học sinh cấp 1 ( 1 năm) </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="31928" data-type="user"></div>
                                        <a href="/invitation-teacher/31928" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="31928" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="box-content">
                                <div class="tile-v-12">
                                    <div class="img img-box-sugest">
                                        <a href="https://www.blacasa.vn/nguyen-huong-giang-010321">
                                            <img src=" https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202103/01/-11-59-341d3a44f1540ba456d865426ba9422b93.JPEG ">
                                        </a>
                                    </div>
                                    <div class="name">
                                        <h4>
                                            <a href="https://www.blacasa.vn/nguyen-huong-giang-010321">Nguyễn Hương Giang</a>
                                        </h4>
                                        <p style="    white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 200px;">
                                            <span>Hà Nội</span> |
                                            <span>Toán</span>
                                            <span>Tiếng Việt</span>
                                            <span>Tiếng Anh</span>
                                            <span>Tiếng Nhật</span>
                                        </p>
                                        <p class="cost">
                                            <span>150,000 vnđ/h</span>
                                        </p>

                                        <span class="number ">N/A</span>
                                    </div>
                                    <div class="description">
                                        <div class="view">
                                            Mình là Giang, sinh viên năm 4 Đại học Ngoại thương Hà Nội, khoa Tiếng Nhật thương mại.
                                            Mình học cấp 3 tại lớp Nhật, trường THPT Chu Văn An với 3 năm HSG. Đã đạt giải Ba kỳ thi Học sinh giỏi thành phố môn Tiếng Nhật và được tuyển thẳng vào các trường ĐH Ngoại ngữ, ĐHKHXH&amp;NV. Điểm thi Đại học 26,3.
                                            Mình có chứng chỉ tiếng Nhật JLPT N2.
                                            Luôn cố gắng tận tâm truyền đạt kiến thức và niềm yêu thích tiếng Nhật , văn hoá Nhật cho các bạn học sinh. </div>
                                    </div>
                                    <div class="btn-bottom text-right">
                                        <div class="btn-data" data-object="40945" data-type="user"></div>
                                        <a href="/invitation-teacher/40945" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a>
                                        <button class="btn btn-default save save-favorite favorite-gray" data-id="40945" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>

                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="content-next-page" id="page-2"></div>
                        <div class="view-footer">
                            <p class="load-more suggest-teacher-load-more btn-bla-big btn-blueblacasa" onclick="return load_more_page(1,71,'0',null,null,2,12,'all','all','',0,-1,0)" id="load-1">Xem thêm</p>
                        </div> -->

                        <script type="text/javascript">
                            function load_more_page(dia_diem, mon_hoc, type, lat, lng, next_page, limit, agency, gender, tags, time_active, distance, teacher_type) {
                                //console.log(type,"next_page",limit);
                                if (!dia_diem) {
                                    dia_diem = null;
                                }
                                if (!lat) {
                                    lat = null;
                                }
                                if (!lng) {
                                    lng = null;
                                }
                                $("body").append("<div class='loading'></div>");
                                $.ajax({
                                    type: 'POST',
                                    url: '/ajax-class-sugest-teacher',
                                    data: {
                                        'dia_diem': dia_diem,
                                        'mon_hoc': mon_hoc,
                                        'teaching_type': type,
                                        'lat': lat,
                                        'lng': lng,
                                        'next_page': next_page,
                                        'limit': limit,
                                        'agency': agency,
                                        'gender': gender,
                                        'tags': tags,
                                        'time_active': time_active,
                                        'distance': distance,
                                        'teacher_type': teacher_type
                                    },
                                    dataType: 'html',
                                    success: function(data) {
                                        $(".load-more").remove();
                                        $("#page-" + next_page).html(data);
                                        Drupal.attachBehaviors($("#page-" + next_page));
                                        if ($(".loading").size()) {
                                            $(".loading").remove();
                                        }
                                    },
                                    error: function(data) {
                                        console.log('An error occurred.');;
                                    },
                                });
                            }
                        </script>
                    </div>
                    <div id="suggest-criteria" data-place="1" data-subject="71" data-teaching-type="0" data-lat="" data-lng="" data-agency="all" data-gender="all" data-tags="" data-time="0" data-distance="-1" data-teacher-type="0">
                    </div>
                </div><!-- /.content-category -->
            </div>
        </div>
    </section>
    <a href="#class-popup-info" class="popup-modal class-modal-popup"></a>
    <div id="class-popup-info" class="white-popup-block  mfp-hide">
        <div class="box-title"><span>THÔNG BÁO</span></div>
        <a class="popup-modal-dismiss" href="#" style="top: 15px;right: 15px;border: 1px solid #ccc !important;">x</a>
        <div class="body-block">
            Yêu cầu của bạn đã được tạo thành công, tuy nhiên yêu cầu vẫn chưa thể hiển thị trong danh sách lớp trên hệ thống do
            bạn đã đăng quá 3 lớp cho phép trên hệ thống, lựa chọn 1 trong 2 tác vụ sau:<br>
            1. Nếu bạn là trung tâm gia sư, <a href="/become-agency">đăng ký ngay</a> <br>
            2. Nếu bạn là phụ huynh, liên hệ hotline 1900 63 63 42
        </div>
    </div>
    <?php include 'footer.php' ?>
    <!-- <style>
        #modalContent {
    width: 60%; /* Định kích thước của modalContent */
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}
    </style> -->
    <div id="modalBackdrop" class="backdrop-default" style="display: none;z-index: 1000;justify-content: center;align-items: center;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); opacity: 0.5;"></div>
    <div id="modalContent" class="modal-default" style=" z-index: 1001; position: absolute;display: none;left: 10% !important;right: 10% !important;">
        <div class="ctools-modal-content" style="width: 100%;">
            <div class="modal-header"> <a class="close" href="#">Close Window<img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/all/modules/contrib/ctools/images/icon-close-window.png" alt="Close window" title="Close window"> </a> <span id="modal-title" class="modal-title">Gửi đề nghị dạy</span> </div>
            <div id="modal-content" class="modal-content" style="">
                <div id="dang-ky-tham-gia-form" class="white-popup-block">
                    <div id="dang-ky-tham-gia-message"></div>
                    <form action="/lop-hoc-user/10604/dang-ky-day" method="post" id="blacasa-nhom-hoc-dang-ky-day-form" accept-charset="UTF-8" class="ctools-use-modal-processed">
                        <div>

                            <div class="modal-body">
                                <p class="err" style="font-size: 17px;"><i class="fa fa-face-happy" aria-hidden="true" style="font-size: 30px;color: #03ad03;"></i>
                                    Bạn có thật sự muốn đề nghị dạy lớp này không?
                                </p>
                            </div>
                            <div class="modal-footer" style="justify-content: center;">
                                <!-- <a href="/huy-nguyen-080324">Về Trang cá nhân</a> -->
                                <!-- <a href="/become-teacher#how-it-work" style="background-color: #afabab !important">Hướng dẫn</a> -->
                                <button type="button" style="text-transform: uppercase;padding: 10px 18px;background: #ff961e;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-close" data-dismiss="modal" aria-label="Close">Thoát</button>
                                <a style="text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-de-nghi-day"> Đề nghị dạy</a>
                                <a href="class.php" style="display:none; text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-tim-lop-khac"> Tìm các lớp khác</a>
                                <style>
                                    .btn-close:hover,.btn-tim-lop-khac:hover,
                                    .btn-de-nghi-day:hover {
                                        opacity: 0.8;
                                        cursor: pointer;
                                        text-decoration: none;
                                        /* Giảm độ mờ khi hover */
                                    }
                                </style>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Bắt sự kiện click vào liên kết "Đề Nghị Dạy"
            document.querySelector('.btn.ctools-use-modal').addEventListener('click', function(event) {
                event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

                // Lấy ID Lớp và ID gia sư từ code PHP (giả sử bạn có chúng trong hai biến $class_id và $tutor_id)

                // Hiển thị modal
                document.getElementById('modalBackdrop').style.display = 'flex';
                document.getElementById('modalContent').style.display = 'block';

                // // Gửi hai ID vào modal
                // document.getElementById('classIdInput').value = classId;
                // document.getElementById('tutorIdInput').value = tutorId;
            });
        });
        document.querySelector('.close').addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

            // Đóng modal
            document.getElementById('modalBackdrop').style.display = 'none';
            document.getElementById('modalContent').style.display = 'none';
        });

        // Bắt sự kiện click bên ngoài modal để đóng nó
        document.getElementById('modalBackdrop').addEventListener('click', function(event) {
            if (event.target === this) { // Chỉ đóng modal nếu người dùng nhấp vào phần backdrop (nền)
                document.getElementById('modalBackdrop').style.display = 'none';
                document.getElementById('modalContent').style.display = 'none';
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".btn-de-nghi-day").on("click", function() {

                let idClass = <?php echo  $idClass ?>;
                let idTutor = <?php echo isset($idTutor) ? $idTutor : "''"; ?>;
                console.log(idTutor);
                let err = $(".err");
                let btn_connect = $(".btn-de-nghi-day");
                let btn_use_modal = $(".btn-use-modal");
                let btn_search_class = $(".btn-tim-lop-khac");
                console.log(btn_use_modal);


                $.ajax({
                    url: "CheckAccountTutor.php",
                    method: "POST",
                    data: {
                        idClass: idClass,
                        idTutor: idTutor
                    },
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        // Clear previous error messages
                        // errEmailPhone.html("");
                        err.html("");
                        console.log(response);
                        // Check for specific errors and display messages



                        if (response.success) {
                            err.html("Bạn đã gửi yêu cầu đề nghị dạy đến lớp. Vui lòng đợi phản hồi từ học viên.");
                            // btn_connect.html("Tìm các lớp khác!");
                            // btn_connect.attr("href", "class.php");
                            btn_connect.css("display", "none");
                            btn_search_class.css("display", "block");

                            btn_use_modal.attr("href", "javascript:void(0);");
                            btn_use_modal.attr("onclick", "return false;");
                            btn_use_modal.html("Đã đề nghị dạy");
                            btn_use_modal.addClass("disabled-btn");

                            // location.reload();
                        } else {
                            err.html("Rất tiếc!");
                            if (response.errorSex) {
                                err.append(response.errorSex);
                            }

                            if (response.errorSubject) {
                                err.append(response.errorSubject);
                            }
                            if (response.errorTag) {
                                err.append(response.errorTag);
                            }

                        }

                    },
                    error: function(xhr, status, error) {
                        console.log("Error in AJAX request:", status, error);
                    }
                });
            });
        });
    </script>





</body>

</html>