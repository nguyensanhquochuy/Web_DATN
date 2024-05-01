
<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idClass = $_POST['idClass'];
    $idTutor = $_POST['idTutor'];
    $check=false;
    $response = [];

    if (!empty($idTutor)) {
        $sql = 'SELECT * FROM giasu  WHERE MaGS = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idTutor);
        $stmt->execute();
        $resultTutor = $stmt->get_result()->fetch_assoc();
        $sex = $resultTutor['GioiTinh'];

        $sql = 'SELECT * FROM giasu_monhoc 
        WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idTutor);
        $stmt->execute();
        $resultTutorSubjects = $stmt->get_result();
        $typeSubjects = array();
        while ($rowTutorSubject = $resultTutorSubjects->fetch_assoc()) {
            $typeSubjects[] = $rowTutorSubject['MaMH'];
        }

        $sql = 'SELECT * FROM giasu_chude
        WHERE MaGS = ?'; // Đổi MaGS thành ID của giáo sư
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idTutor);
        $stmt->execute();
        $resultTutor_Tag = $stmt->get_result();
        $listTags = array();
        while ($rowTag = $resultTutor_Tag->fetch_assoc()) {
            $listTags[] = $rowTag['MaCD'];
        }
    }

    if (!empty($idClass)) {
        $sql = 'SELECT * FROM lophoc
        WHERE MaLop = ? ';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idClass);
        $stmt->execute();
        $results = $stmt->get_result()->fetch_assoc();

        $subjectClass = $results['MaMH'];
        $teacher_sex = $results['GioiTinhGS'];

        $sql = 'SELECT * FROM lophoc_chude  
        WHERE MaLop = ?';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $idClass);
        $stmt->execute();
        $resultClass_Tag = $stmt->get_result();
        $listClassTags = array(); 

        while ($rowTag = $resultClass_Tag->fetch_assoc()) {
            $listClassTags[] = $rowTag['MaCD'];
        }
    }


    if ($teacher_sex !=2) {
        if ($teacher_sex !=$sex) {
            $response['errorSex'] = "<br>Giới tính của bạn không phù hợp với yêu cầu của lớp.";
        }

    }

    if (!in_array($subjectClass, $typeSubjects)) {
        $response['errorSubject'] = "<br>Bạn không dạy các môn phù hợp với yêu cầu của lớp.";
    }
    foreach ($listClassTags as $classTag) {
        if (in_array($classTag, $listTags)) {
            $check=true;
            break;
        }
    }
    if ($check==false) {
        $response['errorTag'] = "<br> Bạn không dạy các chủ đề phù hợp với yêu cầu của lớp.";
    }

    if (empty($response)) {
        $statusConnect = 'Đang đề nghị dạy';
        $sql = 'INSERT INTO ketnoigs_hv (MaLop, MaGS, TenTTDeNghi) VALUES (?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iis", $idClass, $idTutor, $statusConnect);
        if ($stmt->execute()) {
            $response['success'] = "Đủ điều kiện dạy lớp! Đề nghị thành công.";
        } else {
            $response['errConnect'] = "Đề nghị dạy thất bại";
        }
        

    }

    // Encode the response array to JSON and send it back to the client
    echo json_encode($response);
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>