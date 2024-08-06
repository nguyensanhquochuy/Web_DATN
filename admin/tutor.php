<!DOCTYPE html>
<html lang="en">
<?php

include '../user/pages/config.php';
$sql = 'SELECT nhanvien.HoTen as HoTen_NV, nhanvien.AnhDaiDien as AnhDaiDien_NV, giasu.*, loaigs.TenLoaiGS, hinhthuc.TenHT FROM giasu
LEFT JOIN loaigs on loaigs.MaloaiGS = giasu.MaLoaiGS
LEFT JOIN hinhthuc on hinhthuc.MaHT = giasu.MaHT
LEFT JOIN nhanvien on nhanvien.MaNV = giasu.MaNV
';

$sql .= " ORDER BY ThoiGianDN DESC ";
echo $sql;
$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();


if (isset($_GET['delete'])) {
    $idTutor = $_GET['delete'];
    $delete = 'DELETE FROM giasu WHERE MaGS = ? ';
    $stmt = $conn->prepare($delete);
    $stmt->bind_param("i", $idTutor);

    if ($stmt->execute()) {
        echo '<script language="javascript">alert("Delete successfull!");</script>';
        header("Refresh: 0; URL=tutor.php");
    } else {
        echo '<script language="javascript">alert("Delete failed!");</script>';
    }
}


