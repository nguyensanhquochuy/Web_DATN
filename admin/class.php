<!DOCTYPE html>
<html lang="en">
<?php

include '../user/pages/config.php';
$sql = 'SELECT nhanvien.HoTen as HoTen_NV, lophoc.*, nhanvien.AnhDaiDien as AnhDaiDien_NV,  hinhthuc.TenHT, monhoc.TenMH, hocvien.HoTen, hocvien.AnhDaiDien FROM lophoc
JOIN hinhthuc on hinhthuc.MaHT = lophoc.MaHT
JOIN monhoc on monhoc.MaMH = lophoc.MaMH
JOIN hocvien on hocvien.MaHV = lophoc.MaHV
LEFT JOIN nhanvien on nhanvien.MaNV = lophoc.MaNV
';

$stmt = $conn->prepare($sql);
$stmt->execute();
$results = $stmt->get_result();


// if (isset($_GET['delete'])) {
//     $idTutor = $_GET['delete'];
//     $delete = 'DELETE FROM giasu WHERE MaGS = ? ';
//     $stmt = $conn->prepare($delete);
//     $stmt->bind_param("i", $idTutor);

//     if ($stmt->execute()) {
//         echo '<script language="javascript">alert("Delete successfull!");</script>';
//         header("Refresh: 0; URL=tutor.php");
//     } else {
//         echo '<script language="javascript">alert("Delete failed!");</script>';
//     }
// }


