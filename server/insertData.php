<?php 
    include "dbcon.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $receivedData = json_decode(file_get_contents('php://input'), true);
        $textWinner = isset($receivedData['win']) ? $receivedData['win'] : '';
        if ($textWinner !== '') {
            $sql = "INSERT INTO tb_status(win) VALUES (?)";
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param("s",$textWinner);
                if ($stmt->execute()) {
                    $response = ['message' => 'Data received and processed successfully'];
                } else {
                    $response = ['message' => 'Error processing data'];
                }
    
                echo json_encode($response);
            } else {
                $response = ['message' => 'Error preparing statement'];
                echo json_encode($response);
            }
        } else {
            $response = ['message' => 'Invalid data'];
            echo json_encode($response);
            exit;
        }
    }
    else{
        echo "Not data";
    }
    header("Location: /gamexo/index.php");
?>
