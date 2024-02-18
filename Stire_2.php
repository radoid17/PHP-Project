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
        <h2>Stiri</h2>
        <h3>
            <a>Ten Hag își asumă vina pentru că Manchester United a irosit un alt avantaj</a>
        </h3>
        <img src="Screenshot_1.png">
	<h2>Antrenorul lui Manchester United, Erik ten Hag, a declarat că este responsabil pentru că echipa sa a aruncat încă un avantaj în Liga Campionilor, după ce au fost atașați miercuri la egalul 3-3 cu Galatasaray.

Trei ori campioni ai Europei au scapat de două ori un avantaj de două goluri la Istanbul, portarul Andre Onana făcând două greșeli costisitoare, pentru a-și lăsa speranțele de a ajunge în optimi.

United se află pe ultimul loc în Grupa A, cu patru puncte din cinci meciuri, dar încă la doar un punct de Copenhaga și Galatasaray. Ei trebuie să învingă câștigătorii grupei Bayern Munchen pe 12 decembrie pentru a progresa.

United a lăsat să scadă un avantaj de două goluri într-un meci anterior din grupa de la Copenhaga înainte de a pierde cu 4-3, iar Ten Hag a spus că incapacitatea lor de a vedea meciurile a fost din cauza lui.

"Întotdeauna eu sunt (cel de vină pentru că am aruncat lead-uri). Sunt responsabil pentru asta, dar știu și că suntem într-un proiect", a declarat olandezul pentru TNT Sports.

„Suntem în direcția bună, așa că știu unde trebuie să mergem și ce pași trebuie să facem și sunt sigur că vom avea succes pe termen lung.

„Dacă vrem să rămânem în Liga Campionilor, trebuie să câștigăm meciul următor”.</h2>
	<h2>Ten Hag era încrezător că vor găsi o modalitate de a nu mai primi atât de multe goluri.

United a marcat cele mai multe goluri din grupa lor cu 12, dar este la egalitate cu Celtic pentru al doilea cel mai prost record defensiv din Liga Campionilor din acest an, cu 14 marcate împotriva lor.

Doar Anversul din Grupa H a primit mai multe (15).

„Vom rezolva asta, dar sunt foarte mulțumit că vezi stilul echipei”, a spus el. „Proactiv, dinamic, curajos, așa că am spus, sunt foarte mulțumit de performanță”.

Echipa lui Ten Hag va merge sâmbătă la Newcastle United în Premier League.
​</h2>
    </nav>
    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>