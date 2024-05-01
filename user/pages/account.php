<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();

if (isset($_GET['view'])) {
    $idAcc = $_GET['view'];
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
    <link type="text/css" rel="stylesheet" href="../assets/css/css__MUoYdXCv2l_Pmkn1h-X5t1pcieLrxpCXtZXnRpz2Drw__G7sfisQmk-iYdz.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__Ot9l09ZM71JgqUrkABNYpIf697NGNW91HhqmDQIPI2k__YtWorz7vEtwokW.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__zjm2aiKa_qJyEQxmjZDIpbbI9yEC7p6NkG4ZUWSwkmg__ZFpFb8wdlLmy92.css" media="all" />
    <script type="text/javascript" src="../assets/js/js__dU859nniAHOO3ZZ49DZUXr5Frl9T3QSa81hYdDf9Uas__LOGJbIpGkynalCS.js"></script>
    <script type="text/javascript" src="../assets/js/js__IxBpGC3NatX6P7dEN5hVBxBEGm6AzqoIcTK6bYbV8dQ__5gYxiRHtWORQMry.js"></script>
    <script type="text/javascript" src="../assets/js/js__NgnSGdtri6Bb9h2hOjakdeTtkBytuPSJ89uCyW2Xidw__1GAb2tV0-jxV9nf.js"></script>
    <script type="text/javascript" src="../assets/js/js__ppXFXnRFydgd9PFBKWB6VDFEkCrAox-6U8R5JvpcNQc__EeSzd63qZSJFGoE.js"></script>

    <script type="text/javascript" src="../assets/js/js__bcCAN6VgMjVnLudQwXmKyBrXo9atl70SkprxOvrBQ5E__d43UiXeszJjDIN6.js"></script>

    <script type="text/javascript" src="../assets/js/js__2H5VHDfLOvpT-ZWWBqPpmQoETJQWSLU5RqZ6iprXOAQ__6pqGXWUeGNf05Fe.js"></script>
    <script type="text/javascript" src="../assets/js/js__I_3_005HciglOJyBxiQvaSLMYQsG33p9G0ihNQ_GR8U__Zuy3KzlHSmeJE8j.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->
    <div id="wrapHeadBlock">
        <?php
        if (isset($idAcc)) {
            $sql = 'SELECT * FROM taikhoan WHERE MaTK = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $idAcc);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            $typeAcc = $result['MaPQ'];

            if ($typeAcc == 2) {
                // Lấy thông tin gia sư
                $sql = 'SELECT * FROM giasu  WHERE MaTK = ?';
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $idAcc);
                $stmt->execute();
                $resultTutor = $stmt->get_result()->fetch_assoc();
                $idTutor = $resultTutor['MaGS'];
                $fullName = $resultTutor['HoTen'];
                $phoneNumber = $resultTutor['DienThoai'];
                $typeTutor = $resultTutor['MaLoaiGS'];
                $city = $resultTutor['Tinh_TP'];
                $detailCity = $resultTutor['DiaChiCT'];
                $sex = $resultTutor['GioiTinh'];
                $description = $resultTutor['MoTa'];
                $status = $resultTutor['TrangThaiDuyet'];

                $typeTeach = $resultTutor['MaHT'];
                $fee1Hour = $resultTutor['HocPhi1H'];
                $coverTutor = $resultTutor['AnhBia'];
                $avatarTutor = $resultTutor['AnhDaiDien'];
                $degreeTutor = $resultTutor['AnhBangCap'];
            } else if ($typeAcc == 3) {
                $sql = 'SELECT * FROM hocvien WHERE MaTK = ?';
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $idAcc);
                $stmt->execute();
                $resultStudent = $stmt->get_result()->fetch_assoc();
                $idStudent = $resultStudent['MaHV'];
                $fullName = $resultStudent['HoTen'];
                $phoneNumber = $resultStudent['DienThoai'];
                $city = $resultStudent['Tinh_TP'];
                $detailCity = $resultStudent['DiaChiCT'];
                $sex = $resultStudent['GioiTinh'];
                $description = $resultStudent['MoTa'];
            }
        }
        if (isset($_GET['view_tutor'])) {
            $idTutor = $_GET['view_tutor'];
            // Lấy thông tin gia sư
            $sql = 'SELECT * FROM giasu  WHERE MaGS = ?';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('i', $idTutor);
            $stmt->execute();
            $resultTutor = $stmt->get_result()->fetch_assoc();
            $fullName = $resultTutor['HoTen'];
            $phoneNumber = $resultTutor['DienThoai'];
            $typeTutor = $resultTutor['MaLoaiGS'];
            $city = $resultTutor['Tinh_TP'];
            $detailCity = $resultTutor['DiaChiCT'];
            $sex = $resultTutor['GioiTinh'];
            $description = $resultTutor['MoTa'];
            $status = $resultTutor['TrangThaiDuyet'];

            $typeTeach = $resultTutor['MaHT'];
            $fee1Hour = $resultTutor['HocPhi1H'];
            $coverTutor = $resultTutor['AnhBia'];
            $avatarTutor = $resultTutor['AnhDaiDien'];
            $degreeTutor = $resultTutor['AnhBangCap'];
        }

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


        <div class="container">
            <div class="">
                <!--Ảnh cover-->
                <section class="profile-cover">
                    <div class="cover" style="background-image: url('../assets/img/img_cover/<?php if (!empty($coverTutor)) {
                                                                                        echo $coverTutor;
                                                                                    } else if (!empty($coverStudent)) {
                                                                                        echo  $coverStudent;
                                                                                    } ?>')">
                        <!--<img id="show-cover" src=""> -->
                        <div class="box-cover">
                            <input type="file" name="edit_cover" class="inputfile_avt" id="edit_cover" onchange="return ajax_update_image('edit_cover','show-cover',1134,'/ajax-update-image/cover/66604')">
                            <label for="edit_cover"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                </svg> <span>Upload&hellip;</span></label>
                        </div>

                    </div>
                </section>

                <section class="infor-main">
                    <div class="infor-main-inner" style="width:100%;background-color:#fff;display:flex;flex-direction:row;justify-content:center;flex-wrap:wrap;">
                        <!--Ảnh avatar & Feedback, Bpoint-->
                        <div class="col-md-2 col-sm-4 custom-w-left" style="padding-left:15px;">
                            <div class="real-w">
                                <div class="avatar ">
                                    <div class="popup-gallery">
                                        <a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG"><img id="show-avatar" typeof="foaf:Image" src="../assets/img/<?php
                                                                                                                                                                                                                                        if (!empty($avatarTutor)) {
                                                                                                                                                                                                                                            echo 'img_tutor/' . $avatarTutor;
                                                                                                                                                                                                                                        } else if (!empty($avatarStudent)) {
                                                                                                                                                                                                                                            echo 'img_student/' . $avatarStudent;
                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                        ?>" width="176" height="176" alt="" /></a>
                                    </div>
                                    <div class="box-avatar">
                                        <input type="file" name="edit_avatar" class="inputfile_avt" id="edit_avatar" onchange="return ajax_update_image('edit_avatar','show-avatar',624,'/ajax-update-image/avatar/66604')">
                                        <label for="edit_avatar"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                            </svg> <span>Upload&hellip;</span></label>
                                    </div>

                                </div>
                                <div class="point wRole" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                                    <div class="icon" style="<?php if (isset($status)) {
                                                                    if ($status == 1) {
                                                                        echo 'background-color:#03ad03;';
                                                                    } else if ($status == 0) {
                                                                        echo 'background-color:gray;';
                                                                    }
                                                                }
                                                                ?>" title="">
                                        <?php if (isset($status)) {
                                            if ($status == 1) {
                                                echo '<i class="fa fa-check" aria-hidden="true" style=" font-size:18px;padding-top:5px;"></i>';
                                            } else if ($status == 0) {
                                                echo '<i class="fa fa-question" aria-hidden="true" style=" font-size:18px;padding-top:5px;"></i>';
                                            }
                                        }
                                        ?>



                                    </div>
                                    <span><?php if (isset($status)) {
                                                if ($status == 1) {
                                                    echo "ID Gia Sư: <b> $idTutor </b>";
                                                } else if ($status == 0) {
                                                    echo 'Gia sư chưa duyệt';
                                                }
                                            }
                                            ?></span>

                                </div>
                                <div class="point wRole" style="display:<?= ((isset($typeAcc) && ($typeAcc == 3)) && (!isset($idTutor))) ? '' : 'none' ?>">
                                    <div class="icon bg-blacasa"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
                                    <span>Học viên</span>
                                </div>
                                <div class="point wVote mb-5">
                                </div>
                                <div class="point wBPoint">
                                    <div class="icon" style="background-color:rgb(200,20,60);"><i class="fa fa-btc" aria-hidden="true"></i></div>
                                    <span>
                                        <a href="/huy-nguyen-080324/bpoint">0 BPoints</a>
                                    </span>
                                </div>

                            </div>
                        </div>
                        <!--Right block-->
                        <div class="custom-w-right col-md-10">
                            <!--Button feedback, favorite-->
                            <div class="headblockTop">
                                <div class="p-user-name" style="padding:10px 0;">
                                    <span class="p-user-name-text">
                                        <a href="https://www.blacasa.vn/huy-nguyen-080324"><?= isset($fullName) ? $fullName : '' ?></a>
                                    </span>
                                    <span class="p-user-name-edit">
                                        <a href="https://www.blacasa.vn/huy-nguyen-080324/account">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                </div>
                                <span class="btnSocials" style="padding:10px 0;">
                                    <span class="fb-share-button" data-href="/huy-nguyen-080324" data-layout="button" data-size="large" data-mobile-iframe="false">
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.blacasa.vn%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" rel="nofollow">
                                            Chia sẻ
                                        </a>
                                    </span>
                                </span>
                            </div>
                            <!--subjects, cost: only for teacher-->
                            <div class="headblockSecond" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                                <span class="spanArea mr-15"><i class="fa fa-book"></i>
                                    <?php if (isset($idTutor)) {
                                        // Lấy tất cả các môn học từ cơ sở dữ liệu
                                        $typeSubjects = 'SELECT * FROM monhoc';
                                        $stmt = $conn->prepare($typeSubjects);
                                        $stmt->execute();
                                        $resultSubjects = $stmt->get_result();

                                        // Lấy dữ liệu môn học gia sư dạy
                                        $sql = 'SELECT * FROM giasu_monhoc WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
                                        $stmt = $conn->prepare($sql);
                                        $stmt->bind_param('i', $idTutor);
                                        $stmt->execute();
                                        $resultTutorSubjects = $stmt->get_result();

                                        // Tạo một mảng lưu trữ các môn học mà giáo sư dạy
                                        $typeSubjects = array();
                                        while ($rowTutorSubject = $resultTutorSubjects->fetch_assoc()) {
                                            $typeSubjects[] = $rowTutorSubject['MaMH'];
                                        }

                                        while ($rowSubject = $resultSubjects->fetch_assoc()) {
                                            $checked = in_array($rowSubject['MaMH'], $typeSubjects) ? 'checked' : ''; // Kiểm tra xem môn học có trong danh sách môn học của giáo sư hay không
                                            if ($checked) {
                                                echo $rowSubject['TenMH'] . ", ";
                                            }
                                        }
                                    }
                                    ?> </span>
                                <!--							
									<div class="spanArea price"><i class="fa fa-tag"></i>
                                             200,000 vnđ/h                                        </div>
										-->


                            </div>

                            <!--Place, teaching type: only for teacher-->
                            <div class="headblockSecond">
                                <a class="spanArea mr-15" href="#map">
                                    <i class="fa fa-map-marker"></i>
                                    <?= isset($city) ? $city : 'Chưa rõ địa điểm' ?>
                                </a>
                                <span class="spanArea mr-15" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>"> <i class="fa fa-briefcase""></i> 
                                   <?php
                                    if (isset($typeTeach)) {
                                        if ($typeTeach == 1) echo "Dạy trực tiếp";
                                        else if ($typeTeach == 2) echo "Dạy trực tuyến";
                                        else if ($typeTeach == 3) echo "Dạy trực tiếp, Dạy trực tuyến";
                                    }

                                    ?></span>										
                </div>
																
								<!--Statistic: Thống kê-->
                <div class=" headblockThird" style="display:<?= (isset($typeAcc) && ($typeAcc == 2)) ? '' : 'none' ?>">
                                        <!--
                                        <div class="wrapBlockCount">
                                            <div class="blockCount">
                                            <span class="firstLine">0</span>
                                            <span class="secondtLine">Lớp đã dạy</span>
                                            </div>
                                            <div class="blockCount">
                                                <span class="firstLine">0</span>
                                                <span class="secondtLine">Người quan tâm</span>
                                            </div>
                                            <div class="blockCount">
                                                <span class="firstLine">0</span>
                                                <span class="secondtLine">Thích đánh giá</span>
                                            </div>
                                            <div class="blockCount">
                                                <span class="firstLine">0</span>
                                                <span class="secondtLine">Lượt gợi ý</span>
                                            </div>
                                        </div>
										-->
                                        <div class="wrapBlockInvite" style="margin-top:10px;">
                                            <a href="/class" class="link-become-teacher">
                                                Tìm lớp dạy
                                            </a>

                                        </div>
                            </div>
                            <div class="headblockThird" style="display:<?= ((isset($typeAcc) && ($typeAcc == 3)) && (!isset($idTutor))) ? '' : 'none' ?>">
                                <!--
                                <div class="wrapBlockCount">
                                    <div class="blockCount">
                                    <span class="firstLine">2</span>
                                    <span class="secondtLine">Lớp đã tạo</span>
                                    </div>
                                    <div class="blockCount">
                                        <span class="firstLine">0</span>
                                        <span class="secondtLine">Người quan tâm</span>
                                    </div>
                                    <div class="blockCount">
                                        <span class="firstLine">0</span>
                                        <span class="secondtLine">Thích đánh giá</span>
                                    </div>
                                    <div class="blockCount">
                                        <span class="firstLine">0</span>
                                        <span class="secondtLine">Lượt gợi ý</span>
                                    </div>
                                </div>
										-->
                                <div class="wrapBlockInvite" style="margin-top:10px;">
                                    <a href="/tao-lop-hoc" class="btn-blueblacasa link-become-teacher">
                                        Đăng yêu cầu tìm giáo viên
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--Page Content-->
    <!--end: user's basic info-->

    <!--main content-->
    <section class="profile">
        <!--Nam's code -->

        <div class="container">
            <!--Body content: right side-->
            <div class="custom-w-right">
                <div class="tab-content tab-content-profile">
                    <!-- thong tin chung -->
                    <div id="thong-tin-chung">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2 style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">THÔNG TIN GIA SƯ</h2>
                                    <h2 style="display:<?= ((isset($typeAcc) && ($typeAcc == 3)) && (!isset($idTutor))) ? '' : 'none' ?>">THÔNG TIN HỌC VIÊN</h2>
                                </div>
                                <div class="body-block" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                                    <h3>Giới thiệu chung và kinh nghiệm gia sư, giảng dạy</h3>
                                    <p>
                                        <?= isset($description) ? $description : '' ?> </p>

                                    <h3>Chủ đề dạy</h3>
                                    <ul class="group-tag">
                                        <?php
                                        if (isset($idTutor)) {
                                            // Lấy dữ liệu chủ đề cho gia sư
                                            $sql = 'SELECT * FROM giasu_chude  
                                            JOIN chude ON chude.MaCD = giasu_chude.MaCD
                                            WHERE MaGS = ?';
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param('i', $idTutor);
                                            $stmt->execute();
                                            $resultTutor_Tag = $stmt->get_result();
                                            // $listTags = array();

                                            while ($rowTag = $resultTutor_Tag->fetch_assoc()) {
                                                // array_push($listTags, $rowTutor_Tag['MaCD']);
                                        ?>
                                                <li>
                                                    <p><?= $rowTag['TenCD'] ?></p>
                                                </li>

                                            <?php } ?>
                                        <?php } ?>
                                    </ul>

                                    <h3>Gia sư đang là</h3>
                                    <div class="kieu-giao-vien">
                                        <?php
                                        if (isset($idTutor)) {
                                            $sql = 'SELECT * FROM giasu  
                                            JOIN loaigs ON loaigs.MaLoaiGS = loaigs.MaLoaiGS
                                            WHERE MaGS = ?';
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param('i', $idTutor);
                                            $stmt->execute();
                                            $nameTypeTutor = $stmt->get_result()->fetch_assoc()['TenLoaiGS'];
                                        }



                                        ?>
                                        <label><?= isset($nameTypeTutor) ? $nameTypeTutor : 'Chưa có' ?></label>
                                    </div>

                                </div>
                                <div class="body-block" style="display:<?= ((isset($typeAcc) && ($typeAcc == 3)) && (!isset($idTutor))) ? '' : 'none' ?>">
                                    <p> <?= isset($description) ? $description : '' ?></p>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Hien thi lớp đã dạy -->





                    <!-- Lịch dạy -->
                    <div id="lich-day" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2>LỊCH DẠY GIA SƯ</h2>
                                </div>
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
                            </div>
                        </div>
                    </div>

                    <!--Bản đồ vị trí-->
                    <div id="map" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2>BẢN ĐỒ VỊ TRÍ GIA SƯ</h2>
                                </div>
                                <div class="body-block block-calender" style="padding:0;">
                                    <p style="padding-top:20px;font-size:16px;"><b>Địa chỉ: </b><?= isset($detailCity) ? $detailCity : '' ?></p>
                                    <span id="storage-latlon" data-variable-one="21.0277644" data-variable-two="105.8341598"></span>
                                    <iframe class="iframe-map" width="100%" height="350px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8
											&q=21.0277644,105.8341598											&zoom=13&maptype=roadmap" allowfullscreen>
                                    </iframe>


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Hình ảnh -->
                    <div id="hinh-anh" style="display:<?= (isset($typeAcc) && ($typeAcc == 2) || (isset($idTutor))) ? '' : 'none' ?>">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2>HÌNH ẢNH GIA SƯ</h2>
                                </div>
                                <div class="body-block">
                                    <div class="account-img-galary">
                                        <div class="galary-imgs">

                                            <p>Upload ảnh giới thiệu về bản thân hoặc mô tả các chương trình học... </p>
                                            <p class="galary-note">Lưu ý: Upload tối đa 6 ảnh</p>

                                            <p>Chưa có hình ảnh nào để hiển thị.</p>
                                        </div>

                                        <div class="upload-btn-wrapper">
                                            <button class="btn-upload-galary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                </svg><span>Upload files...</span></button>
                                            <input type="file" name="edit_galary[]" class="inputfile_avts" id="edit_galary" onchange="return update_galary('edit_galary')" multiple />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /tab-4:Đánh giá -->
                    <div id="info-danh-gia" style="display:<?= ((isset($_GET['view_tutor']))) ? '' : 'none' ?>">
                        <div class="gblock-v2">
                            <div class="header-block">
                                <h2>ĐÁNH GIÁ GIA SƯ</h2>
                            </div>
                            <div class="body-block">
                                <div class="comments-list">
                                    <div class="review-link"><a href="#review-popup-form" class="popup-modal">Đánh giá ngay</a></div>
                                    <div id="review-popup-form" class="mfp-hide white-popup-block position-relative" style="">
                                        <div class="box-title">Đánh giá</div>
                                        <a class="popup-modal-dismiss" href="#">x</a>
                                        <div class="box-review-content review-form" style="">
                                            <form action="/vuong-hoang-kim-phung" method="post" id="blacasa-feedback-review-form" accept-charset="UTF-8" style="">
                                                <div style="">
                                                    <div class="form-item form-type-textfield form-item-title">
                                                        <input placeholder="Tiêu đề*" type="text" id="edit-title" name="title" value="" size="60" maxlength="128" class="form-text">
                                                    </div>
                                                    <div class="form-item form-type-textarea form-item-comment-positive">
                                                        <div class="form-textarea-wrapper"><textarea placeholder="Điểm tốt" id="edit-comment-positive" name="comment_positive" cols="60" rows="5" class="form-textarea"></textarea></div>
                                                    </div>
                                                    <div class="form-item form-type-textarea form-item-comment-negative">
                                                        <div class="form-textarea-wrapper"><textarea placeholder="Điểm chưa tốt" id="edit-comment-negative" name="comment_negative" cols="60" rows="5" class="form-textarea"></textarea></div>
                                                    </div>
                                                    <fieldset class="form-wrapper" id="edit-criteria" style="">
                                                        <legend><span class="fieldset-legend">Tiêu chí đánh giá</span></legend>
                                                        <div class="fieldset-wrapper" style="">
                                                            <div class="review-criteria" style=""><input key="1" id="sliderscore1" class="md-slider-score" type="rang" max="10" step="0.1" value="7.0" oninput="score1.value=sliderscore1.value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-0" style="">
                                                                    <div class="rangeslider__fill" style="width: 328.8px;"></div>
                                                                    <div class="rangeslider__handle" style="left: 321.3px;"></div>
                                                                </div><span>Phương pháp dạy học</span><output id="score1" for="sliderscore1">7</output>
                                                            </div>
                                                            <div class="review-criteria" style=""><input key="2" id="sliderscore2" class="md-slider-score" type="rang" max="10" step="0.1" value="7.0" oninput="score2.value=sliderscore2.value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-1" style="">
                                                                    <div class="rangeslider__fill" style="width: 328.8px;"></div>
                                                                    <div class="rangeslider__handle" style="left: 321.3px;"></div>
                                                                </div><span>Kỹ năng mềm</span><output id="score2" for="sliderscore2">7</output>
                                                            </div>
                                                            <div class="review-criteria" style=""><input key="3" id="sliderscore3" class="md-slider-score" type="rang" max="10" step="0.1" value="7.0" oninput="score3.value=sliderscore3.value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-2" style="">
                                                                    <div class="rangeslider__fill" style="width: 328.8px;"></div>
                                                                    <div class="rangeslider__handle" style="left: 321.3px;"></div>
                                                                </div><span>Sự tận tình</span><output id="score3" for="sliderscore3">7</output>
                                                            </div>
                                                            <div class="review-criteria" style=""><input key="4" id="sliderscore4" class="md-slider-score" type="rang" max="10" step="0.1" value="7.0" oninput="score4.value=sliderscore4.value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-3" style="">
                                                                    <div class="rangeslider__fill" style="width: 328.8px;"></div>
                                                                    <div class="rangeslider__handle" style="left: 321.3px;"></div>
                                                                </div><span>Đúng giờ</span><output id="score4" for="sliderscore4">7</output>
                                                            </div>
                                                            <div class="review-criteria" style=""><input key="5" id="sliderscore5" class="md-slider-score" type="rang" max="10" step="0.1" value="7.0" oninput="score5.value=sliderscore5.value" style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                                                <div class="rangeslider rangeslider--horizontal" id="js-rangeslider-4" style="">
                                                                    <div class="rangeslider__fill" style="width: 328.8px;"></div>
                                                                    <div class="rangeslider__handle" style="left: 321.3px;"></div>
                                                                </div><span>Nghiệp vụ sư phạm</span><output id="score5" for="sliderscore5">7</output>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <input type="hidden" name="criteria_1" value="7">
                                                    <input type="hidden" name="criteria_2" value="7">
                                                    <input type="hidden" name="criteria_3" value="7">
                                                    <input type="hidden" name="criteria_4" value="7">
                                                    <input type="hidden" name="criteria_5" value="7">
                                                    <div class="form-item form-type-radios form-item-recommend">
                                                        <label for="edit-recommend">Bạn có muốn recommend này cho người khác không? </label>
                                                        <div id="edit-recommend" class="form-radios">
                                                            <div class="form-item form-type-radio form-item-recommend">
                                                                <input type="radio" id="edit-recommend-yes" name="recommend" value="yes" checked="checked" class="form-radio"> <label class="option" for="edit-recommend-yes">Có </label>

                                                            </div>
                                                            <div class="form-item form-type-radio form-item-recommend">
                                                                <input type="radio" id="edit-recommend-no" name="recommend" value="no" class="form-radio"> <label class="option" for="edit-recommend-no">Không </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="element-form"><input type="submit" id="edit-submit" name="op" value="Gửi đánh giá" class="form-submit ajax-processed"></div><input type="hidden" name="form_build_id" value="form-EZUj9KePXAJkEN0h78YwdwwkCSs1J5AloFo3y2ze5n8">
                                                    <input type="hidden" name="form_token" value="pk5MTNgyA8OBz5Oea4f2yrT3CDQKXOhg0GMvKvmNzvk">
                                                    <input type="hidden" name="form_id" value="blacasa_feedback_review_form">
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-content tab-review">
                                        <!--/Tab content joined -->
                                        <div class="tab-pane fade in active" id="review-joined">
                                            <div class="view view-blacasa-feedback view-id-blacasa_feedback view-display-id-block_2 view-dom-id-1f37f39226c745e68b9eccc38967f904 jquery-once-1-processed">



                                                <div class="view-empty">
                                                    <p>Không có đánh giá nào!</p>
                                                </div>






                                            </div>
                                        </div>

                                    </div>




                                </div><!-- /.comments-list -->
                            </div>
                        </div><!-- /.gblock-v2 -->
                    </div>


                </div>
            </div>
    </section>

    <?php include 'footer.php' ?>
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
			<div class="modal-header"> <a class="close" href="#">Close Window<img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/all/modules/contrib/ctools/images/icon-close-window.png" alt="Close window" title="Close window"> </a> <span id="modal-title" class="modal-title">Đóng yêu cầu</span> </div>
			<div id="modal-content" class="modal-content" style="">
				<div id="dang-ky-tham-gia-form" class="white-popup-block">
					<div id="dang-ky-tham-gia-message"></div>
					<form action="/lop-hoc-user/10604/dang-ky-day" method="post" id="blacasa-nhom-hoc-dang-ky-day-form" accept-charset="UTF-8" class="ctools-use-modal-processed">
						<div>

							<div class="modal-body">
							<input placeholder="Tiêu đề*" type="text" id="edit-title" name="title" value="" size="60" maxlength="128" class="form-text" data-sider-insert-id="b6f89446-61f3-45d3-9976-2acf1b400427" data-sider-select-id="4136215d-78a6-4aa0-91aa-2dea4948b542">
							</div>
							<div class="modal-footer" style="justify-content: center;">
								<!-- <a href="/huy-nguyen-080324">Về Trang cá nhân</a> -->
								<!-- <a href="/become-teacher#how-it-work" style="background-color: #afabab !important">Hướng dẫn</a> -->
								<button type="button" style="text-transform: uppercase;padding: 10px 18px;background: #ff961e;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-close" data-dismiss="modal" aria-label="Close">Thoát</button>
								<a style="text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-dong-yeu-cau" data-id="<?= $row['MaLop'] ?>"> Đóng yêu cầu</a>

								<style>
									.btn-close:hover,
									.btn-dong-yeu-cau:hover {
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


</body>

</html>