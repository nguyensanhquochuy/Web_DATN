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

	.btn-huy-de-nghi:hover, .btn-chap-nhan:hover {
		opacity: 0.8;
		cursor: pointer;
		text-decoration: none;
		/* Giảm độ mờ khi hover */
	}
</style>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
	<?php include 'header.php' ?>
	<?php
	// Xác định trang hiện tại
	$page = isset($_GET['page']) ? $_GET['page'] : 1;

	// Số lượng mục trên mỗi trang
	$items_per_page = 3;

	// Tính toán offset cho truy vấn SQL dựa trên trang hiện tại
	$offset = ($page - 1) * $items_per_page;

	if (isset($idStudent)) {
		$sql = 'SELECT * FROM lophoc 
		JOIN monhoc on monhoc.MaMH = lophoc.MaMH
		JOIN hinhthuc on hinhthuc.MaHT = lophoc.MaHT
		WHERE MaHV = ? AND (1=1) ';

		if (isset($_GET['search-class-tutor'])) {
			$statusClass = $_GET['status'];


			if ($statusClass == 1) {
				$status = "Đang tìm gia sư";
			} elseif ($statusClass == 2) {
				$status = "Đã chấp nhận";
			} elseif ($statusClass == 3) {
				$status = "Đóng lớp: Đã kết nối";
			} elseif ($statusClass == 4) {
				$status = "Đóng lớp: Chưa có kết nối";
			} elseif ($statusClass == 5) {
				$status = "Chưa duyệt";
			} else {
				// Xử lý trường hợp không khớp với bất kỳ giá trị nào
				$status = "";
			}



			if (!empty($status)) {
				$sql .= " AND lophoc.TenTTLop = '$status'";
			}
		}

		$sql .= " ORDER BY ThoiGianDang DESC";


		$stmt = $conn->prepare($sql);
		$stmt->bind_param('i', $idStudent);
		$stmt->execute();
		$results = $stmt->get_result();


		// Đếm số lượng kết quả
		$total_results = $results->num_rows;

		// Tính toán số trang
		$total_pages = ceil($total_results / $items_per_page);


		// Thực hiện truy vấn SQL có phân trang sử dụng LIMIT và OFFSET
		$sql .= ' LIMIT ' . $items_per_page . ' OFFSET ' . $offset;


		// $stmt = $conn->prepare($sql);
		// $stmt->execute();
		// $results = $stmt->get_result();


		$stmt = $conn->prepare($sql);
		$stmt->bind_param('i', $idStudent);
		$stmt->execute();
		$resultClass = $stmt->get_result();
	} else if (isset($idTutor)) {
		$sql = 'SELECT * FROM lophoc 
		JOIN monhoc on monhoc.MaMH = lophoc.MaMH
		JOIN hinhthuc on hinhthuc.MaHT = lophoc.MaHT
		JOIN ketnoigs_hv on ketnoigs_hv.MaLop = lophoc.MaLop
		WHERE ketnoigs_hv.MaGS = ? AND (1=1) ';

		if (isset($_GET['search-class-tutor'])) {
			$statusConnect = $_GET['status'];

			if ($statusConnect == 6) {
				$status = "Đề nghị dạy đã chấp nhận";
			} elseif ($statusConnect == 7) {
				$status = "Đang đề nghị dạy";
			} elseif ($statusConnect == 8) {
				$status = "Đề nghị đã hủy";
			} elseif ($statusConnect == 9) {
				$status = "Đề nghị đã bị từ chối";
			} elseif ($statusConnect == 10) {
				$status = "Đã mời";
			} else {
				// Xử lý trường hợp không khớp với bất kỳ giá trị nào
				$status = "";
			}



			if (!empty($status)) {
				$sql .= " AND ketnoigs_hv.TenTTDeNghi = '$status'";
			}
		}

		$sql .= " ORDER BY ThoiGianDang DESC";


		$stmt = $conn->prepare($sql);
		$stmt->bind_param('i', $idTutor);
		$stmt->execute();
		$results = $stmt->get_result();


		// Đếm số lượng kết quả
		$total_results = $results->num_rows;

		// Tính toán số trang
		$total_pages = ceil($total_results / $items_per_page);


		// Thực hiện truy vấn SQL có phân trang sử dụng LIMIT và OFFSET
		$sql .= ' LIMIT ' . $items_per_page . ' OFFSET ' . $offset;


		// $stmt = $conn->prepare($sql);
		// $stmt->execute();
		// $results = $stmt->get_result();

		$stmt = $conn->prepare($sql);
		$stmt->bind_param('i', $idTutor);
		$stmt->execute();
		$resultClass = $stmt->get_result();
	}


	?>
	<!--main content-->
	<div class="container user-manage">
		<div class="row">
			<!--Menu trái-->
			<div class="col-md-3  custom-w-left navbar-profile-left">
				<div class="nav-profile detail-nav w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left " id="mySidebar">
					<button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()" style="margin-left:0;border:none;">
						Close &times;</button>
					<ul id="accordion" class="accordion">
						<li class="open">
							<div class="link"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Quản lý yêu cầu<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu" style="display: block;">
								<li class="active"><a href="/huy-nguyen-080324/class">Tất cả lớp đã đăng</a></li>
								<!--<li class=""></li>-->
								<li class=""><a href="/tao-lop-hoc" class="active">Đăng yêu cầu tìm gia sư mới</a></li>
							</ul>
						</li>
						<li class="">
							<div class="link"><i class="fa fa-comments"></i><a href="/huy-nguyen-080324/messages">Hội
									thoại và tin nhắn</a></div>
						</li>
						<li class="">
							<div class="link"><i class="fa fa-bell" aria-hidden="true"></i>Thông báo<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
								<li class="active"><a href="/huy-nguyen-080324/notifications">Tất cả</a></li>
							</ul>
						</li>
						<li class="">
							<div class="link"><i class="fa fa-heart-saved"></i>Đã lưu<i class="fa fa-chevron-down"></i>
							</div>
							<ul class="submenu">
								<li class=""><a href="/huy-nguyen-080324/object-saved?c=classes">Yêu cầu tìm giáo
										viên</a></li>
								<li class=""><a href="/huy-nguyen-080324/object-saved?c=teacher">Giáo viên</a></li>
							</ul>
						</li>
						<li class="">
							<div class="link"><i class="fa fa-btc"></i><a href="/huy-nguyen-080324/bpoint">Quản lý
									BPoint</a></div>
						</li>
						<li class="">
							<div class="link"><i class="fa fa-flag" aria-hidden="true"></i>Thông tin cá nhân<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu" style="display: none;">
								<li class=""><a href="/huy-nguyen-080324/account" class="">Sửa thông tin cá
										nhân</a></li>
								<li><a href="/huy-nguyen-080324/settings">Thay đổi email, mật khẩu</a></li>
							</ul>
						</li>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-9 custom-w-right" id="ajax-content-user-load" style="padding:0">
				<div id="ajax-user-load-page">
					<button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">☰</button>
					<div class="region region-content">
						<div id="block-system-main" class="block block-system">


							<div class="content">
								<div class="gblock-v2" style="margin-bottom:0">
									<div class="header-block" style="display: <?= (isset($idStudent)) ? '' : 'none' ?>"><span> Quản lý yêu cầu tìm gia sư</span></div>
									<div class="header-block" style="display: <?= (isset($idTutor)) ? '' : 'none' ?>"><span> Các đề nghị dạy đã gửi</span></div>
								</div>
								<div class="view view-nhom-hoc-chung view-id-nhom_hoc_chung view-display-id-block_8 view-dom-id-a8f8990a92392270597df1f6c30a8f89 jquery-once-2-processed">

									<div class="view-filters">
										<form action="" method="get" id="views-exposed-form-nhom-hoc-chung-block-8" accept-charset="UTF-8" class="jquery-once-2-processed">
											<div>
												<div class="views-exposed-form">
													<div class="views-exposed-widgets clearfix">
														<div id="edit-status-wrapper" class="views-exposed-widget views-widget-filter-field_course_state_value">
															<div class="views-widget">
																<div class="form-item form-type-select form-item-status">
																	<select id="edit-status" name="status" class="form-select">
																		<option value="" selected="selected">- Any -</option>

																		<option style="display: <?= (isset($idStudent)) ? '' : 'none' ?>" value="1" <?= (isset($statusClass) && ($statusClass == 1)) ? 'selected' : '' ?>>Đang tìm gia sư</option>
																		<option style="display: <?= (isset($idStudent)) ? '' : 'none' ?>" value="2" <?= (isset($statusClass) && $statusClass == 2) ? 'selected' : '' ?>>Đã chấp nhận</option>
																		<option style="display: <?= (isset($idStudent)) ? '' : 'none' ?>" value="3" <?= (isset($statusClass) && $statusClass == 3) ? 'selected' : '' ?>>Đóng lớp: Đã kết nối</option>
																		<option style="display: <?= (isset($idStudent)) ? '' : 'none' ?>" value="4" <?= (isset($statusClass) && $statusClass == 4) ? 'selected' : '' ?>>Đóng lớp: Chưa có kết nối</option>
																		<option style="display: <?= (isset($idStudent)) ? '' : 'none' ?>" value="5" <?= (isset($statusClass) && $statusClass == 5) ? 'selected' : '' ?>>Chưa duyệt</option>

																		<option style="display: <?= (isset($idTutor)) ? '' : 'none' ?>" value="6" <?= (isset($statusConnect) && ($statusConnect == 6)) ? 'selected' : '' ?>>Đã chấp nhận</option>
																		<option style="display: <?= (isset($idTutor)) ? '' : 'none' ?>" value="7" <?= (isset($statusConnect) && $statusConnect == 7) ? 'selected' : '' ?>>Đang đề nghị dạy</option>
																		<option style="display: <?= (isset($idTutor)) ? '' : 'none' ?>" value="8" <?= (isset($statusConnect) && $statusConnect == 8) ? 'selected' : '' ?>>Đề nghị đã hủy</option>
																		<option style="display: <?= (isset($idTutor)) ? '' : 'none' ?>" value="9" <?= (isset($statusConnect) && $statusConnect == 9) ? 'selected' : '' ?>>Đề nghị đã bị từ chối</option>
																		<option style="display: <?= (isset($idTutor)) ? '' : 'none' ?>" value="10" <?= (isset($statusConnect) && $statusConnect == 10) ? 'selected' : '' ?>>Được mời dạy</option>
																	</select>

																</div>
															</div>
														</div>
														<div class="views-exposed-widget views-submit-button">
															<input type="submit" id="edit-submit-nhom-hoc-chung" name="search-class-tutor" value="Áp dụng" class="form-submit">
														</div>
													</div>
												</div>
											</div>
										</form>
									</div>


									<div class="view-content">
										<div class="row-tittle">
											<div class="row-request-1" style="color:#212529">
												<h3>NGÀY</h3>
											</div>
											<div class="row-request-2" style="color:#212529">
												<h3>MÔ TẢ</h3>
											</div>
											<div class="row-request-3" style="color:#212529; display: <?= (isset($idStudent)) ? '' : 'none' ?> ;">
												<h3>ĐỀ NGHỊ DẠY</h3>
											</div>
											<div class="row-request-4" style="color:#212529">
												<h3>TRẠNG THÁI</h3>
											</div>
										</div>
										<?php
										if ($resultClass->num_rows < 1) {
											echo "<p style='margin: 2% auto;display: " . (isset($idStudent) ? '' : 'none') . ";' class='content-info-step-2'>Bạn chưa đăng yêu cầu tạo lớp nào!</p>";
											echo "<p style='margin: 2% auto;display: " . (isset($idTutor) ? '' : 'none') . ";' class='content-info-step-2'>Chưa có đề nghị dạy nào!</p>";
										}
										while ($row = $resultClass->fetch_assoc()) {
										?>

											<div class="row-request">

												<div class="row-request-1">
													<p><?php
														$dateTime = new DateTime($row['ThoiGianDang']);
														$date = $dateTime->format('d-m-Y');

														// In ra ngày
														echo $date ?></p>
													</p>
												</div>
												<div class="row-request-2">
													<p>
														<a href="detail_class.php?view=<?= $row['MaLop'] ?>"><?= $row['TenLop'] ?></a>
													</p>
													<span><?= $row['TenMH'] ?></span>
													<span><?= $row['TenHT'] ?></span>
													<span class="orange"><?= $row['HocPhi1Buoi'] ?> VND/buổi</span>
												</div>
												<div class="row-request-3 count-request" style="display: <?= (isset($idStudent)) ? '' : 'none' ?>">
													<span><?php
															$sql = 'SELECT * FROM ketnoigs_hv  
                                                                       WHERE MaLop = ?';
															$stmt = $conn->prepare($sql);
															$stmt->bind_param('i', $row['MaLop']);
															$stmt->execute();
															$result = $stmt->get_result();
															$numberConnect = $result->num_rows;
															echo $numberConnect . '/6'
															?><a href="offer_student_tutor.php?view=<?= $row['MaLop'] ?>"> Xem đề nghị</a></span>
												</div>
												<div class="row-request-4" style="display: <?= (isset($idStudent)) ? '' : 'none' ?>">
													<p style="font-weight: bold; text-transform: uppercase;"><?= $row['TenTTLop'] ?></p>
													<div style="display: <?= ($row['TenTTLop'] == "Chưa duyệt" || $row['TenTTLop'] == "Đang tìm gia sư") ? 'block' : 'none' ?>">
														<a href="javascripts:voild(0)" class="btn-option dropdown-toggle manage-class-action-edit" type="button" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" tabindex="0">
															<i class="fa fa-pencil-square-o"></i> Sửa / đóng
														</a>
														<ul class="dropdown-menu" aria-labelledby="dropdown-1">
															<li><a href="edit_class.php?edit=<?= $row['MaLop'] ?>" tabindex="0">Chỉnh sửa</a></li>
															<li><a href="" tabindex="0" class="ctools-use-modal ctools-use-modal-processed btn-close-request" data-id="<?= $row['MaLop'] ?>" data-name="<?= $row['TenLop'] ?>">Đóng yêu cầu</a></li>
														</ul>
													</div>
												</div>

												<div class="row-request-4" style="display: <?= (isset($idTutor)) ? '' : 'none' ?>">
													<p style="font-weight: bold; text-transform: uppercase;"><?= $row['TenTTDeNghi'] ?></p>
													<div>

														<a style="border-radius: 0.25rem; text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 12px; font-weight: bold; transition: opacity 0.3s;display:<?= $row['TenTTDeNghi'] == "Đã mời" ? 'none' : '' ?>;" class="btn-huy-de-nghi" data-id="<?= $row['MaLop'] ?>" data-name="<?= $row['TenLop'] ?>"> Hủy đề nghị</a>
														<a style="border-radius: 0.25rem; text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 12px; font-weight: bold; transition: opacity 0.3s;display: <?= ($row['TenTTDeNghi'] == "Đã mời" && $row['TenTTLop'] != "Chưa duyệt") ? '' : 'none' ?>;" class="btn-chap-nhan" data-id="<?= $row['MaLop'] ?>" data-name="<?= $row['TenLop'] ?>" data-status="<?= $row['TenTTDeNghi'] ?>"> Chấp nhận</a>
													</div>
												</div>

											</div>
										<?php } ?>
										<h2 class="element-invisible">Pages</h2>
										<?php
										echo '<div class="item-list"><ul class="page">';
										if ($page > 1) {
											$prev_link = 'class_student_tutor.php?page=' . ($page - 1);
											if (isset($_GET['search-class-tutor'])) {
												$prev_link .= '&search-class-tutor=1&status=' . $_GET['status'];
											}
											echo '<li class="pager-first page-item"><a class="page-link-1" href="class_student_tutor.php?page=1';
											if (isset($_GET['search-class-tutor'])) {
												echo '&search-class-tutor=1&status=' . $_GET['status'];
											}
											echo '"><<</a></li>';
											echo '<li class="pager-previous page-item"><a class="page-link-1" href="' . $prev_link . '"><</a></li>';
										}
										for ($i = 1; $i <= $total_pages; $i++) {
											$page_link = 'class_student_tutor.php?page=' . $i;
											if (isset($_GET['search-class-tutor'])) {
												$page_link .= '&search-class-tutor=1&status=' . $_GET['status'];
											}

											echo '<li class="pager-item page-item' . ($page == $i ? ' active-item' : '') . '"><a class="page-link-1' . ($page == $i ? ' active-link' : '') . '" href="' . $page_link . '">' . $i . '</a></li>';
										}
										if ($page < $total_pages) {
											$next_link = 'class_student_tutor.php?page=' . ($page + 1);
											if (isset($_GET['search-class-tutor'])) {
												$next_link .= '&search-class-tutor=1&status=' . $_GET['status'];
											}

											echo '<li class="pager-next page-item"><a class="page-link-1" href="' . $next_link . '">></a></li>';
											echo '<li class="pager-last page-item"><a class="page-link-1" href="class_student_tutor.php?page=' . $total_pages;
											if (isset($_GET['search-class-tutor'])) {
												echo '&search-class-tutor=1&status=' . $_GET['status'];
											}

											echo '">>></a></li>';
										}
										echo '</ul></div>';



										?>



									</div>






								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
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
								<p class="err"><i class="fa fa-face-happy" aria-hidden="true" style="font-size: 30px;color: #03ad03;"></i>
									<span class="message">
										<?php
										if (isset($idStudent)) {
											echo 'Bạn có chắc chắn muốn đóng lớp học:';
										} else if (isset($idTutor)) {
											echo 'Bạn có chắc chắn muốn hủy đề nghị dạy lớp:';
										}

										?>
									</span>
									<b class="name-class"> </b> không?
								</p>
							</div>
							<div class="modal-footer" style="justify-content: center;">
								<!-- <a href="/huy-nguyen-080324">Về Trang cá nhân</a> -->
								<!-- <a href="/become-teacher#how-it-work" style="background-color: #afabab !important">Hướng dẫn</a> -->
								<button type="button" style="text-transform: uppercase;padding: 10px 18px;background: #ff961e;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-close" data-dismiss="modal" aria-label="Close">Thoát</button>
								<a style="display: <?= (isset($idStudent)) ? '' : 'none'; ?>;text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-dong-yeu-cau" data-id="<?= $row['MaLop'] ?>"> Đóng yêu cầu</a>
								<a style="display: <?= (isset($idTutor)) ? '' : 'none'; ?>;text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-huy-dn" data-id="<?= $row['MaLop'] ?>"> Hủy đề nghị</a>
								<a style="display: none; text-transform: uppercase;padding: 10px 18px;background: #069d86;color: #fff;font-size: 16px; font-weight: bold; transition: opacity 0.3s;" class="btn-cn" data-id="<?= $row['MaLop'] ?>"> Chấp nhận</a>
								<style>
									.btn-close:hover,
									.btn-huy-dn:hover,
									.btn-dong-yeu-cau:hover,
									.btn-cn:hover {
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
	<script>
		var idClass;
		document.addEventListener("DOMContentLoaded", function() {
			var btnsCloseRequest = document.querySelectorAll(".btn-close-request");
			var btnsCloseConnect = document.querySelectorAll(".btn-huy-de-nghi");
			var btnsAccept = document.querySelectorAll(".btn-chap-nhan");
			var boldnameClass = document.querySelector(".name-class");
			var message = document.querySelector(".message");
			var btn_cn = document.querySelector(".btn-cn");
			var btn_huy_dn = document.querySelector(".btn-huy-dn");
			btnsCloseRequest.forEach(function(btn) {
				btn.addEventListener("click", function(event) {
					event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

					var nameClass = this.getAttribute("data-name");
					idClass = this.getAttribute("data-id"); // Lấy ID lớp học từ thuộc tính data

					// Gửi ID lớp học đến modal
					openModal(nameClass);
				});
			});

			btnsCloseConnect.forEach(function(btn) {
				btn.addEventListener("click", function(event) {
					event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

					var nameClass = this.getAttribute("data-name");
					idClass = this.getAttribute("data-id"); // Lấy ID lớp học từ thuộc tính data

					// Gửi ID lớp học đến modal
					openModal(nameClass);
				});
			});

			btnsAccept.forEach(function(btn) {
				btn.addEventListener("click", function(event) {
					event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

					var nameClass = this.getAttribute("data-name");
					idClass = this.getAttribute("data-id"); // Lấy ID lớp học từ thuộc tính data
					
					btn_cn.style.display = ''
					btn_huy_dn.style.display='none';

					message.innerHTML = "Bạn có chắc chắn đồng ý lời mời dạy lớp: ";
					// Gửi ID lớp học đến modal
					openModal(nameClass);

				});
			});

			function openModal(nameClass) {
				// Đoạn mã để mở modal và truyền ID lớp học vào đây
				document.getElementById('modalBackdrop').style.display = 'flex';
				document.getElementById('modalContent').style.display = 'block';
				boldnameClass.innerHTML = nameClass;
				console.log(nameClass);

				// var modalContent = document.getElementById("modal-content");
				// modalContent.innerHTML = "ID của lớp học là: " + classId;
			}
		});



		function closeModal() {
			// Đóng modal
			document.getElementById('modalBackdrop').style.display = 'none';
			document.getElementById('modalContent').style.display = 'none';
		}

		document.querySelector('.close').addEventListener('click', function(event) {
			event.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết
			// Gọi hàm closeModal để đóng modal
			closeModal();
		});

		document.querySelector('.btn-close').addEventListener('click', function(event) {
			closeModal();
		});

		// Bắt sự kiện click bên ngoài modal để đóng nó
		document.getElementById('modalBackdrop').addEventListener('click', function(event) {
			if (event.target === this) { // Chỉ đóng modal nếu người dùng nhấp vào phần backdrop (nền)
				// Gọi hàm closeModal để đóng modal
				closeModal();
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			// đóng yêu cầu
			$(".btn-dong-yeu-cau").on("click", function() {
				console.log(idClass);
				let err = $(".err");
				let modal_footer = $(".modal-footer");
				// let btn_use_modal = $(".btn-use-modal");
				// let btn_search_class = $(".btn-tim-lop-khac");
				// console.log(btn_use_modal);


				$.ajax({
					url: "CloseClass.php",
					method: "POST",
					data: {
						idClass: idClass,
					},
					dataType: 'json', // Expect JSON response
					success: function(response) {
						err.html("");
						console.log(response);
						// Check for specific errors and display messages

						if (response.success) {
							err.html(response.success);
							// btn_connect.html("Tìm các lớp khác!");
							// btn_connect.attr("href", "class.php");
							modal_footer.css("display", "none");
							// Delay 2 giây trước khi reload trang
							setTimeout(function() {
								location.reload();
							}, 1500);
						}

					},
					error: function(xhr, status, error) {
						console.log("Error in AJAX request:", status, error);
					}
				});
			});
			// hủy đề nghị
			$(".btn-huy-dn").on("click", function() {
				console.log(idClass);
				let idTutor = <?php echo isset($idTutor) ? $idTutor : "''"; ?>;
				let err = $(".err");
				let modal_footer = $(".modal-footer");
				// let btn_use_modal = $(".btn-use-modal");
				// let btn_search_class = $(".btn-tim-lop-khac");
				// console.log(btn_use_modal);


				$.ajax({
					url: "CloseConnect.php",
					method: "POST",
					data: {
						idClass: idClass,
						idTutor: idTutor
					},
					dataType: 'json', // Expect JSON response
					success: function(response) {
						err.html("");
						console.log(response);
						// Check for specific errors and display messages

						if (response.success) {
							err.html(response.success);
							// btn_connect.html("Tìm các lớp khác!");
							// btn_connect.attr("href", "class.php");
							modal_footer.css("display", "none");
							// Delay 2 giây trước khi reload trang
							setTimeout(function() {
								location.reload();
							}, 1500);
						}

					},
					error: function(xhr, status, error) {
						console.log("Error in AJAX request:", status, error);
					}
				});
			});

			// Chấp nhận lời mời
			$(".btn-cn").on("click", function() {
				console.log(idClass);
				let idTutor = <?php echo isset($idTutor) ? $idTutor : "''"; ?>;
				let err = $(".err");
				let modal_footer = $(".modal-footer");
				// let btn_use_modal = $(".btn-use-modal");
				// let btn_search_class = $(".btn-tim-lop-khac");
				// console.log(btn_use_modal);


				$.ajax({
					url: "Accept.php",
					method: "POST",
					data: {
						idClass: idClass,
						idTutor: idTutor
					},
					dataType: 'json', // Expect JSON response
					success: function(response) {
						err.html("");
						console.log(response);
						// Check for specific errors and display messages

						if (response.success) {
							err.html(response.success);
							// btn_connect.html("Tìm các lớp khác!");
							// btn_connect.attr("href", "class.php");
							modal_footer.css("display", "none");
							// Delay 2 giây trước khi reload trang
							setTimeout(function() {
								location.reload();
							}, 1500);
						}

					},
					error: function(xhr, status, error) {
						console.log("Error in AJAX request:", status, error);
					}
				});
			});
		});
	</script>
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