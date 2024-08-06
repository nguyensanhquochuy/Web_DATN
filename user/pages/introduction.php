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
  		#products {
  			background: url(../assets/img/bg-wave.jpeg);
  			background-repeat: no-repeat;
  			background-position: center bottom;
  			background-size: cover;

  		}

  		#partner {
  			background: url(../assets/img/why-learn-bg.jpeg);
  			background-repeat: no-repeat;
  			background-position: center;
  			background-size: cover;
  		}
  	</style>
  </head>

  <body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-579 node-type-page s">
  	<?php include 'header.php' ?>
  	<!--main content-->
  	<div class="main-content">
  		<!--Banner-->
  		<div class="about-banner">
  			<div class="row">
  				<div class="block-content block-content-01 image-about-banner" id="home">
  					<div class="container">
  						<div class="block" style="    display: flex;flex-direction: column;flex-wrap: wrap;justify-content: center;">
  							<h1 style="color:#fff;font-weight:bold;line-height:1.35; font-size:32px!important;">
  								CÙNG NHAU NÂNG TẦM GIÁO DỤC VIỆT NAM
  							</h1>
  							<h3>
  								Chia sẻ tri thức, xây dựng tương lai
  							</h3>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Sư mệnh-->
  		<div class="block-content bg-gradient-blue" id="vision">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg1"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block">
  						<h2>SỨ MỆNH GIÁO DỤC</h2>
  						<p>Nền kinh tế Việt Nam đang vươn lên mạnh mẽ. Để đáp ứng được nhu cầu lao động chất lượng cao
  							thì cải cách giáo dục phải được ưu tiên lên hàng đầu. Hưởng ứng lời kêu gọi xã hội hóa giáo dục của chính phủ,
  							Chúng tôi, những con người đang ngày đêm góp sức mình trong việc nâng cao chất lượng giáo dục tại Việt Nam.
  							Chúng tôi tự hào gọi đó là một <i>"Sứ mệnh giáo dục"</i>.
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Kết nối dạy và học-->
  		<div class="block-content bg-gradient-pink" id="ketnoi">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg2 col-md-push-5"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block col-md-pull-7">
  						<h2>KẾT NỐI DẠY VÀ HỌC</h2>
  						<p>Hướng đi của chúng tôi đó là <i>"Kết nối nhu cầu học tập của người học tới những giáo viên,
  								gia sư, chuyên gia, và trung tâm uy tín"</i>. Việc này có ý nghĩa to lớn trong việc tiết kiệm chi phí
  							thời gian tìm kiếm cũng như tạo ra một nền tảng đánh giá chất lượng khách quan bởi cộng đồng.
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Nhanh đơn giản, tiết kiệm-->
  		<div class="block-content bg-gradient-blue" id="features">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg3"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block">
  						<h2>NHANH, ĐƠN GIẢN, TIẾT KIỆM</h2>
  						<p>Sử dụng thành tựu công nghệ thời đại 4.0, chúng tôi tạo ra nền tảng mà người học và người dạy
  							được <i>"kết nối trực tiếp"</i> rất nhanh và chính xác theo đúng những nhu cầu học đã đăng lên.
  							Đặc biệt, các giáo viên sẽ đưa ra các mức giá hợp lý nhất như bạn mong muốn.
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Đánh giá chất lượng-->
  		<div class="block-content bg-gradient-pink" id="quality">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg4 col-md-push-5"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block col-md-pull-7">
  						<h2>ĐÁNH GIÁ CHẤT LƯỢNG KHÁCH QUAN</h2>
  						<p>Chúng tôi hiểu rằng <i>"chất lượng dạy học luôn phải đặt lên hàng đầu"</i> bên cạnh chi phí phải chăng.
  							Vì vậy chúng tôi đã tạo ra nền tảng cho phép học viên được đánh giá chất lượng dạy & học. Những thông tin này
  							là vô cùng hữu ích cho những người học tiếp theo.
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Mọi nhu cầu học-->
  		<div class="block-content bg-gradient-blue" id="alldemand">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg5"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block">
  						<h2>ĐÁP ỨNG MỌI NHU CẦU HỌC TẬP CỦA BẠN</h2>
  						<p>Giờ đây bạn không phải vất vả tìm kiếm nữa, bởi tất cả mọi nhu cầu học tập của bạn
  							đều rất sẵn sàng trên TUTORCONNECTSTUDENT. Chúng tôi có thể giúp bạn:
  						<ul style="font-size:16px;">
  							<li>Tìm gia sư, tìm giáo viên dạy kèm</li>

  						</ul>
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Products-->
  		<div class="block-content block-content-products bg-gradient-pink" id="products">
  			<div class="container">
  				<div class="row">
  					<h2>CÁC SẢN PHẨM, DỊCH VỤ GIÁO DỤC CHÍNH</h2>
  				</div>
  				<div class="row">
  					<div class="col-md-3 col-sm-6 col-xs-12 intro-product-item">
  						<a href="#" class="intro-product-img p-intro-product1">
  						</a>
  						<div class="intro-product-des">
  							<a href="/lp/tro-ly-hoc-tap-bmentor" target="_blank">
  								<h3>Dạy kèm 1 -1 </h3>
  							</a>
  							<p>
  								Dịch vụ dạy kèm, dạy gia sư 1 kèm 1 là giải pháp học hiệu quả nhất dành cho học sinh có nhu cầu học theo lộ trình riêng.
  								Học sinh không chỉ được lên lộ trình học riêng bởi các giáo viên giỏi mà còn được gia sư dạy kèm 1-1. Blacasa cam kết học sinh tiến bộ
  								vượt bậc cả về học lực và thái độ học sau lộ trình 40 buổi học.
  							</p>
  						</div>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 intro-product-item">
  						<a href="/bai-viet" class="intro-product-img p-intro-product3">
  						</a>
  						<div class="intro-product-des">
  							<a href="/lp/tro-ly-hoc-tap-bmentor" target="_blank">
  								<h3>Dạy kèm nhóm nhỏ</h3>
  							</a>
  							<p>
  								Dạy kèm các nhóm nhỏ tối đa 5 học sinh đảm bảo mỗi học sinh được quan tâm riêng và duy trì sự sôi nổi của không khí lớp học.
  								Giải pháp học nhóm nhỏ mang đến sự tiết kiệm chi phí mà vẫn đảm bảo chất lượng học tập cao nhất. Phụ huynh cũng sẽ có ứng dụng
  								để theo dõi tình hình học tập của con.
  							</p>
  						</div>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 intro-product-item">
  						<a href="#" class="intro-product-img p-intro-product4">
  						</a>
  						<div class="intro-product-des">
  							<h3>Trung tâm học thêm</h3>
  							<p>
  								Các trung tâm bồi dưỡng kiến thức của Blacasa sẽ tập trung
  								vào 3 lĩnh vực chính: Trung tâm ngoại ngữ, Trung tâm truyền đạt kỹ năng mềm, Trung tâm luyện thi. Việc sử dụng hệ thống quản lý
  								hiện đại và kết nối nguồn giáo viên giỏi trên toàn quốc sẽ đảm bảo. hiệu quả vượt trội so với thị trường.
  							</p>
  						</div>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 intro-product-item">
  						<a href="https://tot.edu.vn" target="_blank" class="intro-product-img p-intro-product2">
  						</a>
  						<div class="intro-product-des">
  							<h3>Khoá học online (video)</h3>
  							<p>
  								Việc tự học thông qua các khoá học online và bài kiểm tra trắc nghiệm đa dạng hình thức sẽ giúp học sinh có thể
  								học mọi lúc, mọi nơi miễn là có kết nối internet. Học sinh cũng có thể học đi học lại nhiều lần cho đến khi hiểu bài. Đây
  								là hình thức học tập với chi phí rẻ nhưng vẫn rất hiệu quả.
  							</p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--On news-->
  		<div class="block-content  bg-gradient-blue" id="onnews" style="padding-left:0!important; padding-right:0!important; text-align:center; background-color:#fff!important;">
  			<div class="container">
  				<div class="row d-flex flex-column justify-content-center align-items-center">
  					<h2>TRUYỀN THÔNG NÓI VỀ TUTORCONNECTSTUDENT</h2>
  					<p style="font-size: 16px;max-width: 780px;text-align: center; margin: 0 auto;padding-bottom: 20px;">
  						Trên hành trình thực hiện <i>"Sứ mệnh giáo dục"</i>, chúng tôi cảm thấy may mắn và cảm kích vì luôn có sự
  						đồng hành, ủng hộ của rất nhiều cá nhân, tổ chức, cũng như cơ quan truyền thông. Đây chính là
  						động lực tinh thần để chúng tôi tiếp tục con đường mình đã chọn.
  					</p>
  				</div>
  				<div class="row">
  					<div class="blacasa-onnews-list">
  						<ul style="list-style:none;">
  							<li>
  								<a href="https://www.youtube.com/watch?v=tjtnOuChlt0" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:-219px -50px; height:50px;width:141px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="https://www.youtube.com/watch?v=WfDvQZ0vs-w" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:-285px 0px; height:50px;width:54px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="https://startup.vnexpress.net/tin-tuc/hanh-trinh-khoi-nghiep/doi-ban-8x-viet-ung-dung-ket-noi-gia-su-3766895.html" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -100px; height:50px;width:254px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="http://dantri.com.vn/khuyen-hoc/gia-su-cong-nghe-lua-chon-thong-minh-trong-giao-duc-thoi-dai-moi-20180417150808092.htm" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -50px; height:50px;width:215px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="http://ictnews.vn/khoi-nghiep/startup-gia-su-cong-nghe-voi-tham-vong-chiem-linh-thi-truong-ket-noi-gia-su-sau-1-nam-ra-mat-166705.ict" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -150px; height:50px;width:196px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="http://cafebiz.vn/startup-gia-su-cong-nghe-voi-tham-vong-chiem-linh-thi-truong-ket-noi-gia-su-sau-1-nam-ra-mat-20180422132936648.chn" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -250px; height:50px;width:153px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="https://tiin.vn/chuyen-muc/hoc/gia-su-cong-nghe-xu-huong-moi-gay-sot-gioi-tre-viet.html" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -200px; height:50px;width:167px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="https://vietnammoi.vn/nhieu-tre-thich-tieng-anh-hon-tieng-viet-51101.html" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 0; height:45px;width:280px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="https://baodautu.vn/truong-hoang-hai-ceo-blacasa-ung-dung-iot-ket-noi-hoc-vien-voi-gia-su-nho-cong-nghe-d86335.html" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -300px; height:50px;width:187px;"></div>
  								</a>
  							</li>
  							<li>
  								<a href="http://phunuvietnam.vn/xa-hoi/roi-phap-va-duc-ve-viet-nam-phat-trien-gia-su-grab-post42405.html" target="_blank">
  									<div class="blacasa-onnews-logo" style="background-position:0 -350px; height:50px;width:269px;"></div>
  								</a>
  							</li>
  						</ul>
  					</div>
  					<style>
  						/*BLACASA on news &resources*/
  						.blacasa-onnews-list {
  							/*display:table;
					margin:0 -10px;*/
  							text-align: center;
  						}

  						.blacasa-onnews-list ul {
  							list-style: none;
  							padding-left: 0px;
  						}

  						.blacasa-onnews-list ul li {
  							display: inline-block;
  							padding: 8px;
  						}

  						.blacasa-onnews-logo,
  						.blacasa-resources1 {
  							background-image: url('/sites/all/themes/blacasa/images/b_resources1.png');
  							background-repeat: no-repeat;
  						}

  						.blacasa-onnews-logo {
  							-webkit-filter: grayscale(60%);
  							/* Safari 6.0 - 9.0 */
  							filter: grayscale(60%);
  							transition: all 0.5s;
  						}

  						.blacasa-onnews-logo:hover {
  							-webkit-filter: grayscale(0%);
  							/* Safari 6.0 - 9.0 */
  							filter: grayscale(0%);
  						}

  						.resources-people {
  							margin: 0px auto;
  							width: 150px;
  							height: 150px;
  							background-repeat: no-repeat;
  							background-image: url('sites/all/themes/blacasa/images/b_resources2.jpg');
  							border-radius: 50%;
  							margin-bottom: 5px;
  							min-width: 150px;
  						}

  						.image-teacher-01 {
  							background-position: 0 -621px;
  						}

  						.image-teacher-02 {
  							background-position: -156px 0px;
  						}

  						.image-teacher-03 {
  							background-position: 0 -156px;
  						}

  						.image-teacher-04 {
  							background-position: 0 0;
  						}

  						.image-teacher-05 {
  							background-position: 0 -311px;
  						}

  						.image-teacher-06 {
  							background-position: 0 -466px;
  						}

  						.img-customer-01 {
  							background-position: -156px -156px;
  						}

  						.img-customer-02 {
  							background-position: -156px -311px;
  						}

  						.img-customer-03 {
  							background-position: -156px -466px;
  						}

  						.img-customer-04 {
  							background-position: -156px -621px;
  						}

  						.img-customer-05 {
  							background-position: 0 -778px;
  						}

  						.img-customer-06 {
  							background-position: -156px -778px;
  						}

  						.landingpage-icon-down {
  							opacity: 0.5;
  							cursor: pointer;
  						}

  						.landingpage-icon-down:hover {
  							opacity: 1;
  						}
  					</style>
  				</div>
  			</div>
  		</div>

  		<!--Hợp tác-->
  		<div class="block-content bg-gradient-pink" id="partner">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-7 col-sm-12 col-xs-12 image-half-block about-bg6"></div>
  					<div class="col-md-5 col-sm-12 col-xs-12 text-half-block">
  						<h2>CƠ HỘI HỢP TÁC</h2>
  						<p>Nếu bạn là một doanh nghiệp muốn đầu tư vào lĩnh vực giáo dục, công nghệ thông tin
  							hoặc bạn là một trung tâm đào tạo muốn quảng bá các khóa học của mình,
  							hoặc bạn đang cần tuyển giáo viên, hãy liên hệ với chúng tôi. Chúng tôi
  							luôn mong muốn được đồng hành cùng các bạn.<br />
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>

  		<!--Liên hệ-->
  		<div class="block-content bg-gradient-blue" id="contact" style="padding-bottom:20px;">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-12">
  						<h2>LIÊN HỆ</h2>
  					</div>
  				</div>
  				<div class="row">
  					<div class="col-md-3 col-sm-6 col-xs-12 about-contact-item">
  						<i class="fa fa-map-marker"></i>
  						<h3>Địa chỉ liên hệ</h3>
  						<p>Ký túc xá K7 trường Đại Học Nha Trang, Vĩnh Thọ, Nha Trang, Khánh Hòa

  						</p>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 about-contact-item">
  						<i class="fa fa-phone"></i>
  						<h3>Điện thoại & Fax</h3>
  						<p>Tel. 0854.641.904<br /> </p>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 about-contact-item">
  						<i class="fa fa-envelope"></i>
  						<h3>Email</h3>
  						<p>
  							<a class="tz-text" href="mailto:contact@blacasa.vn">tutorconnect@gmail.com</a><br />
  							<a class="tz-text" href="mailto:blacasavn@gmail.com">huy.nsq.62cntt@ntu.edu.vn</a>

  						</p>
  					</div>

  					<div class="col-md-3 col-sm-6 col-xs-12 about-contact-item">
  						<i class="fa fa-calendar"></i>
  						<h3>Giờ làm việc</h3>
  						<p>Thứ 2 - Thứ 6: 8h đến 18h<br>
  							Thứ 7, Chủ nhật: hỗ trợ online 8h-21h
  						</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<?php include 'footer.php' ?>


  </body>

  </html>