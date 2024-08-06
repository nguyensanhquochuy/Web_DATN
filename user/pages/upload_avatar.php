<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['edit_avatar'])) {
    // Default upload directory
    $uploadDir = '../assets/img/';

    // Determine if we are updating a tutor or student and set the appropriate directory
    if (isset($_POST['idTutor'])) {
        $avatarDir = 'img_tutor/'; // Directory for tutor avatars
        $idTutor = $_POST['idTutor'];
        $updateQuery = "UPDATE giasu  SET AnhDaiDien = ? WHERE MaGS = ?";
        $updateId = $idTutor;
    } elseif (isset($_POST['idStudent'])) {
        $avatarDir = 'img_student/'; // Directory for student avatars
        $idStudent = $_POST['idStudent'];
        $updateQuery = "UPDATE hocvien SET AnhDaiDien = ? WHERE MaHV = ?";
        $updateId = $idStudent;
    } else {
        echo json_encode(['success' => false, 'message' => 'No ID provided.']);
        exit;
    }

    $fileName = basename($_FILES['edit_avatar']['name']);
    $uploadFilePath = $uploadDir . $avatarDir . $fileName;

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($uploadFilePath, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['edit_avatar']['tmp_name']);
    if ($check !== false) {
        // Allow certain file formats
        $allowedFormats = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $allowedFormats)) {
            // Move the uploaded file to the designated directory
            if (move_uploaded_file($_FILES['edit_avatar']['tmp_name'], $uploadFilePath)) {
                // Update the database
                $stmt = $conn->prepare($updateQuery);
                $stmt->bind_param('si', $fileName, $updateId);
                $success = $stmt->execute();
                $message = $success ? 'Avatar updated successfully' : 'Failed to update avatar';

                echo json_encode(['success' => $success, 'filepath' => $avatarDir . $fileName, 'message' => $message]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Error moving the uploaded file.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid file format.']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'File is not an image.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'No file uploaded.']);
}
?>
