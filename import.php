<?php
if(isset($_FILES['upload_file'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['upload_file']['name']);
    
    move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_file);
    
    echo 'Datele au fost importate cu succes!';
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
        <form action="import.php" method="post" enctype="multipart/form-data">
        Selectează fișierul de import: <input type="file" name="upload_file" />
        <input type="submit" value="Import" />
        </form>
    </nav>
    <footer id = "allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>