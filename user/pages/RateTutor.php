
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idStudent = $_POST['idStudent'];
    $idTutor = $_POST['idTutor'];
    $title = $_POST['title'];
    $goodScore = $_POST['goodScore'];
    $poorScore = $_POST['poorScore'];
    $teachingMethod = $_POST['teachingMethod'];
    $softSkills = $_POST['softSkills'];
    $dedication = $_POST['dedication'];
    $punctuality = $_POST['punctuality'];
    $pedagogicalExpertise = $_POST['pedagogicalExpertise'];
    $recommend = $_POST['recommend'];
    $response = [];

    $averageRating = round(($teachingMethod + $softSkills + $dedication + $punctuality + $pedagogicalExpertise) / 5, 1);

    

    if (empty($title)) {
        $response['errorTitle'] = "Tiêu đề là bắt buộc";
    }

    if (empty($response)) {

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $currentDateTime = date('Y-m-d H:i:s');
        $sql = 'INSERT INTO danhgiags (MaHV, MaGS, TieuDe, 	DiemTot, DiemChuaTot, DiemDGTB, DiemPPDH, DiemKNM, DiemTT, DiemDG, DiemNVSP, DeXuat, ThoiGianNX) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iisssddddddis', $idStudent, $idTutor, $title, $goodScore, $poorScore, $averageRating, $teachingMethod, $softSkills, $dedication, $punctuality, $pedagogicalExpertise, $recommend, $currentDateTime);

        if (!$stmt->execute()) {
            $response['errorSQL'] = $stmt->error;
        } else {
            $response['success'] = "Đã đánh giá thành công. Chúng tôi cảm ơn những đánh giá của bạn."; 
        }
    }

    // Encode the response array to JSON and send it back to the client
    echo json_encode($response);
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>