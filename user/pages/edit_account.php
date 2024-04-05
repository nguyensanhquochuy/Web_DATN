<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="js">
<?php
include 'config.php';
session_start();

if (isset($_GET['edit'])) {
	$idAcc = $_GET['edit'];
	$jsonData = file_get_contents('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json');
	$data = json_decode($jsonData, true);

	// Chuyển đổi dữ liệu thành mảng liên kết, sử dụng ID tỉnh/thành phố làm key
	$cityData = [];
	foreach ($data as $city) {
		$cityData[$city['code']] = $city['name'];
	}

	// tìm mã gs_mh và mã gs_cd tiếp theo
	function next_id($conn, $type) {
		if ($type == 1) {
			$sql = 'SELECT MAX(MaGS_MH) as max_gsmh FROM giasu_monhoc';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$next_idGS_MH = $stmt->get_result()->fetch_assoc()['max_gsmh'] + 1;
			return $next_idGS_MH;
		} else if ($type== 2) {
			$sql = 'SELECT MAX(MaGS_CD) as max_gscd FROM giasu_chude';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$next_idGS_CD = $stmt->get_result()->fetch_assoc()['max_gscd'] + 1;
			return $next_idGS_CD;
		} else if ($type== 3) {
			$sql = 'SELECT MAX(MaLichDay) as max_lichday FROM lichday';
			$stmt = $conn->prepare($sql);
			$stmt->execute();
			$next_idLichDay = $stmt->get_result()->fetch_assoc()['max_lichday'] + 1;
			return $next_idLichDay;
		}

	}
	// hàm cắt chuỗi sử dụng cho lịch 
	function splitString($str) {
		// Tìm vị trí của dấu cách cuối cùng trong chuỗi
		$pos = strrpos($str, ' ');
	
		if ($pos !== false) {
			// Cắt chuỗi thành 2 phần dựa vào vị trí tìm được
			$part1 = substr($str, 0, $pos);
			$part2 = substr($str, $pos + 1);
	
			return array($part1, $part2);
		} else {
			// Nếu không tìm thấy dấu cách, trả về mảng chứa chuỗi ban đầu và chuỗi rỗng
			return array($str, '');
		}
	}	
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

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
	<?php include 'header.php' ?>
	<!--main content-->
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
						<li class="open">
							<div class="link"><i class="fa fa-flag" aria-hidden="true"></i>Thông tin cá nhân<i class="fa fa-chevron-down"></i></div>
							<ul class="submenu" style="display: block;">
								<li class="active"><a href="/huy-nguyen-080324/account" class="active">Sửa thông tin cá
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
																	<h4 class="modal-title" id="memberModalLabel">Xin
																		chào Huy Nguyen ! </h4>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
																</div>
																<div class="modal-body">
																	<p><i class="fa fa-face-sad" aria-hidden="true" style="font-size: 30px;color: red;"></i>
																		Tài khoản đăng ký giáo viên của bạn đã sắp hoàn
																		thành, chỉ còn thiếu một vài thông tin nữa.
																		Để có thể hoàn thành đăng ký và nhận được lớp
																		dạy, xin vui lòng hoàn thiện các thông tin còn
																		thiếu sau:</p>
																	<p>
																		<label class='field_missing'>Tỉnh/Thành
																			phố</label>, <label class='field_missing'>Địa chỉ cụ
																			thể</label>, <label class='field_missing'>Nghề nghiệp</label>,
																		<label class='field_missing'>Môn học</label>,
																		<label class='field_missing'>Mô tả bản
																			thân</label>, <label class='field_missing'>Lịch dạy</label>,
																		<label class='field_missing'>Giá học
																			phí</label>,
																	</p>
																</div>
																<div class="modal-footer">
																	<button type="button" data-dismiss="modal" aria-label="CẬP NHẬT NGAY">HOÀN THIỆN
																		NGAY</button>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div> <!--alert-->


											<div class="body-block">
												<?php
												if (isset($idAcc)) {

													$sql = 'SELECT * FROM taikhoan WHERE MaTK = ?';
													$stmt = $conn->prepare($sql);
													$stmt->bind_param('i', $idAcc);
													$stmt->execute();
													$result = $stmt->get_result()->fetch_assoc();
													$typeAcc = $result['MaPQ'];

													if ($typeAcc == 2) {
														// Lấy thông tin gia sư
														$sql = 'SELECT * FROM giasu  WHERE MaTK = ?';
														$stmt = $conn->prepare($sql);
														$stmt->bind_param('i', $idAcc);
														$stmt->execute();
														$resultTutor = $stmt->get_result()->fetch_assoc();
														$idTutor = $resultTutor['MaGS'];
														$fullName = $resultTutor['HoTen'];
														$phoneNumber = $resultTutor['DienThoai'];
														$typeTutor = $resultTutor['MaLoaiGS'];
														$city = $resultTutor['Tinh_TP'];
														$detailCity = $resultTutor['DiaChiCT'];
														$sex = $resultTutor['GioiTinh'];
														$description = $resultTutor['MoTa'];

														$typeTeach = $resultTutor['MaHT'];
														$fee1Hour = $resultTutor['HocPhi1H'];
														$avatarTutor = $resultTutor['AnhDaiDien'];
														$degreeTutor = $resultTutor['AnhBangCap'];

														// Lấy dữ liệu chủ đề cho gia sư
														$sql = 'SELECT * FROM giasu_chude  WHERE MaGS = ?';
														$stmt = $conn->prepare($sql);
														$stmt->bind_param('i', $idTutor);
														$stmt->execute();
														$resultTutor_Tag = $stmt->get_result();
														$listTags = array();

														while ($rowTutor_Tag = $resultTutor_Tag->fetch_assoc()) {
															array_push($listTags, $rowTutor_Tag['MaCD']);
														}

														// Lấy dữ liệu lich dạy gia sư
														if (isset($idTutor)) {
															$sql = 'SELECT * FROM lichday  WHERE MaGS = ?';
															$stmt = $conn->prepare($sql);
															$stmt->bind_param('i', $idTutor);
															$stmt->execute();
															$resultlistCalendars = $stmt->get_result();
															$listCalendars = array();
		
															while ($rowlistCalendars = $resultlistCalendars->fetch_assoc()) {
																array_push($listCalendars, $rowlistCalendars['TenThu'] . " " . $rowlistCalendars['TenBuoi']);
															}
														}

														// Cập nhật thông tin gia sư
														if (isset($_POST['submit-info'])) {
															$fullName = $_POST['full_name'];
															$phoneNumber = $_POST['number'];
															$city = $_POST['place'];
															$detailCity = $_POST['address-detail'];
															$sex = $_POST['sex'];
															$description = $_POST['body'];
															$typeTutor = $_POST['typeTutor'];




															$fee1Hour = $_POST['price_cost'];
															$avatarTutor = $_FILES['edit_avatar_account']['name'];
															$upload_avt_Tutor = "../assets/img/img_tutor/" . $avatarTutor;
															$degreeTutor = $_FILES['img_cmt_cert']['name'];
															$upload_deg_Tutor = "../assets/img/img_tutor/" . $degreeTutor;

															echo $fullName;
															echo $phoneNumber;
															echo $city;
															echo $detailCity;
															echo $description;
															echo $typeTutor;


															echo $avatarTutor;
															echo $upload_avt_Tutor;
															echo $degreeTutor;
															echo $upload_deg_Tutor;
															echo $sex;
															echo $fee1Hour;
															if (isset($_POST['subject'])) {
																$typeSubjects  = $_POST['subject'];
																foreach ($typeSubjects as $subject) {
																	echo $subject . "<br>";
																}
															} else {
																$typeSubjects = NULL;
															}



															if (isset($_POST['list_tag'])) {
																$listTags = $_POST['list_tag']; // Lấy các giá trị được chọn từ checkbox
																foreach ($listTags as $tag) {
																	echo "Giá trị của checkbox được chọn: $tag <br>";
																}
															} else {
																echo "Không có checkbox nào được chọn.";
																$listTags = NULL;
															}
															if (isset($_POST['list-calendar'])) {
																$listCalendars = $_POST['list-calendar'];

																foreach ($listCalendars as $calendar) {
																	echo "Giá trị của checkbox được chọn: $calendar <br>";
																}
															} else {
																echo "Không có checkbox nào được chọn.";
																$listCalendars = array();
															}
															if (isset($_POST['type-teach'])) {
																$typeTeachs = $_POST['type-teach'];
																if (count($typeTeachs) > 1) {
																	$typeTeach = 3;
																} else {
																	foreach ($typeTeachs as $x) {
																		if ($x == 1) {
																			$typeTeach = 1;
																		} else if ($x == 2) {
																			$typeTeach = 2;
																		}
																	}
																}
																echo $typeTeach;
															} else {
																$typeTeachs = NULL;
																echo "vcllll";
															}



															if (array_key_exists($city, $cityData)) {
																// Lấy tên của tỉnh/thành phố tương ứng với mã số
																$selectedCity = $cityData[$city];
																echo $selectedCity;
															} else {
																echo "Không tìm thấy tỉnh/thành phố tương ứng.";
															}

															if (!empty($fullName) and (!empty($phoneNumber)) and (!empty($description)) and (!empty($typeTutor)) and (!empty($fee1Hour)) and ($typeTeachs != NULL) and (!empty($selectedCity)) and (!empty($avatarTutor)) and (!empty($degreeTutor))) {
																$updateTutor =  "UPDATE `giasu`
																				 SET
																					`Hoten` = ?,
																					`DienThoai` = ?,
																					`Tinh_TP` = ?,
																					`DiaChiCT` = ?,
																					`MoTa` = ?,
																					`GioiTinh` = ?,
																					`HocPhi1H` = ?,
																					`MaLoaiGS` = ?,
																					`MaHT` = ?,
																					`AnhDaiDien` = ?,
																					`AnhBangCap` = ?
																				WHERE MaGS = ?;";

																$stmt = $conn->prepare($updateTutor);
																$stmt->bind_param("sssssidiissi", $fullName, $phoneNumber, $selectedCity, $detailCity, $description, $sex, $fee1Hour, $typeTutor, $typeTeach, $avatarTutor, $degreeTutor, $idTutor);


																if ($stmt->execute()) {
																	move_uploaded_file($_FILES['edit_avatar_account']['tmp_name'], $upload_avt_Tutor);
																	move_uploaded_file($_FILES['img_cmt_cert']['tmp_name'], $upload_deg_Tutor);
																	echo '<script language="javascript">alert("Update successful!");</script>';
																	// header("Refresh: 1");
																} else {
																	echo '<script language="javascript">alert("Update failed!");</script>';
																}
																if ($typeSubjects != NULL) {
																	$sql = 'DELETE FROM giasu_monhoc WHERE MaGS = ?';
																	$stmt = $conn->prepare($sql);
																	$stmt->bind_param('i', $idTutor);
																	$stmt->execute();

																	// thêm các môn học 
																	$sql = 'INSERT INTO giasu_monhoc (MaGS_MH, MaGS, MaMH) VALUES (?, ?, ?)';
																	$stmt = $conn->prepare($sql);
																	foreach ($typeSubjects as $subject) {
																		$next_idGS_MH = next_id($conn, 1);
																		$stmt->bind_param("iii", $next_idGS_MH, $idTutor, $subject);
																		$stmt->execute();
																	}

																	if ($listTags != NULL) {
																		$sql = 'DELETE FROM giasu_chude WHERE MaGS = ?';
																		$stmt = $conn->prepare($sql);
																		$stmt->bind_param('i', $idTutor);
																		$stmt->execute();

																		// thêm các chủ đề
																		$sql = 'INSERT INTO giasu_chude (MaGS_CD, MaGS, MaCD) VALUES (?, ?, ?)';
																		$stmt = $conn->prepare($sql);
																		foreach ($listTags as $tag) {
																			$next_idGS_CD = next_id($conn, 2);
																			$stmt->bind_param("iii", $next_idGS_CD, $idTutor, $tag);
																			$stmt->execute();
																		}
																	}
																}
																if (!empty($listCalendars)) {
																		$sql = 'DELETE FROM lichday WHERE MaGS = ?';
																		$stmt = $conn->prepare($sql);
																		$stmt->bind_param('i', $idTutor);
																		$stmt->execute();

																		// thêm các môn học 
																		$sql = 'INSERT INTO lichday (MaLichDay, TenThu, TenBuoi, MaGS) VALUES (?, ?, ?, ?)';
																		$stmt = $conn->prepare($sql);
																		foreach ($listCalendars as $calendar) {
																			$result_split = splitString($calendar);
																			// $result_split[0]; // Thứ 
																			// $result_split[1]; // Buổi
																			$next_idLichDay = next_id($conn, 3);
																			$stmt->bind_param("issi", $next_idLichDay, $result_split[0], $result_split[1], $idTutor);
																			$stmt->execute();
																		}

																}
															}
														}
													} else if ($typeAcc == 3) {
														$sql = 'SELECT * FROM hocvien WHERE MaTK = ?';
														$stmt = $conn->prepare($sql);
														$stmt->bind_param('i', $idAcc);
														$stmt->execute();
														$resultStudent = $stmt->get_result()->fetch_assoc();
														$fullName = $resultStudent['HoTen'];
														$phoneNumber = $resultStudent['DienThoai'];
														$city = $resultStudent['Tinh_TP'];
														$detailCityTutor = $resultStudent['DiaChiCT'];
													}
												}

												// if (isset($)){
												// 	$fullName = $_POST['full_name'];
												// 	$phoneNumber = $_POST['number'];
												// 	$city = $_POST['place'];
												// 	$detailCity = $_POST['address-detail'];
												// 	$description = $_POST['body'];


												// }

												?>
												<!--Part 1: thông tin cá nhân-->
												<form id="update-profile-form" method="POST" enctype="multipart/form-data">
													<style>
														select,
														textarea {
															border-radius: 8px;
														}
													</style>

													<div class="info-step-1 info-step">
														<h3>Thông tin cá nhân</h3>
														<div class="row">
															<div class="col-md-6">
																<label>HỌ TÊN ĐẦY ĐỦ <span class="teacher-alert">*</span></label>
																<input type="hidden" name="account-uid" value="66604">
																<input type="text" name="full_name" class="form-control" id="full_name" oninput="changeStatusInput()" onkeypress="changeStatusInput()" value="<?= isset($fullName) ? $fullName : "" ?>" required>
															</div>

															<div class="col-md-6">
																<label>ĐIỆN THOẠI <span class="teacher-alert">*</span>
																</label>
																<input type="text" name="number" class="form-control" oninput="changeStatusInput()" onkeypress="changeStatusInput()" id="number" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" value="<?= isset($phoneNumber) ? $phoneNumber : "" ?>">
															</div>

															<div class="col-md-6">
																<label>TỈNH/THÀNH PHỐ ĐANG SỐNG <span class="teacher-alert">*</span> </label>
																<select name="place" id="place" class="form-control">
																	<option value="" disabled selected>Lựa chọn</option>

																	<optgroup label='Địa điểm phổ biến'>
																		<option value='01' <?= ((isset($city)) and ($city == "Hà Nội")) || ((isset($selectedCity)) and ($selectedCity == "Hà Nội")) ? "selected" : '' ?>>Hà Nội</option>
																		<option value='79' <?= ((isset($city)) and ($city == "Hồ Chí Minh")) || ((isset($selectedCity)) and ($selectedCity == "Hồ Chí Minh")) ? "selected" : '' ?>>Hồ Chí Minh</option>
																		<option value='31' <?= ((isset($city)) and ($city == "Hải Phòng")) || ((isset($selectedCity)) and ($selectedCity == "Hải Phòng")) ? "selected" : '' ?>>Hải Phòng</option>
																		<option value='48' <?= ((isset($city)) and ($city == "Đà Nẵng")) || ((isset($selectedCity)) and ($selectedCity == "Đà Nẵng")) ? "selected" : '' ?>>Đà Nẵng</option>
																		<option value='92' <?= ((isset($city)) and ($city == "Cần Thơ")) || ((isset($selectedCity)) and ($selectedCity == "Cần Thơ")) ? "selected" : '' ?>>Cần Thơ</option>
																	<optgroup id="other_province" label='Tỉnh, thành phố khác'>



																</select>
															</div>


															<div class="col-md-6">
																<label>ĐỊA CHỈ CỤ THỂ <span class="teacher-alert">*</span> </label>
																<input type="text" name="address-detail" class="form-control" id="address-detail" oninput="changeStatusInput()" onkeypress="changeStatusInput()" value="<?= isset($detailCity) ? $detailCity : "" ?>">
																<input type="hidden" name="latitude" id="latitude" value="">
																<input type="hidden" name="longitude" id="longitude" value="">
															</div>
															<div class="col-md-6">
																<div class="hinh-thuc-day ">
																	<label>GIỚI TÍNH <span class="teacher-alert">*</span> </label>
																	<div class="" style="display: flex;">
																		<input type="radio" id="sex-male" style="width: 3% !important;margin: auto 0;" name="sex" value="1" <?= (isset($sex) and ($sex == 1))  ? 'checked' : "" ?>>

																		<label for="sex-male" class=""></label>
																		<span style="margin: auto 36px auto 7px;">Nam</span>

																		<input type="radio" id="sex-female" name="sex" style="width: 3% !important;margin: auto 0;" value="0" <?= (isset($sex) and ($sex == 0))  ? 'checked' : "" ?>>


																		<label for="sex-female" class=""></label>
																		<span style="margin: auto 36px auto 7px;">Nữ</span>
																	</div>
																</div>

															</div>
														</div>
													</div>
													<!--map-->
													<div class="row">
														<div class="col-md-12">
															<!--using embed map-->
															<!-- <div id="map-container">
																<iframe id="iframe-map" width="100%" height="350px" frameborder="0" style="border:0" src="" allowfullscreen>
																</iframe>
															</div> -->

															<!--using dynamic map
              <div id="map" style="width: 100%;height: 200px;"></div>
								-->
														</div>
													</div>

													<div class="row info-step-3 info-step">
														<div class="col-md-12">
															<label>MÔ TẢ BẢN THÂN, KINH NGHIỆM & BẰNG CẤP <span class="teacher-alert">*</span></label><br>
															<i>(Bạn cần ghi đầy đủ ưu điểm của bản thân để được nhận lớp
																trong thời gian sớm nhất, <a href="#gs_huong_dan" class="popup-modal">xem hướng dẫn</a>)</i>

															<textarea id="mo-ta-ban-than" oninput="changeStatusInput()" onkeypress="changeStatusInput()" style="margin-top: 20px" placeholder="Mô tả bản thân, bằng cấp và kinh nghiệm của bạn (nên dài hơn 150 chữ cái)..." name="body"><?= isset($description) ? $description : "" ?></textarea>

														</div>
													</div>

													<!-- YEU CAU GIANH CHO GIAO VIEN -->
													<div class="row info-step-2 info-step">
														<div class="col-md-12">
															<h3>Hồ sơ chuyên môn</h3>
														</div>
														<div class="col-md-6 mb-3">

															<div class="kieu-giao-vien">
																<label style="border:none;background-color:#fff; padding:0;margin:0">BẠN
																	ĐANG LÀ? (Bấm để chọn) <span class="teacher-alert">*</span> </label>
																<div style="margin-top:10px;">
																	<select name="typeTutor" id="type_teacher_field" class="form-control" style="max-width: 300px; border-radius:8px">
																		<option selected disabled value="">Lựa chọn</option>
																		<?php
																		$typeTutors = 'SELECT * FROM loaigs';
																		$stmt = $conn->prepare($typeTutors);
																		$stmt->execute();
																		$result = $stmt->get_result();
																		while ($rows = $result->fetch_assoc()) {
																			if ($typeTutor == $rows['MaLoaiGS']) {
																				$selected = "selected";
																			} else $selected = "";
																			echo "<option value='{$rows['MaLoaiGS']}' $selected >{$rows['TenLoaiGS']}</option>";
																		}
																		?>

																	</select>
																</div>
															</div>
														</div>
														<div class="col-md-6 mb-3">
															<div class="hinh-thuc-day ">
																<label>HÌNH THỨC DẠY <span class="teacher-alert">*</span> </label>
																<div class="checkbox-wrapper-19" style="display: flex;">
																	<input type="checkbox" id="offline-type" name="type-teach[]" value="1" <?= (isset($typeTeach) and ($typeTeach == 1 or $typeTeach == 3))  ? 'checked' : "" ?>>

																	<label for="offline-type" class="check-box"></label>
																	<span style="margin: auto 36px auto 7px;">Gặp mặt</span>

																	<input type="checkbox" id="online-type" name="type-teach[]" value="2" <?= (isset($typeTeach) and ($typeTeach == 2 or $typeTeach == 3))  ? 'checked' : "" ?>>


																	<label for="online-type" class="check-box"></label>
																	<span style="margin: auto 36px auto 7px;">Trực tuyến</span>
																</div>
															</div>


														</div>
														<div class="col-md-6 mb-3">
															<div class="mon_hoc">
																<label>MÔN HỌC SẼ DẠY</label> </br>
																<span class="multiselect-native-select">
																	<select name="typeSubject" id="select-subject" multiple="multiple">
																		<?php
																		$typeSubjects = 'SELECT * FROM monhoc';
																		$stmt = $conn->prepare($typeSubjects);
																		$stmt->execute();
																		$result = $stmt->get_result();
																		while ($rows = $result->fetch_assoc()) {
																			if ($typeSubject == $rows['MaMH']) {
																				$selected = "selected";
																			} else $selected = "";
																			echo "<option value='{$rows['MaMH']}' $selected >{$rows['TenMH']}</option>";
																		}
																		?>
																	</select>
																	<div class="btn-group" style="width: 69%;"><button type="button" style="border-radius: 8px;max-width: 300px;" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Chọn môn học" aria-expanded="false"><span style="display: inline;margin-right: 48%;" class="multiselect-selected-text">Lựa chọn môn học</span> <b class="caret"></b></button>
																		<ul class="multiselect-container dropdown-menu" x-placement="bottom-start" style="width:100%; position: absolute; transform: translate3d(0px, 61px, 0px); top: 0px; left: 0px; will-change: transform;">
																			<li class="multiselect-item multiselect-all"><a tabindex="0" class="multiselect-all"><label class="checkbox"><input type="checkbox" value="multiselect-all"> Select all</label></a></li>
																			<?php
																			if (isset($idTutor)) {
																				// Lấy tất cả các môn học từ cơ sở dữ liệu
																				$typeSubjects = 'SELECT * FROM monhoc';
																				$stmt = $conn->prepare($typeSubjects);
																				$stmt->execute();
																				$resultSubjects = $stmt->get_result();

																				// Lấy các môn học mà giáo sư dạy từ cơ sở dữ liệu
																				$sql = 'SELECT * FROM giasu_monhoc WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
																				$stmt = $conn->prepare($sql);
																				$stmt->bind_param('i', $idTutor);
																				$stmt->execute();
																				$resultTutorSubjects = $stmt->get_result();

																				// Tạo một mảng lưu trữ các môn học mà giáo sư dạy
																				$tutorSubjects = array();
																				while ($rowTutorSubject = $resultTutorSubjects->fetch_assoc()) {
																					$tutorSubjects[] = $rowTutorSubject['MaMH'];
																				}

																				// Hiển thị các môn học trong form
																				while ($rowSubject = $resultSubjects->fetch_assoc()) {
																					$checked = in_array($rowSubject['MaMH'], $tutorSubjects) ? 'checked' : ''; // Kiểm tra xem môn học có trong danh sách môn học của giáo sư hay không
																					echo "<li><a tabindex='0'><label class='checkbox'><input type='checkbox' class='select-subject-1' name='subject[]' value='{$rowSubject['MaMH']}' $checked>{$rowSubject['TenMH']}</label></a></li>";
																				}
																			}

																			?>







																		</ul>
																	</div>
																</span>
															</div>
														</div>
														<div class="col-md-6 mb-3">
															<div class="hoc-phi">
																<label>HỌC PHÍ 1 GIỜ (VNĐ) <span class="teacher-alert">*</span> </label>
																<input type="number" class="numberOnly form-control" style="border-radius:8px" autocomplete="off" oninput="changeStatusInput()" onkeypress="changeStatusInput()" placeholder="Ví dụ:100,000" maxlength="14" name="price_cost" id="price_cost" value="<?= isset($fee1Hour) ? $fee1Hour : "" ?>">
															</div>
														</div>

														<div class="col-md-12">
															<div class="group-tag">
																<div class="subject-tag" id="406-tag">
																	<?php
																	if (isset($tutorSubjects)) {
																		$sql = 'SELECT * FROM chude 
																		JOIN monhoc ON monhoc.MaMH = chude.MaMH
																		WHERE chude.MaMH = ?';
																		$stmt = $conn->prepare($sql);
																		foreach ($tutorSubjects as $tutorSubject) {
																			$stmt->bind_param('i', $tutorSubject);
																			$stmt->execute();
																			$result = $stmt->get_result();

																			$row = $result->fetch_assoc();
																			$nameSubject = $row['TenMH'];

																	?> <div id='tag-subject<?= $tutorSubject ?>'>
																				<h4>Lựa chọn chủ đề cho môn <?= $nameSubject  ?> </h4>
																				<p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
																				<?php
																				$result->data_seek(0);
																				while ($row = $result->fetch_assoc()) {
																				?>
																					<label class="<?= (in_array($row['MaCD'], $listTags)) ? 'lbl-active' : '' ?>" for="tag-<?= $row['MaCD'] ?>"><?= $row['TenCD'] ?></label><input id="tag-<?= $row['MaCD'] ?>" type="checkbox" name="list_tag[]" class="list_tag" value="<?= $row['MaCD'] ?>" <?= (in_array($row['MaCD'], $listTags)) ? 'checked' : '' ?>>
																				<?php } ?>
																			</div>
																		<?php } ?>


																	<?php
																	}
																	?>

																</div>

															</div>
														</div>




													</div> <!--Ho so chuyen mon -->
											</div>

											<div class="row info-step-2 info-step">
												<label>LỊCH CÓ THỂ NHẬN LỚP <span class="teacher-alert">*</span>
												</label>
												<div class="content-info-step-2">
													<div class='row-calendar-check'>
														<h4>Thứ 2</h4>
														<ul>
															<li><label for='morning-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-2' class="<?= (isset($listCalendars)) &&  in_array("Thứ 2 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-2' type='checkbox' name='list-calendar[]' value='Thứ 2 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 2 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Thứ 3</h4>
														<ul>
															<li><label for='morning-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-3' class="<?= (isset($listCalendars)) &&  in_array("Thứ 3 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-3' type='checkbox' name='list-calendar[]' value='Thứ 3 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 3 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Thứ 4</h4>
														<ul>
															<li><label for='morning-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-4' class="<?= (isset($listCalendars)) &&  in_array("Thứ 4 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-4' type='checkbox' name='list-calendar[]' value='Thứ 4 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 4 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Thứ 5</h4>
														<ul>
															<li><label for='morning-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-5' class="<?= (isset($listCalendars)) &&  in_array("Thứ 5 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-5' type='checkbox' name='list-calendar[]' value='Thứ 5 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 5 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Thứ 6</h4>
														<ul>
															<li><label for='morning-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-6' class="<?= (isset($listCalendars)) &&  in_array("Thứ 6 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-6' type='checkbox' name='list-calendar[]' value='Thứ 6 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 6 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Thứ 7</h4>
														<ul>
															<li><label for='morning-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Sáng' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Chiều' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-7' class="<?= (isset($listCalendars)) &&  in_array("Thứ 7 Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-7' type='checkbox' name='list-calendar[]' value='Thứ 7 Tối' <?= (isset($listCalendars)) &&  in_array("Thứ 7 Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<div class='row-calendar-check'>
														<h4>Chủ nhật</h4>
														<ul>
															<li><label for='morning-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Sáng", $listCalendars)  ? 'lbl-active' : '' ?>">Sáng</label><input class='radio-calendar' id='morning-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Sáng' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Sáng", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='afternoon-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Chiều", $listCalendars)  ? 'lbl-active' : '' ?>">Chiều</label><input class='radio-calendar' id='afternoon-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Chiều' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Chiều", $listCalendars)  ? 'checked' : '' ?>></li>
															<li><label for='evening-calendar-8' class="<?= (isset($listCalendars)) &&  in_array("Chủ nhật Tối", $listCalendars)  ? 'lbl-active' : '' ?>">Tối</label><input class='radio-calendar' id='evening-calendar-8' type='checkbox' name='list-calendar[]' value='Chủ nhật Tối' <?= (isset($listCalendars)) &&  in_array("Chủ nhật Tối", $listCalendars)  ? 'checked' : '' ?>></li>
														</ul>
													</div>
													<p class="note-calender">Bấm để chọn lịch. <span>Màu
															xanh</span> là những buổi có thể nhận dạy.</p>
												</div>
											</div>

											<!-- Part 2: Cập nhật ảnh: avatar, Bằng cấp, chứng minh thư -->
											<div class="info-step-5 info-step" style="border-top: 10px solid #f7f7f7;margin:20px -5px 0 -5px;">
												<h3>Ảnh xác nhận thông tin gia sư</h3>
												<div class="row  verifired-img justify-content-center">
													<div class="col-md-4">
														<div class="row">
															<div class="col-md-12">
																<label class="title-update" style="margin-left: 22px;">ẢNH ĐẠI DIỆN (PHẢI RÕ MẶT, CHỤP MỘT MÌNH) <span class="teacher-alert">*</span></label>
																<div class="image-info" id="user-avata">
																	<a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/-10-54-03502e62f56bd287d02932a561829bbb95.JPEG" target="_blank"><img id="show_avatar" src="../assets/img/<?= (isset($avatarTutor) and !empty($avatarTutor)) ? 'img_tutor/' . $avatarTutor : 'default_user.png' ?>">
																	</a>

																	<div class="box">
																		<input type="file" name="edit_avatar_account" class="inputfile" id="edit-avatar-account" onchange="updateImagePreview(event, 1)">
																		<label for="edit-avatar-account">
																			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
																				<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
																			</svg>
																			<span>Chọn ảnh&hellip;</span>
																		</label>
																	</div>
																</div>




															</div>

															<div class="col-md-12">
																<div class="tip-update">
																	<p>* Tip: Để thể hiện sự chuyên nghiệp của mình
																		với học viên & phụ huynh,
																		bạn hãy chọn ảnh đại diện đẹp, chụp một mình
																		và nhìn rõ khuôn mặt
																	</p>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-4">
														<div class="row">
															<div class="col-md-12">
																<label class="title-update" style="margin-left: 22px;">THẺ SINH VIÊN HOẶC BẰNG CẤP (KHÔNG HIỂN THỊ) <span class="teacher-alert">*</span> </label>
																<div class="image-info" id="image-bang-cap">
																	<a href="https://d1plicc6iqzi9y.cloudfront.net/sites/default/files/image/202403/11/66604-10-53-265a07e319af49f4dd11d3111ac210249a_cert.JPEG" target="blank">
																		<img id="show-img-cert" src="../assets/img/<?= (isset($degreeTutor) and !empty($degreeTutor)) ? 'img_tutor/' . $degreeTutor : 'cert.png' ?>">
																	</a>

																	<div class="box">
																		<input type="file" name="img_cmt_cert" class="inputfile" id="img_cmt_cert" onchange="updateImagePreview(event, 2)">
																		<label for="img_cmt_cert"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">
																				<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z" />
																			</svg> <span>Chọn
																				ảnh&hellip;</span></label>
																	</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="tip-update">
																	<p>* Tip: Hãy cập nhật ảnh chụp thẻ sinh viên
																		hoặc Bằng cấp chuyên môn CAO NHẤT của bạn.
																		Ví dụ: bằng cấp 3, bằng đại học, thạc sỹ,
																		tiến sỹ,vv.
																		Cập nhật để học viên có thể đánh giá chuyên
																		môn của bạn. Ảnh chụp phải rõ nét, không bị
																		mờ chữ, có thể đọc được số.
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- End part 2 -->
											<div class="action-form">
												<input name="submit-info" type="submit" value="Cập nhật" style="border-radius: 8px; padding: 11px 47px;">
											</div>
											</form>


											<!--Part 3: Phần duyệt hồ sơ Gia sư-->

										</div>

									</div>
								</div>
							</div>

							<div id="gs_huong_dan" class="white-popup-block mfp-hide">
								<div class="box-title"><b>HƯỚNG DẪN</b></div>
								<a class="popup-modal-dismiss" href="#" style="top: 15px;right: 15px;border: 1px solid #ccc !important;">x</a>
								<div class="body-block">
									<p>Giới thiệu trung thực về thành tích học tập, kinh nghiệm, phương pháp dạy
										cũng như đôi nét thú vị về bản thân bạn. Hồ sơ của bạn sẽ được gửi tới Phụ
										huynh & Học sinh lựa chọn vậy nên các bạn hướng người đọc đến đối tượng là
										phụ huynh & học sinh. Bạn phải nói được cho họ biết vì sao họ chọn bạn mà
										không phải là gia sư khác! Ví dụ bạn học trường top đầu Việt Nam thì bạn có
										thể đưa ra điểm thi ĐH, thành tích HSG của bạn cho phụ huynh xem nhưng nếu
										bạn học trường bình thường thì phải đưa ra các lí do khác như học phí rẻ,
										yêu thích việc dạy học để những gia đình có điều kiện bình thường họ chọn
										bạn. <a href="/nguyen-thi-thao53">Tham khảo</a> phần tự giới thiệu của các
										gia sư khác để viết được 1 phần giới thiệu thật hay nhé!</p>
									<p>Lưu ý: Rất nhiều bạn gia sư giỏi nhưng vẫn chưa nhận được lớp hoặc nhận được
										những lớp lương thấp không phù hợp với năng lực vì phần tự giới thiệu quá sơ
										sài, sai chính tả, đặt dấu câu bừa bãi, không chịu chăm chút câu chữ để làm
										nổi bật bản thân. Nếu các bạn học chuyên cấp 3 thì ghi rõ chuyên gì, trường
										chuyên nào. Nếu đạt HSG Quận/Huyện, Tỉnh/TP, Quốc Gia thì ghi rõ giải mấy,
										môn gì, năm lớp mấy. Ghi rõ điểm ĐH/CĐ các môn cụ thể. Nếu đã từng đi dạy
										thì nêu rõ đã dạy cho những em học sinh nào, lớp mấy, nhà ở đâu, tiến bộ cụ
										thể như thế nào? Nếu được nhận làm gia sư thì nêu rõ phương pháp dạy như thế
										nào, phong cách dạy ra làm sao?</p>
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
							<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9LBSvgFru2-nYJxvw-WJguclKVzHgJRA"></script>
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
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const tinhThanhSelect = document.getElementById('place');
			var tinhThanhOtpgroup = document.getElementById('other_province');
			const huyenThanhSelect = document.getElementById('huyenThanhSelect');

			const selectSubject = document.getElementById('select-subject');
			const subjectTag = document.getElementById('406-tag');
			const city = <?php echo json_encode($city); ?>;
			const selectedcity = <?php echo isset($selectedCity) ? json_encode($selectedCity) : "''"; ?>;
			console.log(selectedcity);

			// Lấy dữ liệu tỉnh/thành phố ban đầu từ URL
			fetch('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json')
				.then(response => response.json())
				.then(data => {
					const options = [];
					// Thêm các option cho thẻ select tỉnh/thành phố
					Object.entries(data).forEach(([code, province]) => {
						const option = document.createElement('option');
						value_otp_main = [1, 79, 31, 48, 92];
						if (!value_otp_main.includes(parseInt(code))) {
							option.value = code;
							option.textContent = province.name;
							if (option.textContent == city) option.selected = true;
							if (option.textContent == selectedcity) option.selected = true;

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

			// Lấy dữ liệu tỉnh/thành phố ban đầu từ URL

			// Sự kiện khi người dùng thay đổi lựa chọn của thẻ select tỉnh/thành phố
			tinhThanhSelect.addEventListener('change', function() {
				const selectedProvinceCode = this.value;
				// Gửi yêu cầu Ajax để lấy dữ liệu về quận/huyện tương ứng
				fetch(`https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/quan_huyen.json`)
					.then(response => response.json())
					.then(data => {
						// Xóa tất cả các option cũ trong thẻ select quận/huyện
						huyenThanhSelect.innerHTML = '<option value="">Chọn Quận/Huyện</option>';
						// Thêm các option mới tương ứng với dữ liệu mới
						Object.entries(data).forEach(([code, district]) => {
							if (district.parent_code === selectedProvinceCode) {
								const option = document.createElement('option');
								option.value = code;
								option.textContent = district.name;
								huyenThanhSelect.appendChild(option);
							}
						});
					})
					.catch(error => console.error('Error:', error));
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const selectSubject = document.getElementById('select-subject');
			const selectSubject_1 = document.querySelectorAll('.select-subject-1');
			const subjectTag = document.getElementById('406-tag');
			const subjectNameMapping = {}; // Đối tượng để ánh xạ mã môn học với tên môn học

			// Lấy danh sách các môn học và mã môn học tương ứng từ PHP và lưu vào đối tượng subjectNameMapping
			<?php
			$typeSubjects = 'SELECT * FROM monhoc';
			$stmt = $conn->prepare($typeSubjects);
			$stmt->execute();
			$result = $stmt->get_result();
			while ($rows = $result->fetch_assoc()) {
				echo "subjectNameMapping['{$rows['MaMH']}'] = '{$rows['TenMH']}';";
			}
			?>

			let addedElements = [];
			selectSubject_1.forEach(function(checkbox) { // Lặp qua mỗi checkbox trong NodeList
				checkbox.addEventListener('change', function() { // Lắng nghe sự kiện change của mỗi checkbox
					if (this.checked) { // Kiểm tra xem checkbox có được chọn hay không
						// Thực hiện các hành động khi checkbox được chọn
						console.log('Checkbox được chọn');
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

								const subjectName = subjectNameMapping[selectedValue];
								let topicHTML = '';
								topics.forEach(function(topic) {
									topicHTML += `<label for="tag-${topic.MaCD}">${topic.TenCD}</label><input id="tag-${topic.MaCD}" type="checkbox" name="list_tag[]" class="list_tag" value="${topic.MaCD}">`;
								});
								const wrapper = document.createElement('div');
								wrapper.id = 'tag-subject' + selectedValue;
								wrapper.innerHTML = `<h4>Lựa chọn chủ đề cho môn ${subjectName}</h4>
                    								<p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
                    								${topicHTML}`;
								subjectTag.appendChild(wrapper);

							}
						};
					} else {
						const selectedValue = this.value;
						const elementToRemove = document.getElementById('tag-subject' + selectedValue);
						if (elementToRemove) {
							elementToRemove.remove();
						} else {
							console.log("Không tìm thấy phần tử'");
						}
					}
				});
			});


			// Xử lý sự kiện khi thay đổi giá trị của select
			selectSubject.addEventListener('change', function() {
				// Lấy giá trị mới của select
				const selectedValue = this.value;

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

						// Xử lý kết quả và cập nhật nội dung của subjectTag
						// Ví dụ:
						const subjectName = subjectNameMapping[selectedValue];
						let topicHTML = '';
						topics.forEach(function(topic) {
							topicHTML += `<label for="tag-${topic.MaCD}">${topic.TenCD}</label><input id="tag-${topic.MaCD}" type="checkbox" name="list_tag[]" class="list_tag" value="${topic.MaCD}">`;
						});
						subjectTag.innerHTML = `<h4>Lựa chọn chủ đề cho môn ${subjectName} </h4>
                                        <p>Chọn chủ đề giúp học viên tìm kiếm bạn dễ hơn.</p>
                                        ${topicHTML}`;
					}
				};
			});
		});

		document.addEventListener('click', function(event) {
			if (event.target.classList.contains('list_tag')) {
				var label = document.querySelector('label[for="' + event.target.id + '"]');
				console.log(label);
				label.classList.toggle('lbl-active');
			}
		});
	</script>
	<script>
		function updateImagePreview(event, type) {
			var input = event.target;
			var reader = new FileReader();

			reader.onload = function() {
				var dataURL = reader.result;

				if (type == 1) {
					var avatarTutor = document.getElementById('show_avatar');
					avatarTutor.src = dataURL;

				} else if (type == 2) {
					var degreeTutor = document.getElementById('show-img-cert');
					degreeTutor.src = dataURL;
				}

			};

			reader.readAsDataURL(input.files[0]);
			reader.readAsDataURL(input.files[1]);

		}
	</script>
</body>

</html>