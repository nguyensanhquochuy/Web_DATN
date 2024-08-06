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
                        $rowsPerPage = 2;
                        if (!isset($_GET['page'])) $_GET['page'] = 1;
                        $offset = ($_GET['page'] - 1) * $rowsPerPage;
                        $query = 'SELECT *
                                FROM sua S 
                                JOIN hang_sua HS 
                                ON S.Ma_hang_sua = HS.Ma_hang_sua 
                                JOIN loai_sua LS
                                ON S.Ma_loai_sua = LS.Ma_loai_sua
                                LIMIT ' . $offset . ', ' . $rowsPerPage . ';';
                        $stmt = $conn->prepare($query);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $numRows = $result->num_rows;
                        $maxPage = ceil($numRows / $rowsPerPage);
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
                        <table class="center" style="text-align: left; width: 60%">
                            <tr style='background:pink;'>
                                <th colspan='6'>
                                    <p class='center'>CHI TIẾT CÁC LOẠI SỮA</p>
                                </th>
                            </tr>
                            <?php 
                                $temp = $_GET['page'] * $rowsPerPage;
                                if($temp <= $rowsPerPage) $num = 0;
                                else $num = $temp - $rowsPerPage;
                            ?>
                            <?php while($row = $result->fetch_assoc()) { ?>
                                <tr style='background:pink;'>
                                    <th colspan="5" style="color: red;">
                                        <?= $row['Ten_sua'] ?>
                                    </th>
                                </tr>
                                <tbody>
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
                                </tbody>
                            <?php } ?>
                            <?php   
                                $re = 'SELECT * FROM sua';
                                $stmt = $conn->prepare($re);
                                $stmt->execute();
                                $re = $stmt->get_result();
                                $numRows = $re->num_rows;
                                $maxPage = floor($numRows/$rowsPerPage) + 1;
                            ?>
                        </table>
                    </div>
                    <div class="center">
                        <?php 
                            echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . (1) . "><<</a> "; 
                            if ($_GET['page'] > 1) {
                                echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] - 1) . "><</a> "; 
                            }
                            for ($i = 1 ; $i <= $maxPage ; $i++)
                            {
                                if ($i == $_GET['page'])
                                {
                                    echo '<b class="center">'.$i.'</b> '; 
                                }
                                else {
                                    echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . $i . "> " . $i . "</a> ";
                                }
                            }
                            if ($_GET['page'] < $maxPage) {
                                echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">></a>";  
                            }
                            echo "<a  href=" . $_SERVER['PHP_SELF'] . "?page=" . ($maxPage) . ">>></a> ";
                        ?>
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