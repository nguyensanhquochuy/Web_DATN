
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailPhone = $_POST['emailPhone'];
    $passLogin = $_POST['passLogin'];  
    $_SESSION['Account']='none';
    $response = []; 

    if (empty($emailPhone)) {
        $response['errorEmailPhone'] = "Xin hãy nhập Email/Số điện thoại";
    }

    if (empty($passLogin)) {
        $response['errorPassLogin'] = "Xin hãy nhập mật khẩu";
    }

    if (empty($response)) {
        $sqlLogin = 'SELECT * FROM taikhoan WHERE TenDN = ? or DienThoai = ?';
        $stmt = $conn->prepare($sqlLogin);
        $stmt->bind_param('ss', $emailPhone, $emailPhone);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows==0) {
            $response['errorEmailPhone'] = "Email hoặc số điện thoại không tồn tại trên hệ thống";
        } else {
            $acc = $result->fetch_assoc();
            if(password_verify($passLogin, $acc['MatKhau'])) {
                $_SESSION['Account'] = $emailPhone;
                $response['success'] = "Login successful";
                // echo("<meta http-equiv='refresh' content='0'>");
            } else {
                $response['errorPassLogin'] = "Mật khẩu không chính xác. Vui lòng nhập lại!";
            }
        }
        
    }

    // Encode the response array to JSON and send it back to the client
    echo json_encode($response);
    
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>