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
            <a href="">Arsenal l-a lovit rapid pe Lens pentru a ajunge în optimi ca câștigătoare a grupei, PSV depășește Sevilla</a>
        </h3>
        <img src="Screenshot_2.png">
        <h2>Arsenal s-a calificat cu tărie pentru eliminatoriile din UEFA Champions League, lovindu-l pe RC Lens cu 6-0 pe Emirates Stadium, asigurându-se că vor termina și în fruntea grupei lor.

Gazdele au fost chestionate la Monday Night Football despre lipsa lor de fluiditate în atac și se pare că au luat asta personal. Nu mai puțin de cinci goluri au venit în prima repriză pentru Gunners, toate de marcatori diferiți.

Kai Havertz și-a adăugat câștigătoarea împotriva lui Brentford în weekend, cu deschiderea în minutul 13, trăgând acasă după ce Gabriel Jesus a trecut cu capul peste careu și devenind al 100-lea jucător de la Arsenal care a marcat un gol competitiv la Emirates.

Brazilianul strălucit al lui Arsenal și-a dublat apoi avantajul echipei sale cu câteva picioare rapide, înainte de a pătrunde în colțul de jos din pasa lui Bukayo Saka. Se forma un lanț, căci englezul a făcut apoi trei în genunchi în retragere după ce Gabriel Martinelli a forțat o salvare a lui Brice Samba.

Cel de-al patrulea marcator, inevitabil, a fost Martinelli, care apoi a tras un șut minunat în colțul de jos, după niște driblinguri nebunești.</h2>
        <h2>Martin Odegaard a rupt apoi lanțul prin volei în al cincilea, ambele goluri fiind asistate de Takehiro Tomiyasu.

În mod uimitor totuși, Lens a mai strâns câteva șanse. Jucătorul care a marcat învingătoarea în meciul invers, Elye Wahi, a tras un efort periculos peste poartă, în timp ce Facundo Medina a prăbușit un șut în bară de la distanță mare.

Așa cum era de așteptat, Gunners și-au luat piciorul de pe gaz în a doua perioadă, dar ar fi putut să-și sporească numărul de la jumătatea reprizei, deoarece prima lovitură a lui Odegaard din afara zonei a fost bine salvată de Samba după o muncă îngrijită de la un Havertz periculos și influent.

Oamenii lui Mikel Arteta au avut timp să adauge o al șaselea, deoarece înlocuitorul Jorginho a transformat un penalty după ce Martinelli a făcut ravagii în careu.</h2>
        <h2>Rezultatul înseamnă că Arsenal și-a spart propria rață personală împotriva lui Lens, învingându-i pentru prima dată în Liga Campionilor la a patra încercare - anterior nu se confruntase cu niciun adversar mai des în competiție fără a câștiga.

În ceea ce privește echipa lui Frank Haise, ei nu se mai pot califica pentru knockout, dar ar putea câștiga totuși un loc în UEFA Europa League.</h2>
    </nav>
    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>