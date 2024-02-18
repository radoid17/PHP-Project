<?php
session_start(); 

if(!isset($_SESSION['user_id'])){
    header("Location: Login.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidenţa rezultatelor concursurilor sportive</title>
    <link rel="stylesheet" href = "./Tema.css">
</head>
<body>
    <header>
        <nav id = "Titlu">
            <h1 id = 'PrimaLinie'>Evidenţa rezultatelor concursurilor sportive</h1>
            <ul class = "a">
                <li>
                    <a href="Descriere.php">Descriere</a>
                </li>
                <li>
                    <a href="index.php">Pagina principala</a>
                </li>
                <li>
                    <a href="Football.php">Football</a>
                </li><li>
                    <a href="Tennis.php">Tennis</a>
                </li><li>
                    <a href="Basketball.php">Basketball</a>
                </li><li>
                    <a href="Login.php">Login</a>
                </li><li>
                    <a href="Forum.php">Forum</a>
                </li>
            </ul>
        </nav>
    </header>
    <nav id = "Continut">
        <p>Bine ati venit pe site-ul de evidentiere al rezultatelor concursurilor sportive al lui Radoi Dragos Cosmin</p>
        <h2>Bine ai venit, <?php echo $_SESSION['username']; ?>!</h2>
        <h2>Stiri</h2>
        <h3>
            <a href="Stire_1.php">Arsenal l-a lovit rapid pe Lens pentru a ajunge în optimi ca câștigătoare a grupei, PSV depășește Sevilla</a>
        </h3>
        <img src="Screenshot_2.png">
        <h3>
            <a href="Stire_2.php">Ten Hag își asumă vina pentru că Manchester United a irosit un alt avantaj</a>
        </h3>
        <img src="Screenshot_1.png">
    </nav>
    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>