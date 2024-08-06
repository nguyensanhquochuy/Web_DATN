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
                        $colPerRow = 5;
                        $index = 1;
                        $offset = ($index - 1) * $colPerRow;
                        $count = 'SELECT * FROM sua';
                        $stmt = $conn->prepare($count);
                        $stmt->execute();
                        $totalProduct = $stmt->get_result()->num_rows;
                        $numsOfRow = ceil($totalProduct / $colPerRow);
                        $query = 'SELECT * 
                                FROM sua S 
                                JOIN hang_sua HS 
                                ON S.Ma_hang_sua = HS.Ma_hang_sua 
                                JOIN loai_sua LS
                                ON S.Ma_loai_sua = LS.Ma_loai_sua
                                LIMIT ?, ?';
                    ?>
                    <style>
                        table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                        th {
                            padding: 5px;
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
                    <div>
                        <table class="center">
                            <tr style='background:pink;'>
                                <th colspan="5">
                                    THÔNG TIN CÁC SẢN PHẨM
                                </th>
                            </tr>
                            <tbody>
                                <?php for($i=0; $i<$numsOfRow; $i++) { ?>
                                    <tr>
                                        <?php
                                            $offset = ($index - 1) * $colPerRow;
                                            $stmt = $conn->prepare($query);
                                            $stmt->bind_param('ii', $offset, $colPerRow);
                                            $stmt->execute();
                                            $row = $stmt->get_result();
                                        ?>
                                        <?php while($col = $row->fetch_assoc()) { ?>
                                            <td>
                                                <a href="./baitap2_7_chitiet.php?id=<?= $col['Ma_sua'] ?>"><?= $col['Ten_sua'] ?></a> <br>
                                                <?= $col['Trong_luong'] ?> gr - <?= $col['Don_gia'] ?> VND <br>
                                                <img src="./Hinh_sua/<?= $col['Hinh'] ?>" alt="">
                                            </td>
                                        <?php } ?>
                                        <?php $index++ ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
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