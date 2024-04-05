<?php
// Kết nối CSDL và chọn cơ sở dữ liệu
include 'config.php';

// Kiểm tra xem yêu cầu có phải là POST và có chứa giá trị selectedValue không
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['selectedValue'])) {
    // Lấy giá trị selectedValue từ yêu cầu AJAX
    $selectedValue = $_POST['selectedValue'];

    // Chuẩn bị câu lệnh SQL
    $topicQuery = 'SELECT * FROM chude WHERE MaMH = ?';

    // Chuẩn bị và thực thi câu lệnh SQL
    $stmt = $conn->prepare($topicQuery);
    $stmt->bind_param('i', $selectedValue);
    $stmt->execute();
    $result = $stmt->get_result();

    // Chuẩn bị một mảng để lưu trữ các chủ đề
    $topics = array();

    // Lặp qua các kết quả từ câu lệnh SQL và thêm chúng vào mảng
    while ($row = $result->fetch_assoc()) {
        $topics[] = $row;
    }

    // Trả về kết quả dưới dạng JSON
    echo json_encode($topics);

    // Đóng kết nối CSDL
    // $stmt->close();
    // $conn->close();
} else {
    // Trả về lỗi nếu yêu cầu không hợp lệ
    http_response_code(400);
    echo "Invalid request";
}
?>
