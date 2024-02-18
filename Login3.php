<?php
include('db_connect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $selectUserQuery = $conn->prepare("SELECT id, full_name, password FROM users WHERE email = ?");
    $selectUserQuery->bind_param("s", $email);
    $selectUserQuery->execute();

    $result = $selectUserQuery->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['full_name'];
            
            // Redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Invalid password";
        }
    } else {
        $_SESSION['error_message'] = "User not found";
    }

    $selectUserQuery->close();
    $conn->close();
    
    // Redirect back to login page with error message
    header("Location: Login.php");
    exit();
}
?>
