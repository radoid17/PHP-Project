<?php
session_start(); 

function secure_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function validate_input($input) {
    return $input; 
}

function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    return $_SESSION['csrf_token'];
}

function displayMessages() {
    if (isset($_SESSION['error_message'])) {
        echo '<div class="error-message">' . secure_output($_SESSION['error_message']) . '</div>';
        unset($_SESSION['error_message']);
    }

    if (isset($_SESSION['success_message'])) {
        echo '<div class="success-message">' . secure_output($_SESSION['success_message']) . '</div>';
        unset($_SESSION['success_message']);
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptcha_secret_key = "6LdWrFEpAAAAALlQnK2BxtzTcJFBYr3uXhFTyR7C";
    $recaptcha_response = $_POST['g-recaptcha-response'];

    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
    $recaptcha_data = [
        'secret' => $recaptcha_secret_key,
        'response' => $recaptcha_response
    ];

    $recaptcha_options = [
        'http' => [
            'method' => 'POST',
            'content' => http_build_query($recaptcha_data)
        ]
    ];

    $recaptcha_context = stream_context_create($recaptcha_options);
    $recaptcha_result = json_decode(file_get_contents($recaptcha_url, false, $recaptcha_context));

    if (!$recaptcha_result->success) {
        $_SESSION['error_message'] = "reCAPTCHA verification failed. Please try again.";
        header("Location: register.php");
        exit();
    }

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        div.g-recaptcha {
            margin: 0 auto;
            width: 304px;
        }
    </style>
</head>
<body>
    <header>
        <nav id="Titlu">
            <h1 id='PrimaLinie'>Evidenţa rezultatelor concursurilor sportive</h1>
            <ul class="a">
                <li><a href="Descriere.php">Descriere</a></li>
                <li><a href="index.php">Pagina principala</a></li>
                <li><a href="Football.php">Football</a></li>
                <li><a href="Tennis.php">Tennis</a></li>
                <li><a href="Basketball.php">Basketball</a></li>
                <li><a href="Login.php">Login</a></li><li>
                    <a href="Forum.php">Forum</a>
                </li>
            </ul>
        </nav>
    </header>

    <nav id="Continut">
        <div id="login-form">
            <h2>Register</h2>
            <form action="register.php" method="post"> 
                <div class="form-group">
                    <label for="role">Select a role:</label>
                    <select name="role" id="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Full Name" required
                           value="<?php echo isset($_POST['fullname']) ? secure_output($_POST['fullname']) : ''; ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required
                           value="<?php echo isset($_POST['email']) ? secure_output($_POST['email']) : ''; ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="g-recaptcha" data-sitekey="6LdWrFEpAAAAACZGkhQa3g5y2eWmXRh8ZVX2YpgH"></div>
                <div class="form-group">
                    <input type="hidden" name="csrf_token" value="<?php echo generate_csrf_token(); ?>">
                    <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </div>
            </form>

            <?php displayMessages(); ?>
        </div>
        <div>
        <div><p>Already Registered <a href="Login2.php">Login Here</a></p></div>
        </div>
    </nav>

    <footer id="allwaydown">
        <p>@Site Radoi Dragos Cosmin</p>
        <p>All external content remains the property of the rightful owner.</p>
    </footer>
</body>
</html>
