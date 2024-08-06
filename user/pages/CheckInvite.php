<?php
include 'config.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $idTutor = $_POST['idTutor'];
    $listIdClass = isset($_POST['idClass']) ? $_POST['idClass'] : [];
    $response = [];

    // Check if the list of class IDs is empty
    if (empty($listIdClass)) {
        $response['error'] = 'No class IDs provided';
    } else {
        // Prepare the SQL statement
        $sqlConnect = "SELECT * FROM ketnoigs_hv WHERE MaLop = ? AND MaGS = ?";
        $stmt = $conn->prepare($sqlConnect);
        
        // Array to store connection data
        $connect = [];

        // Iterate through each class ID and execute the SQL statement
        foreach ($listIdClass as $idClass) {
            $stmt->bind_param('ii', $idClass, $idTutor);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                // Fetch connection data and append to the $connect array
                while ($row = $result->fetch_assoc()) {
                    $connect[] = $row;
                }
            } else {
                $response['error'] = 'Failed to execute SQL query';
            }
        }
    }

    // Encode the response array to JSON format and send it back to the client
    echo json_encode($connect);
} else {
    // Handle the case when the request method is not POST
    echo json_encode(['error' => 'Invalid request method']);
}
?>
