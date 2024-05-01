<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();

// Xác định trang hiện tại
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Số lượng mục trên mỗi trang
$items_per_page = 2;

// Tính toán offset cho truy vấn SQL dựa trên trang hiện tại
$offset = ($page - 1) * $items_per_page;



$tutor = 'SELECT * FROM giasu WHERE (1=1) ';

if (isset($_GET['search-tutor'])) {
    $city = $_GET['place'];
    $subject = $_GET['subject_class'];
    $tag = $_GET['topic'];
    $typeTeach = $_GET['method'];
    $sex = $_GET['gender'];
    $typeTutor = $_GET['type-tutor'];

    if (!empty($city)) {
        $tutor .= " AND giasu.Tinh_TP = '$city'";
    }

    if (!empty($subject)) {
        $tutor .= " AND EXISTS (SELECT * FROM giasu_monhoc WHERE giasu_monhoc.MaGS = giasu.MaGS AND giasu_monhoc.MaMH = '$subject')";
    }
    if (!empty($tag)) {
        $tutor .= " AND EXISTS (SELECT * FROM giasu_chude WHERE giasu_chude.MaGS = giasu.MaGS AND giasu_chude.MaCD = '$tag')";
    }

    if (!empty($typeTeach)) {
        $tutor .= " AND giasu.MaHT = '$typeTeach'";
    }
    if (!empty($sex) || ($sex == '0')) {
        $tutor .= " AND giasu.GioiTinh = '$sex'";
    }
    if (!empty($typeTutor)) {
        $tutor .= " AND giasu.MaLoaiGS = '$typeTutor'";
    }
}

if (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') {
    $tutor .= ' ORDER BY giasu.HocPhi1H ASC';
}

if (isset($_GET['view']) && $_GET['view'] === 'view_desc') {
    $tutor .= ' ORDER BY giasu.LuotXem DESC';
}

$stmt = $conn->prepare($tutor);
$stmt->execute();
$results = $stmt->get_result();


// Đếm số lượng kết quả
$total_results = $results->num_rows;

// Tính toán số trang
$total_pages = ceil($total_results / $items_per_page);


// Thực hiện truy vấn SQL có phân trang sử dụng LIMIT và OFFSET
$tutor .= ' LIMIT ' . $items_per_page . ' OFFSET ' . $offset;