if (isset($_GET['searchClass'])) {

    $name = $_GET['name'];
    $phone = $_GET['phone'];

    $typeSubject = $_GET['typeSubjects'];
    $typeTeach = $_GET['typeTeachs'];
    $sex = $_GET['sex'];

    $city = $_GET['place'];

    $statusClass = $_GET['statuses'];
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
    $sql = 'SELECT nhanvien.HoTen as HoTen_NV, lophoc.*, nhanvien.AnhDaiDien as AnhDaiDien_NV,  hinhthuc.TenHT, monhoc.TenMH, hocvien.HoTen, hocvien.AnhDaiDien FROM lophoc
    JOIN hinhthuc on hinhthuc.MaHT = lophoc.MaHT
    JOIN monhoc on monhoc.MaMH = lophoc.MaMH
    JOIN hocvien on hocvien.MaHV = lophoc.MaHV
    LEFT JOIN nhanvien on nhanvien.MaNV = lophoc.MaNV
    WHERE (1=1) 
    ';


    if (!empty($name)) {
        $sql .= " AND  lophoc.TenLop LIKE  '%$name%' ";
    }

    if (!empty($phone)) {
        $sql .= " AND  lophoc.DienThoai LIKE  '%$phone%' ";
    }
    if (!empty($typeSubject)) {
        $sql .= " AND  lophoc.MaMH =  '$typeSubject' ";
    }
    if (!empty($typeTeach)) {
        $sql .= " AND  lophoc.MaHT =  '$typeTeach' ";
    }

    if (!empty($status)) {
        $sql .= " AND  lophoc.TenTTLop =  '$status' ";
    }
    if (!empty($sex) || ($sex == '0')) {
        $sql .= " AND  lophoc.GioiTinhGS =  '$sex' ";
    }

    if (!empty($city)) {
        $sql .= " AND  lophoc.Tinh_TP =  '$city' ";
    }

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

            if ($status == 1) {
                $status = "Đang tìm gia sư";
            } else if ($status == 0) {
                $status = "Chưa duyệt";
            }

        
            $sql = 'UPDATE lophoc SET 
                TenTTLop = ?,
                MaNV = ?
                WHERE MaLop = ?';
            $stmt = $conn->prepare($sql);

            $stmt->bind_param("sii", $status, $idMan, $idTutor);
            if ($stmt->execute()) {
                echo '<script language="javascript">
                         alert("Update successfully!");
                         window.location.href = "class.php";
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
                            <h3 class="page-title">Lớp học</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Quản lý</a></li>
                                <li class="breadcrumb-item active">Lớp học</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <!-- Search Filter -->
                <!-- Search Filter -->
                <!-- Search Filter -->
                <form method="GET" action="class.php" id="search_Class">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating" name="name" value="<?php if (isset($name)) echo ($name); ?>">
                                <label class="focus-label">Tên lớp</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="number" class="form-control floating" name="phone" value="<?php if (isset($phone)) echo ($phone); ?>">
                                <label class="focus-label">Số điện thoại</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="typeSubjects">
                                    <option value="">Lựa chọn</option>
                                    <?php
                                    $typeSubjects = 'SELECT * FROM monhoc';
                                    $stmt = $conn->prepare($typeSubjects);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = (isset($typeSubject) && $typeSubject == $row['MaMH']) ? 'selected' : '';
                                        echo "<option value='{$row['MaMH']}' {$selected}>{$row['TenMH']}</option>";
                                    }
                                    ?>
                                </select>
                                <label class="focus-label">Môn học</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="typeTeachs">
                                    <option value="">Lựa chọn</option>
                                    <?php
                                    $typeTeachs = 'SELECT * FROM hinhthuc';
                                    $stmt = $conn->prepare($typeTeachs);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    while ($row = $result->fetch_assoc()) {
                                        $selected = (isset($typeTeach) && $typeTeach == $row['MaHT']) ? 'selected' : '';
                                        echo "<option value='{$row['MaHT']}' {$selected}>{$row['TenHT']}</option>";
                                    }
                                    ?>
                                </select>
                                <label class="focus-label">Hình thức </label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="statuses">
                                    <option value="">Lựa chọn</option>
                                    
                                    <option value="1" <?= (isset($statusClass) && $statusClass ==1) ? 'selected' : ''; ?>>Đang tìm gia sư</option>
                                    <option value="2" <?= (isset($statusClass) && $statusClass ==2) ? 'selected' : ''; ?>>Đã chấp nhận</option>
                                    <option value="3" <?= (isset($statusClass) && $statusClass == 3) ? 'selected' : ''; ?>>Đóng lớp: Đã kết nối</option>
                                    <option value="4" <?= (isset($statusClass) && $statusClass == 4) ? 'selected' : ''; ?>>Đóng lớp: Chưa có kết nối</option>
                                    <option value="5" <?= (isset($statusClass) && $statusClass == 5) ? 'selected' : ''; ?>>Chưa duyệt</option>
                                </select>
                                <label class="focus-label">Trạng thái lớp</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select floating select2" name="sex">
                                    <option value="">Lựa chọn</option>
                                    <option value="1" <?= (isset($sex) && $sex == 1) ? 'selected' : ''; ?>>Nam</option>
                                    <option value="0" <?= (isset($sex) && $sex == '0') ? 'selected' : ''; ?>>Nữ</option>
                                    <option value="2" <?= (isset($sex) && $sex == 2) ? 'selected' : ''; ?>>Nam, Nữ</option>
                                    ?>
                                </select>
                                <label class="focus-label">Giới tính gia sư</label>
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
                            <button type="submit" class="btn btn-success btn-block" name="searchClass">Tìm kiếm</button>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <button type="reset" class="btn btn-info btn-block" name="reset" onclick="resetForm('search_Class'); return false;">Nhập mới</button>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Ward</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Address</th>
                                        <th>Subject</th>
                                        <th>Student</th>
                                        <th>Hours per session</th>
                                        <th>Phone</th>
                                        <th>Tutor's gender</th>
                                        <th>Tuition fee per hour</th>
                                        <th>Teaching method</th>
                             
                                      
                                        <th>Start date</th>
                                        <th>Posted date</th>
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
                                            <td><?= $row['MaLop'] ?></td>
                                            <td><?= $row['TenLop'] ?></td>
                                            <td><?= $row['Xa_Phuong'] ?></td>
                                            <td><?= $row['Quan_Huyen'] ?></td>
                                            <td><?= $row['Tinh_TP'] ?></td>
                                            <td><?= $row['DiaChiCT'] ?></td>
                                            <td><?= $row['TenMH'] ?></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: inline-block;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../user/assets/img/img_student/<?= $row['AnhDaiDien'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen'] ?></a>
                                                </h2>
                                            </td>
                                            
                                           
                                            
                                            
                                            <td class="text-center" ><?= $row['SoGioHoc1Buoi'] ?> buổi</td>
                                            <td><?= $row['DienThoai'] ?></td>
                                            <td><?= ($row['GioiTinhGS'] == 1) ?  'Nam' : (($row['GioiTinhGS'] == '0') ? 'Nữ' : 'Nam, Nữ') ?></td>
                                            <td><?= $row['HocPhi1Buoi'] ?></td>
                                            <td><?= $row['TenHT'] ?></td>
                                     
                                  
                                 
                    
                                            <td><?= $row['NgayBD'] ?></td>
                                            <td><?= $row['ThoiGianDang'] ?></td>
                                            <td>
                                                <h2 class="table-avatar">

                                                    <a class="" data-toggle="dropdown" href="#" id="dropdown-header-profiles" aria-expanded="false" style="padding-right:0; text-decoration: unset;padding: 0 8px;display: <?= (!empty($row['AnhDaiDien_NV']) ? 'inline-block': 'none') ?>;height: 40px;line-height: 40px;color: #525252;">
                                                        <img class="bla-img-sm img-circle" style="border-radius: 50%; width: 40px;height: 40px;" width="24" height="24" typeof="foaf:Image" src="../admin/assets/img/img_managers/<?= $row['AnhDaiDien_NV'] ?>" alt="">
                                                    </a>
                                                    <a> <?= $row['HoTen_NV'] ?></a>
                                                </h2>
                                            </td>

                                          

                                            <td class="text-left">
                                                <div class="dropdown action-label" style="display: <?= ($row['TenTTLop'] == "Chưa duyệt" || $row['TenTTLop'] == "Đang tìm gia sư" ) ? '' : 'none' ?>;">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-dot-circle-o <?= ($row['TenTTLop'] == "Đang tìm gia sư") ?  'text-success' : 'text-danger' ?> "></i> <?= ($row['TenTTLop'] == "Đang tìm gia sư") ?  'Đang tìm gia sư' : 'Chưa duyệt' ?>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right" style="">
                                                        <a style="display: <?= ($row['TenTTLop'] == "Đang tìm gia sư") ?  '' : 'none' ?>;" class="dropdown-item" href="class.php?edit=<?= $row['MaLop'] ?>&status=0 "><i class="fa fa-dot-circle-o text-danger"></i> Hủy duyệt</a>
                                                        <a style="display: <?= ($row['TenTTLop'] == "Chưa duyệt") ?  '' : 'none' ?>;" class="dropdown-item" href="class.php?edit=<?= $row['MaLop'] ?>&status=1 "><i class="fa fa-dot-circle-o text-success"></i> Duyệt</a>
                                                    </div>
                                                </div>
                                                <span  class="badge  <?= ($row['TenTTLop'] == "Đã chấp nhận") ? 'bg-inverse-success' : (($row['TenTTLop'] == "Đóng lớp: Chưa có kết nối") ? 'bg-inverse-dark' : 'bg-inverse-warning')  ?>" style="display: <?= ($row['TenTTLop'] == "Chưa duyệt" || $row['TenTTLop'] == "Đang tìm gia sư" ) ? 'none' : '' ?>;"><?= $row['TenTTLop'] ?> </span>
                                            </td>

                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="edit_tutor.php?edit=<?= $row['MaLop'] ?>"><i class="fa fa-pencil m-r-5"></i>Edit</a>
                                                        <a class="dropdown-item" href="detail_class.php?detail=<?= $row['MaLop'] ?>"><i class="fa fa-eye m-r-5"></i>Detail</a>
                                                        <a class="dropdown-item" href="class.php?delete=<?= $row['MaLop'] ?>" onclick="return confirm('Are you sure want to delete?')" ;><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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