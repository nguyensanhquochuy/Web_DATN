
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idClass = $_POST['idClass'];
    $idTutor = $_POST['idTutor'];
    $response = [];

    if (empty($response)) {

        $statusConnect = 'Đề nghị đã hủy';
    
        $updateConnect = "UPDATE
                            `ketnoigs_hv`
                        SET
                            `TenTTDeNghi` = ?
                        WHERE
                            MaLop = ? AND MaGS = ?";
        $stmt = $conn->prepare($updateConnect);
        $stmt->bind_param('sii', $statusConnect, $idClass, $idTutor);

        if ($stmt->execute()) {
            $response['success'] = "Bạn đã hủy đề nghị dạy thành công.";
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