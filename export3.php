<?php
// export.php

// Verifică dacă a fost apăsat link-ul de export
if(isset($_GET['export'])) {
    // Obține datele de pe pagina Football.php (sau de unde sunt stocate)
    // ...

    // Generează conținutul pentru fișierul de export
    $content = "Meriuri, Data si Ora, Echipe, Scor\n";
    $content .= "Meciul 1 	30-11-2023-15:30 	Rafael Nadal - Novak Djokovic 	2 - 1\n";
    $content .= "Meciul 2 	30-11-2023-17:00 	Serena Williams - Maria Sharapova 	2 - 0\n";
    $content .= "Meciul 3 	30-11-2023-18:30 	Roger Federer - Andy Murray 	1 - 2\n";

    // Generează numele fișierului de export
    $filename = "export_scoruri.csv";

    // Setează anteturi pentru un fișier CSV
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Scrie conținutul în fluxul de ieșire
    echo $content;

    // Ieși din script pentru a evita afișarea restului paginii
    exit;
}
?>

<!-- Restul codului HTML din export.php -->

<!-- Adaugă un link de export -->
<a href="export3.php?export=1">Exportează scorurile</a>
<a href="Tennis.php">Return to main page</a>