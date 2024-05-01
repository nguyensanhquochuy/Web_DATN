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
    <script>
        $(document).ready(function() {
            $("#edit-submit--3").on("click", function() {
                let typeAcc = $("input[name='type_acc']:checked").val();
                if (typeAcc === undefined) {
                    typeAcc = 0;
                }
                let fullName = $("#edit-full-name").val();
                let email = $("#edit-email").val();
                let phoneNumber = $("#edit-phone-number").val();
                let passWord = $("#edit-pass").val();
                let errTypeAcc = $(".errTypeAcc");
                let errEmail = $(".errEmail");
                let errFullName = $(".errFullName");
                let errPhoneNumber = $(".errPhoneNumber");
                let errPassWord = $(".errPassWord");

                $.ajax({
                    url: "RegisterAcc.php",
                    method: "POST",
                    data: {
                        typeAcc: typeAcc,
                        email: email,
                        fullName: fullName,
                        phoneNumber: phoneNumber,
                        passWord: passWord
                    },
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        // Clear previous error messages
                        errTypeAcc.html("");
                        errEmail.html("");
                        errFullName.html("");
                        errPhoneNumber.html("");
                        errPassWord.html("");
                        console.log(response);

                        console.log(response.errorEmail);
                        // Check for specific errors and display messages
                        if (response.errorTypeAcc) {
                            errTypeAcc.html(response.errorTypeAcc);
                        }
                        if (response.errorEmail) {
                            errEmail.html(response.errorEmail);
                        }
                        if (response.errorFullName) {
                            errFullName.html(response.errorFullName);
                        }

                        if (response.errorPhoneNumber) {
                            errPhoneNumber.html(response.errorPhoneNumber);
                        }

                        if (response.errorPass) {
                            errPassWord.html(response.errorPass);
                        }

                        if (response.success) {
                            // acRegisterForm.css("display", "none");
                            // acSignInForm.css("display", "block");

                            location.reload();
                        }

                    },
                    error: function(xhr, status, error) {
                        console.log("Error in AJAX request:", status, error);
                    }
                });
            });
            $("#edit-submit--2").on("click", function() {

                let emailPhone = $("#edit-email-phone").val();
                let passLogin = $("#password_login_form").val();

                let errEmailPhone = $(".errEmailPhone");
                let errPassLogin = $(".errPassLogin");
                console.log(emailPhone)

                $.ajax({
                    url: "LoginAcc.php",
                    method: "POST",
                    data: {
                        emailPhone: emailPhone,
                        passLogin: passLogin
                    },
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        // Clear previous error messages
                        errEmailPhone.html("");
                        errPassLogin.html("");
                        console.log(response);
                        // Check for specific errors and display messages

                        if (response.errorEmailPhone) {
                            errEmailPhone.html(response.errorEmailPhone);
                        }

                        if (response.errorPassLogin) {
                            errPassLogin.html(response.errorPassLogin);
                        }

                        if (response.success) {
                            // acRegisterForm.css("display", "none");
                            // acSignInForm.css("display", "block");
                            location.reload();
                        }

                    },
                    error: function(xhr, status, error) {
                        console.log("Error in AJAX request:", status, error);
                    }
                });
            });
        });
    </script>