$stmt = $conn->prepare($tutor);
$stmt->execute();
$results = $stmt->get_result();





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
    <!--main content-->
    <section class="home-category">
        <div class="container" style="padding-top:10px;">
            <div class="region region-content">
                <div id="block-system-main" class="block block-system">
                    <div class="content">
                        <div class="main-wrapper">
                            <div class="view view-users view-id-users view-display-id-page_2 col-popover view-dom-id-5ad60871a191162e47d3059b2dbb53f7">
                                <div class="content-category fixed">
                                    <div class="view-user-page2-view-header">
                                        <span>Danh sách gia sư</span>
                                    </div>
                                    <!--filter-->
                                    <div class="bg-gradient-pink" style="padding:0 10px;">
                                        <div class="view-filters box-search">
                                            <form action="" method="get" id="views-exposed-form-users-page-2" accept-charset="UTF-8">
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
                                                                        <select name="subject_class" id="subject-class">
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
                                                            <div id="edit-gender-wrapper" class="views-exposed-widget views-widget-filter-field_sex_value">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-gender">
                                                                        <select id="edit-gender" name="gender" class="form-select">
                                                                            <option value="" selected="selected">-Giới tính-</option>
                                                                            <option value="0" <?= (isset($sex) && ($sex == '0') ? 'selected' : '') ?>>Nữ</option>
                                                                            <option value="1" <?= (isset($sex) && ($sex == 1) ? 'selected' : '') ?>>Nam</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-teacher-type-wrapper" class="views-exposed-widget views-widget-filter-field_teacher_type_value">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-teacher-type">
                                                                        <select id="edit-teacher-type" name="type-tutor" class="form-select">
                                                                            <option value="" selected="selected">-Chọn kiểu-</option>
                                                                            <?php
                                                                            $typeTutors = 'SELECT * FROM loaigs';
                                                                            $stmt = $conn->prepare($typeTutors);
                                                                            $stmt->execute();
                                                                            $result = $stmt->get_result();
                                                                            while ($row = $result->fetch_assoc()) {
                                                                                $selected = ($typeTutor == $row['MaLoaiGS']) ? 'selected' : '';
                                                                                echo "<option value='{$row['MaLoaiGS']}' {$selected} >{$row['TenLoaiGS']}</option>";
                                                                            }

                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="views-exposed-widget views-submit-button">
                                                                <input type="submit" id="edit-submit-users" name="search-tutor" value="Áp dụng" class="form-submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="view-user-page2-filter ">

                                            <!--Cout số kết quả-->
                                            <div style="padding: 0 0 10px;font-size: 16px; color: #970218;">
                                                Có <?= isset($total_results) ? $total_results : '0' ?> kết quả
                                                <i class="fa fa-map-marker" style="padding-left:10px;color: #069d86;"></i>
                                                <a href="/teacher-map">Xem bản đồ</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--if not empty, then show order by-->
                                    <div class="header-block">
                                        <button class="visible-xs"><i class="fa fa-list"></i></button>
                                        <ul class="nav nav-tabs pull-left">
                                            <li class="<?php echo  (isset($_GET['check']) && $_GET['check'] === 'true') ? 'active' : ''; ?>">
                                            <a href="tutor.php?page=1<?php
                                                                            if (isset($_GET['search-tutor'])) {
                                                                                echo '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                                                            }
                                                                            ?>&check=true">Đúng nhất</a>
                                            </li>
                                            <li class="">
                                                <a href="/teacher?orderby=review">Đánh giá tốt nhất</a>
                                            </li>
                                            <li class="<?php echo  (isset($_GET['view']) && $_GET['view'] === 'view_desc') ? 'active' : ''; ?>">
                                                <a href="tutor.php?page=1<?php
                                                                            if (isset($_GET['search-tutor'])) {
                                                                                echo '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                                                            }
                                                                            ?>&view=view_desc">Xem nhiều nhất </a>
                                            </li>
                                            <li class="<?php echo  (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') ? 'active' : ''; ?>">
                                                <a href="tutor.php?page=1<?php
                                                                            if (isset($_GET['search-tutor'])) {
                                                                                echo '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                                                            }
                                                                            ?>&sort=price_asc">Học phí tốt nhất</a>
                                            </li>
                                        </ul><!-- /.nav-tabs -->
                                    </div><!-- /.header-block -->

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                                            <div class="view view-users view-id-users view-display-id-page_2 col-popover view-dom-id-5ad60871a191162e47d3059b2dbb53f7">
                                                <div class="view-content">
                                                    <div class="row">
                                                        <?php
                                                        while ($row = $results->fetch_assoc()) {
                                                        ?>
                                                            <div class="col col-md-3 col-sm-6">
                                                                <div class="box-content">
                                                                    <div class="tile-v-12">
                                                                        <div class="img">
                                                                            <a href="https://www.blacasa.vn/pham-minh-khue-280123">
                                                                                <img typeof="foaf:Image" src="../assets/img/img_tutor/<?= $row['AnhDaiDien'] ?>" width="312" height="200" alt="pham-minh-khue-280123's picture" title="pham-minh-khue-280123's picture">
                                                                            </a>
                                                                        </div>
                                                                        <div class="name">
                                                                            <h4><a href="account.php?view_tutor=<?= $row['MaGS'] ?>"><?= $row['HoTen'] ?></a></h4>
                                                                            <p><span><?= $row['Tinh_TP'] ?></span> |
                                                                                <span class="mon-hoc">
                                                                                    <?php
                                                                                    $idTutor = $row['MaGS'];
                                                                                    if (isset($idTutor)) {
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

                                                                                    ?>

                                                                                </span>
                                                                            </p>
                                                                            <p class="cost">
                                                                                <span> </span>

                                                                            </p>

                                                                            <span class="number not-review">.</span>
                                                                        </div><!-- /.name -->

                                                                        <div class="description">
                                                                            <div class="view"><?= $row['MoTa'] ?> </div>
                                                                        </div><!-- /.description -->
                                                                        <div class="btn-bottom text-right">
                                                                            <div class="btn-data" data-object="64119" data-type="user"></div>
                                                                            <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                            <a href="/invitation-teacher/64119" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="64119" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                        </div>
                                                                    </div><!-- /.tile-v-12 -->
                                                                </div>

                                                            </div>
                                                        <?php
                                                        }
                                                        ?>


                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /#tab-1 -->
                                    </div><!-- /.tab-content -->

                                    <h2 class="element-invisible">Pages</h2>
                                    <!-- <div class="item-list">
                                        <ul class="pager">
                                            <li class="pager-first first"></li>
                                            <li class="pager-current">1</li>
                                            <li class="pager-item"><a title="Go to page 2" href="/teacher?page=1">2</a></li>
                                            <li class="pager-item"><a title="Go to page 3" href="/teacher?page=2">3</a></li>
                                            <li class="pager-item"><a title="Go to page 4" href="/teacher?page=3">4</a></li>
                                            <li class="pager-item"><a title="Go to page 5" href="/teacher?page=4">5</a></li>
                                            <li class="pager-ellipsis">…</li>
                                            <li class="pager-next"><a href="/teacher?page=1"> sau ›</a></li>
                                            <li class="pager-last last"><a href="/teacher?page=1792">cuối ››</a></li>
                                        </ul>
                                    </div> -->
                                    <?php
                                    // Đếm tổng số mục trong cơ sở dữ liệu
                                    // $total_items_sql = "SELECT COUNT(*) AS total FROM giasu";
                                    // $total_items_result = $conn->query($total_items_sql);
                                    // $total_items_row = $total_items_result->fetch_assoc();
                                    // $total_items = $total_items_row['total'];

                                    // // Tính số trang dựa trên tổng số mục và số lượng mục trên mỗi trang
                                    // $total_pages = ceil($total_items / $items_per_page);

                                    echo '<div class="item-list"><ul class="page">';
                                    if ($page > 1) {
                                        $prev_link = 'tutor.php?page=' . ($page - 1);
                                        if (isset($_GET['search-tutor'])) {
                                            $prev_link .= '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                        }
                                        echo '<li class="pager-first page-item"><a class="page-link-1" href="tutor.php?page=1';

                                        if (isset($_GET['search-tutor'])) {
                                            echo '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                        }
                                        if (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') {
                                            $prev_link .= '&sort=price_asc';
                                        }
                                        if (isset($_GET['check']) && $_GET['check'] === 'true') {
                                            $prev_link .= '&check=true';
                                        }
                                        if (isset($_GET['view']) && $_GET['view'] === 'view_desc') {
                                            $prev_link .= '&view=view_desc';
                                        }
                                        echo '"><<</a></li>';
                                        echo '<li class="pager-previous page-item"><a class="page-link-1" href="' . $prev_link . '"><</a></li>';
                                    }
                                    for ($i = 1; $i <= $total_pages; $i++) {
                                        $page_link = 'tutor.php?page=' . $i;
                                        if (isset($_GET['search-tutor'])) {
                                            $page_link .= '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                        }
                                        if (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') {
                                            $page_link .= '&sort=price_asc';
                                        }
                                        if (isset($_GET['check']) && $_GET['check'] === 'true') {
                                            $page_link .= '&check=true';
                                        }
                                        if (isset($_GET['view']) && $_GET['view'] === 'view_desc') {
                                            $page_link .= '&view=view_desc';
                                        }
                                        echo '<li class="pager-item page-item' . ($page == $i ? ' active-item' : '') . '"><a class="page-link-1' . ($page == $i ? ' active-link' : '') . '" href="' . $page_link . '">' . $i . '</a></li>';
                                    }
                                    if ($page < $total_pages) {
                                        $next_link = 'tutor.php?page=' . ($page + 1);
                                        if (isset($_GET['search-tutor'])) {
                                            $next_link .= '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                        }
                                        if (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') {
                                            $next_link .= '&sort=price_asc';
                                        }
                                        if (isset($_GET['check']) && $_GET['check'] === 'true') {
                                            $next_link .= '&check=true';
                                        }
                                        if (isset($_GET['view']) && $_GET['view'] === 'view_desc') {
                                            $next_link .= '&view=view_desc';
                                        }
                                        echo '<li class="pager-next page-item"><a class="page-link-1" href="' . $next_link . '">></a></li>';
                                        echo '<li class="pager-last page-item"><a class="page-link-1" href="tutor.php?page=' . $total_pages;
                                        if (isset($_GET['search-tutor'])) {
                                            echo '&search-tutor=1&place=' . $_GET['place'] . '&subject_class=' . $_GET['subject_class'] . '&topic=' . $_GET['topic'] . '&method=' . $_GET['method'] . '&gender=' . $_GET['gender'] . '&type-tutor=' . $_GET['type-tutor'];
                                        }
                                        if (isset($_GET['sort']) && $_GET['sort'] === 'price_asc') {
                                            echo '&sort=price_asc';
                                        }
                                        if (isset($_GET['check']) && $_GET['check'] === 'true') {
                                            echo '&check=true';
                                        }
                                        if (isset($_GET['view']) && $_GET['view'] === 'view_desc') {
                                            echo '&view=view_desc';
                                        }
                                        echo '">>></a></li>';
                                    }
                                    echo '</ul></div>';



                                    ?>
                                </div><!-- /.content-category -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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