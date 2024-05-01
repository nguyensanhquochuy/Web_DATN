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
    <meta property="fb:app_id" content="343419436516395" />

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
    <link type="text/css" rel="stylesheet" href="../assets/css/css__9-QFxWmfGQ_FbpgiGTWCX87rviVhceyaYBMCmh1Wci8__v0bZq4l1sSuP1x.css" media="all" />

    <link type="text/css" rel="stylesheet" href="../assets/css/css__Ot9l09ZM71JgqUrkABNYpIf697NGNW91HhqmDQIPI2k__YtWorz7vEtwokW.css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/css__zjm2aiKa_qJyEQxmjZDIpbbI9yEC7p6NkG4ZUWSwkmg__ZFpFb8wdlLmy92.css" media="all" />



    <script type="text/javascript" src="../assets/js/js__dU859nniAHOO3ZZ49DZUXr5Frl9T3QSa81hYdDf9Uas__LOGJbIpGkynalCS.js"></script>
    <script type="text/javascript" src="../assets/js/js__IxBpGC3NatX6P7dEN5hVBxBEGm6AzqoIcTK6bYbV8dQ__5gYxiRHtWORQMry.js"></script>
    <script type="text/javascript" src="../assets/js/js__b7U47AIpVNMtOZm7dukciGgXcKw_lrXIQm6gz0Mp09E__ObqmsNjDCbzKrWE.js"></script>

    <script type="text/javascript" src="../assets/js/js__bcCAN6VgMjVnLudQwXmKyBrXo9atl70SkprxOvrBQ5E__d43UiXeszJjDIN6.js"></script>

    <script type="text/javascript" src="../assets/js/js__2H5VHDfLOvpT-ZWWBqPpmQoETJQWSLU5RqZ6iprXOAQ__6pqGXWUeGNf05Fe.js"></script>

    <script type="text/javascript" src="../assets/js/js__I_3_005HciglOJyBxiQvaSLMYQsG33p9G0ihNQ_GR8U__Zuy3KzlHSmeJE8j.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style>
        .user-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .avatar {
            margin-bottom: 10px;
        }

        .avatar img {
            width: 100%;
            /* Thay đổi kích thước hình ảnh để tự động thích ứng */
            max-width: 70px;
            /* Giữ cho hình ảnh không vượt quá kích thước ban đầu */
            height: auto;
            border-radius: 50%;
            /* để làm tròn hình ảnh */
        }

        @media only screen and (max-width: 768px) {
            .avatar img {
                max-width: 70%;
                /* Giảm kích thước ảnh trên màn hình nhỏ hơn 768px */
            }
        }

        @media only screen and (max-width: 576px) {
            .avatar img {
                max-width: 50%;
                /* Giảm kích thước ảnh trên màn hình nhỏ hơn 576px */
            }
        }

        .creator-name,
        .created-date {
            text-align: center;
            margin: 0;
            font-weight: bold;
        }

        .button-container {
            display: flex;
            justify-content: center;
            /* Canh giữa các nút */
            width: 100%;
            /* Đảm bảo các nút chiếm full width */

        }

        .btn {
            flex-grow: 1;
            /* Phần tử nút tự mở rộng để điều chỉnh cho các kích thước màn hình */
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold !important;

        }

        .cancel-btn {
            background-color: #ff6f61;
            color: #fff;
        }

        .accept-btn {
            background-color: #4caf50;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.5;

        }
    </style>

