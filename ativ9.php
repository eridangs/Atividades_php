<?php
require_once('menu_ativ.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar email</title>
</head>
<body>
    <h1>Validar email</h1>
    <form method="POST">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="usuario@example.com" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST['email'];
}
function validarEmail($email) {

    if (strpos($email, '@') === false || strpos($email, '.') === false) {
        return "O e-mail '$email' não é válido. Ele deve conter '@' e '.'.";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "O e-mail '$email' é válido.";
    } else {
        return "O e-mail '$email' não é válido.";
    }
}

echo validarEmail($email) . "\n";
?>