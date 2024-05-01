
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idClass = $_POST['idClass'];
    $response = [];

    if (empty($response)) {
        // // $statusConnect = "Đề nghị dạy đã chấp nhận";
        // $sql = 'SELECT * FROM ketnoigs_hv
        // WHERE MaLop = ? AND TenTTDeNghi = ? ';
        // $stmt = $conn->prepare($sql);
        // $stmt->bind_param('is', $idClass, $statusConnect);
        // $stmt->execute();
        // $results = $stmt->get_result();

        // if ($results->num_rows > 0) {
        //     $statusClass = "Đóng lớp: Chưa có kết nối";
        // } else {
        $statusClass = 'Đóng lớp: Chưa có kết nối';
    
        $updateClass = "UPDATE
                            `lophoc`
                        SET
                            `TenTTLop` = ?
                        WHERE
                            MaLop = ?";
        $stmt = $conn->prepare($updateClass);
        $stmt->bind_param('si', $statusClass, $idClass);

        if ($stmt->execute()) {
            $response['success'] = "Yêu cầu của bạn đã được đóng.";
        } else {
            $response['err'] = "Thất bại";
        }
    }

    // Encode the response array to JSON and send it back to the client
    echo json_encode($response);
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>