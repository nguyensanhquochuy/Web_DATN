<!DOCTYPE html>
<html lang="en">
<?php 
    include '../user/pages/config.php';
    // $sql = 'SELECT watches.model AS model, 
    //         watches.name AS name, 
    //         SUM(billdetails.quanlity) AS sold, 
    //         (watches.price*SUM(billdetails.quanlity)) AS total,
    //         brands.brandName AS brand,
    //         watches.price AS price,
    //         watches.instock AS instock
    //     FROM watches
    //     JOIN brands ON watches.brand = brands.brandId
    //     JOIN billdetails ON watches.id = billdetails.watchId
    //     JOIN bills ON bills.billId = billdetails.billId
    //     WHERE bills.billStatus = 4
    //     GROUP BY watches.model, watches.name';
    // $stmt = $conn->prepare($sql);
    // $stmt->execute();
    // $resultWatch = $stmt->get_result();

    if(isset($_GET['submit'])) {
        $startDate = $_GET['startDate'];
        $endDate = $_GET['endDate'];

        $sql = 'SELECT watches.model AS model, 
                    watches.name AS name, 
                    SUM(billdetails.quanlity) AS sold, 
                    (watches.price*SUM(billdetails.quanlity)) AS total,
                    brands.brandName AS brand,
                    watches.price AS price,
                    watches.instock AS instock
                FROM watches
                JOIN brands ON watches.brand = brands.brandId
                JOIN billdetails ON watches.id = billdetails.watchId
                JOIN bills ON bills.billId = billdetails.billId
                WHERE (1=1) AND bills.billDeliveryDate >= ? AND bills.billDeliveryDate <= ?
                GROUP BY watches.model, watches.name';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $startDate, $endDate);
        $stmt->execute();
        $resultWatch = $stmt->get_result();
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>JomaShop</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    		<!-- Select2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">

    <!-- Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
     
        <?php include 'header_sidebar.php' ?>
        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Thống kê</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Thống kê</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <form method="GET" action="report.php">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <label class="focus-label">Ngày bắt đầu</label>
                                <input type="date" class="form-control floating" name="startDate" value="<?= (isset($startDate)) ? $startDate : '2000-01-01' ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <label class="focus-label">Ngày kết thúc</label>
                                <input type="date" class="form-control floating" name="endDate" value="<?= (isset($endDate)) ? $endDate : date('Y-m-d') ?>">
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block" name="submit">Thống kê</button>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="./report.php" class="btn btn-danger btn-block" name="reset">Mặc định</a>
                        </div>
                    </div>
                </form>

                <!-- View Filter -->

                <div style="margin: 30px auto;"></div>

                <!-- Pagination -->
                <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                        <div class="table-responsive" style="overflow-x: hidden;">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Model</th>
                                        <th>Watch</th>
                                        <th>Brand</th>
                                        <th>Price</th>
                                        <th>Instock</th>
                                        <th>Sold</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $index = 1;
                                        $totalProfit = 0;
                                        $totalCount = 0;
                                    ?>
                                    <!-- <?php while($row = $resultWatch->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?= $index ?></td>
                                            <td><?= $row['model'] ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['brand'] ?></td>
                                            <td><?= $row['price'] ?></td>
                                            <td><?= $row['instock'] ?></td>
                                            <td><?= $row['sold'] ?></td>
                                            <td><?= $row['total'] ?></td>
                                            <?php 
                                                $index++;
                                                $totalProfit += $row['total'];
                                                $totalCount += $row['sold'];
                                            ?>
                                        </tr>
                                    <?php } ?> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-cubes"></i></span>
								<div class="dash-widget-info">
									<!-- <h3><?= $totalCount ?></h3> -->
									<span>Số sản phẩm đã bán</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-usd"></i></span>
								<div class="dash-widget-info">
									<h3>$ <?= $totalProfit ?></h3>
									<span>Tổng doanh thu</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
						<div class="card dash-widget">
							<div class="card-body">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3>30%</h3>
									<span>Lợi nhuận</span>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>

    
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="./assets/js/jquery.slimscroll.min.js"></script>

    <!-- Select2 JS -->
    <script src="./assets/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="./assets/js/moment.min.js"></script>
    <script src="./assets/js/bootstrap-datetimepicker.min.js"></script>

    <!-- Datatable JS -->
    <script src="./assets/js/jquery.dataTables.min.js"></script>
    <script src="./assets/js/dataTables.bootstrap4.min.js"></script>

    <!-- Custom JS -->
    <script src="./assets/js/app.js"></script>
</body>

</html>