</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
    <?php include 'header.php' ?>
    <!--main content-->

    <div class="container main-content">
        <div class="region region-content">
            <div id="block-system-main" class="block block-system">
                <div class="content" style="    margin-top: 2%;margin-bottom: 2%;">
                    <div class="view view-blacasa-u2g-relation view-id-blacasa_u2g_relation view-display-id-block_6 view-dom-id-c27cc66897b8d8684e30d30032082266 gblock-v2">
                        <div class="header-block">
                            <span>Đề nghị dạy đã chấp nhận</span>
                        </div>
                        <?php

                        if (isset($typeAcc)) {
                            if ($typeAcc == 2) {
                            } else if ($typeAcc == 3) {
                                $sql = 'SELECT * FROM ketnoigs_hv  
                                JOIN giasu ON giasu.MaGS = ketnoigs_hv.MaGS
                                WHERE MaLop = ? AND TenTTDeNghi = "Đề nghị dạy đã chấp nhận" ';
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param('i', $idClass);
                                $stmt->execute();
                                $result = $stmt->get_result();
                            }
                        }

                        ?>
                        <div style="display:<?= ($result->num_rows < 1) ? 'block' : 'none' ?>" class="view-empty body-block">
                            Chưa có đề nghị dạy nào!
                        </div>
                        <div style="display:<?= ($result->num_rows >= 1) ? 'flex' : 'none' ?>; margin-top: 20px;" class="">
                            <!-- Phần tử 1 -->
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <div class="col-md-2 col-12 ">
                                    <div class="user-info">
                                        <div class="avatar">
                                            <a href="account.php?view=<?= $row['MaTK'] ?>">
                                                <img src="../assets/img/default_user.png" alt="Avatar">
                                            </a>

                                        </div>
                                        <div class="user-details">
                                            <p class="creator-name"><a href="account.php?view=<?= $row['MaTK'] ?>"><?= $row['HoTen'] ?></a></p>
                                            <div class="button-container">
                                                <button class="btn cancel-btn">Hủy</button>
                                                <button class="btn accept-btn" disabled>Đã Chấp nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>




                        </div>

                    </div>
                    <div class="view view-blacasa-u2g-relation view-id-blacasa_u2g_relation view-display-id-block_7 view-dom-id-3f022b8b8c877ea38e92597b26db9c52 gblock-v2">
                        <div class="header-block">
                            <span>Đang đề nghị dạy</span>
                        </div>
                        <?php

                        if (isset($typeAcc)) {
                            if ($typeAcc == 2) {
                            } else if ($typeAcc == 3) {
                                $sql = 'SELECT * FROM ketnoigs_hv  
                                JOIN giasu ON giasu.MaGS = ketnoigs_hv.MaGS
                                WHERE MaLop = ? AND TenTTDeNghi = "Đang đề nghị dạy" ';
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param('i', $idClass);
                                $stmt->execute();
                                $result = $stmt->get_result();
                            }
                        }

                        ?>
                        <div style="display:<?= ($result->num_rows < 1) ? 'block' : 'none' ?>" class="view-empty body-block">
                            Chưa có đề nghị dạy nào!
                        </div>
                        <div style="display:<?= ($result->num_rows >= 1) ? 'flex' : 'none' ?>; margin-top: 20px;" class="">
                            <!-- Phần tử 1 -->
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                <?php
                                if (isset($_POST['btn-accept-' . $row['MaGS']])) {
                                    $statusConnect = "Đề nghị dạy đã chấp nhận";

                                    $updateConnect =  "UPDATE `ketnoigs_hv`
                                    SET
                                        `TenTTDeNghi` = ?
                                    WHERE MaLop = ? AND MaGS = ?";

                                    $stmt = $conn->prepare($updateConnect);
                                    $stmt->bind_param("sii", $statusConnect, $idClass, $row['MaGS']);
                                    $stmt->execute();

                                    $statusConnect = "Đề nghị đã hủy";
                                    $updateConnect =  "UPDATE `ketnoigs_hv`
                                    SET
                                        `TenTTDeNghi` = ?
                                    WHERE MaLop = ? AND MAGS != ?";

                                    $stmt = $conn->prepare($updateConnect);
                                    $stmt->bind_param("sii", $statusConnect, $idClass, $row['MaGS']);
                                    $stmt->execute();

                                    $statusClass = "Đã chấp nhận";
                                    $updateClass =  "UPDATE `lophoc`
                                    SET
                                        `TenTTLop` = ?
                                    WHERE MaLop = ?";

                                    $stmt = $conn->prepare($updateClass);
                                    $stmt->bind_param("si", $statusClass, $idClass);
                                    $stmt->execute();

                                    echo '<script>window.location.reload();</script>';
                                }


                                if (isset($_POST['btn-cancel-' . $row['MaGS']])) {
                                    $statusConnect = "Đề nghị đã hủy";
                                    $updateConnect =  "UPDATE `ketnoigs_hv`
                                    SET
                                        `TenTTDeNghi` = ?
                                    WHERE MaLop = ? AND MaGS = ?";

                                    $stmt = $conn->prepare($updateConnect);
                                    $stmt->bind_param("sii", $statusConnect, $idClass, $row['MaGS']);
                                    $stmt->execute();
                                    echo '<script>window.location.reload();</script>';
                                }

                                ?>
                                <form class="col-md-2 col-12" method="post" action="">
                                    <div class="user-info">
                                        <div class="avatar">
                                            <a href="account.php?view=<?= $row['MaTK'] ?>">
                                                <img src="../assets/img/default_user.png" alt="Avatar">
                                            </a>

                                        </div>
                                        <div class="user-details">
                                            <p class="creator-name"><a href="account.php?view=<?= $row['MaTK'] ?>"><?= $row['HoTen'] ?></a></p>
                                            <div class="button-container">
                                                <button name="btn-cancel-<?= $row['MaGS'] ?>" type="submit" class="btn cancel-btn">Hủy</button>
                                                <button name="btn-accept-<?= $row['MaGS'] ?>" type="submit" class="btn accept-btn">Chấp nhận</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php } ?>





                        </div>

                    </div>
                    <div id="canceled">
                        <div class="view view-blacasa-u2g-relation view-id-blacasa_u2g_relation view-display-id-block_8 view-dom-id-432cc77ac634a09a04f1f2cab2dcb52d gblock-v2">
                            <div class="header-block">
                                <span>Đề nghị đã hủy</span>
                            </div>

                            <?php

                            if (isset($typeAcc)) {
                                if ($typeAcc == 2) {
                                } else if ($typeAcc == 3) {
                                    $sql = 'SELECT * FROM ketnoigs_hv  
                                    JOIN giasu ON giasu.MaGS = ketnoigs_hv.MaGS
                                    WHERE MaLop = ? AND TenTTDeNghi = "Đề nghị đã hủy" ';
                                    $stmt = $conn->prepare($sql);
                                    $stmt->bind_param('i', $idClass);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                }
                            }

                            ?>
                            <div style="display:<?= ($result->num_rows < 1) ? 'block' : 'none' ?>" class="view-empty body-block">
                                Chưa có đề nghị dạy nào!
                            </div>
                            <div style="display:<?= ($result->num_rows >= 1) ? 'flex' : 'none' ?>; margin-top: 20px;" class="">
                                <!-- Phần tử 1 -->
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <div class="col-md-2 col-12 ">
                                        <div class="user-info">
                                            <div class="avatar">
                                                <a href="account.php?view=<?= $row['MaTK'] ?>">
                                                    <img src="../assets/img/default_user.png" alt="Avatar">
                                                </a>

                                            </div>
                                            <div class="user-details">
                                                <p class="creator-name"><a href="account.php?view=<?= $row['MaTK'] ?>"><?= $row['HoTen'] ?></a></p>
                                                <div class="button-container">
                                                    <button class="btn cancel-btn" disabled>Đã hủy</button>
                                                    <button class="btn accept-btn">Chấp nhận</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>




                            </div>

                        </div>
                    </div>
                    <div id="invitation">
                        <div style="display: none;" class="view view-blacasa-class-invitation view-id-blacasa_class_invitation view-display-id-block_1 view-dom-id-093e49be614f53ca21f5dc0ab47d0ccd gblock-v2">
                            <div class="header-block">
                                <span>Đã mời</span>
                            </div>
                            <div class="view-empty body-block">
                                <p>Chưa có giáo viên nào được mời!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <?php include 'footer.php' ?>
    <script>
        //Menu left user

        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;
            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {
                el: this.el,
                multiple: this.multiple
            }, this.dropdown)
        }
        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }
        var accordion = new Accordion($('#accordion'), false);
        // var radio_calendar = document.querySelectorAll('.radio-calendar');
        // radio_calendar.addEventListener("click", function() {
        //     radio_calendar.addClass('lbl-active');
        //     });
        // $(document).ready(function() {
        // 	$('#label-morning-2').click(function() {
        // 		$('#morning-calendar-2').toggleClass('lbl-active');
        // 	});
        // });
        document.addEventListener("DOMContentLoaded", function() {
            var inputs = document.querySelectorAll('.radio-calendar');

            inputs.forEach(function(input) {
                input.addEventListener('click', function() {
                    var label = this.parentElement.querySelector('label');
                    label.classList.toggle('lbl-active');
                });
            });
            console.log(inputs);

        });
    </script>

</body>

</html>