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
        </table>
        <h2>Meciuri de Tenis</h2>
        <table border="1">
            <tr>
                <th>Meci</th>
                <th>Data și Ora</th>
                <th>Jucători</th>
                <th>Scor</th>
            </tr>
            <tr>
                <td>Meciul 1</td>
                <td>30-11-2023-15:30</td>
                <td>Rafael Nadal - Novak Djokovic</td>
                <td>2 - 1</td>
            </tr>
            <tr>
                <td>Meciul 2</td>
                <td>30-11-2023-17:00</td>
                <td>Serena Williams - Maria Sharapova</td>
                <td>2 - 0</td>
            </tr>
            <tr>
                <td>Meciul 3</td>
                <td>30-11-2023-18:30</td>
                <td>Roger Federer - Andy Murray</td>
                <td>1 - 2</td>
            </tr>
        </table>
        <a href="export3.php">Export data</a>
    </nav>
    <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>
