<?php
// Include the database connection file
require_once './config/db_conn.php';
// Process subscription
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $email = $_POST['email'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Check if email already subscribed
    $check_sql = "SELECT * FROM subscribers WHERE email_subscribers = '$email'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "This email is already subscribed.";
    } else {
        // Insert into database
        $insert_sql = "INSERT INTO subscribers (email_subscribers) VALUES ('$email')";
        if ($conn->query($insert_sql) === TRUE) {
            echo "Subscription successful!";
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
