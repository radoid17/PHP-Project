<?php

if(isset($_GET['export'])) {
    $content = "Meriuri, Data si Ora, Echipe, Scor\n";
    $content .= "Meciul 1 	29-11-2023-20:00 	Los Angeles Lakers - Brooklyn Nets 	110 - 105\n";
    $content .= "Meciul 2 	29-11-2023-20:30 	Golden State Warriors - Miami Heat 	98 - 93\n";
    $content .= "Meciul 3 	29-11-2023-21:00 	Philadelphia 76ers - Toronto Raptors 	112 - 110\n";
    $content .= "Meciul 4 	29-11-2023-21:30 	Houston Rockets - Boston Celtics 	105 - 102\n";
    $content .= "Meciul 5 	30-11-2023-19:00 	Dallas Mavericks - Denver Nuggets 	120 - 115\n";
    $content .= "Meciul 6 	30-11-2023-19:30 	Chicago Bulls - Orlando Magic 	95 - 92\n";
    $content .= "Meciul 7 	30-11-2023-20:00 	Phoenix Suns - Atlanta Hawks 	108 - 106\n";
    $content .= "Meciul 8 	30-11-2023-20:30 	Utah Jazz - Indiana Pacers 	115 - 110\n";
    $content .= "Meciul 9 	30-11-2023-21:00 	Minnesota Timberwolves - Charlotte Hornets 	102 - 98\n";
    $content .= "Meciul 10 	30-11-2023-21:30 	New York Knicks - Detroit Pistons 	96 - 94\n";

    $filename = "export_scoruri.csv";

    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    echo $content;

    exit;
}
?>


<a href="export2.php?export=1">Exportează scorurile</a>
<a href="Basketball.php">Return to main page</a>