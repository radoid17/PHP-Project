<?php
if(isset($_GET['export'])) {
    $content = "Meriuri, Data si Ora, Echipe, Scor\n";
    $content .= "Meciul 1 	30-11-2023-15:30 	Rafael Nadal - Novak Djokovic 	2 - 1\n";
    $content .= "Meciul 2 	30-11-2023-17:00 	Serena Williams - Maria Sharapova 	2 - 0\n";
    $content .= "Meciul 3 	30-11-2023-18:30 	Roger Federer - Andy Murray 	1 - 2\n";

    $filename = "export_scoruri.csv";

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    echo $content;

    exit;
}
?>

<a href="export3.php?export=1">Exportează scorurile</a>
<a href="Tennis.php">Return to main page</a>