if (isset($_GET['searchTutor'])) {

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    // $minFee = $_GET['min_fee'] ?? 0;
    // $maxFee = $_GET['max_fee'] ?? PHP_INT_MAX;
    $status = $_GET['statuses'];
    $typeTutor = $_GET['typeTutors'];

    $minFee = $_GET['min_fee'] ?? null;
    $maxFee = $_GET['max_fee'] ?? null;
    $city = $_GET['place'];

    $sql = 'SELECT nhanvien.HoTen as HoTen_NV, giasu.*, loaigs.TenLoaiGS, hinhthuc.TenHT FROM giasu
    LEFT JOIN loaigs on loaigs.MaloaiGS = giasu.MaLoaiGS
    LEFT JOIN hinhthuc on hinhthuc.MaHT = giasu.MaHT
    LEFT JOIN nhanvien on nhanvien.MaNV = giasu.MaNV
    WHERE (1=1) 
    ';


    if (!empty($name)) {
        $sql .= " AND  giasu.HoTen LIKE  '%$name%' ";
    }

    if (!empty($phone)) {
        $sql .= " AND  giasu.DienThoai LIKE  '%$phone%' ";
    }
    if (!empty($city)) {
        $sql .= " AND  giasu.Tinh_TP =  '$city' ";
    }


    if (!is_null($minFee) && $minFee !== '') {
        $minFee = (int)$minFee;
        $sql .= " AND giasu.HocPhi1H >= $minFee";
    }

    if (!is_null($maxFee) && $maxFee !== '') {
        $maxFee = (int)$maxFee;
        $sql .= " AND giasu.HocPhi1H <= $maxFee";
    }


    if (!empty($status) || ($status == '0')) {
        $sql .= " AND  giasu.TrangThaiDuyet =  '$status' ";
    }
    if (!empty($typeTutor)) {
        $sql .= " AND  giasu.MaLoaiGS =  '$typeTutor' ";
    }

    
    $sql .= " ORDER BY giasu.ThoiGianDN DESC ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $results = $stmt->get_result();
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
        <?php
        if (isset($_GET['edit']) && isset($_GET['status'])) {

            $status = $_GET['status'];
            $idTutor = $_GET['edit'];


            $sql = 'UPDATE giasu SET 
                TrangThaiDuyet = ?,
                MaNV = ?
                WHERE MaGS = ?';
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("iii", $status, $idMan, $idTutor);
            if ($stmt->execute()) {
                echo '<script language="javascript">
                         alert("Update successfully!");
                         window.location.href = "tutor.php";
                        </script>';
            } else {
                echo '<script language="javascript">alert("Update failed!");</script>';
            }
        }

        ?>

        <!-- Page Wrapper -->
        <div class="page-wrapper">
            <!-- Page Content -->
            <div class="content container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Gia sư</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Gia sư</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <!-- Search Filter -->
                <!-- Search Filter -->
                <form method="GET" action="tutor.php" id="search_Tutor">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="name" value="<?php if (isset($name)) echo htmlspecialchars($name); ?>">
                                <label class="focus-label">Họ tên</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="number" class="form-control floating" name="phone" value="<?php if (isset($phone)) echo htmlspecialchars($phone); ?>">
                                <label class="focus-label">Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="number" class="form-control floating" name="min_fee" value="<?php if (isset($minFee)) echo htmlspecialchars($minFee); ?>">
                                <label class="focus-label">Học phí từ</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="number" class="form-control floating" name="max_fee" value="<?php if (isset($maxFee)) echo htmlspecialchars($maxFee); ?>">
                                <label class="focus-label">Đến</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="statuses">
                                    <option value="">Lựa chọn</option>
                                    <option value="1" <?= (isset($status) && $status == 1) ? 'selected' : ''; ?>>Đã duyệt</option>
                                    <option value="0" <?= (isset($status) && $status == '0') ? 'selected' : ''; ?>>Chưa duyệt</option>
                                </select>
                                <label class="focus-label">Trạng thái tài khoản</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="typeTutors">
                                    <option value="">Lựa chọn</option>
                                    <?php
                                    $typeTutors = 'SELECT * FROM loaigs';
                                    $stmt = $conn->prepare($typeTutors);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = (isset($typeTutor) && $typeTutor == $row['MaLoaiGS']) ? 'selected' : '';
                                        echo "<option value='{$row['MaLoaiGS']}' {$selected}>{$row['TenLoaiGS']}</option>";
                                    }
                                    ?>
                                </select>
                                <label class="focus-label">Loại gia sư</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="place" id="place">
                                    <option value="">Lựa chọn</option>
                                    <optgroup label="Địa điểm phổ biến">
                                        <option value="Hà Nội" <?= (isset($city) && $city == 'Hà Nội') ? 'selected' : '' ?>>Hà Nội</option>
                                        <option value="Hồ Chí Minh" <?= (isset($city) && $city == 'Hồ Chí Minh') ? 'selected' : '' ?>>Hồ Chí Minh</option>
                                        <option value="Hải Phòng" <?= (isset($city) && $city == 'Hải Phòng') ? 'selected' : '' ?>>Hải Phòng</option>
                                        <option value="Đà Nẵng" <?= (isset($city) && $city == 'Đà Nẵng') ? 'selected' : '' ?>>Đà Nẵng</option>
                                        <option value="Cần Thơ" <?= (isset($city) && $city == 'Cần Thơ') ? 'selected' : '' ?>>Cần Thơ</option>

                                    </optgroup>
                                    <optgroup id="other_province" label='Tỉnh, thành phố khác'>

                                </select>
                                <label class="focus-label">Tỉnh/ thành phố</label>
                            </div>
                        </div>


                    </div>
                    <div class="row justify-content-center filter-row">
                        <div class="col-sm-6 col-md-3">
                            <button type="submit" class="btn btn-success btn-block" name="searchTutor">Tìm kiếm</button>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="reset" class="btn btn-info btn-block" name="reset" onclick="resetForm('search_Tutor'); return false;">Nhập mới</button>
                        </div>
                    </div>
                </form>






                <!-- View Filter -->

                <!-- Pagination -->
                <div class="row" style="width: 100%;">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table datatable">
                                <thead>
                                    <tr>
                                        <th>Tutor</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Type of Tutor</th>
                                        <th>Tuition fee per hour</th>
                                        <th>Teaching method</th>
                                        <th>Employee</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    while ($row = $results->fetch_assoc()) {
                                    ?>
                                        <tr>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: inline-block;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../user/assets/img/img_tutor/<?= $row['AnhDaiDien'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen'] ?></a>
                                                </h2>
                                            </td>
                                            <td><?= $row['Email'] ?></td>
                                            <td><?= $row['DienThoai'] ?></td>
                                            <td><?= $row['Tinh_TP'] ?></td>
                                            <td><?= $row['DiaChiCT'] ?></td>
                                            <td><?= ($row['GioiTinh'] == 1) ?  'Nam' : (($row['GioiTinh'] == '0') ? 'Nữ' : '') ?></td>
                                            <td><?= $row['TenLoaiGS'] ?></td>
                                            <td><?= $row['HocPhi1H'] ?></td>
                                            <td><?= $row['TenHT'] ?></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a  class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: <?= (!empty($row['AnhDaiDien_NV']) ? 'inline-block': 'none') ?> ;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../admin/assets/img/img_managers/<?=$row['AnhDaiDien_NV'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen_NV'] ?></a>
                                                </h2>
                                            </td>

                                            <td class="text-left">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o <?= ($row['TrangThaiDuyet'] == 1) ?  'text-success' : 'text-danger' ?> "></i> <?= ($row['TrangThaiDuyet'] == 1) ?  'Đã duyệt' : 'Chưa duyệt' ?>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                                        <a style="display: <?= ($row['TrangThaiDuyet'] == 1) ?  '' : 'none' ?>;" class="dropdown-item" href="tutor.php?edit=<?= $row['MaGS'] ?>&status=0 "><i class="fa fa-dot-circle-o text-danger"></i> Hủy duyệt</a>
                                                        <a style="display: <?= ($row['TrangThaiDuyet'] == 0) ?  '' : 'none' ?>;" class="dropdown-item" href="tutor.php?edit=<?= $row['MaGS'] ?>&status=1 "><i class="fa fa-dot-circle-o text-success"></i> Duyệt</a>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit_tutor.php?edit=<?= $row['MaGS'] ?>"><i class="fa fa-pencil m-r-5"></i>Edit</a>
                                                        <a class="dropdown-item" href="detail_tutor.php?detail=<?= $row['MaGS'] ?>"><i class="fa fa-eye m-r-5"></i>Detail</a>
                                                        <a class="dropdown-item" href="tutor.php?delete=<?= $row['MaGS'] ?>" onclick="return confirm('Are you sure want to delete?')" ;><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>


        </div>

    </div>

    <!-- Add Watch Modal -->

    <!-- /Main Wrapper -->

    <!-- jQuery -->
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var tinhThanhOtpgroup = document.getElementById('other_province');
            const cityName = <?= isset($city) ? json_encode($city) : "''" ?>;

            $('#place').select2();
            // Lấy dữ liệu tỉnh/thành phố ban đầu từ URL
            fetch('https://raw.githubusercontent.com/madnh/hanhchinhvn/master/dist/tinh_tp.json')
                .then(response => response.json())
                .then(data => {
                    console.log('Data fetched:', data);
                    const options = [];
                    // Thêm các option cho thẻ select tỉnh/thành phố
                    Object.entries(data).forEach(([code, province]) => {
                        const option = document.createElement('option');
                        const value_otp_main = ["Hà Nội", "Hồ Chí Minh", "Hải Phòng", "Đà Nẵng", "Cần Thơ"];
                        if (!value_otp_main.includes(province.name)) {
                            option.value = province.name;
                            option.textContent = province.name;
                            if (option.value == cityName) {
                                option.setAttribute('selected', 'selected');
                                console.log('Selected option:', option);
                            }
                            options.push(option);
                        }
                    });

                    options.sort((a, b) => a.textContent.localeCompare(b.textContent));

                    // Thêm các option từ mảng đã sắp xếp vào thẻ select
                    options.forEach(option => {
                        tinhThanhOtpgroup.appendChild(option);
                    });
                    // Cập nhật Select2 với các tùy chọn mới
                    $('#place').select2({
                        width: '100%'
                    });

                    // Thiết lập lựa chọn trong Select2
                    if (cityName) {
                        $('#place').val(cityName).trigger('change');
                    }

                })
                .catch(error => console.error('Error:', error));
        });
    </script>
    <script type="text/javascript">
        function resetForm(myFormId) {
            var myForm = document.getElementById(myFormId);

            for (var i = 0; i < myForm.elements.length; i++) {
                if ('submit' != myForm.elements[i].type && 'reset' != myForm.elements[i].type) {
                    myForm.elements[i].checked = false;
                    myForm.elements[i].value = '';
                    myForm.elements[i].selectedIndex = 0;
                }
            }
            // Reset select2 elements
            $('#' + myFormId + ' .select2').val('').trigger('change');

        }
        $(document).ready(function() {
            // Initialize Select2 elements
            $('.select2').select2({
                width: '100%',
                minimumResultsForSearch: Infinity
            });
        });
    </script>




</body>

</html>