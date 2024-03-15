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
    <nav id="Continut">

    <h2>NBA Season 2023/2024</h2>
    <table border="1">
        <tr>
            <th>Meciuri</th>
            <th>Data si Ora</th>
            <th>Echipe</th>
            <th>Scor</th>
        </tr>
        <tr>
            <td>Meciul 1</td>
            <td>29-11-2023-20:00</td>
            <td>Los Angeles Lakers - Brooklyn Nets</td>
            <td>110 - 105</td>
        </tr>
        <tr>
            <td>Meciul 2</td>
            <td>29-11-2023-20:30</td>
            <td>Golden State Warriors - Miami Heat</td>
            <td>98 - 93</td>
        </tr>
        <tr>
            <td>Meciul 3</td>
            <td>29-11-2023-21:00</td>
            <td>Philadelphia 76ers - Toronto Raptors</td>
            <td>112 - 110</td>
        </tr>
        <tr>
            <td>Meciul 4</td>
            <td>29-11-2023-21:30</td>
            <td>Houston Rockets - Boston Celtics</td>
            <td>105 - 102</td>
        </tr>
        <tr>
            <td>Meciul 5</td>
            <td>30-11-2023-19:00</td>
            <td>Dallas Mavericks - Denver Nuggets</td>
            <td>120 - 115</td>
        </tr>
        <tr>
            <td>Meciul 6</td>
            <td>30-11-2023-19:30</td>
            <td>Chicago Bulls - Orlando Magic</td>
            <td>95 - 92</td>
        </tr>
        <tr>
            <td>Meciul 7</td>
            <td>30-11-2023-20:00</td>
            <td>Phoenix Suns - Atlanta Hawks</td>
            <td>108 - 106</td>
        </tr>
        <tr>
            <td>Meciul 8</td>
            <td>30-11-2023-20:30</td>
            <td>Utah Jazz - Indiana Pacers</td>
            <td>115 - 110</td>
        </tr>
        <tr>
            <td>Meciul 9</td>
            <td>30-11-2023-21:00</td>
            <td>Minnesota Timberwolves - Charlotte Hornets</td>
            <td>102 - 98</td>
        </tr>
        <tr>
            <td>Meciul 10</td>
            <td>30-11-2023-21:30</td>
            <td>New York Knicks - Detroit Pistons</td>
            <td>96 - 94</td>
        </tr>
    </table>
        <a href="export2.php">Export data</a>
</nav>

    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>