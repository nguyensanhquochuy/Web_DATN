<?php
$conn = new mysqli('localhost', 'root', '', 'testdata');
$conn->set_charset('utf8mb4');
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentDateTime = date('Y-m-d H:i:s');
echo $currentDateTime;
var_dump($currentDateTime);

$sql = 'INSERT INTO datetime (datetime) VALUES (?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $currentDateTime);
$stmt->execute();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: block;">
        <div class="messages error">
            <h2 class="element-invisible">Error message</h2>
            <ul>
                <li>Họ tên là bắt buộc.</li>
                <li>Điện thoại là bắt buộc.</li>
                <li>Mật khẩu là bắt buộc.</li>
                <li>Email đã tồn tại trên hệ thống!</li>
            </ul>
        </div>
    </div>
    <div>
        Maat khau <br>
        hao
    </div>
</body>

</html>