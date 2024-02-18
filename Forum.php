<?php
session_start(); 

if(!isset($_SESSION['user_id'])){
    header("Location: Login.php"); 
    exit;
}
?>

<?php
include('db_connect.php');

if (isset($_SESSION['user_id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment_text'])) {
        $userId = $_SESSION['user_id'];
        $commentText = $_POST['comment_text'];

        $insertQuery = "INSERT INTO comments (user_id, comment_text) VALUES ($userId, '$commentText')";
        $conn->query($insertQuery);
    }
}

$query = "SELECT users.full_name, comments.id, comments.comment_text, comments.timestamp 
          FROM comments
          INNER JOIN users ON comments.user_id = users.id
          ORDER BY comments.timestamp DESC";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidenţa rezultatelor concursurilor sportive</title>
    <link rel="stylesheet" href="./Tema.css">
</head>
<body>
    <header>
        <nav id="Titlu">
            <h1 id='PrimaLinie'>Evidenţa rezultatelor concursurilor sportive</h1>
            <ul class="a">
                <li><a href="Descriere.php">Descriere</a></li>
                <li><a href="index.php">Pagina principala</a></li>
                <li><a href="Football.php">Football</a></li>
                <li><a href="Tennis.php">Tennis</a></li>
                <li><a href="Basketball.php">Basketball</a></li>
                <li><a href="Login.php">Login</a></li>
                <li><a href="Forum.php">Forum</a></li>
            </ul>
        </nav>
    </header>

    <nav id="Continut">
        <?php if (isset($_SESSION['user_id'])) : ?>
            <form action="Forum.php" method="post">
                <textarea name="comment_text" placeholder="Adaugă un comentariu" rows="4" cols="50"></textarea>
                <br>
                <input type="submit" value="Postează comentariu">
            </form>
            <hr>
        <?php endif; ?>

        <?php
        if ($result->num_rows != 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div>';
                echo '  <p><strong>' . $row['full_name'] . '</strong> (' . $row['timestamp'] . '):</p>';
                echo '  <p>' . $row['comment_text'] . '</p>';

                if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin') {
                    echo '  <form action="delete_comment.php" method="post">';
                    echo '      <input type="hidden" name="comment_id" value="' . $row['id'] . '">';
                    echo '      <input type="submit" value="Delete">';
                    echo '  </form>';
                }

                echo '</div>';
            }
        } else {
            echo '<p>Niciun comentariu încă.</p>';
        }
        ?>
    </nav>

    <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>
