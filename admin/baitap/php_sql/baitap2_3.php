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
                    ?>
                    <h1 style="text-align: center; color: red;">THÔNG TIN KHÁCH HÀNG</h1>
                    <style>
                        table, th, td {
                            border: 1px solid black;
                            border-collapse: collapse;
                        }
                        th, td {
                            padding: 10px;
                        }
                        table {
                            margin: 0 auto;
                        }

                        #title_kh th {
                            color: red;
                            font-weight: bold;
                        }
                        h1 {
                            font-family: cursive;
                        }
                    </style>
                    <table>
                        <tr id="title_kh">
                            <th>Mã KH</th>
                            <th>Tên khách hàng</th>
                            <th>Giới tính</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                        </tr>
                        <tbody>
                            <?php 
                                $query = 'SELECT * FROM khach_hang';
                                $stmt = $conn->prepare($query);
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if($result->num_rows != 0) {
                                    $index = 0;
                                    while($row = $result->fetch_assoc()) {
                                        if($index % 2 == 0) {
                                            echo '<tr>';
                                        } else echo '<tr style="background: lightyellow">';
                                        if($row['Phai'] == 0) {
                                            $img = '<img src="nam.jpg" width="30px" />';
                                        } else $img = '<img src="nu.jpg" width="30px" />';
                                        echo '<td>' . $row['Ma_khach_hang'] . '</td>';
                                        echo '<td>' . $row['Ten_khach_hang'] . '</td>';
                                        echo '<td style="text-align: center;">' . $img . '</td>';
                                        echo '<td>' . $row['Dia_chi'] . '</td>';
                                        echo '<td>' . $row['Dien_thoai'] . '</td>';
                                        echo '</tr>';
                                        $index++;
                                    }
                                }
                                $stmt->close();
                            ?>
                        </tbody>
                    </table>
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