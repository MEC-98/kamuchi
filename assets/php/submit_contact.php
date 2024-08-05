<?php
// db conn
require_once('./config/db_conn.php');

// Define a function to validate email
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Define a function to validate other inputs
function validateInput($input) {
    return !empty($input) && !preg_match('/[^a-zA-Z0-9\s\.\,\-\@\!]/', $input);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // Server-side validation
    if (!validateInput($name) || !validateEmail($email) || !validateInput($phone) || !validateInput($message)) {
        echo json_encode(['message' => 'Invalid input detected!', 'status' => 'error']);
        exit;
    }

    $stmt = $conn->prepare("INSERT INTO contact (fname, email, phone, message) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $name, $email, $phone, $message);
        
        if ($stmt->execute()) {
            echo json_encode(['message' => 'Message sent successfully!', 'status' => 'success']);
        } else {
            echo json_encode(['message' => 'Failed to send message!', 'status' => 'error']);
        }

        $stmt->close();
    } else {
        echo json_encode(['message' => 'Failed to prepare statement!', 'status' => 'error']);
    }

    $conn->close();
}
?>
