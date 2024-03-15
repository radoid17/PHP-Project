<?php

if(isset($_GET['export'])) {
    $content = "Meriuri, Data si Ora, Echipe, Scor\n";
    $content .= "Meciul 1, 29-11-2023-22:00, Arsenal - Lens, 6 - 0\n";
    $content .= "Meciul 2, 29-11-2023-22:00, Bayern Munich - FC Copenhagen, 0 - 0\n";
    $content .= "Meciul 3, 29-11-2023-22:00, Braga - Union Berlin, 3 - 3\n";
    $content .= "Meciul 4, 29-11-2023-22:00, Real Madrid - Napoli, 4 - 2\n";
    $content .= "Meciul 5, 29-11-2023-22:00, Galatasaray - Manchester Utd, 0 - 0\n";
    $content .= "Meciul 6, 29-11-2023-22:00, Sevilla - PSV, 3 - 3\n";
    $content .= "Meciul 7, 29-11-2023-19:45, AC Milan - Dortmund, 1 - 3\n";
    $content .= "Meciul 8, 29-11-2023-19:45, Barcelona - FC Porto, 2 - 1\n";
    $content .= "Meciul 9, 28-11-2023-22:00, AC Milan - Dortmund, 1 - 3\n";
    $content .= "Meciul 10, 28-11-2023-22:00, Barcelona - FC Porto, 2 - 1\n";
    $content .= "Meciul 11, 28-11-2023-22:00, Feyenoord - Atl. Madrid, 1 - 3\n";
    $content .= "Meciul 12, 28-11-2023-22:00, Manchester City - RB Leipzig, 3 - 2\n";
    $content .= "Meciul 13, 28-11-2023-22:00, PSG - Newcastle, 1 - 1\n";
    $content .= "Meciul 14, 28-11-2023-19:45, Young Boys - Crvena zvezda, 2 - 0\n";
    $content .= "Meciul 15, 28-11-2023-19:45, Lazio - Celtic, 2 - 0\n";
    $content .= "Meciul 16, 28-11-2023-19:45, Shakhtar Donetsk - Antwerp, 1 - 0\n";

    $filename = "export_scoruri.csv";

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    echo $content;

    exit;
}
?>

<a href="export1.php?export=1">Exportează scorurile</a>
<a href="Football.php">Return to main page</a>