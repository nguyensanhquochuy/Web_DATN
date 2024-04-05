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
</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->
    <div id="wrapHeadBlock">
        <div class="container">
            <div class="">
                <!--Ảnh cover-->
                <section class="profile-cover">
                    <div class="cover" style="background-image: url('/sites/all/themes/blacasa/images/default/cover2.jpg')">
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
                                        <a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG"><img id="show-avatar" typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/avatar_176_176/public/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG" width="176" height="176" alt="" /></a>
                                    </div>
                                    <div class="box-avatar">
                                        <input type="file" name="edit_avatar" class="inputfile_avt" id="edit_avatar" onchange="return ajax_update_image('edit_avatar','show-avatar',624,'/ajax-update-image/avatar/66604')">
                                        <label for="edit_avatar"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                            </svg> <span>Upload&hellip;</span></label>
                                    </div>

                                </div>
                                <div class="point wRole">
                                    <div class="icon" style="background-color:gray;" title="Chưa được xác nhận">
                                        <i class="fa fa-question" aria-hidden="true" style=" font-size:18px;padding-top:5px;"></i>
                                    </div>
                                    <span>Gia sư chưa duyệt</span>

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
                                        <a href="https://www.blacasa.vn/huy-nguyen-080324">Huy Nguyen</a>
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
                            <div class="headblockSecond">
                                <span class="spanArea mr-15"><i class="fa fa-book"></i>
                                    Toán, Lý, Hóa, Văn </span>
                                <!--							
									<div class="spanArea price"><i class="fa fa-tag"></i>
                                             200,000 vnđ/h                                        </div>
										-->


                            </div>

                            <!--Place, teaching type: only for teacher-->
                            <div class="headblockSecond">
                                <a class="spanArea mr-15" href="#map">
                                    <i class="fa fa-map-marker"></i>
                                    Bình Thuận
                                </a>
                                <span class="spanArea mr-15"><i class="fa fa-briefcase""></i> 
                                                   Dạy gia sư, Dạy online                                          </span>										
                </div>
																
								<!--Statistic: Thống kê-->
                <div class=" headblockThird">
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
                                    <h2>THÔNG TIN GIA SƯ</h2>
                                </div>
                                <div class="body-block">
                                    <h3>Giới thiệu chung và kinh nghiệm gia sư, giảng dạy</h3>
                                    <p>
                                        hỏi han </p>

                                    <h3>Chủ đề dạy</h3>
                                    <ul class="group-tag">
                                        <li>
                                            <p>Toán cấp 3</p>
                                        </li>
                                        <li>
                                            <p>Lý ôn thi đại học</p>
                                        </li>
                                        <li>
                                            <p>Hóa ôn thi đại học</p>
                                        </li>
                                        <li>
                                            <p>Văn ôn thi đại học</p>
                                        </li>
                                    </ul>

                                    <h3>Gia sư đang là</h3>
                                    <div class="kieu-giao-vien">
                                        <label>
                                            Giáo viên </label>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Hien thi lớp đã dạy -->





                    <!-- Lịch dạy -->
                    <div id="lich-day">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2>LỊCH DẠY GIA SƯ</h2>
                                </div>
                                <div class="body-block block-calender">
                                    <div class='row-calendar'>
                                        <h3>Thứ 2</h3>
                                        <ul>
                                            <li class='calendar-active'>SÁNG</li>
                                            <li class='calendar-normal'>CHIỀU</li>
                                            <li class='calendar-normal'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Thứ 3</h3>
                                        <ul>
                                            <li class='calendar-normal'>SÁNG</li>
                                            <li class='calendar-active'>CHIỀU</li>
                                            <li class='calendar-normal'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Thứ 4</h3>
                                        <ul>
                                            <li class='calendar-normal'>SÁNG</li>
                                            <li class='calendar-normal'>CHIỀU</li>
                                            <li class='calendar-active'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Thứ 5</h3>
                                        <ul>
                                            <li class='calendar-normal'>SÁNG</li>
                                            <li class='calendar-active'>CHIỀU</li>
                                            <li class='calendar-active'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Thứ 6</h3>
                                        <ul>
                                            <li class='calendar-normal'>SÁNG</li>
                                            <li class='calendar-active'>CHIỀU</li>
                                            <li class='calendar-normal'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Thứ 7</h3>
                                        <ul>
                                            <li class='calendar-active'>SÁNG</li>
                                            <li class='calendar-active'>CHIỀU</li>
                                            <li class='calendar-normal'>TỐI</li>
                                        </ul>
                                    </div>
                                    <div class='row-calendar'>
                                        <h3>Chủ nhật</h3>
                                        <ul>
                                            <li class='calendar-active'>SÁNG</li>
                                            <li class='calendar-normal'>CHIỀU</li>
                                            <li class='calendar-normal'>TỐI</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Bản đồ vị trí-->
                    <div id="map">
                        <div class="list-categories">
                            <div class="gblock-v2">
                                <div class="header-block">
                                    <h2>BẢN ĐỒ VỊ TRÍ GIA SƯ</h2>
                                </div>
                                <div class="body-block block-calender" style="padding:0;">
                                    <p style="padding-top:20px;font-size:16px;"><b>Địa chỉ:</b> 435Q+7MJ, Hàm Phú, Hàm Thuận Bắc, Bình Thuận</p>
                                    <span id="storage-latlon" data-variable-one="21.0277644" data-variable-two="105.8341598"></span>
                                    <iframe class="iframe-map" width="100%" height="350px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8
											&q=21.0277644,105.8341598											&zoom=13&maptype=roadmap" allowfullscreen>
                                    </iframe>


                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Hình ảnh -->
                    <div id="hinh-anh">
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


                </div>
            </div>
    </section>

    <?php include 'footer.php' ?>


</body>

</html>