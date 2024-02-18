<?php
session_start();

// Conectare la baza de date și alte inițializări
include('db_connect.php');

// Verificare dacă utilizatorul este autentificat și are rolul de administrator
if (isset($_SESSION['user_id']) && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
    // Verificare dacă s-a primit un ID valid pentru comentariu
    if (isset($_POST['comment_id']) && is_numeric($_POST['comment_id'])) {
        $commentId = intval($_POST['comment_id']);

        // Folosește declarații pregătite pentru a preveni SQL injection
        $deleteQuery = $conn->prepare("DELETE FROM comments WHERE id = ?");
        $deleteQuery->bind_param("i", $commentId);

        if ($deleteQuery->execute()) {
            $_SESSION['success_message'] = "Comment deleted successfully.";
        } else {
            $_SESSION['error_message'] = "Error deleting comment: " . $conn->error;
        }

        $deleteQuery->close();
    } else {
        $_SESSION['error_message'] = "Invalid comment ID.";
    }
} else {
    $_SESSION['error_message'] = "You don't have permission to delete comments.";
}

// Închide conexiunea la baza de date
$conn->close();

// Redirectare către pagina Forum.php
header("Location: Forum.php");
exit();
?>
