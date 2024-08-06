
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $listIdClass = $_POST['idClass'];
    $idTutor = $_POST['idTutor'];
    $response = [];

    if (empty($response)) {

        $statusConnect = 'Đã mời';
    
        $sqlConnect = "INSERT INTO `ketnoigs_hv`(`MaLop`, `MaGS`, `TenTTDeNghi`) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sqlConnect);

        foreach ($listIdClass as $idClass) {
            $stmt->bind_param('iis', $idClass, $idTutor, $statusConnect);

            if ($stmt->execute()) {
                $response['success'] = "Lời mời của bạn đã được gửi tới gia sư! Vui lòng chờ đợi sự phản hồi từ gia sư này.";
            } else {
                $response['err'] = "Thất bại";
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