<?php
include('db_connect.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "Email address is not valid.";
        header("Location: Login2.php");
        exit();
    }

    $checkEmailQuery = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmailQuery->bind_param("s", $email);
    $checkEmailQuery->execute();
    $checkResult = $checkEmailQuery->get_result();

    if ($checkResult->num_rows > 0) {
        $_SESSION['error_message'] = "Email already registered. Please choose a different email.";
        header("Location: Login2.php");
        exit();
    } else {
        $insertQuery = $conn->prepare("INSERT INTO users (full_name, email, password, role) VALUES (?, ?, ?, ?)");
        $role = isset($_POST['role']) ? $_POST['role'] : 'user';
        $insertQuery->bind_param("ssss", $fullName, $email, $password, $role);

        if ($insertQuery->execute()) {
            echo "Registration successful. You can now log in.";
            header("Location: Login2.php");
            exit();
        } else {
            echo "Error during registration: " . $insertQuery->error; 
            header("Location: Login2.php");
            exit();
        }
    }
}

$conn->close();
?>
