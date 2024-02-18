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
        <h1>Descriere</h1>
        <h2>Roluri:</h2>
        <ul>
            <li>Utilizatori obișnuiți: Acești utilizatori pot căuta evenimente sportive, vizualiza informații despre meciuri și competiții, seta preferințele, precum și primi notificări despre evenimentele care îi interesează.</li>
            <li>Administratori: Aceștia pot gestiona conținutul platformei, să adauge, să actualizeze și să șteargă evenimente, să modifice scoruri și să aprobe sau să respingă raportările utilizatorilor.</li>
        </ul>
        <h2>Entități:</h2>
        <ul>
            <li>Meciuri sau Evenimente Sportive: Informații despre fiecare eveniment, inclusiv data, ora, locația, echipele implicate, detalii despre meci.</li>
            <li>Echipe: Detalii despre echipe, inclusiv nume, embleme, detalii despre jucători și antrenori.</li>
            <li>Scoruri și Rezultate: Un registru al scorurilor și rezultatelor în timp real sau istoric pentru fiecare meci sau eveniment.</li>
            <li>Ligi și Competiții: Informații despre diferitele ligi, competiții sau campionate.</li>
            <li>Utilizatori: Profilurile utilizatorilor care permit gestionarea preferințelor, urmărirea evenimentelor favorite și primirea notificărilor.</li>
            <li>Statistici și Analize: Date statistice detaliate despre meciuri, echipe, jucători, inclusiv analize ale performanțelor.</li>
            <li>Program și Calendar: Informații despre programul meciurilor viitoare și evenimente sportive.</li>
            <li>Administratori: Profiluri administratorilor care permit gestionarea informatiilor si continutul platformei</li>
        </ul>
        <h2>Procese specifice:</h2>
        <ul>
            <li>Crearea unui cont: Procesul prin care utilizatorul isi creaza un cont</li>
            <li>Adăugare/Actualizare Evenimente: Procesul de adăugare și actualizare a informațiilor despre evenimente, inclusiv detalii despre meciuri și scoruri.</li>
            <li>Raportare Scoruri: Procesul de raportare a scorurilor în timp real sau după încheierea evenimentelor.</li>
            <li>Aprobare și Moderare: Procesul prin care administratorii verifică și aprobă sau resping informațiile și scorurile.</li>
            <li>Urmărire Evenimente: Procesul prin care utilizatorii pot urmări evenimentele sportive și primesc notificări despre acestea.</li>
        </ul>
        <h2>Relații:</h2>
        <ul>
            <li>Meciurile sunt asociate cu echipe, competiții, date și locații.</li>
            <li>Utilizatorii pot urmări echipe sau evenimente sportive și pot raporta scoruri sau erori.</li>
            <li>Administratorii au dreptul de a gestiona informațiile și conținutul platformei.</li>
        </ul>
        <h2>Componente principale:</h2>
        <ul>
            <li>Interfața de Utilizator (UI): Componenta vizuală a site-ului sau a aplicației.</li>
            <li>Server web: Componenta care procesează cererile utilizatorilor și furnizează răspunsurile.</li>
            <li>Bază de date: Stocarea datelor despre evenimente, echipe, utilizatori, scoruri și altele.</li>
            <li>Servicii de autentificare: Pentru gestionarea autentificării utilizatorilor.</li>
        </ul>
        <h2>Baze de date:</h2>
        <ul>
            <li>Tabelul "Meciuri" sau "Evenimente Sportive": data, ora, locația, echipele implicate, detalii despre meci.</li>
            <li>Tabelul "Echipe": detalii despre echipele sportive, inclusiv nume, embleme, detalii despre jucători și antrenori.</li>
            <li>Tabelul "Scoruri și Rezultate": detalii despre scorul final, scoruri parțiale, data și ora înregistrării scorului.</li>
            <li>Tabelul "Ligi și Competiții": detalii despre numele competițiilor, descrieri, sezoane sau alte detalii relevante.</li>
            <li>Tabelul "Utilizatori":detalii despre numele de utilizator, adrese de email, parole criptate, preferințe și altele.</li>
            <li>Tabelul "Administrator": detalii despre numele de administrator, adrese de email, parole criptate</li>
            <li>Tabelul "Statistici și Analize": date statistice detaliate despre meciuri, echipe, jucători, inclusiv analize ale performanțelor.</li>
            <li>Tabelul "Program și Calendar": detalii despre datele calendaristice si ora meciurilor</li>
        </ul>
        <ul>Diagrama implementare UML</ul>
        <img src ="Diagrama UML site.jpeg" width="800" height="600" alt="imagine" >
    </nav>
    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>