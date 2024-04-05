<?php
$conn = new mysqli('localhost', 'root', '', 'testdata');
$conn->set_charset('utf8mb4');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDateTime = date('Y-m-d H:i:s');
echo $currentDateTime;
var_dump($currentDateTime);

$sql = 'INSERT INTO datetime (datetime) VALUES (?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $currentDateTime);
$stmt->execute();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: block;">
        <div class="messages error">
            <h2 class="element-invisible">Error message</h2>
            <ul>
                <li>Họ tên là bắt buộc.</li>
                <li>Điện thoại là bắt buộc.</li>
                <li>Mật khẩu là bắt buộc.</li>
                <li>Email đã tồn tại trên hệ thống!</li>
            </ul>
        </div>
    </div>
    <div>
        Maat khau <br>
        hao
    </div>
    <li class="dropdown notification notification-info common-tooltip">
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
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0;">
            <img class="bla-img-sm img-circle" width="24" height="24" typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/avatar_24_24/public/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG" alt=""> </a>
        <div class="dropdown-menu dropdown-menu-right py-0" id="menu-top-personal-menu" x-placement="top-end" aria-labelledby="dropdown-header-profiles" style="position: absolute; transform: translate3d(-210px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">

            <a class="dropdown-item " href="https://www.blacasa.vn/class">
                <i class="fa fa-flag" aria-hidden="true" style="width:20px;"></i> Xem các lớp mới</a>
            <a class="dropdown-item " href="https://www.blacasa.vn/huy-nguyen-080324/offer">
                <i class="fa fa-flag" aria-hidden="true" style="width:20px;"></i> Các đề nghị dạy đã gửi</a>

            <a class="dropdown-item bla-border-bottom" href="https://www.blacasa.vn/huy-nguyen-080324/class">
                <i class="fa fa-book" aria-hidden="true" style="width:20px;"></i> Yêu cầu tìm gia sư</a>
            <a class="dropdown-item" href="https://www.blacasa.vn/huy-nguyen-080324/object-saved?c=teacher">
                <i class="fa fa-heart-saved" aria-hidden="true" style="width:20px;"></i> Giáo viên đã lưu</a>
            <a class="dropdown-item" href="https://www.blacasa.vn/tao-lop-hoc">
                <i class="fa fa-plus-circle" aria-hidden="true" style="width:20px;"></i> Đăng yêu cầu mới</a>
            <a class="dropdown-item" href="https://www.blacasa.vn/huy-nguyen-080324/bpoint">
                <i class="fa fa-btc" aria-hidden="true" style="width:20px;"></i> Quản lý BPoint</a>
            <a class="dropdown-item" href="https://www.blacasa.vn/huy-nguyen-080324">
                <i class="fa fa-home" aria-hidden="true" style="width:20px;"></i> Trang cá nhân</a>
            <a class="dropdown-item" href="https://www.blacasa.vn/huy-nguyen-080324/account">
                <i class="fa fa-user" aria-hidden="true" style="width:20px;"></i> Cài đặt</a>
            <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true" style="width:20px;"></i> Đăng xuất</a>
        </div>
    </li>



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
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/pham-minh-khue-280123">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202301/28/-04-40-29276c030a64ad0946ba48df3bbc190247.JPEG" width="312" height="200" alt="pham-minh-khue-280123's picture" title="pham-minh-khue-280123's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/pham-minh-khue-280123">Phạm Minh Khuê</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Toán, Tiếng Việt, Tiếng Anh, Tiếng Đức</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Em là sinh viên năm nhất ngành ngôn ngữ và văn hóa Đức trường Đại học Ngoại Ngữ </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="64119" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/64119" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="64119" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-quang-hai">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/201907/02/-09-22-23c6e9e3e003860419b7aff6ec9ea05428.JPEG" width="312" height="200" alt="nguyen-quang-hai's picture" title="nguyen-quang-hai's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-quang-hai">Nguyễn Quang Hải</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Tiếng Anh</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Tôi có chứng chỉ IELTS 6.5, học chuyên ngành sư phạm tiếng Anh và đã có kinh nghiệm giảng dạy trong 2 năm.
                                                                            Có chứng chỉ... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="17950" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/17950" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="17950" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/tran-ha-050122">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202211/26/56987-12-50-5358ea00ddb24815a3613a82bce0e75bcc.JPEG" width="312" height="200" alt="tran-ha-050122's picture" title="tran-ha-050122's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/tran-ha-050122">Trần Hà</a></h4>
                                                                        <p><span>Vĩnh Phúc</span> |
                                                                            <span class="mon-hoc">Tiếng Anh, Lý, Toán</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Điểm tổng kết lí 9,4
                                                                            Điểm tổng kết toán 9,0
                                                                            Thủ khoa đầu vào chuyên ngành sư phạm Vật lý
                                                                            Đã có kinh nghiệm dạy
                                                                            Điểm... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="56987" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/56987" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="56987" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-thi-thu-huong-020522">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202205/02/59285-07-25-08c6fb9ff7e299d56bc3e482dc9b189138.JPEG" width="312" height="200" alt="nguyen-thi-thu-huong-020522's picture" title="nguyen-thi-thu-huong-020522's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-thi-thu-huong-020522">Nguyễn Thị Thu Hường</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Toán, Tiếng Anh</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Tôi hi vọng chúng ta sẽ cùng nhau gặt hái thành tựu. Tôi là người có trách nhiệm và tôi mong bạn cũng vậy. Tôi rất vui... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="59285" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/59285" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="59285" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/le-anh-van">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/201907/28/-11-36-01981ac425f4ea7b61f15ba59c398eb5b3.JPEG" width="312" height="200" alt="le-anh-van's picture" title="le-anh-van's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/le-anh-van">Lê Anh Văn</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Toán, Hóa</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Là 1 người năng động vui vẻ. Đạt nhiều thành tích cao trong học tập. Sinh viên năm 3 được tuyển thẳng vào đại học Dược... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="19230" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/19230" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="19230" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/dinh-cong-hoang-giang">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202403/07/-12-04-4219c3e8becf13b0f2be507d4b4bf3b5af.JPEG" width="312" height="200" alt="dinh-cong-hoang-giang's picture" title="dinh-cong-hoang-giang's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/dinh-cong-hoang-giang">Trần Đức Bo</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Tiếng Anh</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            trình độ IELTS 6.5+ . tính tình hoà đồng, dễ nói chuyện. giao tiếp tốt, kiến thức thực tế phong phú </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="45818" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/45818" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="45818" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-trong-nghia">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/201909/30/21771-06-57-1010469f40b784f637cab8b5f8c04c7a81.JPEG" width="312" height="200" alt="nguyen-trong-nghia's picture" title="nguyen-trong-nghia's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-trong-nghia">Nguyễn Trọng Nghĩa</a></h4>
                                                                        <p><span>Thái Bình</span> |
                                                                            <span class="mon-hoc">Tiếng Anh, Tiếng Hàn, Tiếng Trung</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Tốt nghiệp đại học Bách Khoa, đã đi làm.
                                                                            Có chứng chỉ tiếng anh A, B, C khả năng dạy tiếng Anh giao tiếp và các cấp 1,2... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="21771" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/21771" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="21771" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/ngoclannguyen">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202303/29/64610-11-37-2275441aaf912ab2c135877ba3d832f699.JPEG" width="312" height="200" alt="ngoclannguyen's picture" title="ngoclannguyen's picture">
                                                                        </a>
                                                                        <div class="cover-avatar-vip">
                                                                            <a href="https://www.giasuvip.vn" target="_blank">
                                                                                <img src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/logo-vip.png">
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/ngoclannguyen">NgọcLan Nguyễn</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Văn, Tiếng Việt</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span></span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Đã có kinh nghiệm gia sư. Học sinh đều tiếp thu bài tốt và có hưng thú với bài học. Nhờ có phương pháp dạy đảm bảo... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="64610" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/64610" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="64610" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-thanh-thu-190220">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202002/19/-12-42-199abab7f96cf41371ac819966320e9c61.JPEG" width="312" height="200" alt="nguyen-thanh-thu-190220's picture" title="nguyen-thanh-thu-190220's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-thanh-thu-190220">Nguyễn Thành Thự</a></h4>
                                                                        <p><span>Bình Định</span> |
                                                                            <span class="mon-hoc">Hóa</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Tôi hiện là gia sư dạy môn hóa tại nhà, tính đến nay đã được 3 năm giảng dạy. Với lòng yêu nghề giáo và nhiệt huyết của... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="27953" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/27953" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="27953" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/son-cao">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202105/19/-11-45-079b1ccb5a42f330c40115ffc34bbd9a09.JPEG" width="312" height="200" alt="son-cao's picture" title="son-cao's picture">
                                                                        </a>
                                                                        <div class="cover-avatar-vip">
                                                                            <a href="https://www.giasuvip.vn" target="_blank">
                                                                                <img src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/logo-vip.png">
                                                                            </a>

                                                                        </div>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/son-cao">Phạm Lê Cao Sơn</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc"></span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span></span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Hiện tại là sinh viên năm 3 chuyên ngành Kinh Doanh Quốc Tế, trường Đại học Kinh tế Quốc dân Hà Nội. Mình có tư duy... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="41799" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/41799" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="41799" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-thi-thu-hoa">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/201804/23/nguyen-thi-thu-hoa-04-32-40453fb8a7f4577ec9f61946509aa56069.JPEG" width="312" height="200" alt="nguyen-thi-thu-hoa's picture" title="nguyen-thi-thu-hoa's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-thi-thu-hoa">Nguyễn Thị Thư Hòa</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Toán, Lý, Tiếng Anh</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Tôi học toán 1, trường chuyên Nguyễn Huệ; rồi học Đại Học Khoa học Tự Nhiên Hà Nội, ngành toán học và tốt nghiệp thạc... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="2705" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/2705" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="2705" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
                                                        <div class="col col-md-3 col-sm-6">
                                                            <div class="box-content">
                                                                <div class="tile-v-12">
                                                                    <div class="img">
                                                                        <a href="https://www.blacasa.vn/nguyen-thi-mai-anh-250721">
                                                                            <img typeof="foaf:Image" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/styles/312x200/public/image/202107/25/-03-19-55617162cb3ff9292c618f076d0b99a8e1.JPEG" width="312" height="200" alt="nguyen-thi-mai-anh-250721's picture" title="nguyen-thi-mai-anh-250721's picture">
                                                                        </a>
                                                                    </div>
                                                                    <div class="name">
                                                                        <h4><a href="/nguyen-thi-mai-anh-250721">Nguyễn Thị Mai Anh</a></h4>
                                                                        <p><span>Hà Nội</span> |
                                                                            <span class="mon-hoc">Toán, Văn, Tiếng Việt, Lịch sử</span>
                                                                        </p>
                                                                        <p class="cost">
                                                                            <span> </span>

                                                                        </p>

                                                                        <span class="number not-review">.</span>
                                                                    </div><!-- /.name -->

                                                                    <div class="description">
                                                                        <div class="view">
                                                                            Hiện đang là sinh viên đại học sư phạm Hà Nội
                                                                            Đã có kinh nghiệm dạy gia sư
                                                                            Từng tham gia các cuộc thi HSG các môn Văn,... </div>
                                                                    </div><!-- /.description -->
                                                                    <div class="btn-bottom text-right">
                                                                        <div class="btn-data" data-object="47125" data-type="user"></div>
                                                                        <!--<button class="invitation"  data-object="" data-type="user" data-studygroup="">Mời dạy</button> -->
                                                                        <a href="/invitation-teacher/47125" class="btn btn-default ctools-use-modal ctools-use-modal-processed" rel="nofollow">Mời dạy</a> <button class="btn btn-default save save-favorite favorite-gray" data-id="47125" data-type="user"><i class="fa fa-heart-save"></i> <span class="text">Lưu</span></button>
                                                                    </div>
                                                                </div><!-- /.tile-v-12 -->
                                                            </div>

                                                        </div>
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

    <div class="dropdown-menu dropdown-menu-right py-0 show" id="menu-top-personal-menu" x-placement="top-end" aria-labelledby="dropdown-header-profiles" style="position: absolute; transform: translate3d(-210px, 0px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a class="dropdown-item bla-border-bottom" href="https://www.blacasa.vn/nguyen-270324/class">
            <i class="fa fa-book" aria-hidden="true" style="width:20px;"></i> Yêu cầu tìm gia sư</a>
        <a class="dropdown-item" href="https://www.blacasa.vn/nguyen-270324/object-saved?c=teacher">
            <i class="fa fa-heart-saved" aria-hidden="true" style="width:20px;"></i> Giáo viên đã lưu</a>
        <a class="dropdown-item" href="https://www.blacasa.vn/tao-lop-hoc">
            <i class="fa fa-plus-circle" aria-hidden="true" style="width:20px;"></i> Đăng yêu cầu mới</a>
        <a class="dropdown-item" href="https://www.blacasa.vn/nguyen-270324/bpoint">
            <i class="fa fa-btc" aria-hidden="true" style="width:20px;"></i> Quản lý BPoint</a>
        <a class="dropdown-item" href="https://www.blacasa.vn/nguyen-270324">
            <i class="fa fa-home" aria-hidden="true" style="width:20px;"></i> Trang cá nhân</a>
        <a class="dropdown-item" href="https://www.blacasa.vn/nguyen-270324/account">
            <i class="fa fa-user" aria-hidden="true" style="width:20px;"></i> Cài đặt</a>
        <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true" style="width:20px;"></i> Đăng xuất</a>
    </div>

    <div class="container user-manage">
        <div class="row">
            <!--Menu trái-->
            <div class="col-md-3  custom-w-left navbar-profile-left">
                <div class="nav-profile detail-nav w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left " id="mySidebar">
                    <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" style="margin-left:0;border:none;">
                        Close &times;</button>
                    <ul id="accordion" class="accordion">
                        <li class="">
                            <div class="link"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Quản lý yêu cầu<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li class="active"><a href="/huy-nguyen-080324/class">Tất cả lớp đã đăng</a></li>
                                <!--<li class=""></li>-->
                                <li class=""><a href="/tao-lop-hoc" class="active">Đăng yêu cầu tìm gia sư mới</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <div class="link"><i class="fa fa-comments"></i><a href="/huy-nguyen-080324/messages">Hội thoại và tin nhắn</a></div>
                        </li>
                        <li class="">
                            <div class="link"><i class="fa fa-bell" aria-hidden="true"></i>Thông báo<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li class="active"><a href="/huy-nguyen-080324/notifications">Tất cả</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <div class="link"><i class="fa fa-heart-saved"></i>Đã lưu<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu">
                                <li class=""><a href="/huy-nguyen-080324/object-saved?c=classes">Yêu cầu tìm giáo viên</a></li>
                                <li class=""><a href="/huy-nguyen-080324/object-saved?c=teacher">Giáo viên</a></li>
                            </ul>
                        </li>
                        <li class="">
                            <div class="link"><i class="fa fa-btc"></i><a href="/huy-nguyen-080324/bpoint">Quản lý BPoint</a></div>
                        </li>
                        <li class="open">
                            <div class="link"><i class="fa fa-flag" aria-hidden="true"></i>Thông tin cá nhân<i class="fa fa-chevron-down"></i></div>
                            <ul class="submenu" style="display: block;">
                                <li class="active"><a href="/huy-nguyen-080324/account" class="active">Sửa thông tin cá nhân</a></li>
                                <li><a href="/huy-nguyen-080324/settings">Thay đổi email, mật khẩu</a></li>
                            </ul>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-9 custom-w-right" id="ajax-content-user-load" style="padding:0">
                <div id="ajax-user-load-page">
                    <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
                    <div class="region region-content">
                        <div id="block-system-main" class="block block-system">


                            <div class="content">
                                <div id="thong-tin-chung">
                                    <div class="list-categories">
                                        <div class="gblock-v2">

                                            <div class="header-block">
                                                <span>Hồ sơ giáo viên</span>
                                            </div>

                                            <!--Hiện dialog nếu chưa là giáo viên-->
                                            <div class="alert-page">
                                                <div class="row">
                                                    <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="memberModalLabel">Xin chào Huy Nguyen ! </h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p><i class="fa fa-face-sad" aria-hidden="true" style="font-size: 30px;color: red;"></i>
                                                                        Tài khoản đăng ký giáo viên của bạn đã sắp hoàn thành, chỉ còn thiếu một vài thông tin nữa.
                                                                        Để có thể hoàn thành đăng ký và nhận được lớp dạy, xin vui lòng hoàn thiện các thông tin còn thiếu sau:</p>
                                                                    <p>
                                                                        <label class='field_missing'>Tỉnh/Thành phố</label>, <label class='field_missing'>Địa chỉ cụ thể</label>, <label class='field_missing'>Nghề nghiệp</label>, <label class='field_missing'>Môn học</label>, <label class='field_missing'>Mô tả bản thân</label>, <label class='field_missing'>Lịch dạy</label>, <label class='field_missing'>Giá học phí</label>,
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" data-dismiss="modal" aria-label="CẬP NHẬT NGAY">HOÀN THIỆN NGAY</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!--alert-->


                                            <div class="body-block">
                                                <!--Part 1: thông tin cá nhân-->
                                                <form id="update-profile-form" action="/ajax-update-profile" method="POST" enctype="multipart/form-data">

                                                    <div class="info-step-1 info-step">
                                                        <h3>Thông tin cá nhân</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>HỌ TÊN ĐẦY ĐỦ <span class="teacher-alert">*</span></label>
                                                                <input type="hidden" name="account-uid" value="66604">
                                                                <input type="text" name="full_name" class="form-control" id="full_name" oninput="changeStatusInput()" onkeypress="changeStatusInput()" value="Huy Nguyen" required>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>ĐIỆN THOẠI <span class="teacher-alert">*</span> </label>
                                                                <input type="text" name="number" class="form-control" oninput="changeStatusInput()" onkeypress="changeStatusInput()" id="number" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="0223456788">
                                                            </div>

                                                            <div class="col-md-6">
                                                                <label>TỈNH/THÀNH PHỐ ĐANG SỐNG <span class="teacher-alert">*</span> </label>
                                                                <select name="place" id="place" class="form-control">
                                                                    <option value="" disabled selected>Lựa chọn</option>
                                                                    <optgroup label='Địa điểm phổ biến'>
                                                                        <option value='1'>Hà Nội</option>
                                                                        <option value='2'>Hồ Chí Minh</option>
                                                                        <option value='10'>Hải Phòng</option>
                                                                        <option value='3'>Đà Nẵng</option>
                                                                        <option value='11'>Cần Thơ</option>
                                                                    <optgroup label='Tỉnh, thành phố khác'>
                                                                        <option value='17'>An Giang</option>
                                                                        <option value='18'>Bà Rịa-Vũng Tàu</option>
                                                                        <option value='21'>Bắc Giang</option>
                                                                        <option value='20'>Bắc Kạn</option>
                                                                        <option value='19'>Bạc Liêu</option>
                                                                        <option value='22'>Bắc Ninh</option>
                                                                        <option value='23'>Bến Tre</option>
                                                                        <option value='14'>Bình Dương</option>
                                                                        <option value='25'>Bình Phước</option>
                                                                        <option value='26'>Bình Thuận</option>
                                                                        <option value='24'>Bình Định</option>
                                                                        <option value='27'>Cà Mau</option>
                                                                        <option value='28'>Cao Bằng</option>
                                                                        <option value='29'>Đắk Lắk</option>
                                                                        <option value='30'>Đắk Nông</option>
                                                                        <option value='31'>Điện Biên</option>
                                                                        <option value='13'>Đồng Nai</option>
                                                                        <option value='32'>Đồng Tháp</option>
                                                                        <option value='33'>Gia Lai</option>
                                                                        <option value='34'>Hà Giang</option>
                                                                        <option value='35'>Hà Nam</option>
                                                                        <option value='36'>Hà Tây cũ (Hà Nội)</option>
                                                                        <option value='37'>Hà Tĩnh</option>
                                                                        <option value='38'>Hải Dương</option>
                                                                        <option value='40'>Hậu Giang</option>
                                                                        <option value='39'>Hòa Bình</option>
                                                                        <option value='12'>Thừa Thiên Huế</option>
                                                                        <option value='41'>Hưng Yên</option>
                                                                        <option value='42'>Khánh Hòa</option>
                                                                        <option value='43'>Kiên Giang</option>
                                                                        <option value='44'>Kon Tum</option>
                                                                        <option value='45'>Lai Châu</option>
                                                                        <option value='48'>Lâm Đồng</option>
                                                                        <option value='47'>Lạng Sơn</option>
                                                                        <option value='46'>Lào Cai</option>
                                                                        <option value='49'>Long An</option>
                                                                        <option value='50'>Nam Định</option>
                                                                        <option value='51'>Ninh Bình</option>
                                                                        <option value='52'>Ninh Thuận</option>
                                                                        <option value='16'>Nghệ An</option>
                                                                        <option value='53'>Phú Thọ</option>
                                                                        <option value='54'>Phú Yên</option>
                                                                        <option value='55'>Quảng Bình</option>
                                                                        <option value='56'>Quảng Nam</option>
                                                                        <option value='57'>Quảng Ngãi</option>
                                                                        <option value='58'>Quảng Ninh</option>
                                                                        <option value='59'>Quảng Trị</option>
                                                                        <option value='60'>Sóc Trăng</option>
                                                                        <option value='61'>Sơn La</option>
                                                                        <option value='62'>Tây Ninh</option>
                                                                        <option value='63'>Thái Bình</option>
                                                                        <option value='64'>Thái Nguyên</option>
                                                                        <option value='15'>Thanh Hóa</option>
                                                                        <option value='65'>Tiền Giang</option>
                                                                        <option value='66'>Trà Vinh</option>
                                                                        <option value='67'>Tuyên Quang</option>
                                                                        <option value='68'>Vĩnh Long</option>
                                                                        <option value='69'>Vĩnh Phúc</option>
                                                                        <option value='70'>Yên Bái</option>
                                                                    <optgroup label='International cities'>
                                                                        <option value='141'>Cities in Asia</option>
                                                                        <option value='146'>Cities in Africa</option>
                                                                        <option value='145'>Cities in Australia (Oceania)</option>
                                                                        <option value='142'>Cities in Europe</option>
                                                                        <option value='143'>Cities in North America</option>
                                                                        <option value='144'>Cities in South America</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <label>ĐỊA CHỈ CỤ THỂ <span class="teacher-alert">*</span> </label>
                                                                <input type="text" name="address-detail" class="form-control" id="address-detail" oninput="changeStatusInput()" onkeypress="changeStatusInput()" value="">
                                                                <input type="hidden" name="latitude" id="latitude" value="">
                                                                <input type="hidden" name="longitude" id="longitude" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--map-->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <!--using embed map-->
                                                            <div id="map-container">
                                                                <iframe id="iframe-map" width="100%" height="350px" frameborder="0" style="border:0" src="" allowfullscreen>
                                                                </iframe>
                                                            </div>

                                                            <!--using dynamic map
              <div id="map" style="width: 100%;height: 200px;"></div>
								-->
                                                        </div>
                                                    </div>

                                                    <div class="row info-step-3 info-step">
                                                        <div class="col-md-12">
                                                            <label>MÔ TẢ BẢN THÂN, KINH NGHIỆM & BẰNG CẤP <span class="teacher-alert">*</span></label><br>
                                                            <i>(Bạn cần ghi đầy đủ ưu điểm của bản thân để được nhận lớp trong thời gian sớm nhất, <a href="#gs_huong_dan" class="popup-modal">xem hướng dẫn</a>)</i>

                                                            <textarea id="mo-ta-ban-than" oninput="changeStatusInput()" onkeypress="changeStatusInput()" style="margin-top: 20px" placeholder="Mô tả bản thân, bằng cấp và kinh nghiệm của bạn (nên dài hơn 150 chữ cái)..." name="body"></textarea>

                                                        </div>
                                                    </div>

                                                    <!-- YEU CAU GIANH CHO GIAO VIEN -->
                                                    <div class="row info-step-1 info-step">
                                                        <div class="col-md-12">
                                                            <h3>Hồ sơ chuyên môn</h3>
                                                            <div class="kieu-giao-vien">
                                                                <label style="border:none;background-color:#fff; padding:0;margin:0">BẠN ĐANG LÀ? (Bấm để chọn) <span class="teacher-alert">*</span> </label>
                                                                <div style="margin-top:10px;">
                                                                    <select name="type_teacher_field" id="type_teacher_field" class="form-control" style="max-width: 300px">
                                                                        <option selected disabled value="">Lựa chọn</option>
                                                                        <option value='1'>Sinh viên</option>

                                                                        <option value='3'>Giáo viên</option>

                                                                        <option value='9'>Người nước ngoài</option>

                                                                        <option value='2'>Người đi làm</option>

                                                                        <option value='8'>Chuyên gia</option>

                                                                        <option value='0'>Học sinh</option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="hinh-thuc-day">
                                                                <label>HÌNH THỨC DẠY <span class="teacher-alert">*</span> </label>
                                                                <div>
                                                                    <input type="checkbox" id="offline-type" name="offline-type" value="0" checked>
                                                                    <span style="padding-right:20px;">Gặp mặt</span>
                                                                    <input type="checkbox" id="online-type" name="online-type" value="1">
                                                                    Trực tuyến
                                                                </div>
                                                            </div>

                                                            <div class="hoc-phi">
                                                                <label>HỌC PHÍ 1 GIỜ (VNĐ) <span class="teacher-alert">*</span> </label>
                                                                <input type="text" class="numberOnly form-control" autocomplete="off" oninput="changeStatusInput()" onkeypress="changeStatusInput()" placeholder="Ví dụ:100,000" maxlength="14" name="price_cost" id="price_cost" value="">
                                                            </div>
                                                            <div class="mon_hoc">
                                                                <label>MÔN HỌC SẼ DẠY</label> </br>

                                                                <select name="subject[]" id="select-subject" multiple="multiple">
                                                                    <option value='72'>Toán</option>
                                                                    <option value='73'>Lý</option>
                                                                    <option value='74'>Hóa</option>
                                                                    <option value='76'>Văn</option>
                                                                    <option value='677'>Tiếng Việt</option>
                                                                    <option value='406'>Lịch sử</option>
                                                                    <option value='407'>Địa lý</option>
                                                                    <option value='81'>Sinh</option>
                                                                    <option value='410'>Môn phổ thông khác</option>
                                                                    <option value='71'>Tiếng Anh</option>
                                                                    <option value='82'>Tiếng Nhật</option>
                                                                    <option value='83'>Tiếng Hàn</option>
                                                                    <option value='85'>Tiếng Đức</option>
                                                                    <option value='84'>Tiếng Pháp</option>
                                                                    <option value='409'>Tiếng Trung</option>
                                                                    <option value='86'>Ngoại ngữ khác</option>
                                                                    <option value='77'>Kỹ năng mềm</option>
                                                                    <option value='404'>Nuôi dạy trẻ</option>
                                                                    <option value='411'>Công nghệ thông tin</option>
                                                                    <option value='412'>Thiết kế - Đồ họa - Video</option>
                                                                    <option value='90'>Sales - Marketing</option>
                                                                    <option value='682'>Ẩm thực</option>
                                                                    <option value='95'>Ngành nghề khác</option>
                                                                    <option value='97'>Âm nhạc</option>
                                                                    <option value='99'>Hội họa</option>
                                                                    <option value='101'>Dance (nhảy)</option>
                                                                    <option value='78'>Gyms, yoga, fitness</option>
                                                                    <option value='102'>Thể thao khác</option>
                                                                    <option value='103'>Nghệ thuật khác</option>
                                                                </select>
                                                            </div>

                                                            <div class="group-tag">

                                                            </div>


                                                        </div> <!--Ho so chuyen mon -->
                                                    </div>

                                                    <div class="row info-step-2 info-step">
                                                        <label>LỊCH CÓ THỂ NHẬN LỚP <span class="teacher-alert">*</span> </label>
                                                        <div class="content-info-step-2">
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 2</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-2'>Sáng</label><input class='radio-calendar' id='morning-calendar-2' type='checkbox' name='sang_2' value='sang_2'></li>
                                                                    <li><label for='afternoon-calendar-2'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-2' type='checkbox' name='chieu_2' value='chieu_2'></li>
                                                                    <li><label for='evening-calendar-2'>Tối</label><input class='radio-calendar' id='evening-calendar-2' type='checkbox' name='toi_2' value='toi_2'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 3</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-3'>Sáng</label><input class='radio-calendar' id='morning-calendar-3' type='checkbox' name='sang_3' value='sang_3'></li>
                                                                    <li><label for='afternoon-calendar-3'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-3' type='checkbox' name='chieu_3' value='chieu_3'></li>
                                                                    <li><label for='evening-calendar-3'>Tối</label><input class='radio-calendar' id='evening-calendar-3' type='checkbox' name='toi_3' value='toi_3'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 4</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-4'>Sáng</label><input class='radio-calendar' id='morning-calendar-4' type='checkbox' name='sang_4' value='sang_4'></li>
                                                                    <li><label for='afternoon-calendar-4'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-4' type='checkbox' name='chieu_4' value='chieu_4'></li>
                                                                    <li><label for='evening-calendar-4'>Tối</label><input class='radio-calendar' id='evening-calendar-4' type='checkbox' name='toi_4' value='toi_4'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 5</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-5'>Sáng</label><input class='radio-calendar' id='morning-calendar-5' type='checkbox' name='sang_5' value='sang_5'></li>
                                                                    <li><label for='afternoon-calendar-5'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-5' type='checkbox' name='chieu_5' value='chieu_5'></li>
                                                                    <li><label for='evening-calendar-5'>Tối</label><input class='radio-calendar' id='evening-calendar-5' type='checkbox' name='toi_5' value='toi_5'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 6</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-6'>Sáng</label><input class='radio-calendar' id='morning-calendar-6' type='checkbox' name='sang_6' value='sang_6'></li>
                                                                    <li><label for='afternoon-calendar-6'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-6' type='checkbox' name='chieu_6' value='chieu_6'></li>
                                                                    <li><label for='evening-calendar-6'>Tối</label><input class='radio-calendar' id='evening-calendar-6' type='checkbox' name='toi_6' value='toi_6'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Thứ 7</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-7'>Sáng</label><input class='radio-calendar' id='morning-calendar-7' type='checkbox' name='sang_7' value='sang_7'></li>
                                                                    <li><label for='afternoon-calendar-7'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-7' type='checkbox' name='chieu_7' value='chieu_7'></li>
                                                                    <li><label for='evening-calendar-7'>Tối</label><input class='radio-calendar' id='evening-calendar-7' type='checkbox' name='toi_7' value='toi_7'></li>
                                                                </ul>
                                                            </div>
                                                            <div class='row-calendar-check'>
                                                                <h4>Chủ nhật</h4>
                                                                <ul>
                                                                    <li><label for='morning-calendar-8'>Sáng</label><input class='radio-calendar' id='morning-calendar-8' type='checkbox' name='sang_8' value='sang_8'></li>
                                                                    <li><label for='afternoon-calendar-8'>Chiều</label><input class='radio-calendar' id='afternoon-calendar-8' type='checkbox' name='chieu_8' value='chieu_8'></li>
                                                                    <li><label for='evening-calendar-8'>Tối</label><input class='radio-calendar' id='evening-calendar-8' type='checkbox' name='toi_8' value='toi_8'></li>
                                                                </ul>
                                                            </div>
                                                            <p class="note-calender">Bấm để chọn lịch. <span>Màu xanh</span> là những buổi có thể nhận dạy.</p>
                                                        </div>
                                                    </div>
                                                    <div class="action-form">
                                                        <input name="submit-info" type="submit" value="Cập nhật">
                                                    </div>
                                                </form>

                                                <!-- Part 2: Cập nhật ảnh: avatar, Bằng cấp, chứng minh thư -->
                                                <div class="info-step-5 info-step" style="border-top: 10px solid #f7f7f7;margin:20px -5px 0 -5px;">
                                                    <h3>Ảnh xác nhận thông tin gia sư</h3>
                                                    <div class="row  verifired-img">
                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="title-update">ẢNH ĐẠI DIỆN (PHẢI RÕ MẶT, CHỤP MỘT MÌNH) <span class="teacher-alert">*</span></label>
                                                                    <div class="image-info" id="user-avata">
                                                                        <a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG" target="_blank"><img id="show_avatar" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG"> </a>

                                                                        <div class="box">
                                                                            <input type="file" name="edit_avatar_account" class="inputfile" id="edit_avatar_account" onchange="return ajax_update_image('edit_avatar_account','show_avatar',624,'/ajax-update-image/avatar/66604')">
                                                                            <label for="edit_avatar_account"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                                                </svg> <span>Chọn ảnh&hellip;</span></label>
                                                                        </div>
                                                                    </div>




                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="tip-update">
                                                                        <p>* Tip: Để thể hiện sự chuyên nghiệp của mình với học viên & phụ huynh,
                                                                            bạn hãy chọn ảnh đại diện đẹp, chụp một mình và nhìn rõ khuôn mặt
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="title-update">THẺ SINH VIÊN HOẶC BẰNG CẤP (BẢO MẬT TUYỆT ĐỐI; KHÔNG HIỂN THỊ) <span class="teacher-alert">*</span> </label>
                                                                    <div class="image-info" id="image-bang-cap">
                                                                        <a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/66604-10-53-265a07e319af49f4dd11d3111ac210249a_cert.JPEG" target="blank">
                                                                            <img id="show-img-cert" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/66604-10-53-265a07e319af49f4dd11d3111ac210249a_cert.JPEG">
                                                                        </a>

                                                                        <div class="box">
                                                                            <input type="file" name="img_cmt_cert" class="inputfile" id="img_cmt_cert" onchange="return ajax_update_image('img_cmt_cert','show-img-cert',650,'/ajax-update-image/img_cmt_cert/66604')">
                                                                            <label for="img_cmt_cert"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                                                </svg> <span>Chọn ảnh&hellip;</span></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="tip-update">
                                                                        <p>* Tip: Hãy cập nhật ảnh chụp thẻ sinh viên hoặc Bằng cấp chuyên môn CAO NHẤT của bạn. Ví dụ: bằng cấp 3, bằng đại học, thạc sỹ, tiến sỹ,vv.
                                                                            Cập nhật để học viên có thể đánh giá chuyên môn của bạn. Ảnh chụp phải rõ nét, không bị mờ chữ, có thể đọc được số.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label class="title-update">CHỨNG MINH THƯ MẶT TRƯỚC (BẢO MẬT TUYỆT ĐỐI; KHÔNG HIỂN THỊ) <span class="teacher-alert">*</span> </label>
                                                                    <div class="image-info " id="image-cmt">
                                                                        <a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/66604-10-53-569b0e37ebd68573f3ef1b29ac1518cf78_passport.JPEG" target="blank">
                                                                            <img id="show-img-front" src="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/66604-10-53-569b0e37ebd68573f3ef1b29ac1518cf78_passport.JPEG">
                                                                        </a>


                                                                        <div class="box">
                                                                            <input type="file" name="img_cmt_front" class="inputfile" id="img_cmt_front" onchange="return ajax_update_image('img_cmt_front','show-img-front',650,'/ajax-update-image/img_cmt_front/66604')">
                                                                            <label for="img_cmt_front"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
                                                                                    <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
                                                                                </svg> <span>Chọn ảnh&hellip;</span></label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="tip-update">
                                                                        <p>* Tip: Dùng để xác thực cá nhận khi tới dạy: Chứng minh thư hoặc thẻ căn cước, hoặc Hộ chiếu. Thông tin này sẽ ở chế độ riêng tư
                                                                            và chúng tôi cam kết sẽ BẢO MẬT thông tin và KHÔNG SỬ DỤNG VÀO MỤC ĐÍCH KHÁC. Ảnh chụp phải rõ nét, không bị mờ chữ, có thể đọc được số.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End part 2 -->

                                                <!--Part 3: Phần duyệt hồ sơ Gia sư-->

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="gs_huong_dan" class="white-popup-block mfp-hide">
                                    <div class="box-title"><b>HƯỚNG DẪN</b></div>
                                    <a class="popup-modal-dismiss" href="#" style="top: 15px;right: 15px;border: 1px solid #ccc !important;">x</a>
                                    <div class="body-block">
                                        <p>Giới thiệu trung thực về thành tích học tập, kinh nghiệm, phương pháp dạy cũng như đôi nét thú vị về bản thân bạn. Hồ sơ của bạn sẽ được gửi tới Phụ huynh & Học sinh lựa chọn vậy nên các bạn hướng người đọc đến đối tượng là phụ huynh & học sinh. Bạn phải nói được cho họ biết vì sao họ chọn bạn mà không phải là gia sư khác! Ví dụ bạn học trường top đầu Việt Nam thì bạn có thể đưa ra điểm thi ĐH, thành tích HSG của bạn cho phụ huynh xem nhưng nếu bạn học trường bình thường thì phải đưa ra các lí do khác như học phí rẻ, yêu thích việc dạy học để những gia đình có điều kiện bình thường họ chọn bạn. <a href="/nguyen-thi-thao53">Tham khảo</a> phần tự giới thiệu của các gia sư khác để viết được 1 phần giới thiệu thật hay nhé!</p>
                                        <p>Lưu ý: Rất nhiều bạn gia sư giỏi nhưng vẫn chưa nhận được lớp hoặc nhận được những lớp lương thấp không phù hợp với năng lực vì phần tự giới thiệu quá sơ sài, sai chính tả, đặt dấu câu bừa bãi, không chịu chăm chút câu chữ để làm nổi bật bản thân. Nếu các bạn học chuyên cấp 3 thì ghi rõ chuyên gì, trường chuyên nào. Nếu đạt HSG Quận/Huyện, Tỉnh/TP, Quốc Gia thì ghi rõ giải mấy, môn gì, năm lớp mấy. Ghi rõ điểm ĐH/CĐ các môn cụ thể. Nếu đã từng đi dạy thì nêu rõ đã dạy cho những em học sinh nào, lớp mấy, nhà ở đâu, tiến bộ cụ thể như thế nào? Nếu được nhận làm gia sư thì nêu rõ phương pháp dạy như thế nào, phong cách dạy ra làm sao?</p>
                                    </div>
                                </div>
                                <style>
                                    .mapboxgl-ctrl-geocoder {
                                        width: 100% !important;
                                        max-width: none !important;
                                        box-shadow: none !important;
                                    }

                                    .mapboxgl-ctrl-geocoder--icon-search {
                                        display: none !important;
                                    }

                                    .action-form-admin {
                                        background-color: #dcd8d8;
                                        padding: 10px;
                                    }

                                    .action-form-admin h3 {
                                        font-size: 20px !important;
                                        font-weight: bold;
                                        padding: 10px 0 20px 5px;
                                        margin: 0;
                                        color: #009e86;
                                    }
                                </style>
                                <script>
                                    function districtchange() {
                                        var place = $('#place_name').val();
                                        var district = $('#district').val();
                                        //step 2: add new options in select box according to the new place
                                        get_place_option('place-district-ward', place, district);
                                    }
                                </script>
                                <script type="text/javascript">
                                    $('.kieu-giao-vien label').click(function() {
                                        if ($(this).hasClass("lbl-active")) {
                                            //$(this).removeClass("lbl-active");
                                        } else {
                                            $(".action-form input").prop("disabled", false);
                                            $(".action-form input").removeClass("input-disabled");
                                            $('.kieu-giao-vien label').removeClass("lbl-active");
                                            $(this).addClass("lbl-active");
                                        }
                                    });
                                    $(function() {
                                        //popup-form-alert
                                        $('#memberModal').modal('show');
                                        $("#popup-form-alert .popup-dismiss").click(function() {
                                            $("#popup-form-alert").hide();
                                        });

                                        //END popup-form-alert
                                        var date_input = $('#birthday'); //our date input has the name "date"
                                        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
                                        date_input.datepicker({
                                            changeMonth: true,
                                            changeYear: true,
                                            yearRange: "-40:-14",
                                            dateFormat: 'dd-mm-yy',
                                            todayHighlight: true,
                                            autoclose: true,
                                        })

                                        //Javascript subjects  
                                        $('#select-subject').multiselect({
                                            includeSelectAllOption: true
                                        });
                                        //$('#select-subject').chosen();
                                        if ($("#select-subject").val() == "" || !$("#select-subject").val()) {
                                            $(".btn-group").addClass("missing-value");
                                        }
                                        $(".multiselect-container input").on('change', function() {
                                            $(".multiselect-container input").attr("disabled", true)
                                            var subject = [];
                                            if ($(this).is(':checked') == true) {
                                                var subject_send;
                                                //subject.push(this.value);
                                                //$(".multiselect-container .active input").each(function() {
                                                //subject.push(this.value);
                                                //});
                                                if (subject.length >= 4) {
                                                    subject = [];
                                                    alert("Bạn chỉ có thể chọn tối đa 3 môn học!");
                                                    $(this).prop('checked', false);
                                                    $(".multiselect-container input").attr("disabled", false);
                                                } else {
                                                    subject_send = this.value;
                                                }

                                                //console.log("CHECK");
                                                //   	var subject = this.value;
                                                //ajax-get-tag/%
                                                if (subject_send) {
                                                    //$(".group-tag").empty();
                                                    //$(".group-tag").append( "<div class='loading-small'></div>" );
                                                    var role = "học viên";
                                                    var url = '/ajax-get-tag';
                                                    $.ajax({
                                                        url: url,
                                                        type: 'POST',
                                                        data: {
                                                            data: subject_send,
                                                            role: role
                                                        },
                                                        dataType: 'html',
                                                        success: function(result) {
                                                            $(".multiselect-container input").attr("disabled", false);
                                                            //$(".loading-small").remove();
                                                            $(".group-tag").append(result);
                                                            $('#' + subject_send + '-tag label').click(function() {
                                                                if ($(this).hasClass("lbl-active")) {
                                                                    $(this).removeClass("lbl-active");
                                                                } else {
                                                                    $(this).addClass("lbl-active");
                                                                }
                                                            });

                                                        }
                                                    });
                                                }

                                            } else {
                                                //console.log("UN CHECK",this.value);
                                                $(".multiselect-container input").attr("disabled", false);
                                                $(".multiselect-container .active input").each(function() {
                                                    subject.push(this.value);
                                                });
                                                removeItem(subject, this.value);
                                                if (subject.length == 0) {
                                                    $(".multiselect-container input").attr("disabled", false);
                                                }
                                                var subject_remove = "#" + this.value + "-tag";
                                                $(subject_remove).remove();
                                            }



                                        });

                                        function removeItem(array, item) {
                                            for (var i in array) {
                                                if (array[i] == item) {
                                                    array.splice(i, 1);
                                                    break;
                                                }
                                            }
                                        }

                                    });
                                </script>

                                <script type="text/javascript">
                                    /*@summary: call functions after page load*/
                                    $(document).ready(function() {
                                        var nowLat = Number($("#latitude").val());
                                        var nowLng = Number($("#longitude").val());
                                        if (!nowLat || nowLat == "" || !nowLng || nowLng == "") {
                                            getCurentPosition();
                                        } else {
                                            displayEmbedMap('#iframe-map');
                                        }
                                    });

                                    /*Nếu tỉnh/thành phố thay đổi thì lấy vị trí mạc định của tỉnh đó*/
                                    $("#place").on('change', function() {
                                        var address = $("#place option:selected").text();
                                        var nowLat = Number($("#latitude").val());
                                        var nowLng = Number($("#longitude").val());
                                        if (!nowLat || nowLat == "" || !nowLng || nowLng == "") {
                                            var geocoder = new google.maps.Geocoder();
                                            geocoder.geocode({
                                                'address': address
                                            }, function(results, status) {
                                                //console.log("RUNNN");
                                                if (status == google.maps.GeocoderStatus.OK) {
                                                    var latitude = results[0].geometry.location.lat();
                                                    var longitude = results[0].geometry.location.lng();
                                                    $("#latitude").val(latitude);
                                                    $("#longitude").val(longitude);
                                                    $("#address-detail").val("");
                                                    displayEmbedMap('#iframe-map');
                                                }
                                            });
                                        }

                                    });
                                </script>
                                <script type="text/javascript">
                                    /*@summary: Display Map using embed map instead of dynamic map*/
                                    function displayEmbedMap(mapSelector) {
                                        var nowLat = Number($("#latitude").val());
                                        var nowLng = Number($("#longitude").val());
                                        if (!nowLat || nowLat == "") {
                                            var nowPos = {
                                                lat: 21.0277644,
                                                lng: 105.83415979999995
                                            };
                                        }
                                        var mapsourceURL = "https://www.google.com/maps/embed/v1/place?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8&q=" + nowLat + "," + nowLng + "&zoom=13&maptype=roadmap";
                                        $(mapSelector).attr("src", mapsourceURL);
                                    }


                                    /*//old code need to be reviewed
  //Chạy cho google
  var getAuto = false;
  function initMap() { 
		//Setup Autocomplete		
    var input = document.getElementById('address-detail');    
    var autocomplete = new google.maps.places.Autocomplete(input);

    // Bind the map's bounds (viewport) property to the autocomplete object,
    // so that the autocomplete requests use the current map bounds for the
    // bounds option in the request.
    //autocomplete.bindTo('bounds', map);
    autocomplete.addListener('place_changed', function() {
      //marker.setVisible(true);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        getAuto = false;
      }else{
        getAuto = true;
				//update new lat, lng vào input fields
        var lat = place.geometry.location.lat();
        var lng = place.geometry.location.lng();
        $("#latitude").val(lat);
        $("#longitude").val(lng);
				//update displaying map
				displayEmbedMap('#iframe-map');
        $(".action-form input").prop("disabled",false);
        $(".action-form input").removeClass("input-disabled");
      }
    });
  }*/

                                    /*Code moi goong.io
                                    var geocoder = new GoongGeocoder({
                                      accessToken: 'QWL9W1TMz4chBoY87JmM5amfM6v9HNg1frTiMeyB',
                                      placeholder:' ',
                                    });
                                    geocoder.addTo('#goong-address-detail');
                                    // Add geocoder result to container.
                                    geocoder.on('result', function (e) {
                                      var result_data = JSON.stringify(e.result, null, 2);
                                      var result_obj = JSON.parse(result_data);
                                      if (result_obj.status == 'OK') {
                                        var place = result_obj.result.geometry.location;
                                        $("#latitude").val(place.lat);
                                        $("#longitude").val(place.lng);
                                        var address = $('#goong-address-detail input').val();
                                        $('#address-detail').val(address);
                                       	displayEmbedMap('#iframe-map');
                                        $(".action-form input").prop("disabled",false);
                                        $(".action-form input").removeClass("input-disabled");
                                      }
                                      
                                    });*/

                                    /*@summary: lấy vị trí hiện tại của thiết bị*/
                                    function getCurentPosition() {
                                        if (navigator.geolocation) {
                                            navigator.geolocation.getCurrentPosition(function(position) {
                                                //covert current position to address
                                                var geocoder = new google.maps.Geocoder();
                                                var latLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                                                geocoder.geocode({
                                                    'latLng': latLng
                                                }, function(results, status) {
                                                    if (status == google.maps.GeocoderStatus.OK) {
                                                        if (results[1]) {
                                                            $('#address-detail').val(results[1].formatted_address);
                                                        }
                                                    } else {
                                                        alert("Quá trình lấy vị trí của thiết bị đã không thành công vì: " + status);
                                                    }
                                                });

                                                var newPoint = {
                                                    lat: position.coords.latitude,
                                                    lng: position.coords.longitude
                                                };
                                                //console.log("RUN POSITION ",newPoint);
                                                getAuto = true;
                                                $("#latitude").val(position.coords.latitude);
                                                $("#longitude").val(position.coords.longitude);
                                                displayEmbedMap('#iframe-map');

                                                //enable save button
                                                $(".action-form input").prop("disabled", false);
                                                $(".action-form input").removeClass("input-disabled");
                                            }, function() {
                                                //do something
                                            });
                                        } else {
                                            getAuto = false;
                                            //console.log("NOT RUN!");
                                        }
                                    }
                                </script>

                                <script>
                                    var availableTags = [];
                                    var availableTags_Score = [];
                                    $.ajax({
                                        url: "/ajax-get-user-tag",
                                        success: function(result) {
                                            availableTags = result.tags;
                                            availableTags_Score = result.tagsscore;
                                        }
                                    });

                                    function split(val) {
                                        return val.split(/,\s*/);
                                    }

                                    function extractLast(term) {
                                        return split(term).pop();
                                    }

                                    $("#tags")
                                        // don't navigate away from the field on tab when selecting an item
                                        .on("keydown", function(event) {
                                            if (event.keyCode === $.ui.keyCode.TAB &&
                                                $(this).autocomplete("instance").menu.active) {
                                                event.preventDefault();
                                            }
                                        })
                                        .autocomplete({
                                            minLength: 0,
                                            source: function(request, response) {
                                                // delegate back to autocomplete, but extract the last term

                                                response($.ui.autocomplete.filter(
                                                    availableTags, extractLast(request.term)));
                                            },
                                            focus: function() {
                                                // prevent value inserted on focus
                                                return false;
                                            },
                                            select: function(event, ui) {
                                                var terms = split(this.value);
                                                var scores = [];
                                                // remove the current input
                                                terms.pop();
                                                // add the selected item
                                                terms.push(ui.item.value);
                                                // add placeholder to get the comma-and-space at the end
                                                terms.push("");
                                                this.value = terms.join(", ");
                                                terms.pop();
                                                $.each(terms, function(index, value) {
                                                    if (availableTags_Score[value] != 0) {
                                                        scores.push(value + ':' + availableTags_Score[value]);
                                                    }
                                                });
                                                $('#tag-score').text(scores.join(", "));

                                                return false;
                                            }
                                        });
                                </script>
                                <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGxfcOFnDe1SYCzxOOnSfHUXnQHVGyQH8&libraries=places"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <optgroup label="Địa điểm phổ biến">
    </optgroup>

    <div class="group-tag">




        <div class="subject-tag" id="406-tag">
            <h4>Lựa chọn chủ đề cho môn Lịch sử</h4>
            <p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
            <label for="tag-501">Sử ôn thi đại học</label><input id="tag-501" type="checkbox" name="list_tag[]" value="501"><label for="tag-517">Lịch sử ôn thi PTTH chuyên</label><input id="tag-517" type="checkbox" name="list_tag[]" value="517"><label for="tag-518">Lịch sử luyện thi học sinh giỏi</label><input id="tag-518" type="checkbox" name="list_tag[]" value="518"><label for="tag-696">Lịch sử cấp 2</label><input id="tag-696" type="checkbox" name="list_tag[]" value="696"><label for="tag-697">Lịch sử cấp 3</label><input id="tag-697" type="checkbox" name="list_tag[]" value="697">
        </div>

        <span class="multiselect-native-select"><select name="subject[]" id="select-subject" multiple="multiple">
                <option value="72">Toán</option>
                <option value="73">Lý</option>
                <option value="74">Hóa</option>
                <option value="76">Văn</option>
                <option value="677">Tiếng Việt</option>
                <option value="406">Lịch sử</option>
                <option value="407">Địa lý</option>
                <option value="81">Sinh</option>
                <option value="410">Môn phổ thông khác</option>
                <option value="71">Tiếng Anh</option>
                <option value="82">Tiếng Nhật</option>
                <option value="83">Tiếng Hàn</option>
                <option value="85">Tiếng Đức</option>
                <option value="84">Tiếng Pháp</option>
                <option value="409">Tiếng Trung</option>
                <option value="86">Ngoại ngữ khác</option>
                <option value="77">Kỹ năng mềm</option>
                <option value="404">Nuôi dạy trẻ</option>
                <option value="411">Công nghệ thông tin</option>
                <option value="412">Thiết kế - Đồ họa - Video</option>
                <option value="90">Sales - Marketing</option>
                <option value="682">Ẩm thực</option>
                <option value="95">Ngành nghề khác</option>
                <option value="97">Âm nhạc</option>
                <option value="99">Hội họa</option>
                <option value="101">Dance (nhảy)</option>
                <option value="78">Gyms, yoga, fitness</option>
                <option value="102">Thể thao khác</option>
                <option value="103">Nghệ thuật khác</option>
            </select>
            <div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Toán, Lý, Hóa, Văn" aria-expanded="false"><span class="multiselect-selected-text">4 selected</span> <b class="caret"></b></button>
                <ul class="multiselect-container dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all"> Select all</label></a></li>
                    <li class="active"><a tabindex="0"><label class="checkbox"><input type="checkbox" value="72"> Toán</label></a></li>
                    <li class="active"><a tabindex="0"><label class="checkbox"><input type="checkbox" value="73"> Lý</label></a></li>
                    <li class="active"><a tabindex="0"><label class="checkbox"><input type="checkbox" value="74"> Hóa</label></a></li>
                    <li class="active"><a tabindex="0"><label class="checkbox"><input type="checkbox" value="76"> Văn</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="677"> Tiếng Việt</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="406"> Lịch sử</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="407"> Địa lý</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="81"> Sinh</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="410"> Môn phổ thông khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="71"> Tiếng Anh</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="82"> Tiếng Nhật</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="83"> Tiếng Hàn</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="85"> Tiếng Đức</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="84"> Tiếng Pháp</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="409"> Tiếng Trung</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="86"> Ngoại ngữ khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="77"> Kỹ năng mềm</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="404"> Nuôi dạy trẻ</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="411"> Công nghệ thông tin</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="412"> Thiết kế - Đồ họa - Video</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="90"> Sales - Marketing</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="682"> Ẩm thực</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="95"> Ngành nghề khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="97"> Âm nhạc</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="99"> Hội họa</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="101"> Dance (nhảy)</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="78"> Gyms, yoga, fitness</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="102"> Thể thao khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="103"> Nghệ thuật khác</label></a></li>
                </ul>
            </div>
        </span>

        <span class="multiselect-native-select"><select name="subject[]" id="select-subject" multiple="multiple">
                <option value="72">Toán</option>
                <option value="73">Lý</option>
                <option value="74">Hóa</option>
                <option value="76">Văn</option>
                <option value="677">Tiếng Việt</option>
                <option value="406">Lịch sử</option>
                <option value="407">Địa lý</option>
                <option value="81">Sinh</option>
                <option value="410">Môn phổ thông khác</option>
                <option value="71">Tiếng Anh</option>
                <option value="82">Tiếng Nhật</option>
                <option value="83">Tiếng Hàn</option>
                <option value="85">Tiếng Đức</option>
                <option value="84">Tiếng Pháp</option>
                <option value="409">Tiếng Trung</option>
                <option value="86">Ngoại ngữ khác</option>
                <option value="77">Kỹ năng mềm</option>
                <option value="404">Nuôi dạy trẻ</option>
                <option value="411">Công nghệ thông tin</option>
                <option value="412">Thiết kế - Đồ họa - Video</option>
                <option value="90">Sales - Marketing</option>
                <option value="682">Ẩm thực</option>
                <option value="95">Ngành nghề khác</option>
                <option value="97">Âm nhạc</option>
                <option value="99">Hội họa</option>
                <option value="101">Dance (nhảy)</option>
                <option value="78">Gyms, yoga, fitness</option>
                <option value="102">Thể thao khác</option>
                <option value="103">Nghệ thuật khác</option>
            </select>
            <div class="btn-group missing-value"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Chọn môn học" aria-expanded="false"><span class="multiselect-selected-text">Chọn môn học</span> <b class="caret"></b></button>
                <ul class="multiselect-container dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all"> Select all</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="72"> Toán</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="73"> Lý</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="74"> Hóa</label></a></li>
                    <li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="76"> Văn</label></a></li>
                    <li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="677"> Tiếng Việt</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="406"> Lịch sử</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="407"> Địa lý</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="81"> Sinh</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="410"> Môn phổ thông khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="71"> Tiếng Anh</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="82"> Tiếng Nhật</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="83"> Tiếng Hàn</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="85"> Tiếng Đức</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="84"> Tiếng Pháp</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="409"> Tiếng Trung</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="86"> Ngoại ngữ khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="77"> Kỹ năng mềm</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="404"> Nuôi dạy trẻ</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="411"> Công nghệ thông tin</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="412"> Thiết kế - Đồ họa - Video</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="90"> Sales - Marketing</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="682"> Ẩm thực</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="95"> Ngành nghề khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="97"> Âm nhạc</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="99"> Hội họa</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="101"> Dance (nhảy)</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="78"> Gyms, yoga, fitness</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="102"> Thể thao khác</label></a></li>
                    <li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="103"> Nghệ thuật khác</label></a></li>
                </ul>
            </div>
        </span>
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
</body>

</html>