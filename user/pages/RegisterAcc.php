
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail_ex = "/[a-zA-Z0-9]*@[a-zA-Z0-9]*.[a-zA-Z0-9]*/i";
    $typeAcc = $_POST['typeAcc'];
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $passWord = $_POST['passWord'];  
    $response = []; 
    if ($typeAcc==0) {
        $response['errorTypeAcc'] = "Loại tài khoản là bắt buộc";
    }

    if (empty($email)) {
        $response['errorEmail'] = "Email là bắt buộc";
    } else if (!preg_match($mail_ex, $email)){
            $response['errorEmail']="Email không đúng định dạng";
        } else {
            $sql = 'SELECT * FROM taikhoan WHERE TenDN = ? ';
			$stmt = $conn->prepare($sql);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$resultEmail = $stmt->get_result();

            if ($resultEmail->num_rows != 0) {
				$response['errorEmail'] = "Email đã tồn tại trên hệ thống";
			} 

        }
    if (empty($fullName)) {
        $response['errorFullName'] = "Họ tên là bắt buộc";
    }
    if (empty($phoneNumber)) {
        $response['errorPhoneNumber'] = "Số điện thoại là bắt buộc";
    } else {
        $sql = 'SELECT * FROM taikhoan WHERE DienThoai = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $phoneNumber);
        $stmt->execute();
        $resultPhone = $stmt->get_result();

        if ($resultPhone->num_rows != 0) {
            $response['errorPhoneNumber'] = "Số điện thoại đã tồn tại trên hệ thống";
        } 

    }
    if (empty($passWord)) {
        $response['errorPass'] = "Mật khẩu là bắt buộc";
    } else {
        if (strlen($passWord) < 8 || !preg_match('/[A-Z]/', $passWord) or !preg_match('/[a-z]/', $passWord) or !preg_match('/[0-9]/', $passWord) or !preg_match('/[^a-zA-Z0-9]/', $passWord)) {
            $response['errorPass'] = "Mật khẩu quá ngắn. <br> Mật khẩu phải chứa ít nhất 1 chữ<br> thường, chữ hoa, chữ số, ký tự đặc biệt";
        }
    }


    if (empty($response)) {
        $option = [
            'cost' => 12,
        ];
        $passHash = password_hash($passWord, PASSWORD_DEFAULT, $option);
        $sql = 'INSERT INTO taikhoan (TenDN, DienThoai, MatKhau, MaPQ) VALUES (?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $email, $phoneNumber, $passHash, $typeAcc);
        $stmt->execute();

        $sql = 'SELECT * FROM taikhoan WHERE TenDN LIKE ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $id = $result['MaTK'];

        $nullValue = NULL;
        $emptyValue = "";
        $img_default = "default_user.png";
        $img_cover = "img_cover_".rand(1, 6).".jpg";
        $img_degree = "cert.png";
        if ($typeAcc == 2) {
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $currentDateTime = date('Y-m-d H:i:s');
            $views = 0;
            $status = 0;
            $sql = 'INSERT INTO giasu (HoTen, Email, DienThoai, Tinh_TP, DiaChiCT, MoTa, GioiTinh, HocPhi1H, MaLoaiGS, MaHT, AnhBia, AnhDaiDien, AnhBangCap, LuotXem, ThoiGianDN, MaNV, TrangThaiDuyet, MaTK) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssssidiisssdsiii', $fullName, $email, $phoneNumber, $emptyValue, $emptyValue, $nullValue, $nullValue, $nullValue, $nullValue, $nullValue, $img_cover, $img_default, $img_degree, $views, $currentDateTime, $nullValue, $status, $id);
        } else {
            $sql = 'INSERT INTO hocvien (HoTen, Email, DienThoai, Tinh_TP, DiaChiCT, MoTa, GioiTinh, AnhBia, AnhDaiDien, MaTK) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('ssssssissi', $fullName, $email, $phoneNumber, $emptyValue, $emptyValue, $nullValue, $nullValue, $img_cover, $img_default, $id);
        }

      
        if (!$stmt->execute()) {
            $response['errorSQL'] = $stmt->error;
        } else {
            $response['success'] = "Đăng ký thành công";
            $_SESSION['Account'] = $email;

        }
    }

    // Encode the response array to JSON and send it back to the client
    echo json_encode($response);
    
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>