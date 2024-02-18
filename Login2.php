<?php
session_start(); 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = "full_name"; 
    $password = "password";

    if($_POST['email'] == $username && $_POST['password'] == $password){
        $_SESSION['user_id'] = 1; 
        $_SESSION['username'] = $username;

        header("Location: index.php");
        exit;
    } else {
        $error_message = "Email sau parolă incorecte";
    }
}
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
                <li>
                    <a href="Descriere.php">Descriere</a>
                </li>
                <li>
                    <a href="index.php">Pagina principala</a>
                </li>
                <li>
                    <a href="Football.php">Football</a>
                </li>
                <li>
                    <a href="Tennis.php">Tennis</a>
                </li>
                <li>
                    <a href="Basketball.php">Basketball</a>
                </li>
                <li>
                    <a href="Login.php">Login</a>
                </li><li>
                    <a href="Forum.php">Forum</a>
                </li>
            </ul>
        </nav>
    </header>
    <nav id="Continut">
        <div id="login-form">
            <h2>Login</h2>
            <form action="Login3.php" method="post">
            <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                </div>
                <div class="form-btn">
                    <input type="submit" class="btn btn-primary" value="Login" name="login">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="remember_me" id="remember_me">
                    <label for="remember_me">Rămâi Autentificat</label>
                </div>

            </form>
            <?php
            if(isset($error_message)) {
                echo '<div class="error-message">' . $error_message . '</div>';
            }
            ?>
        </nav>
        <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>
