<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();
function limitWords($string, $limit)
{
    $words = explode(" ", $string);
    if (count($words) > $limit) {
        $words = array_slice($words, 0, $limit);
        $string = implode(' ', $words) . '...';
    }
    return $string;
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
</head>
<style>
    .page {
        align-items: center;
        display: flex;
        gap: 6px;
        justify-content: center;
    }

    .page-item {
        align-items: center;
        border: 1px solid #ccc;
        border-radius: 100%;
        cursor: pointer;
        display: flex;
        height: 47px;
        justify-content: center;
        width: 47px;
    }

    .page-link-1 {
        align-items: center;
        background-color: transparent;
        display: flex;
        font-size: 13px;
        font-weight: 600;
        height: 100%;
        justify-content: center;
        line-height: normal;
        text-decoration: none;
        text-transform: uppercase;
        width: 100%;
    }

    .page-item:hover {
        border: 1px solid #069d86;
    }

    .active-item {
        background-color: #78e08f;
    }

    .active-link {
        color: white;
    }
</style>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <?php

    // Xác định trang hiện tại
    $page = isset($_GET['page']) ? $_GET['page'] : 1;

    // Số lượng mục trên mỗi trang
    $items_per_page = 5;

    // Tính toán offset cho truy vấn SQL dựa trên trang hiện tại
    $offset = ($page - 1) * $items_per_page;


    $class = 'SELECT * FROM lophoc
    JOIN monhoc ON monhoc.MaMH = lophoc.MaMH
    JOIN hinhthuc ON hinhthuc.MaHT = lophoc.MaHT
    JOIN hocvien ON hocvien.MaHV = lophoc.MaHV
    WHERE (1=1) ';


    if (isset($_GET['search-class'])) {
        $city = $_GET['place'];
        $subject = $_GET['subject_class'];
        $tag = $_GET['topic'];
        $typeTeach = $_GET['method'];


        if (!empty($city)) {
            $class .= " AND lophoc.Tinh_TP = '$city'";
        }

        if (!empty($subject)) {
            $class .= " AND lophoc.MaMH = '$subject'";
        }
        if (!empty($tag)) {
            $class .= " AND EXISTS (SELECT * FROM lophoc_chude WHERE lophoc_chude.MaLop = lophoc.MaLop AND lophoc_chude.MaCD = '$tag')";
        }

        if (!empty($typeTeach)) {
            $class .= " AND lophoc.MaHT = '$typeTeach'";
        }
    }

    if (isset($idTutor)) {

        $class .= " AND (lophoc.GioiTinhGS = 2 OR (
            lophoc.GioiTinhGS != 2 AND EXISTS (
                SELECT * FROM giasu 
                WHERE lophoc.GioiTinhGS = giasu.GioiTinh 
                AND giasu.MaGS = '$idTutor'
            )
        ))";

        $class .= " AND EXISTS (
            SELECT * FROM giasu_monhoc 
            WHERE lophoc.MaMH = giasu_monhoc.MaMH 
            AND giasu_monhoc.MaGS = '$idTutor'
        )";

        $class .= " AND EXISTS (
            SELECT * FROM lophoc_chude 
            JOIN giasu_chude ON lophoc_chude.MaCD = giasu_chude.MaCD 
            WHERE lophoc_chude.MaLop = lophoc.MaLop 
            AND giasu_chude.MaGS = '$idTutor'
        )";


        echo $class;
    }

    $stmt = $conn->prepare($class);
    $stmt->execute();
    $results = $stmt->get_result();


    // Đếm số lượng kết quả
    $total_results = $results->num_rows;

    // Tính toán số trang
    $total_pages = ceil($total_results / $items_per_page);


    // Thực hiện truy vấn SQL có phân trang sử dụng LIMIT và OFFSET
    $class .= ' LIMIT ' . $items_per_page . ' OFFSET ' . $offset;


    $stmt = $conn->prepare($class);
    $stmt->execute();
    $results = $stmt->get_result();

    ?>
    <!--main content-->
    <!-- main content -->
    <section class="home-category">
        <div class="container" style="padding-top:10px;">
            <div class="region region-content">
                <div id="block-system-main" class="block block-system">


                    <div class="content">
                        <div class="main-wrapper">
                            <div class="view view-nhom-hoc-chung view-id-nhom_hoc_chung view-display-id-page_3 view-dom-id-c292a4a0c10b88ef96c213d24bead50e" style="background-color:#fff; padding-bottom: 10px;">


                                <div class="view-header">
                                    <span>Lớp phù hợp với bạn</span>
                                </div>
                                <div class="bg-gradient-pink header-class-search">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-6 col-sx-12">
                                            <div class="page-classes-filters">
                                                <form action="" method="get" id="views-exposed-form-nhom-hoc-chung-page-3" accept-charset="UTF-8">
                                                    <div>
                                                        <div class="views-exposed-form">
                                                            <div class="views-exposed-widgets clearfix">
                                                                <div id="edit-place-wrapper" class="views-exposed-widget views-widget-filter-field_place_tid">
                                                                    <div class="views-widget">
                                                                        <div class="form-item form-type-select form-item-place">
                                                                            <select id="edit-place" name="place" class="form-select">
                                                                                <option value="" selected="selected">- Chọn địa điểm -</option>
                                                                                <optgroup label="Địa điểm phổ biến">
                                                                                    <option value="Hà Nội" <?= (isset($city) && $city == 'Hà Nội') ? 'selected' : '' ?>>Hà Nội</option>
                                                                                    <option value="Hồ Chí Minh" <?= (isset($city) && $city == 'Hồ Chí Minh') ? 'selected' : '' ?>>Hồ Chí Minh</option>
                                                                                    <option value="Hải Phòng" <?= (isset($city) && $city == 'Hải Phòng') ? 'selected' : '' ?>>Hải Phòng</option>
                                                                                    <option value="Đà Nẵng" <?= (isset($city) && $city == 'Đà Nẵng') ? 'selected' : '' ?>>Đà Nẵng</option>
                                                                                    <option value="Cần Thơ" <?= (isset($city) && $city == 'Cần Thơ') ? 'selected' : '' ?>>Cần Thơ</option>

                                                                                </optgroup>
                                                                                <optgroup id="other_province" label='Tỉnh, thành phố khác'>


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="edit-subject-wrapper" class="views-exposed-widget views-widget-filter-field_subject_tid">
                                                                    <div class="views-widget">
                                                                        <div class="form-item form-type-select form-item-subject">
                                                                            <select name="subject_class" id="subject-class" class="form-select">
                                                                                <option value="" selected="selected">Chọn môn học</option>
                                                                                <?php
                                                                                $typeSubjects = 'SELECT * FROM monhoc';
                                                                                $stmt = $conn->prepare($typeSubjects);
                                                                                $stmt->execute();
                                                                                $result = $stmt->get_result();
                                                                                echo '<optgroup label="Môn học phổ thông">';
                                                                                for ($i = 0; $i < 9; $i++) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $selected = ($subject == $row['MaMH']) ? 'selected' : '';
                                                                                    echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                                                }

                                                                                echo '</optgroup>';
                                                                                echo '<optgroup label="Ngoại ngữ">';
                                                                                for ($i = 10; $i < 17; $i++) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $selected = ($subject == $row['MaMH']) ? 'selected' : '';
                                                                                    echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                                                }
                                                                                echo '</optgroup>';
                                                                                echo '<optgroup label="Học nghề">';
                                                                                for ($i = 17; $i < 24; $i++) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $selected = ($subject == $row['MaMH']) ? 'selected' : '';
                                                                                    echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                                                }
                                                                                echo '</optgroup>';
                                                                                echo '<optgroup label="Thể thao - Nghệ thuật">';
                                                                                for ($i = 24; $i < 30; $i++) {
                                                                                    $row = $result->fetch_assoc();
                                                                                    $selected = ($subject == $row['MaMH']) ? 'selected' : '';
                                                                                    echo "<option value='{$row['MaMH']}' {$selected} >{$row['TenMH']}</option>";
                                                                                }
                                                                                echo '</optgroup>';
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="edit-topic-wrapper" class="views-exposed-widget views-widget-filter-field_study_topic_tid">
                                                                    <div class="views-widget">
                                                                        <div class="form-item form-type-select form-item-topic">
                                                                            <select id="edit-topic" name="topic" class="form-select">
                                                                                <option value="" selected="selected">-Chọn chủ đề-</option>
                                                                                <?php
                                                                                if (isset($subject)) {
                                                                                    $listTags = 'SELECT * FROM chude WHERE chude.MaMH = ?';
                                                                                    $stmt->prepare($listTags);
                                                                                    $stmt->bind_param('i', $subject);
                                                                                    $stmt->execute();
                                                                                    $result = $stmt->get_result();
                                                                                    while ($row = $result->fetch_assoc()) {
                                                                                        $selected = ($tag == $row['MaCD']) ? 'selected' : '';
                                                                                        echo "<option value='{$row['MaCD']}' {$selected} >{$row['TenCD']}</option>";
                                                                                    }
                                                                                }
                                                                                ?>


                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="edit-method-wrapper" class="views-exposed-widget views-widget-filter-field_teaching_type_value">
                                                                    <div class="views-widget">
                                                                        <div class="form-item form-type-select form-item-method">
                                                                            <select id="edit-method" name="method" class="form-select">
                                                                                <option value="" selected="selected">-Hình thức dạy-</option>
                                                                                <?php
                                                                                $typeTeaches = 'SELECT * FROM hinhthuc';
                                                                                $stmt = $conn->prepare($typeTeaches);
                                                                                $stmt->execute();
                                                                                $result = $stmt->get_result();
                                                                                while ($row = $result->fetch_assoc()) {
                                                                                    $selected = ($typeTeach == $row['MaHT']) ? 'selected' : '';
                                                                                    echo "<option value='{$row['MaHT']}' {$selected} >{$row['TenHT']}</option>";
                                                                                }

                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="views-exposed-widget views-submit-button">
                                                                    <input type="submit" id="edit-submit-nhom-hoc-chung" name="search-class" value="Áp dụng" class="form-submit" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="p-search-class-message">
                                                <?php
                                                if (isset($total_results) && ($total_results > 0)) {
                                                    echo "Có " . $total_results . " kết quả";
                                                    echo '<i class="fa fa-map-marker" style="padding-left:10px;color:#069d86;"></i>';
                                                    echo '<a href="/class-map">Bản đồ vị trí lớp mới</a>';
                                                    echo '<p style="color: #000;">Bạn có thể tham gia nhận lớp tại nhóm Facebook: CỘNG ĐỒNG GIA SƯ BLACASA</p>';
                                                } else {
                                                    echo 'Không tìm thấy kết quả nào!';
                                                }
                                                ?>

                                            </div><!-- /.messenger-search -->

                                        </div>
                                        <div class="col-md-4 col-sm-6 col-sx-12 text-center" style="display: none;">
                                            <div id="fb-root"></div>
                                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1956458134667534&autoLogAppEvents=1" nonce="Cq6AFE29"></script>
                                            <div class="fb-group" data-href="https://www.facebook.com/groups/245946626989919" data-width="300" data-show-metadata="false">
                                                <blockquote cite="https://www.facebook.com/groups/245946626989919" class="fb-xfbml-parse-ignore">CỘNG ĐỒNG GIA SƯ BLACASA</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="view-content" style="display: <?= (isset($total_results) && ($total_results > 0)) ? '' : 'none' ?>;">

                                    <div class="row-tittle hidden-xs ">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <div class="row-request-1">
                                                    <h3>NGƯỜI ĐĂNG</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <div class="row-request-2">
                                                    <h3>NỘI DUNG LỚP HỌC TÌM GIA SƯ</h3>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2">
                                                <div class="row-request-3">
                                                    <h3>HỌC PHÍ ĐỀ NGHỊ</h3>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-2 col-sm-2">
                                                <div class="row-request-4">
                                                    <h3>PHÍ NHẬN LỚP</h3>
                                                </div>
                                            </div> -->

                                        </div>

                                    </div>

                                    <div class="modal fade" id="modalMaps" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="min-height: 300px;">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                                    <h4 class="modal-title" id="memberModalLabelMaps" style="font-style: italic;"></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div id="map" style="width: 100%;height: 300px;"></div>
                                                    <div id="infowindow-content">
                                                        <span id="place-name" class="title"></span><br>
                                                        <a href="" id="place-address" target="blank"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php



                                    while ($row = $results->fetch_assoc()) {

                                    ?>

                                        <div class="row-request bla-common-shadow">
                                            <div class="one-row-class ">

                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2">
                                                        <div class="row-request-1">
                                                            <p style="height:50px;">
                                                                <img typeof="foaf:Image" src="../assets/img/<?= (empty($row['AnhDaiDien'])) ? 'default_user.png' : 'img_student/' . $row['AnhDaiDien'] ?>" width="50" height="50" alt="" />
                                                            </p>

                                                            <p class="creator-name"><a href="/blacasa-cskh-02"><?= $row['HoTen'] ?></a></p>
                                                            <p class="created-date"><?php
                                                                                    $dateTime = new DateTime($row['ThoiGianDang']);
                                                                                    $date = $dateTime->format('d-m-Y');

                                                                                    // In ra ngày
                                                                                    echo $date ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="row-request-2">
                                                            <h2 class="row-request-title">
                                                                <i class="fa fa-check" aria-hidden="true" style="font-size: 18px;color: #03ad03;margin-right: 2px;" title="Đã xác thực thông tin">
                                                                </i>
                                                                <a href="detail_class.php?view=<?= $row['MaLop'] ?>" target="_blank"><?= $row['TenLop'] ?></a>
                                                            </h2>

                                                            <p style="font-style: italic;"><?= limitWords($row['NoiDung'], 35) ?></p>
                                                            <span class="group-span"><?= $row['TenMH'] ?></span>
                                                            <span class="group-span"><?= $row['TenHT'] ?></span>
                                                            <span class="group-span"><?= $row['Tinh_TP'] ?></span>
                                                            <!-- <span class="showMap" title="Khoảng cách từ bạn tới lớp này, bấm để xem.">

                                                                <i class="fa fa-map-marker"></i>
                                                            </span> -->

                                                            <!--<span class="show-when-hover">
		  			</span>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2" style="align-content: center;">
                                                        <div class="row-request-3">
                                                            <span class="green-text" style="color:#FF961E;"><span style="font-size: 18px;font-weight:bold;color:#FF961E;">
                                                                    <?= $row['SoBuoiHoc1Tuan'] * $row['HocPhi1Buoi'] * 4 ?> VND/tháng</span> </span>
                                                            <p class="class-offer-number"><?php
                                                                                            $sql = 'SELECT * FROM ketnoigs_hv  
                                                                       WHERE MaLop = ?';
                                                                                            $stmt = $conn->prepare($sql);
                                                                                            $stmt->bind_param('i', $row['MaLop']);
                                                                                            $stmt->execute();
                                                                                            $result = $stmt->get_result();
                                                                                            $numberConnect = $result->num_rows;
                                                                                            echo $numberConnect . '/6 đề nghị'
                                                                                            ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-2" style=" align-content: center;">
                                                        <div class="row-request-4">
                                                            <!-- <p class="connect-fee connect-fee-price" style="color:#069D86;">
                                                                <span style="color: #4e4d4b;">Phí: </span>320,000 <span style="font-weight:normal!important;font-size:14px;">
                                                                    vnđ</span>
                                                            </p>
                                                            <span class="connect-fee-note">(Chỉ thu khi nhận được lớp
                                                                <a href="/chinh-sach-phi" target="_blank"><i class="fa fa-exclamation-circle fa-first"></i></a>)
                                                            </span> -->
                                                            <div class="action-group text-right show-when-hover">

                                                                <!--<div class="btn-data" data-object="" data-type="object">
					</div>-->
                                                                <!-- <a href="" class="btn-yellow btn ctools-use-modal">Đề Nghị Dạy</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    <?php } ?>


                                </div>
                                <h2 class="element-invisible">Pages</h2>
                                <?php
                                echo '<div class="item-list"><ul class="page">';
                                if ($page > 1) {
                                    $prev_link = 'class.php?page=' . ($page - 1);
                                    if (isset($_GET['search-class'])) {
                                        $prev_link .= '&search-class=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'];
                                    }
                                    echo '<li class="pager-first page-item"><a class="page-link-1" href="class.php?page=1';
                                    if (isset($_GET['search-class'])) {
                                        echo '&search-class=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'];
                                    }

                                    echo '"><<</a></li>';
                                    echo '<li class="pager-previous page-item"><a class="page-link-1" href="' . $prev_link . '"><</a></li>';
                                }
                                for ($i = 1; $i <= $total_pages; $i++) {
                                    $page_link = 'class.php?page=' . $i;
                                    if (isset($_GET['search-class'])) {
                                        $page_link .= '&search-class=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'];
                                    }

                                    echo '<li class="pager-item page-item' . ($page == $i ? ' active-item' : '') . '"><a class="page-link-1' . ($page == $i ? ' active-link' : '') . '" href="' . $page_link . '">' . $i . '</a></li>';
                                }
                                if ($page < $total_pages) {
                                    $next_link = 'class.php?page=' . ($page + 1);
                                    if (isset($_GET['search-class'])) {
                                        $next_link .= '&search-class=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'];
                                    }

                                    echo '<li class="pager-next page-item"><a class="page-link-1" href="' . $next_link . '">></a></li>';
                                    echo '<li class="pager-last page-item"><a class="page-link-1" href="class.php?page=' . $total_pages;
                                    if (isset($_GET['search-class'])) {
                                        echo '&search-class=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'];
                                    }

                                    echo '">>></a></li>';
                                }
                                echo '</ul></div>';



                                ?>


                            </div>
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                $('#memberModal').modal('show');

                                $("#popup-form-alert .popup-dismiss").click(function() {
                                    $("#popup-form-alert").hide();
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.home-category -->
    <!-- e: main content -->
    <?php include 'footer.php' ?>


</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const selectSubject = document.getElementById('subject-class');
        const subjectTag = document.getElementById('edit-topic');




        // Lấy danh sách các môn học và mã môn học tương ứng từ PHP và lưu vào đối tượng subjectNameMapping

        selectSubject.addEventListener('change', function() {
            // Lấy giá trị mới của select
            const selectedValue = this.value;
            console.log(selectedValue);

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

                    subjectTag.innerHTML = '<option value="" selected="selected">-Chọn chủ đề-</option>';
                    topics.forEach(function(topic) {

                        subjectTag.innerHTML += `<option value="${topic.MaCD}"> ${topic.TenCD}</option>`;
                    });
                    console.log(subjectTag);

                }
            };
        });

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tinhThanhOtpgroup = document.getElementById('other_province');
        const cityName = <?= isset($city) ? json_encode($city) : "''" ?>;

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
                        // if (option.textContent == city) option.selected = true;
                        if (option.value == cityName) option.selected = true;

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
    });
</script>

</html>