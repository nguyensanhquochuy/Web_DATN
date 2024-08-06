<!DOCTYPE html>
<html lang="en">
<?php 
	
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>JomaShop</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="../../assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include '../sidebar.php' ?>

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

                <?php include '../template.php' ?>

                <div>
                    <?php 
                        include 'bt_config.php';
                        mysqli_set_charset($conn, 'utf8mb4');
                        $query = 'SELECT *
                                FROM sua S 
                                JOIN hang_sua HS 
                                ON S.Ma_hang_sua = HS.Ma_hang_sua 
                                JOIN loai_sua LS
                                ON S.Ma_loai_sua = LS.Ma_loai_sua
                                WHERE (1=1) ';
                        if(isset($_GET['search'])) {
                            if(isset($_GET['ten_sua'])) {
                                $query .= " AND Ten_sua LIKE '%" . $_GET['ten_sua'] . "%'";
                            }
                        }
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $numRows = $result->num_rows;
                    ?>
                    <style>
                        table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 20px;
                        }

                        #title_kh th {
                            color: red;
                            font-weight: bold;
                        }
                        h1 {
                            font-family: cursive;
                        }
                        .center {
                            margin-left: auto;
                            margin-right: auto;
                            text-align: center;
                        }
                    </style>
                    <div style='overflow-x: auto;'>
                        <table class="center" style="text-align: left; width: 70%">
                            <tr style='background:pink;'>
                                <th colspan='6'>
                                    <p class='center'>CHI TIẾT CÁC LOẠI SỮA</p>
                                </th>
                            </tr>
                            <tr style='background:pink;'>
                                <td colspan="2" style="text-align: center;">
                                    <form action="" method="get">
                                        <label for="ten_sua" style="font-weight: 500; color: red">Tên sữa</label>
                                        <input type="text" name="ten_sua" style="padding: 7px; width: 50%" value="<?= isset($_GET['ten_sua']) ? $_GET['ten_sua'] : '' ?>">
                                        <input type="submit" name="search" value="Tìm kiếm" style="padding: 7px; background-color: pink">
                                    </form>
                                </td>
                            </tr>
                            <tr style='background:yellow;'>
                                <td colspan="2" style="text-align: center;">
                                    <?= ($numRows!=0) ? 'Có ' . $numRows . ' sản phẩm được tìm thấy' : 'Không tìm thấy sản phẩm nào' ?>
                                </td>
                            </tr>
                            <?php while($row = $result->fetch_assoc()) { ?>
                                <tr style='background:pink;'>
                                    <th colspan="2" style="color: red; text-align: center;">
                                        <?= $row['Ten_sua'] ?>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="./Hinh_sua/<?= $row['Hinh'] ?>" alt="">
                                    </td>
                                    <td>
                                        <strong>Thành phần dinh dưỡng:</strong> <br>
                                        <?= $row['TP_Dinh_Duong'] ?> <br>
                                        <p></p>
                                        <strong>Lợi ích:</strong> <br>
                                        <?= $row['Loi_ich'] ?> <br>
                                        <p style="text-align: right; width: 100%;"><strong>Trọng lượng</strong>: <?= $row['Trong_luong'] ?> gr - <strong>Đơn giá</strong>: <?= $row['Don_gia'] ?> VND</p>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="../../assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="../../assets/plugins/morris/morris.min.js"></script>
	<script src="../../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../../assets/js/chart.js"></script>

	<!-- Custom JS -->
	<script src="../../assets/js/app.js"></script>

</body>

</html>