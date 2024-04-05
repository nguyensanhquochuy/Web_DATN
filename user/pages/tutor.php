<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
    include 'config.php';
    session_start();
    $sql = 'SELECT * FROM giasu
    JOIN monhoc ON giasu.MaMH = monhoc.MaMH' ;
    $stmt = $conn->prepare($sql);
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
                                            <form action="/teacher" method="get" id="views-exposed-form-users-page-2" accept-charset="UTF-8">
                                                <div>
                                                    <div class="views-exposed-form">
                                                        <div class="views-exposed-widgets clearfix">
                                                            <div id="edit-place-wrapper" class="views-exposed-widget views-widget-filter-field_place_tid">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-place">
                                                                        <select id="edit-place" name="place" class="form-select">
                                                                            <option value="All" selected="selected">- Chọn địa điểm -</option>
                                                                            <optgroup label="Địa điểm phổ biến">
                                                                                <option value="1">Hà Nội</option>
                                                                                <option value="2">Hồ Chí Minh</option>
                                                                                <option value="10">Hải Phòng</option>
                                                                                <option value="3">Đà Nẵng</option>
                                                                                <option value="11">Cần Thơ</option>
                                                                            </optgroup>
                                                                            <optgroup label="Tỉnh, thành phố khác">
                                                                                <option value="17">An Giang</option>
                                                                                <option value="18">Bà Rịa-Vũng Tàu</option>
                                                                                <option value="21">Bắc Giang</option>
                                                                                <option value="20">Bắc Kạn</option>
                                                                                <option value="19">Bạc Liêu</option>
                                                                                <option value="22">Bắc Ninh</option>
                                                                                <option value="23">Bến Tre</option>
                                                                                <option value="14">Bình Dương</option>
                                                                                <option value="25">Bình Phước</option>
                                                                                <option value="26">Bình Thuận</option>
                                                                                <option value="24">Bình Định</option>
                                                                                <option value="27">Cà Mau</option>
                                                                                <option value="28">Cao Bằng</option>
                                                                                <option value="29">Đắk Lắk</option>
                                                                                <option value="30">Đắk Nông</option>
                                                                                <option value="31">Điện Biên</option>
                                                                                <option value="13">Đồng Nai</option>
                                                                                <option value="32">Đồng Tháp</option>
                                                                                <option value="33">Gia Lai</option>
                                                                                <option value="34">Hà Giang</option>
                                                                                <option value="35">Hà Nam</option>
                                                                                <option value="36">Hà Tây cũ (Hà Nội)</option>
                                                                                <option value="37">Hà Tĩnh</option>
                                                                                <option value="38">Hải Dương</option>
                                                                                <option value="40">Hậu Giang</option>
                                                                                <option value="39">Hòa Bình</option>
                                                                                <option value="12">Thừa Thiên Huế</option>
                                                                                <option value="41">Hưng Yên</option>
                                                                                <option value="42">Khánh Hòa</option>
                                                                                <option value="43">Kiên Giang</option>
                                                                                <option value="44">Kon Tum</option>
                                                                                <option value="45">Lai Châu</option>
                                                                                <option value="48">Lâm Đồng</option>
                                                                                <option value="47">Lạng Sơn</option>
                                                                                <option value="46">Lào Cai</option>
                                                                                <option value="49">Long An</option>
                                                                                <option value="50">Nam Định</option>
                                                                                <option value="51">Ninh Bình</option>
                                                                                <option value="52">Ninh Thuận</option>
                                                                                <option value="16">Nghệ An</option>
                                                                                <option value="53">Phú Thọ</option>
                                                                                <option value="54">Phú Yên</option>
                                                                                <option value="55">Quảng Bình</option>
                                                                                <option value="56">Quảng Nam</option>
                                                                                <option value="57">Quảng Ngãi</option>
                                                                                <option value="58">Quảng Ninh</option>
                                                                                <option value="59">Quảng Trị</option>
                                                                                <option value="60">Sóc Trăng</option>
                                                                                <option value="61">Sơn La</option>
                                                                                <option value="62">Tây Ninh</option>
                                                                                <option value="63">Thái Bình</option>
                                                                                <option value="64">Thái Nguyên</option>
                                                                                <option value="15">Thanh Hóa</option>
                                                                                <option value="65">Tiền Giang</option>
                                                                                <option value="66">Trà Vinh</option>
                                                                                <option value="67">Tuyên Quang</option>
                                                                                <option value="68">Vĩnh Long</option>
                                                                                <option value="69">Vĩnh Phúc</option>
                                                                                <option value="70">Yên Bái</option>
                                                                            </optgroup>
                                                                            <optgroup label="International cities">
                                                                                <option value="141">Cities in Asia</option>
                                                                                <option value="146">Cities in Africa</option>
                                                                                <option value="145">Cities in Australia (Oceania)</option>
                                                                                <option value="142">Cities in Europe</option>
                                                                                <option value="143">Cities in North America</option>
                                                                                <option value="144">Cities in South America</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-subject-wrapper" class="views-exposed-widget views-widget-filter-field_subject_tid">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-subject">
                                                                        <select id="edit-subject" name="subject" class="form-select">
                                                                            <option value="All" selected="selected">- Chọn môn học -</option>
                                                                            <optgroup label="Môn học phổ thông">
                                                                                <option value="72">Toán</option>
                                                                                <option value="73">Lý</option>
                                                                                <option value="74">Hóa</option>
                                                                                <option value="76">Văn</option>
                                                                                <option value="677">Tiếng Việt</option>
                                                                                <option value="406">Lịch sử</option>
                                                                                <option value="407">Địa lý</option>
                                                                                <option value="81">Sinh</option>
                                                                                <option value="410">Môn phổ thông khác</option>
                                                                            </optgroup>
                                                                            <optgroup label="Ngoại ngữ">
                                                                                <option value="71">Tiếng Anh</option>
                                                                                <option value="82">Tiếng Nhật</option>
                                                                                <option value="83">Tiếng Hàn</option>
                                                                                <option value="85">Tiếng Đức</option>
                                                                                <option value="84">Tiếng Pháp</option>
                                                                                <option value="409">Tiếng Trung</option>
                                                                                <option value="86">Ngoại ngữ khác</option>
                                                                            </optgroup>
                                                                            <optgroup label="Học nghề">
                                                                                <option value="77">Kỹ năng mềm</option>
                                                                                <option value="404">Nuôi dạy trẻ</option>
                                                                                <option value="411">Công nghệ thông tin</option>
                                                                                <option value="412">Thiết kế - Đồ họa - Video</option>
                                                                                <option value="90">Sales - Marketing</option>
                                                                                <option value="682">Ẩm thực</option>
                                                                                <option value="95">Ngành nghề khác</option>
                                                                            </optgroup>
                                                                            <optgroup label="Thể thao - Nghệ thuật">
                                                                                <option value="97">Âm nhạc</option>
                                                                                <option value="99">Hội họa</option>
                                                                                <option value="101">Dance (nhảy)</option>
                                                                                <option value="78">Gyms, yoga, fitness</option>
                                                                                <option value="102">Thể thao khác</option>
                                                                                <option value="103">Nghệ thuật khác</option>
                                                                            </optgroup>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-topic-wrapper" class="views-exposed-widget views-widget-filter-field_study_topic_tid">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-topic">
                                                                        <select id="edit-topic" name="topic" class="form-select">
                                                                            <option value="All" selected="selected">-Chọn chủ đề-</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-method-wrapper" class="views-exposed-widget views-widget-filter-field_teaching_type_value">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-method">
                                                                        <select id="edit-method" name="method" class="form-select">
                                                                            <option value="All" selected="selected">-Hình thức dạy-</option>
                                                                            <option value="0">(Offline) Gặp mặt</option>
                                                                            <option value="1">(Online) Trực tuyến</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-gender-wrapper" class="views-exposed-widget views-widget-filter-field_sex_value">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-gender">
                                                                        <select id="edit-gender" name="gender" class="form-select">
                                                                            <option value="All" selected="selected">-Giới tính-</option>
                                                                            <option value="0">Nữ</option>
                                                                            <option value="1">Nam</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="edit-teacher-type-wrapper" class="views-exposed-widget views-widget-filter-field_teacher_type_value">
                                                                <div class="views-widget">
                                                                    <div class="form-item form-type-select form-item-teacher-type">
                                                                        <select id="edit-teacher-type" name="teacher-type" class="form-select">
                                                                            <option value="All" selected="selected">-Chọn kiểu-</option>
                                                                            <option value="1">Sinh viên</option>
                                                                            <option value="3">Giáo viên</option>
                                                                            <option value="2">Người đi làm</option>
                                                                            <option value="8">Chuyên gia</option>
                                                                            <option value="9">Người nước ngoài</option>
                                                                            <option value="0">Học sinh</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="views-exposed-widget views-submit-button">
                                                                <input type="submit" id="edit-submit-users" name="" value="Áp dụng" class="form-submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="view-user-page2-filter ">

                                            <!--Cout số kết quả-->
                                            <div style="padding: 0 0 10px;font-size: 16px; color: #970218;">
                                                Có 21510 kết quả
                                                <i class="fa fa-map-marker" style="padding-left:10px;color: #069d86;"></i>
                                                <a href="/teacher-map">Xem bản đồ</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--if not empty, then show order by-->
                                    <div class="header-block">
                                        <button class="visible-xs"><i class="fa fa-list"></i></button>
                                        <ul class="nav nav-tabs pull-left">
                                            <li class="active">
                                                <a href="/teacher">Đúng nhất</a>
                                            </li>
                                            <li class="">
                                                <a href="/teacher?orderby=review">Đánh giá tốt nhất</a>
                                            </li>
                                            <li class="">
                                                <a href="/teacher?orderby=view">Xem nhiều nhất</a>
                                            </li>
                                            <li class="">
                                                <a href="/teacher?orderby=price">Học phí tốt nhất</a>
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
                                                                                <img typeof="foaf:Image" src="../assets/img/img_tutor/<?= $row['AnhDaiDien']?>" width="312" height="200" alt="pham-minh-khue-280123's picture" title="pham-minh-khue-280123's picture">
                                                                            </a>
                                                                        </div>
                                                                        <div class="name">
                                                                            <h4><a href="/pham-minh-khue-280123"><?= $row['HoTen']?></a></h4>
                                                                            <p><span><?= $row['Tinh_TP']?></span> |
                                                                                <span class="mon-hoc"><?= $row['TenMH']?> </span>
                                                                            </p>
                                                                            <p class="cost">
                                                                                <span> </span>

                                                                            </p>

                                                                            <span class="number not-review">.</span>
                                                                        </div><!-- /.name -->

                                                                        <div class="description">
                                                                            <div class="view"><?= $row['MoTa']?> </div>
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
                                    <div class="item-list">
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
                                    </div>
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

</html>