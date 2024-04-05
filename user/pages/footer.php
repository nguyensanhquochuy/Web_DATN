<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
// session_start();
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
    <!--OK: FOOTER AREA USED IN ALL PAGES -->
    <footer id="footer-main" class="bla-animation-container" style="position:relative">
        <img class="global-img" src="/sites/all/themes/blacasa/images/home/global-image.png" alt="">
        <section class="footer-main-menu py-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="list-links">
                            <h4 class="d-none">Blacasa JSC.</h4>
                            <div class="mb-3 d-flex flex-column">
                                <img src="/sites/all/themes/blacasa/images/logo-blacasa-white.png" width="100%" style="max-width:250px;">
                                <div class="font-weight-bold mt-2" style="font-size:16px;">Công ty cổ phần Blacasa Việt Nam</div>
                            </div>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-phone mr-2" style="font-size:16px; min-width:20px;"></i>
                                    <div>
                                        <a href="tel:0989704869">0989.704.869</a></br>
                                        <a href="tel:1900636342">1900.63.63.42</a>
                                    </div>
                                </li>
                                <li><i class="fa fa-envelope mr-2" style="font-size:16px; min-width:20px;"></i><a href="mailto:contact@blacasa.vn">contact@blacasa.vn</a></li>
                                <li class="d-flex align-items-center">
                                    <i class="fa fa-map-marker mr-2" style="font-size:16px; min-width:20px;"></i>
                                    <div>
                                        <a href="#" rel="nofollow" target="_blank">Toà nhà Blacasa, 92/5 Láng Hạ, Đống Đa, Hà Nội</a>
                                    </div>
                                </li>
                                <li><i class="fa fa-paper-plane mr-2" style="font-size:16px; min-width:20px;"></i><a href="javascript:" class="btnPopupRegister">Gửi liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="list-links">
                            <h4>Về Blacasa</h4>
                            <ul>
                                <li><a href="/gioi-thieu">Giới thiệu Blacasa</a></li>
                                <li><a href="/jobs">Tuyển dụng</a></li>
                                <li><a href="/gioi-thieu#partner">Hợp tác & đầu tư</a></li>
                                <li><a href="/bai-viet/du-an-cong-dong">Các dự án xã hội</a></li>
                            </ul>
                        </div>
                        <div class="list-links">
                            <h4>Quy định</h4>
                            <ul>
                                <li><a href="/terms-of-use" rel="nofollow">Quy định MXH</a></li>
                                <li><a href="/quy-dinh-su-dung-san-giao-dich-tmdt" rel="nofollow">Quy định sàn TMĐT</a></li>
                                <li><a href="/privacy-policy" rel="nofollow">Bảo mật thông tin</a></li>
                                <li><a href="/site-map">Sơ đồ trang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="list-links">
                            <h4>Bạn đang muốn</h4>
                            <ul>
                                <li><a href="/lp/tro-ly-hoc-tap-bmentor" target="_blank">Dịch vụ gia sư</a></li>
                                <li><a href="javascript:" class="btnPopupRegister">Đăng ký tư vấn</a></li>
                                <li><a href="/affiliate">Chương trình affiliate</a></li>
                                <li><a href="/invite-friend">Giới thiệu bạn bè</a></li>
                            </ul>
                        </div>
                        <div class="list-links">
                            <h4>Dành cho gia sư</h4>
                            <ul>
                                <li><a href="/class">Danh sách lớp mới</a></li>
                                <li><a href="/dang-ky-gia-su">Trở thành gia sư</a></li>
                                <li><a href="/support">Hướng dẫn sử dụng</a></li>
                                <li><a href="/become-teacher">Hướng dẫn nhận lớp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="list-links">
                            <h4>Ứng dụng BMentor</h4>
                            <div>
                                <i class="fa fa-hashtag mr-1"></i>Quản lý lớp học <i class="fa fa-hashtag mr-1 ml-2"></i>Kiến thức giáo dục
                            </div>
                            <div class="d-flex pt-2 pb-1">
                                <a href="https://apps.apple.com/vn/app/bmentor/id1473912512" class="footer-mobile-app-ios mr-1" rel="nofollow" target="_blank"></a>
                                <a href="https://play.google.com/store/apps/details?id=com.bmentor" class="footer-mobile-app-google-play" rel="nofollow" target="_blank"></a>
                            </div>
                        </div>
                        <div class="list-links">
                            <h4>Kết nối với Blacasa</h4>
                            <div>
                                <i class="fa fa-hashtag mr-1"></i>Thông tin hay <i class="fa fa-hashtag mr-1 ml-2"></i>Ưu đãi <i class="fa fa-hashtag mr-1  ml-2"></i>Quà tặng
                            </div>
                            <div class="footer-social pt-2">
                                <a href="https://www.facebook.com/BlacasaEducation/" target="_blank" class="facebook" rel="nofollow">facebook</a>
                                <a href="https://zalo.me/4166284432248305011" target="_blank" class="zalo" rel="nofollow">Zalo</a>
                                <a href="https://twitter.com/blacasavn" target="_blank" class="twitter" rel="nofollow">twitter</a>
                                <a href="https://www.youtube.com/c/BlacasaEducation" target="_blank" class="youtube" rel="nofollow">youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer-main-copyright pb-4">
            <div class="container">
                <div class="row pt-4" style="border-top:1px solid #fff;">
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="copy-text">
                            <div class="font-weight-bold">Bản quyền thuộc Blacasa Việt Nam &copy; 2024</div>
                            <p>
                                Mã số doanh nghiệp: 0107721396 do Sở Kế Hoạch và Đầu Tư Thành phố Hà Nội cấp lần đầu ngày 09/02/2017, thay đổi lần cuối ngày 26/07/2019.<br />
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="font-weight-bold">Giấy phép con</div>
                        <ul>
                            <li><a href="#" onClick="return false;">MXH 154/GP-BTTTT</a></li>
                            <li><a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=41413" rel="nofollow" target="_blank">SGD 2018-0040/ĐK/TMĐT</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <a href="//www.dmca.com/Protection/Status.aspx?ID=0fefdd6c-cf49-4e5f-af20-1091349d7407" title="DMCA.com Protection Status" class="dmca-badge dmca-badge-img" rel="nofollow" target="_blank"> </a>
                        <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" defer> </script>
                        <a style="display: inline-block;" href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=41413" rel="nofollow" target="_blank" class="footer-bct-register" title="đăng ký thương mại điện tử">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </footer>
    <!--END FOOTER AREA-->
    <div id="bla-ScrollUp" class="orange-color" style="display: block;">
        <i class="fa fa-angle-up"></i>
    </div>
    <div id="modalRegister" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-bla-blue text-white m-0" style="padding:20px 15px 0 15px!important;">
                    <h3 id="modalRegister_title">ĐĂNG KÝ TƯ VẤN MIỄN PHÍ</h4>
                        <button type="button" class="text-white" style="background:unset;border:none" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body p-3" style="background: url(/sites/all/themes/blacasa/images/home/bg-form.jpeg);background-position: center center;background-repeat: no-repeat;background-size: cover;">
                    <div class="form-register-now">
                        <form id="register-form-popup" method="post" action="/send-form-api-crm" class="GTM-FormDangKy">
                            <div class="row">
                                <div class="form-group col-lg-6 mb-4 col-md-12">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="(*) Tên bạn" required>
                                </div>
                                <div class="form-group col-lg-6 mb-4 col-md-12">
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="(*) Điện thoại" required>
                                </div>
                                <div class="form-group col-lg-6 mb-4 col-md-12">
                                    <select class="form-control" name="place">
                                        <option value="">-Tỉnh/thành phố (*)-</option>
                                        <optgroup label="Các thành phố lớn">
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Tp. Hồ Chí Minh">Tp. Hồ Chí Minh</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Bình Dương">Bình Dương</option>
                                        </optgroup>
                                        <optgroup label="Tất cả các thành phố">
                                            <option value="An Giang">An Giang</option>
                                            <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                            <option value="Bình Dương">Bình Dương</option>
                                            <option value="Bình Phước">Bình Phước</option>
                                            <option value="Bình Thuận">Bình Thuận</option>
                                            <option value="Bình Định">Bình Định</option>
                                            <option value="Bạc Liêu">Bạc Liêu</option>
                                            <option value="Bắc Giang">Bắc Giang</option>
                                            <option value="Bắc Kạn">Bắc Kạn</option>
                                            <option value="Bắc Ninh">Bắc Ninh</option>
                                            <option value="Bến Tre">Bến Tre</option>
                                            <option value="Cao Bằng">Cao Bằng</option>
                                            <option value="Cities in Africa">Cities in Africa</option>
                                            <option value="Cities in Asia">Cities in Asia</option>
                                            <option value="Cities in Australia">Cities in Australia</option>
                                            <option value="Cities in Europe">Cities in Europe</option>
                                            <option value="Cities in North America">Cities in North America</option>
                                            <option value="Cities in South America">Cities in South America</option>
                                            <option value="Cà Mau">Cà Mau</option>
                                            <option value="Cần Thơ">Cần Thơ</option>
                                            <option value="Gia Lai">Gia Lai</option>
                                            <option value="Hoà Bình">Hoà Bình</option>
                                            <option value="Hà Giang">Hà Giang</option>
                                            <option value="Hà Nam">Hà Nam</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Hà Tĩnh">Hà Tĩnh</option>
                                            <option value="Hưng Yên">Hưng Yên</option>
                                            <option value="Hải Dương">Hải Dương</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Hậu Giang">Hậu Giang</option>
                                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                            <option value="Khánh Hòa">Khánh Hòa</option>
                                            <option value="Kiên Giang">Kiên Giang</option>
                                            <option value="Kon Tum">Kon Tum</option>
                                            <option value="Lai Châu">Lai Châu</option>
                                            <option value="Long An">Long An</option>
                                            <option value="Lào Cai">Lào Cai</option>
                                            <option value="Lâm Đồng">Lâm Đồng</option>
                                            <option value="Lạng Sơn">Lạng Sơn</option>
                                            <option value="Nam Định">Nam Định</option>
                                            <option value="Nghệ An">Nghệ An</option>
                                            <option value="Ninh Bình">Ninh Bình</option>
                                            <option value="Ninh Thuận">Ninh Thuận</option>
                                            <option value="Phú Thọ">Phú Thọ</option>
                                            <option value="Phú Yên">Phú Yên</option>
                                            <option value="Quảng Bình">Quảng Bình</option>
                                            <option value="Quảng Nam">Quảng Nam</option>
                                            <option value="Quảng Ngãi">Quảng Ngãi</option>
                                            <option value="Quảng Ninh">Quảng Ninh</option>
                                            <option value="Quảng Trị">Quảng Trị</option>
                                            <option value="Sóc Trăng">Sóc Trăng</option>
                                            <option value="Sơn La">Sơn La</option>
                                            <option value="Thanh Hóa">Thanh Hóa</option>
                                            <option value="Thái Bình">Thái Bình</option>
                                            <option value="Thái Nguyên">Thái Nguyên</option>
                                            <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                            <option value="Tiền Giang">Tiền Giang</option>
                                            <option value="Trà Vinh">Trà Vinh</option>
                                            <option value="Tuyên Quang">Tuyên Quang</option>
                                            <option value="Tây Ninh">Tây Ninh</option>
                                            <option value="Vĩnh Long">Vĩnh Long</option>
                                            <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                            <option value="Yên Bái">Yên Bái</option>
                                            <option value="Điện Biên">Điện Biên</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Đắk Lắk">Đắk Lắk</option>
                                            <option value="Đắk Nông">Đắk Nông</option>
                                            <option value="Đồng Nai">Đồng Nai</option>
                                            <option value="Đồng Tháp">Đồng Tháp</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 mb-4 col-md-12">
                                    <input class="form-control" type="text" id="subject" name="subject" placeholder="(*) Môn học" required>
                                </div>
                                <div class="form-group col-lg-12 mb-4">
                                    <textarea class="form-control" id="message" name="note" placeholder="Nội dung muốn tư vấn tìm gia sư. VD: lớp, học lực" required=""></textarea>
                                </div>
                                <div onload="generate()" class="form-group col-lg-12 mb-5">
                                    <div id="captcha" class="inline">
                                        <input type="text" class="form-control" id="input-captcha" placeholder="Mã Captch" />
                                    </div>

                                    <div class="inline" onclick="generate()"><i class="fa fa-refresh" aria-hidden="true"></i></div>
                                    <div id="image-captcha" class="inline" selectable="False" style="border: 1px solid #ccc;    border-radius: 5px;padding: 3px 15px;font-size: 18px; color: #FF961E;"></div>

                                </div>
                            </div>
                            <div class="w-100 text-center btnSuccess">
                                <input type="hidden" name="source" value="blacasa.vn">
                                <input type="hidden" name="referral_code" value="">
                                <input type="hidden" name="action_location" value="blacasa.vn" />
                                <input type="hidden" name="product_code" value="BMENTOR_PHUHUYNH">
                                <input type="button" class="GTM-DangKyTuVan btn bg-bla-yellow text-white p-3 bla-border" value="GỬI ĐĂNG KÝ TƯ VẤN" onclick="formRegisterCRM('#register-form-popup');">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formRegisterCRM(idForm) {
            var url = $(idForm).attr("action");
            var captcha = document.querySelector(idForm + ' #image-captcha');
            if (captcha === null) {} else {
                var input_captcha = document.querySelector(idForm + ' #input-captcha').value;

                if (input_captcha != captcha.innerHTML) {
                    $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng nhập lại mã Captcha.</div>');
                    return false;
                }
            }


            $.ajax({
                type: 'POST',
                url: url,
                crossDomain: true,
                data: $(idForm).serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $(idForm + ' .form-group').removeClass('has-error');
                    $(idForm + ' .alert').remove();
                    $('body').append('<div class="page-loading"><div class="loader"></div></div>');
                },
                success: function(responseData) {
                    $('body .page-loading').remove();
                    responseData = JSON.parse(responseData);
                    if (responseData.status == 'input_empty') {
                        $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Vui lòng điền đầy đủ các thông tin bắt buộc có (*)</div>');
                    } else if (responseData.status == 'invalid') {
                        $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">Thông tin không hợp lệ!</div>');
                        var message_show = '';
                        $.each(responseData.errors, function(key, value) {
                            $(idForm + ' #input-' + key).addClass('has-error');
                            message_show = message_show + value + '<br>';
                        });
                        $(idForm + ' .btnSuccess').prepend('<div class="alert alert-danger">' + message_show + '</div>');
                    } else {
                        $(idForm + ' .btnSuccess').prepend('<div class="alert alert-success">Xin cảm ơn, thông tin của bạn đã được gửi thành công. Chúng tôi sẽ sớm liên hệ lại với bạn!</div>');
                        clearFormWhenSuccess(idForm);
                        dataLayer.push({
                            'event': 'FormDangKyReturnOk Trigger'
                        }); //send event to Google Tag Manager
                        $(idForm + ' .form-control').not(idForm + ' .form-control.my_btn').val('');
                    }
                },
                error: (error) => {
                    $('body .page-loading').remove();
                }
            });
        }

        function clearFormWhenSuccess(idForm) {
            $(idForm + " input[name='name']").val('');
            $(idForm + " input[name='phone']").val('');
            $(idForm + " input[name='subject']").val('');
            $(idForm + " textarea").val('');
            $(idForm + " option:selected").removeAttr("selected");
        }
    </script>
    <script>
        /*@Summary: click popup đăng ký*/
        $('.btnPopupRegister').click(function() {
            $('#modalRegister').modal('show');
            //dataLayer.push({'event':'FormDangKyReturnOk Trigger'});
        });
    </script>

    <!-- GOOGLE ANALYSIS Global site tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112538448-1"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //YOUR JQUERY CODE

            $('.slide-gia-su').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                },
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true
            });

        });
        $(".header-right a").click(function() {
            var $this = $(this),
                $toElement = $this.attr('data-page-to'),
                $offset = $(".clearfix").height(),
                $speed = 700;

            $('html, body').animate({
                scrollTop: $($toElement).offset().top - $offset
            }, $speed);
        });
        $(".icon-down").click(function() {
            var $this = $(this),
                $toElement = $this.attr('data-page-to'),
                $offset = $(".clearfix").height(),
                $speed = 700;

            $('html, body').animate({
                scrollTop: $($toElement).offset().top - $offset
            }, $speed);
        });
    </script>

    <span id="token-push-fb" style="display: none;"></span>

    <script type="text/javascript" src="../assets/js/jquery.bla-beauty-effect-libraries.min.js"></script>
    <script type="text/javascript" src="../assets/js/main.js"></script>
    <!-- <script type="text/javascript" src="../assets/js/contactus.js"></script> -->
</body>

</html>