</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <!--customer chat-->
    <!--arcontact button: allin-->
    <div class="form-signin-signup mfp-bg mfp-hide"></div>
    <div class="form-signin-signup mfp-wrap mfp-auto-cursor mfp-hide" tabindex="-1" style="overflow: hidden auto;">
        <div class="mfp-container">
            <div class="mfp-content">
                <div id="popup-form" class="white-popup-block" style="width: 70%;">
                    <a class="popup-modal-dismiss" href="#">x</a>
                    <ul class="nav nav-tabs" id="tab-login">
                        <li id="form-login-tab1"><a data-toggle="tab" href="#login" class="active show">Đăng nhập</a></li>
                        <li id="form-login-tab2"><a data-toggle="tab" href="#register" class="">Đăng ký</a></li>
                    </ul>
                    <div class="tab-content tab-content-login">
                        <div id="login" class="tab-pane fade active show">
                            <div id="blacasa-login-form">
                                <div id="blacasa-account-login" accept-charset="UTF-8">
                                    <style>
                                        input[type=text],
                                        input[type=password] {
                                            border-radius: 8px;
                                        }
                                    </style>
                                    <div>
                                        <div id="form-login-messages"></div>
                                        <div class="form-item form-type-textfield form-item-email-phone">
                                            <label for="edit-email-phone">Email/Số ĐT </label>
                                            <input placeholder="Nhập email hoặc số điện thoại" type="text" id="edit-email-phone" name="email_phone" value="" size="60" maxlength="128" class="form-text">
                                            <div class="errEmailPhone" style="color: red;"></div>
                                        </div>

                                        <div class="form-item form-type-password form-item-pass">
                                            <label for="edit-pass--2">Mật khẩu </label>
                                            <input placeholder="Mật khẩu từ 6 đến 32 ký tự" id="password_login_form" type="password" name="pass" size="60" maxlength="128" class="form-text">
                                            <div class="errPassLogin" style="color: red;"></div>
                                        </div>
                                        <span class="">Bạn quên mật khẩu? </span>Nhấn vào <a id="forget-password-link" class="popup-modal" href="#forget-password">Đây</a><input type="hidden" name="form_build_id" value="form-bzHjkHdgUJhifx0OnoVM502FNUl35xOwUl_EyOLIPPw">
                                        <input type="hidden" name="form_id" value="blacasa_account_login">
                                        <div class="form-actions form-wrapper" id="edit-actions--2"><input type="submit" id="edit-submit--2" name="op" value="Đăng nhập" class="form-submit ajax-processed"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-login">
                                <ul>
                                    <li class="facebook-link-small">
                                        <a href="https://www.blacasa.vn/login-via-facebook?redirect=node/579" class="" title="Đăng nhập bằng Facebook">
                                            <div class="btn-login-facebook">
                                                <div class="facebook-btn-icon">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </div>
                                                <span class="btn-facebook-text">Đăng nhập bằng Facebook</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="google-link-small">
                                        <a href="https://www.blacasa.vn/login-via-google?redirect=node/579" class="" title="Đăng nhập bằng Google">
                                            <div class="login-google-btn">
                                                <div class="google-btn-all">
                                                    <div class="google-btn-wrapper">
                                                        <div class="google-btn-icon">
                                                            <div class="google-btn-logo" style="width: 18px; height: 18px;">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg">
                                                                    <g>
                                                                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                                        </path>
                                                                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                                                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                                        </path>
                                                                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                                        </path>
                                                                        <path fill="none" d="M0 0h48v48H0z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <span class="btn-google-text">
                                                            <span class="btn-google-text-login">
                                                                Đăng nhập bằng Google
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="register" class="tab-pane fade">
                            <div id="blacasa-register-form">
                                <div id="blacasa-account-register" accept-charset="UTF-8">
                                    <style>
                                        input[type=text],
                                        input[type=password] {
                                            border-radius: 8px;
                                        }
                                    </style>
                                    <div>
                                        <div id="form-register-messages"></div>
                                        <div class="form-item form-type-radios form-item-type-acc">
                                            <label for="edit-type-acc">Loại tài khoản <span class="form-required" title="This field is required.">*</span></label>
                                            <div id="edit-type-acc" class="form-radios">
                                                <div class="form-item form-type-radio form-item-type-acc">
                                                    <input type="radio" id="edit-type-acc-1" name="type_acc" value="2" class="form-radio"> <label class="option" for="edit-type-acc-1">Gia sư </label>
                                                </div>
                                                <div class="form-item form-type-radio form-item-type-acc">
                                                    <input type="radio" id="edit-type-acc-0" name="type_acc" value="3" class="form-radio"> <label class="option" for="edit-type-acc-0">Học viên </label>
                                                </div>
                                                <div class="errTypeAcc" style="color: red;"></div>
                                            </div>
                                        </div>
                                        <div class="form-item form-type-textfield form-item-full-name">
                                            <label for="edit-full-name">Họ tên <span class="form-required" title="This field is required.">*</span></label>
                                            <input placeholder="Nhập họ tên *(bắt buộc)" type="text" id="edit-full-name" name="full_name" value="" size="60" maxlength="128" class="form-text required">
                                            <div class="errFullName" style="color: red;"></div>
                                        </div>
                                        <div class="form-item form-type-textfield form-item-phone-number">
                                            <label for="edit-phone-number">Điện thoại <span class="form-required" title="This field is required.">*</span></label>
                                            <input placeholder="Nhập Số điện thoại *(bắt buộc)" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" type="text" id="edit-phone-number" name="phone_number" value="" size="60" maxlength="128" class="form-text required">
                                            <div class="errPhoneNumber" style="color: red;"></div>

                                        </div>
                                        <div class="form-item form-type-textfield form-item-email">
                                            <label for="edit-email">Email </label>
                                            <input placeholder="Nhập Email (tùy chọn)" type="text" id="edit-email" name="email" value="" size="60" maxlength="128" class="form-text">
                                            <div class="errEmail" style="color: red;"></div>
                                        </div>

                                        <div class="form-item form-type-password form-item-pass">
                                            <label for="edit-pass--3">Mật khẩu <span class="form-required" title="This field is required.">*</span></label>
                                            <input placeholder="Mật khẩu từ 6 đến 32 ký tự *(bắt buộc)" type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
                                            <div class="errPassWord" style="color: red;"></div>
                                        </div>
                                        <input type="submit" id="edit-submit--3" name="register" value="Đăng ký" class="form-submit ajax-processed"><input type="hidden" name="form_build_id" value="form-LXkTAaElQsCLGVI2CtreXP5pES3um5klR4wbJ0Aa9GE">
                                        <input type="hidden" name="form_id" value="blacasa_account_register">
                                    </div>
                                </div>
                            </div>
                            <div class="social-login">
                                <ul>
                                    <li class="facebook-link-small">
                                        <a href="https://www.blacasa.vn/login-via-facebook?redirect=node/579" class="" title="Đăng ký bằng Facebook">
                                            <div class="btn-login-facebook">
                                                <div class="facebook-btn-icon">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </div>
                                                <span class="btn-facebook-text">Đăng ký bằng Facebook</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="google-link-small">
                                        <a href="https://www.blacasa.vn/login-via-google?redirect=node/579" class="" title="Đăng ký bằng Google">
                                            <div class="login-google-btn">
                                                <div class="google-btn-all">
                                                    <div class="google-btn-wrapper">
                                                        <div class="google-btn-icon">
                                                            <div class="google-btn-logo" style="width: 18px; height: 18px;">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 48 48" class="abcRioButtonSvg">
                                                                    <g>
                                                                        <path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                                                                        </path>
                                                                        <path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path>
                                                                        <path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                                                                        </path>
                                                                        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                                                                        </path>
                                                                        <path fill="none" d="M0 0h48v48H0z">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <span class="btn-google-text">
                                                            <span class="btn-google-text-login">
                                                                Đăng ký bằng Google
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="forget-password" class="white-popup-block mfp-hide">
                    <div class="box-title">Lấy lại mật khẩu</div>
                    <a class="popup-modal-dismiss" href="#">x</a>
                    <div id="forget-pass-form" class="custom-form">
                        <div id="form-messages"></div>
                        <form action="/gioi-thieu" method="post" id="blacasa-account-pass" accept-charset="UTF-8">
                            <div>
                                <div class="form-item form-type-textfield form-item-email-phone">
                                    <label for="edit-email-phone--2">Email hoặc số điện thoại * </label>
                                    <input placeholder="Nhập email hoặc số điện thoại" type="text" id="edit-email-phone--2" name="email_phone" value="" size="60" maxlength="254" class="form-text" />
                                </div>
                                <input type="submit" id="edit-submit--4" name="op" value="Lấy mật khẩu" class="form-submit" /><input type="hidden" name="form_build_id" value="form-s6cICav3c-VzSfpMgiyF7klaH1UQ2LvuYlwUVu_BPWI" />
                                <input type="hidden" name="form_id" value="blacasa_account_pass" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        /*BUTTON LIÊN HẸ*/
        function arCuGetCookie(t) {
            return document.cookie.length > 0 && (c_start = document.cookie.indexOf(t + "="), -1 != c_start) ? (c_start = c_start + t.length + 1, c_end = document.cookie.indexOf(";", c_start), -1 == c_end && (c_end = document.cookie.length), unescape(document.cookie.substring(c_start, c_end))) : 0
        }

        function arCuCreateCookie(t, e, s) {
            var n;
            if (s) {
                var i = new Date;
                i.setTime(i.getTime() + 24 * s * 60 * 60 * 1e3), n = "; expires=" + i.toGMTString()
            } else n = "";
            document.cookie = t + "=" + e + n + "; path=/"
        }

        function arCuShowMessage(t) {
            if (arCuPromptClosed) return !1;
            void 0 !== arCuMessages[t] ? (jQuery("#arcontactus").contactUs("showPromptTyping"), _arCuTimeOut = setTimeout(function() {
                if (arCuPromptClosed) return !1;
                jQuery("#arcontactus").contactUs("showPrompt", {
                    content: arCuMessages[t]
                }), t++, _arCuTimeOut = setTimeout(function() {
                    if (arCuPromptClosed) return !1;
                    arCuShowMessage(t)
                }, arCuMessageTime)
            }, arCuTypingTime)) : (arCuCloseLastMessage && jQuery("#arcontactus").contactUs("hidePrompt"), arCuLoop && arCuShowMessage(0))
        }

        function arCuShowMessages() {
            setTimeout(function() {
                clearTimeout(_arCuTimeOut), arCuShowMessage(0)
            }, arCuDelayFirst)
        }! function(t) {
            function e(s, n) {
                this._initialized = !1, this.settings = null, this.options = t.extend({}, e.Defaults, n), this.$element = t(s), this.init(), this.x = 0, this.y = 0, this._interval, this._menuOpened = !1, this._callbackOpened = !1, this.countdown = null
            }
            e.Defaults = {
                align: "right",
                countdown: 0,
                drag: !1,
                buttonText: "Liên hệ",
                buttonSize: "large",
                menuSize: "normal",
                items: [],
                iconsAnimationSpeed: 1200,
                theme: "#FF961E",
                buttonIcon: '<svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"/></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"/></defs></svg>',
                closeIcon: '<svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-4087 108)"><g id="Vector"><use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use></g></g><defs><path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path></defs></svg>'
            }, e.prototype.init = function() {
                this.destroy(), this.settings = t.extend({}, this.options), this.$element.addClass("arcontactus-widget").addClass("arcontactus-message"), "left" === this.settings.align ? this.$element.addClass("left") : this.$element.addClass("right"), this.settings.items.length ? (this._initCallbackBlock(), this._initMessengersBlock(), this._initMessageButton(), this._initPrompt(), this._initEvents(), this.startAnimation(), this.$element.addClass("active")) : console.info("jquery.contactus:no items"), this._initialized = !0, this.$element.trigger("arcontactus.init")
            }, e.prototype.destroy = function() {
                if (!this._initialized) return !1;
                this.$element.html(""), this._initialized = !1, this.$element.trigger("arcontactus.destroy")
            }, e.prototype._initCallbackBlock = function() {}, e.prototype._initMessengersBlock = function() {
                var e = t("<div>", {
                    class: "messangers-block"
                });
                "normal" !== this.settings.menuSize && "large" !== this.settings.menuSize || e.addClass("lg"), "small" === this.settings.menuSize && e.addClass("sm"), this._appendMessengerIcons(e), this.$element.append(e)
            }, e.prototype._appendMessengerIcons = function(e) {
                t.each(this.settings.items, function(s) {
                    if ("callback" == this.href) var n = t("<div>", {
                        class: "messanger call-back " + (this.class ? this.class : "")
                    });
                    else if (n = t("<a>", {
                            class: "messanger " + (this.class ? this.class : ""),
                            id: this.id ? this.id : null,
                            href: this.href,
                            target: this.target ? this.target : "_blank"
                        }), this.onClick) {
                        var i = this;
                        n.on("click", function(t) {
                            i.onClick(t)
                        })
                    }
                    var a = t("<span>", {
                        style: this.color ? "background-color:" + this.color : null
                    });
                    a.append(this.icon), n.append(a), n.append("<p>" + this.title + "</p>"), e.append(n)
                })
            }, e.prototype._initMessageButton = function() {
                var e = this,
                    s = t("<div>", {
                        class: "arcontactus-message-button",
                        style: this._backgroundStyle()
                    });
                "large" === this.settings.buttonSize && this.$element.addClass("lg"), "medium" === this.settings.buttonSize && this.$element.addClass("md"), "small" === this.settings.buttonSize && this.$element.addClass("sm");
                var n = t("<div>", {
                    class: "static"
                });
                n.append(this.settings.buttonIcon), !1 !== this.settings.buttonText ? n.append("<p>" + this.settings.buttonText + "</p>") : s.addClass("no-text");
                var i = t("<div>", {
                    class: "callback-state",
                    style: e._colorStyle()
                });
                i.append(this.settings.callbackStateIcon);
                var a = t("<div>", {
                        class: "icons hide"
                    }),
                    o = t("<div>", {
                        class: "icons-line"
                    });
                t.each(this.settings.items, function(s) {
                    var n = t("<span>", {
                        style: e._colorStyle()
                    });
                    n.append(this.icon), o.append(n)
                }), a.append(o);
                var r = t("<div>", {
                    class: "arcontactus-close"
                });
                r.append(this.settings.closeIcon);
                var c = t("<div>", {
                        class: "pulsation",
                        style: e._backgroundStyle()
                    }),
                    l = t("<div>", {
                        class: "pulsation",
                        style: e._backgroundStyle()
                    });
                s.append(n).append(i).append(a).append(r).append(c).append(l), this.$element.append(s)
            }, e.prototype._initPrompt = function() {
                var e = t("<div>", {
                        class: "arcontactus-prompt"
                    }),
                    s = t("<div>", {
                        class: "arcontactus-prompt-close",
                        style: this._colorStyle()
                    });
                s.append(this.settings.closeIcon);
                var n = t("<div>", {
                    class: "arcontactus-prompt-inner"
                });
                e.append(s).append(n), this.$element.append(e)
            }, e.prototype._initEvents = function() {
                var e = this.$element,
                    s = this;
                e.find(".arcontactus-message-button").on("mousedown", function(t) {
                    s.x = t.pageX, s.y = t.pageY
                }).on("mouseup", function(t) {
                    t.pageX === s.x && t.pageY === s.y && (s.toggleMenu(), t.preventDefault())
                }), this.settings.drag && (e.draggable(), e.get(0).addEventListener("touchmove", function(t) {
                    var s = t.targetTouches[0];
                    e.get(0).style.left = s.pageX - 25 + "px", e.get(0).style.top = s.pageY - 25 + "px", t.preventDefault()
                }, !1)), t(document).on("click", function(t) {
                    s.closeMenu()
                }), e.on("click", function(t) {
                    t.stopPropagation()
                }), e.find(".call-back").on("click", function() {
                    s.openCallbackPopup()
                }), e.find(".callback-countdown-block-close").on("click", function() {
                    null != s.countdown && (clearInterval(s.countdown), s.countdown = null), s.closeCallbackPopup()
                }), e.find(".arcontactus-prompt-close").on("click", function() {
                    s.hidePrompt()
                })
            }, e.prototype.show = function() {
                this.$element.addClass("active"), this.$element.trigger("arcontactus.show")
            }, e.prototype.hide = function() {
                this.$element.removeClass("active"), this.$element.trigger("arcontactus.hide")
            }, e.prototype.openMenu = function() {
                var t = this.$element;
                t.find(".messangers-block").hasClass("show-messageners-block") || (this.stopAnimation(), t.find(".messangers-block, .arcontactus-close").addClass("show-messageners-block"), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), this._menuOpened = !0, this.$element.trigger("arcontactus.openMenu"))
            }, e.prototype.closeMenu = function() {
                var t = this.$element;
                t.find(".messangers-block").hasClass("show-messageners-block") && (t.find(".messangers-block, .arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), t.find(".pulsation").removeClass("stop"), this.startAnimation(), this._menuOpened = !1, this.$element.trigger("arcontactus.closeMenu"))
            }, e.prototype.toggleMenu = function() {
                var t = this.$element;
                if (this.hidePrompt(), t.find(".callback-countdown-block").hasClass("display-flex")) return !1;
                t.find(".messangers-block").hasClass("show-messageners-block") ? this.closeMenu() : this.openMenu(), this.$element.trigger("arcontactus.toggleMenu")
            }, e.prototype.openCallbackPopup = function() {
                var t = this.$element;
                t.addClass("opened"), this.closeMenu(), this.stopAnimation(), t.find(".icons, .static").addClass("hide"), t.find(".pulsation").addClass("stop"), t.find(".callback-countdown-block").addClass("display-flex"), this._callbackOpened = !0, this.$element.trigger("arcontactus.openCallbackPopup")
            }, e.prototype.closeCallbackPopup = function() {
                var t = this.$element;
                t.removeClass("opened"), t.find(".messangers-block").removeClass("show-messageners-block"), t.find(".arcontactus-close").removeClass("show-messageners-block"), t.find(".icons, .static").removeClass("hide"), this.startAnimation(), this._callbackOpened = !1, this.$element.trigger("arcontactus.closeCallbackPopup")
            }, e.prototype.startAnimation = function() {
                var t = this.$element,
                    e = t.find(".icons-line"),
                    s = t.find(".static"),
                    n = t.find(".icons-line>span:first-child").width() + 40;
                if ("large" === this.settings.buttonSize) var i = 2,
                    a = 0;
                "medium" === this.settings.buttonSize && (i = 4, a = -2), "small" === this.settings.buttonSize && (i = 4, a = -2);
                var o = t.find(".icons-line>span").length,
                    r = 0;
                if (this.stopAnimation(), 0 === this.settings.iconsAnimationSpeed) return !1;
                this._interval = setInterval(function() {
                    0 === r && (e.parent().removeClass("hide"), s.addClass("hide"));
                    var t = "translate(" + -(n * r + i) + "px, " + a + "px)";
                    e.css({
                        "-webkit-transform": t,
                        "-ms-transform": t,
                        transform: t
                    }), ++r > o && (r > o + 1 && (r = 0), e.parent().addClass("hide"), s.removeClass("hide"), t = "translate(" + -i + "px, " + a + "px)", e.css({
                        "-webkit-transform": t,
                        "-ms-transform": t,
                        transform: t
                    }))
                }, this.settings.iconsAnimationSpeed)
            }, e.prototype.stopAnimation = function() {
                clearInterval(this._interval);
                var t = this.$element,
                    e = t.find(".icons-line"),
                    s = t.find(".static");
                e.parent().addClass("hide"), s.removeClass("hide");
                var n = "translate(-2px, 0px)";
                e.css({
                    "-webkit-transform": n,
                    "-ms-transform": n,
                    transform: n
                })
            }, e.prototype.showPrompt = function(t) {
                var e = this.$element.find(".arcontactus-prompt");
                t && t.content && e.find(".arcontactus-prompt-inner").html(t.content), e.addClass("active"), this.$element.trigger("arcontactus.showPrompt")
            }, e.prototype.hidePrompt = function() {
                this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePrompt")
            }, e.prototype.showPromptTyping = function() {
                this.$element.find(".arcontactus-prompt").find(".arcontactus-prompt-inner").html(""), this._insertPromptTyping(), this.showPrompt({}), this.$element.trigger("arcontactus.showPromptTyping")
            }, e.prototype._insertPromptTyping = function() {
                var e = this.$element.find(".arcontactus-prompt-inner"),
                    s = t("<div>", {
                        class: "arcontactus-prompt-typing"
                    }),
                    n = t("<div>");
                s.append(n), s.append(n.clone()), s.append(n.clone()), e.append(s)
            }, e.prototype.hidePromptTyping = function() {
                this.$element.find(".arcontactus-prompt").removeClass("active"), this.$element.trigger("arcontactus.hidePromptTyping")
            }, e.prototype._backgroundStyle = function() {
                return "background-color: " + this.settings.theme
            }, e.prototype._colorStyle = function() {
                return "color: " + this.settings.theme
            }, t.fn.contactUs = function(s) {
                var n = Array.prototype.slice.call(arguments, 1);
                return this.each(function() {
                    var i = t(this),
                        a = i.data("ar.contactus");
                    a || (a = new e(this, "object" == typeof s && s), i.data("ar.contactus", a)), "string" == typeof s && "_" !== s.charAt(0) && a[s].apply(a, n)
                })
            }, t.fn.contactUs.Constructor = e
        }(jQuery);


        var arCuMessages = ["Gia sư Blacasa xin chào!"];
        var arCuLoop = false;
        var arCuCloseLastMessage = false;
        var arCuPromptClosed = false;
        var _arCuTimeOut = null;
        var arCuDelayFirst = 2000;
        var arCuTypingTime = 2000;
        var arCuMessageTime = 4000;
        var arCuClosedCookie = 0;
        var arcItems = [];
        window.addEventListener('load', function() {
            arCuClosedCookie = arCuGetCookie('arcu-closed');
            jQuery('#arcontactus').on('arcontactus.init', function() {
                if (arCuClosedCookie) {
                    return false;
                }
                arCuShowMessages();
            });
            jQuery('#arcontactus').on('arcontactus.openMenu', function() {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                jQuery('#contact').contactUs('hidePrompt');
                arCuCreateCookie('arcu-closed', 1, 30);
            });
            jQuery('#arcontactus').on('arcontactus.hidePrompt', function() {
                clearTimeout(_arCuTimeOut);
                arCuPromptClosed = true;
                arCuCreateCookie('arcu-closed', 1, 30);
            });

            var arcItem = {};
            arcItem.id = 'msg-item-1';
            arcItem.class = 'msg-item-facebook-messenger';
            arcItem.title = 'Facebook Messenger';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';
            arcItem.href = 'https://m.me/BlacasaEducation';
            arcItem.color = '#567AFF';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-2';
            arcItem.class = 'msg-item-zalo';
            arcItem.title = 'Zalo Blacasa OA';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path></svg>';
            arcItem.href = 'https://zalo.me/4166284432248305011';
            arcItem.color = '#2EA8FF';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-6';
            arcItem.class = 'msg-item-sms';
            arcItem.title = 'Gửi tin nhắn SMS 0898704869';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M128 216c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z"></path></svg>';
            arcItem.href = 'sms:0989704869';
            arcItem.color = '#1C9CC5';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-7';
            arcItem.class = 'msg-item-envelope';
            arcItem.title = 'Gửi Email Contact@blacasa.vn';
            arcItem.icon = '<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>';
            arcItem.href = 'mailto:contact@blacasa.vn';
            arcItem.color = '#FF643A';
            arcItems.push(arcItem);

            var arcItem = {};
            arcItem.id = 'msg-item-8';
            arcItem.class = 'msg-item-phone';
            arcItem.title = 'Gọi Ngay 0989.704.869';
            arcItem.icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';
            arcItem.href = 'tel:0989704869';
            arcItem.color = '#4EB625';
            arcItems.push(arcItem);

            jQuery('#arcontactus').contactUs({
                items: arcItems
            });
        });
    </script>

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <!--HEADER AREA USED IN ALL PAGES-->
    <header class="section" id="top-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-header-left mr-2">
                <ul>
                    <li>
                        <a href="javascript:;" class="pl-0 all-menu all-menu-tablet d-lg-none" data-toggle="modal" data-target="#topHeaderModalMenu">
                            <i class="fa fa-bars" style="font-size:24px;padding-top:9px;margin-right: 15px;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.blacasa.vn" class="logo" title="Blacasa - Hệ thống gia sư lớn nhất Việt Nam">
                            <img src="/sites/all/themes/blacasa/images/logo-blacasa.png" alt="Blacasa - Hệ thống gia sư lớn nhất Việt Nam">
                        </a>
                    </li>
                    <li class="d-none d-lg-block ml-4 mr-2">
                        <a href="mailto:contact@blacasa.vn"><i class="fa fa-envelope mr-1"></i>contact@blacasa.vn</a>
                    </li>
                    <li class="d-none d-lg-block  px-2 bla-border-left">
                        <a href="tel:0989704869"><i class="fa fa-phone mr-1"></i>0989.704.869 | 1900.63.63.42</a>
                    </li>
                </ul>
            </div>

            <div class="top-header-right ml-2">
                <ul>
                    <li class="<?= isset($_SESSION['Account']) ? 'mfp-hide' : 'mfp-ready' ?>">
                        <a href="#popup-form" class="popup-modal link-login d-flex align-items-center account_login_modal" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-sm-block">Đăng nhập</span><i class="fa fa-user-o ml-2" style="font-size:24px;"></i>
                        </a>
                    </li>
                    <!-- when sign in -->
                    <?php
                        if (isset($_SESSION['Account'])) {

                            $sql = 'SELECT * FROM taikhoan WHERE TenDN = ?';
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param('s', $_SESSION['Account']);
                            $stmt->execute();
                            $result = $stmt->get_result()->fetch_assoc();
                            $id = $result['MaTK'];
                            $typeAcc = $result['MaPQ'];

                            if ($typeAcc == 2) {
                                $sql = 'SELECT * FROM giasu WHERE MaTK = ?';
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param('s', $id);
                                $stmt->execute();
                                $resultTutor = $stmt->get_result()->fetch_assoc();
                                $idTutor = $resultTutor['MaGS'];
                                $avatarTutor = $resultTutor['AnhDaiDien'];
                    
                            } else if ($typeAcc == 3) {
                                $sql = 'SELECT * FROM hocvien WHERE MaTK = ?';
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param('s', $id);
                                $stmt->execute();
                                $resultStudent = $stmt->get_result()->fetch_assoc();
                                $idStudent = $resultStudent['MaHV'];
                                $avatarStudent = $resultStudent['AnhDaiDien'];
                                $coverStudent = $resultStudent['AnhBia'];
                            }
                        
                        } 
                    
                    ?>
                    <li class="dropdown notification notification-info common-tooltip <?= isset($_SESSION['Account']) ? 'mfp-ready' : 'mfp-hide' ?>">
                        <a href="#" id="dropdown-header-notifs" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-type="view_notification">
                            <i class="fa fa-bell-o" style="font-size:24px;padding-top:10px;"></i>
                            <div class="count"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right py-0 dropdown-menu-use" id="menu-top-notis" x-placement="bottom-end" aria-labelledby="dropdown-header-notifs">
                            <div class="card" style="border:unset!important;">
                                <div class="card-header p-2 bg-white text-info font-weight-bold">Thông báo</div>
                                <div class="list mCustomScrollbar _mCS_1 mCS_no_scrollbar"></div>
                                <div class="text-center view-all">
                                    <a href="https://www.blacasa.vn/huy-nguyen-080324/notifications">Xem tất cả</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown <?= isset($_SESSION['Account']) ? 'mfp-ready' : 'mfp-hide' ?>">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0;">
                            <img class="bla-img-sm img-circle" width="24" height="24" typeof="foaf:Image" src="../assets/img/<?php
                                if (!empty($avatarTutor)){
                                    echo 'img_tutor/'.$avatarTutor;
                                } else if (!empty($avatarStudent)){
                                    echo 'img_student/'.$avatarStudent;
                                } else {
                                    echo 'default_user.png';
                                }
                            ?>" alt=""> </a>
                        <div class="dropdown-menu dropdown-menu-right py-0" id="menu-top-personal-menu" x-placement="top-end" aria-labelledby="dropdown-header-profiles" style="position: absolute; transform: translate3d(-210px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">

                            <a class="dropdown-item <?= isset($typeAcc) && ($typeAcc == 2) ? 'mfp-ready' : 'mfp-hide'?> " href="https://www.blacasa.vn/class">
                                <i class="fa fa-flag" aria-hidden="true" style="width:20px;"></i> Xem các lớp mới</a>
                            <a class="dropdown-item <?= isset($typeAcc) && ($typeAcc == 2) ? 'mfp-ready' : 'mfp-hide'?> " href="https://www.blacasa.vn/huy-nguyen-080324/offer">
                                <i class="fa fa-flag" aria-hidden="true" style="width:20px;"></i> Các đề nghị dạy đã gửi</a>
                            <a class="dropdown-item bla-border-bottom" href="class_student_tutor.php?view=<?=$id?>">
                                <i class="fa fa-book" aria-hidden="true" style="width:20px;"></i> Yêu cầu tìm gia sư</a>
                            <a class="dropdown-item <?= isset($typeAcc) && ($typeAcc == 2) ? 'mfp-ready' : 'mfp-hide'?>" href="https://www.blacasa.vn/huy-nguyen-080324/object-saved?c=teacher">
                                <i class="fa fa-heart-saved" aria-hidden="true" style="width:20px;"></i> Giáo viên đã lưu</a>
                            <a class="dropdown-item" href="add_class.php?add=<?=$id?>">
                                <i class="fa fa-plus-circle" aria-hidden="true" style="width:20px;"></i> Đăng yêu cầu mới</a>
                            
                            <a class="dropdown-item" href="https://www.blacasa.vn/huy-nguyen-080324/bpoint">
                                <i class="fa fa-btc" aria-hidden="true" style="width:20px;"></i> Quản lý BPoint</a>
                            <a class="dropdown-item" href="account.php?view=<?=$id?>">
                                <i class="fa fa-home" aria-hidden="true" style="width:20px;"></i> Trang cá nhân</a>
                            <a class="dropdown-item" href="edit_account.php?edit=<?=$id?>">
                                <i class="fa fa-user" aria-hidden="true" style="width:20px;"></i> Cài đặt</a>
                            <a class="dropdown-item" href="LogoutAcc.php"><i class="fa fa-sign-out" aria-hidden="true" style="width:20px;"></i> Đăng xuất</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </header>
    <!-- Modal Menu Full Screen -->
    <div id="topHeaderModalMenu" class="modal fade modal-full-screen" tabindex="-1" role="dialog" aria-labelledby="Modal full screen show menu" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-bla-blue text-white d-flex justify-content-between align-items-center">
                    <button type="button" class="btn text-white" style="background:none;padding:0" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times" style="font-size:24px;"></i>
                    </button>
                    <div>
                        <img src="/sites/all/themes/blacasa/images/logo-blacasa-white.png" height="30px" alt="Blacasa - Hệ thống gia sư lớn nhất Việt Nam">
                    </div>
                </div>
                <div class="modal-body">
                    <h3><i class="fa fa-th-large mr-2"></i>DANH MỤC</h3>
                    <div class="row">
                        <div class="col-6">
                            <ul class="menu-top-modal">
                                <li>
                                    <a href="https://www.blacasa.vn"><i class="fa fa-home mr-2" style="font-size:20px;"></i>Trang chủ</a>
                                </li>
                                <li>
                                    <a href="#">Giới thiệu</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Giới thiệu Blacasa Việt Nam" href="/gioi-thieu">Giới thiệu Blacasa </a></li>
                                        <li><a title="Trải nghiệm 360 độ" href="/vr-360" target="_blank">Blacasa 360 VR</a></li>
                                        <li><a title="Hợp tác và đầu tư" href="/gioi-thieu#partner">Hợp tác và đầu tư</a></li>
                                        <li><a title="Tuyển dụng" href="/jobs">Tuyển dụng</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:" class="btnPopupRegister" data-location='lp-bmentor-header'>Tìm gia sư</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a href="javascript:" class="btnPopupRegister" data-location='lp-bmentor-header'>Tư vấn tìm gia sư</a></li>
                                        <li><a title="Tại sao chọn Blacasa" href="https://www.blacasa.vn#why-us" class="bla-goScrollSmoothly" data-selector="#why-us">Tại sao chọn Blacasa</a></li>
                                        <li><a title="Phụ huynh nhận xét" href="https://www.blacasa.vn#testimonial" class="bla-goScrollSmoothly" data-selector="#testimonial">Phụ huynh nói gì</a></li>
                                        <li><a title="Danh sách gia sư" href="tutor.php">Danh sách gia sư</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://www.blacasa.vn#products" class="bla-goScrollSmoothly" data-selector="#products">Khoá học & Dịch vụ</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Gia sư dạy kèm B-Mentor" href="/lp/tro-ly-hoc-tap-bmentor" target="_blank">Gia sư tại nhà</a></li>
                                        <li><a title="Gia sư online" href="/lp/khoa-hoc-gia-su-online" target="_blank">Gia sư online</a></li>
                                        <li><a title="Toán Tiếng Anh Cambridge" href="/lp/gia-su-toan-tieng-anh-he-cambridge" target="_blank">Toán tiếng Anh Cambridge</a></li>
                                        <li><a title="Khoá học online" href="https://tot.edu.vn" target="_blank">Khoá học video online</a></li>
                                        <li><a title="Trắc nghiệm phong cách học tập" href="/test/phong-cach-hoc-tap" target="_blank">Trắc nghiệm phong cách học tập</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="menu-top-modal">
                                <li>
                                    <a href="/class">Dành cho gia sư</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Lớp đang cần gia sư" href="class.php">Lớp đang cần gia sư</a></li>
                                        <li><a title="Trở thành gia sư" href="/lp/tro-thanh-gia-su-bmentor">Trở thành gia sư</a></li>
                                        <li><a title="Hướng dẫn nhận lớp" href="/become-teacher">Hướng dẫn nhận lớp</a></li>
                                        <li><a title="Mời bạn bè" href="/invite-friend">Mời bạn bè</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/affiliate">Affiliate</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Giới thiệu phụ huynh" href="/affiliate">Giới thiệu phụ huynh</a></li>
                                        <li><a title="Giới thiệu gia sư" href="/invite-friend">Giới thiệu gia sư</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/bai-viet">Bài viết sự kiện</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Bài viết" href="/bai-viet">Trang chủ bài viết</a></li>
                                        <li><a title="Giáo dục" href="/bai-viet/giao-duc">Giáo dục</a></li>
                                        <li><a title="Du học" href="/bai-viet/du-hoc">Du học</a></li>
                                        <li><a title="Gia sư" href="/bai-viet/gia-su">Gia sư</a></li>
                                        <li><a title="Review" href="/bai-viet/review">Review</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/bai-viet/du-an-cong-dong">Dự án cộng đồng</a>
                                    <ul class="menu-top-modal-sub">
                                        <li><a title="Áo xanh sư phạm tới trường" href="/ao-xanh-su-pham" target="_blank">Dự án áo xanh sư phạm tới trường</a></li>
                                        <li><a title="Dự án học cùng chiến binh nhí" href="/bai-viet/hoc-cung-chien-binh-nhi" target="_blank">Dự án học cùng chiến binh nhí</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main menu for PC-->
    <section class="section main-nav-top" id="main-nav-top">
        <nav class="container  d-flex align-items-center justify-content-between">
            <ul class="menu-top" id="nav-top-home">
                <li>
                    <a href="https://www.blacasa.vn" style="padding:13px 16px 13px 16px"><i class="fa fa-home mr-2" style="font-size:20px;"></i>Trang chủ</a>
                </li>
            </ul>
            <a href="https://www.blacasa.vn" id="nav-top-logo-home"><img src="/sites/all/themes/blacasa/images/logo-blacasa-white.png" style="height:30px !important;"></a>
            <ul class="menu-top d-flex align-items-center">
                <li>
                    <a href="/gioi-thieu">Giới thiệu</a>
                    <ul class="menu-top-sub">
                        <li><a title="Giới thiệu Blacasa Việt Nam" href="/gioi-thieu">Giới thiệu Blacasa </a></li>
                        <li><a title="Trải nghiệm 360 độ" href="/vr-360" target="_blank">Blacasa 360 VR</a></li>
                        <li><a title="Hợp tác và đầu tư" href="/gioi-thieu#partner">Hợp tác và đầu tư</a></li>
                        <li><a title="Tuyển dụng" href="/jobs">Tuyển dụng</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:" class="btnPopupRegister" data-location='lp-bmentor-header'>Tìm gia sư</a>
                    <ul class="menu-top-sub">
                        <li><a href="javascript:" class="btnPopupRegister" data-location='lp-bmentor-header'>Tư vấn tìm gia sư</a></li>
                        <li><a title="Tại sao chọn Blacasa" href="https://www.blacasa.vn#why-us" class="bla-goScrollSmoothly" data-selector="#why-us">Tại sao chọn Blacasa</a></li>
                        <li><a title="Phụ huynh nhận xét" href="https://www.blacasa.vn#testimonial" class="bla-goScrollSmoothly" data-selector="#testimonial">Phụ huynh nói gì</a></li>
                        <li><a title="Danh sách gia sư" href="tutor.php">Danh sách gia sư</a></li>
                    </ul>
                </li>
                <li>
                    <a href="https://www.blacasa.vn#product">Khoá học & Dịch vụ</a>
                    <ul class="menu-top-sub">
                        <li><a title="Gia sư dạy kèm B-Mentor" href="/lp/tro-ly-hoc-tap-bmentor" target="_blank">Gia sư tại nhà</a></li>
                        <li><a title="Gia sư online" href="/lp/khoa-hoc-gia-su-online" target="_blank">Gia sư online</a></li>
                        <li><a title="Toán Tiếng Anh Cambridge" href="/lp/gia-su-toan-tieng-anh-he-cambridge" target="_blank">Toán tiếng Anh Cambridge</a></li>
                        <li><a title="Khoá học online" href="https://tot.edu.vn" target="_blank">Khoá học video online</a></li>
                        <li><a title="Trắc nghiệm phong cách học tập" href="/test/phong-cach-hoc-tap" target="_blank">Trắc nghiệm phong cách học tập</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/class">Dành cho gia sư</a>
                    <ul class="menu-top-sub">
                        <li><a title="Lớp đang cần gia sư" href="class.php">Lớp đang cần gia sư</a></li>
                        <li><a title="Trở thành gia sư" href="/lp/tro-thanh-gia-su-bmentor">Trở thành gia sư</a></li>
                        <li><a title="Hướng dẫn nhận lớp" href="/become-teacher">Hướng dẫn nhận lớp</a></li>
                        <li><a title="Mời bạn bè" href="/invite-friend">Mời bạn bè</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/affiliate">Affiliate</a>
                    <ul class="menu-top-sub">
                        <li><a title="Giới thiệu phụ huynh" href="/affiliate">Giới thiệu phụ huynh</a></li>
                        <li><a title="Giới thiệu gia sư" href="/invite-friend">Giới thiệu gia sư</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/bai-viet">Bài viết sự kiện</a>
                    <ul class="menu-top-sub">
                        <li><a title="Bài viết" href="/bai-viet">Trang chủ bài viết</a></li>
                        <li><a title="Giáo dục" href="/bai-viet/giao-duc">Giáo dục</a></li>
                        <li><a title="Du học" href="/bai-viet/du-hoc">Du học</a></li>
                        <li><a title="Gia sư" href="/bai-viet/gia-su">Gia sư</a></li>
                        <li><a title="Review" href="/bai-viet/review">Review</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/bai-viet/du-an-cong-dong">Dự án cộng đồng</a>
                    <ul class="menu-top-sub">
                        <li><a title="Áo xanh sư phạm tới trường" href="/ao-xanh-su-pham" target="_blank">Dự án áo xanh sư phạm tới trường</a></li>
                        <li><a title="Dự án học cùng chiến binh nhí" href="/bai-viet/hoc-cung-chien-binh-nhi" target="_blank">Dự án học cùng chiến binh nhí</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </section>

    <!--SECTION III: Popups -->
    <!--Signin,signup,password recover-->
    <div id="arcontactus" class="arcontactus-widget arcontactus-message right lg active">
        <div class="messangers-block lg"><a class="messanger msg-item-facebook-messenger" id="msg-item-1" href="https://m.me/BlacasaEducation" target="_blank"><span style="background-color:#567AFF"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>
                    </svg></span>
                <p>Facebook Messenger</p>
            </a><a class="messanger msg-item-zalo" id="msg-item-2" href="https://zalo.me/4166284432248305011" target="_blank"><span style="background-color:#2EA8FF"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6">
                        <path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path>
                    </svg></span>
                <p>Zalo Blacasa OA</p>
            </a><a class="messanger msg-item-sms" id="msg-item-6" href="sms:0989704869" target="_blank"><span style="background-color:#1C9CC5"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M128 216c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z"></path>
                    </svg></span>
                <p>Gửi tin nhắn SMS 0898704869</p>
            </a><a class="messanger msg-item-envelope" id="msg-item-7" href="mailto:contact@blacasa.vn" target="_blank"><span style="background-color:#FF643A"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path>
                    </svg></span>
                <p>Gửi Email Contact@blacasa.vn</p>
            </a><a class="messanger msg-item-phone" id="msg-item-8" href="tel:0989704869" target="_blank"><span style="background-color:#4EB625"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                    </svg></span>
                <p>Gọi Ngay 0989.704.869</p>
            </a></div>
        <div class="arcontactus-message-button" style="background-color: #FF961E">
            <div class="static hide"><svg width="20" height="20" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Canvas" transform="translate(-825 -308)">
                        <g id="Vector">
                            <use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="#FFFFFF"></use>
                        </g>
                    </g>
                    <defs>
                        <path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path>
                    </defs>
                </svg>
                <p>Liên hệ</p>
            </div>
            <div class="callback-state" style="color: #FF961E"></div>
            <div class="icons">
                <div class="icons-line" style="transform: translate(-194px, 0px);"><span style="color: #FF961E"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path>
                        </svg></span><span style="color: #FF961E"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6">
                            <path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"></path>
                        </svg></span><span style="color: #FF961E"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M128 216c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24 24-10.7 24-24-10.7-24-24-24zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 384c-28.3 0-56.3-4.3-83.2-12.8l-15.2-4.8-13 9.2c-23 16.3-58.5 35.3-102.6 39.6 12-15.1 29.8-40.4 40.8-69.6l7.1-18.7-13.7-14.6C47.3 313.7 32 277.6 32 240c0-97 100.5-176 224-176s224 79 224 176-100.5 176-224 176z"></path>
                        </svg></span><span style="color: #FF961E"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path>
                        </svg></span><span style="color: #FF961E"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                        </svg></span></div>
            </div>
            <div class="arcontactus-close"><svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Canvas" transform="translate(-4087 108)">
                        <g id="Vector">
                            <use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
                        </g>
                    </g>
                    <defs>
                        <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
                    </defs>
                </svg></div>
            <div class="pulsation" style="background-color: #FF961E"></div>
            <div class="pulsation" style="background-color: #FF961E"></div>
        </div>
        <div class="arcontactus-prompt">
            <div class="arcontactus-prompt-close" style="color: #FF961E"><svg width="12" height="13" viewBox="0 0 14 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Canvas" transform="translate(-4087 108)">
                        <g id="Vector">
                            <use xlink:href="#path0_fill" transform="translate(4087 -108)" fill="currentColor"></use>
                        </g>
                    </g>
                    <defs>
                        <path id="path0_fill" d="M 14 1.41L 12.59 0L 7 5.59L 1.41 0L 0 1.41L 5.59 7L 0 12.59L 1.41 14L 7 8.41L 12.59 14L 14 12.59L 8.41 7L 14 1.41Z"></path>
                    </defs>
                </svg></div>
            <div class="arcontactus-prompt-inner"></div>
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
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            var account_login_modals = document.querySelector(".account_login_modal");
            var form_signin_signup = document.querySelectorAll(".form-signin-signup");
            var popup_form = document.querySelector("#popup-form");
            var form_forget_password = document.querySelector("#forget-password");
            var forget_password_link = document.querySelector("#forget-password-link");
            var html_js = document.querySelector(".js");
            var popup_modal_dismiss = document.querySelectorAll(".popup-modal-dismiss");

            function openFormSigin_Signup() {
                form_signin_signup.forEach(function(element) {
                    element.classList.replace('mfp-hide', 'mfp-ready');
                });
                html_js.style.cssText = "margin-right: 12px; overflow: hidden;";
            }

            function openForgetPassword() {
                form_forget_password.classList.replace('mfp-hide', 'mfp-ready');
            }

            function closeModal() {
                form_signin_signup.forEach(function(element) {
                    element.classList.replace('mfp-ready', 'mfp-hide');
                });
                form_forget_password.classList.replace('mfp-ready', 'mfp-hide');
                popup_form.classList.remove('mfp-hide')
                html_js.style.cssText = "";

            }
            account_login_modals.addEventListener("click", function() {
                openFormSigin_Signup();
            });

            forget_password_link.addEventListener("click", function() {
                openForgetPassword();
                popup_form.classList.add('mfp-hide')
            });

            popup_modal_dismiss.forEach(function(element) {
                element.addEventListener("click", function() {
                    closeModal();
                });
            });

            // popup_modal_dismiss.addEventListener("click", function() {
            // 	openForgetPassword();
            // });

        });
    </script>
    

</body>

</html>