<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();
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
        .p-home-section-title-left {
    font-size: 28px;
    padding-bottom: 5px;
    margin-top: 40px;
    line-height: 1.3;
    position: relative;
    text-transform: uppercase;
}
.content-section {
    padding-top: 25px;
}
.step-find-teacher {
    list-style: none;
    padding-left: 0px;
    padding-top: 20px;
}
.step-find-teacher .header-step {
    font-weight: bold;
}
body, html, p, span, h1, h2, h3, h4, h5, label {
    font-family: 'Open Sans', sans-serif !important;
}
.step-find-teacher li .step-number {
    background: #069d86;
    padding: 10px 15px;
    color: #fff;
    font-weight: bold;
    border-radius: 50%;
    margin-right: 10px;
}
.step-find-teacher .body-step {
    padding-left: 48px;
}
.p-home-section-title-left::after {
    border-radius: 10px;
    bottom: -2px;
    content: "";
    height: 2px;
    left: 0;
    position: absolute;
    width: 70px;
    background: #069d86;
}
    </style>
</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->
    <section class="p-static-banner p-4teacher-banner">
        <div class="p-static-banner-middle">
            <div class="container">
                <h1 style="font-weight: bold;">Bạn muốn tăng thu nhập?</h1>
                <p style="max-width:760px; font-size:20px; margin: 0px auto; margin-bottom: 30px;">
                    Nếu bạn <strong>có kiến thức</strong> để <strong>chia sẻ</strong> chưa trở thành gia sư trên Blacasa ngay hôm nay?
                    Rất NHANH và cực kỳ ĐƠN GIẢN
                </p>
                <div class="becom-teacher-action">
                    <!--TH1: đã đăng nhập-->
                    <a class="btn-bla-big btn-yellowblacasa popup-modal link-register register-teacher" href="#popup-form" title="Đăng ký">
                        ĐĂNG KÝ GIÁO VIÊN
                    </a>

                </div>
            </div>
        </div>
    </section>
    <section id="how-it-work" class="section-become-teacher" style="background: url(../assets/img/bg-wall.png)">
        <div class="container">
            <div class="row">
                <div class="head-section">
                    <h2 class="p-home-section-title-left">HƯỚNG DẪN NHẬN LỚP TRÊN TUTORCONNECTSTUDENT</h2>
                    <p style="padding-top: 15px;font-size: 16px;font-style: italic;">
                        Mục tiêu quan trọng nhất của Blacasa là tiết kiệm tối đa chi phí kết nối giữa giáo viên và học viên bằng cách tạo nền tảng để giáo viên kết nối trực tiếp với học viên không qua trung gian. Nó rất đơn giản với 4 bước sau:
                    </p>
                </div>
                <div class="content-section">
                    <ul class="step-find-teacher">
                        <li>
                            <p class="header-step"><span class="step-number">1</span>ĐĂNG KÝ GIÁO VIÊN</p>
                            <p class="body-step">
                                Để học viên tin tưởng năng lực của bạn, bạn cần đăng ký tài khoản gia sư và gửi các thông tin để chúng tôi duyệt hồ sơ. Quá trình duyệt sẽ kéo dài trong vòng 24 giờ. Bạn sẽ nhận được thông báo khi hồ sơ giáo viên được chấp nhận. Lưu ý, để dễ dàng nhận được lớp, hãy tạo hồ sơ của bạn thật hấp dẫn. Xem hướng dẫn <a href="https://www.blacasa.vn/gia-su-can-biet">tại đây</a>
                            </p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">2</span>GỬI ĐỀ NGHỊ DẠY</p>
                            <p class="body-step">
                                Gia sư có thể gửi lời đề nghị dạy tới các lớp học phù hợp trên hệ thống. Mỗi đề nghị dạy sẽ bao gồm học phí mà bạn mong muốn nhận được và một lời nhắn tới học viên rằng vì sao bạn phù hợp để nhận lớp này. Lưu ý: Hãy cập nhật hồ sơ của bạn thật chi tiết, đặc biệt là nơi ở của bạn và môn học – chủ đề môn học. Hệ thống sẽ tự động gợi ý cho bạn các lớp phù hợp nhất với bạn.
                            </p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">3</span>NẠP PHÍ NHẬN LỚP VÀ LIÊN HỆ HỌC VIÊN</p>
                            <p class="body-step">
                                Khi 1 lời đề nghị dạy được học viên chấp nhận, trong vòng 24h bạn phải nạp phí nhận lớp để chính thức nhận lớp.
                                Hệ thống sẽ cung cấp thông tin liên hệ của học viên cho bạn và bạn phải gọi điện cho học viên trong vòng 24h để
                                trao đổi với học viên về địa điểm, ngày giờ tới dạy. Trường hợp không thể liên lạc được với học viên, bạn phải
                                liên hệ lại ngay với Blacasa hoặc bấm nút “Hủy lớp” để nhận lại phí nhận lớp.
                            </p>
                        </li>
                        <li>
                            <p class="header-step"><span class="step-number">4</span>DẠY HỌC</p>
                            <p class="body-step">
                                Trong vòng 1 tuần kể từ khi đề nghị dạy được chấp nhận, gia sư sẽ tới dạy buổi đầu tiên, theo đúng những gì đã trao đổi với học viên. Khi đó, hệ thống sẽ xác nhận là kết nối hoàn thành và gia sư không có quyền hủy lớp nữa.
                            </p>
                        </li>
                    </ul>
                </div>
  
            </div>
        </div>
    </section>
    <?php include 'footer.php' ?>


</body>

</html>