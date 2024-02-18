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

        <h2>Champions League 2023/2024</h2>
        <table border="1">
            <tr>
                <th>Meriuri</th>
                <th>Data si Ora</th>
                <th>Echipe</th>
                <th>Scor</th>
            </tr>
            <tr>
                <td>Meciul 1</td>
                <td>29-11-2023-22:00</td>
                <td>Arsenal - Lens</td>
                <td>6 - 0</td>
            </tr>
            <tr>
                <td>Meciul 2</td>
                <td>29-11-2023-22:00</td>
                <td>Bayern Munich - FC Copenhagen</td>
                <td>0 - 0</td>
            </tr>
            <tr>
                <td>Meciul 3</td>
                <td>29-11-2023-22:00</td>
                <td>Braga - Union Berlin</td>
                <td>3 - 3</td>
            </tr>
            <tr>
                <td>Meciul 4</td>
                <td>29-11-2023-22:00</td>
                <td>Real Madrid - Napoli</td>
                <td>4 -2 </td>
            </tr>
            <tr>
                <td>Meciul 5</td>
                <td>29-11-2023-22:00</td>
                <td>Galatasaray - Manchester Utd</td>
                <td>0 - 0</td>
            </tr>
            <tr>
                <td>Meciul 6</td>
                <td>29-11-2023-22:00</td>
                <td>Sevilla - PSV</td>
                <td>3 - 3</td>
            </tr>
            <tr>
                <td>Meciul 7</td>
                <td>29-11-2023-19:45</td>
                <td>AC Milan - Dortmund</td>
                <td>1 - 3</td>
            </tr>
            <tr>
                <td>Meciul 8</td>
                <td>29-11-2023-19:45</td>
                <td>Barcelona - FC Porto</td>
                <td>2 - 1</td>
            </tr>
            <tr>
                <td>Meciul 9</td>
                <td>28-11-2023-22:00</td>
                <td>AC Milan - Dortmund</td>
                <td>1 - 3</td>
            </tr>
            <tr>
                <td>Meciul 10</td>
                <td>28-11-2023-22:00</td>
                <td>Barcelona - FC Porto</td>
                <td>2 - 1</td>
            </tr>
            <tr>
                <td>Meciul 11</td>
                <td>28-11-2023-22:00</td>
                <td>Feyenoord - Atl. Madrid</td>
                <td>1 - 3</td>
            </tr>
            <tr>
                <td>Meciul 12</td>
                <td>28-11-2023-22:00</td>
                <td>Manchester City - RB Leipzig</td>
                <td>3 - 2</td>
            </tr>
            <tr>
                <td>Meciul 13</td>
                <td>28-11-2023-22:00</td>
                <td>PSG - Newcastle</td>
                <td>1 - 1</td>
            </tr>
            <tr>
                <td>Meciul 14</td>
                <td>28-11-2023-19:45</td>
                <td>Young Boys - Crvena zvezda</td>
                <td>2 - 0</td>
            </tr>
            <tr>
                <td>Meciul 15</td>
                <td>28-11-2023-19:45</td>
                <td>Lazio - Celtic</td>
                <td>2 - 0</td>
            </tr>
            <tr>
                <td>Meciul 16</td>
                <td>28-11-2023-19:45</td>
                <td>Shakhtar Donetsk - Antwerp</td>
                <td>1 - 0</td>
            </tr>
        </table>
        <a href="export1.php">Export data</a>
        <a href="import.php">Import data</a>
        <a href="statistica1.php">Statistics</a>
    </nav>
    <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>