<?php
require_once('menu_ativ.php');
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "Olá, $nome! Você tem $idade anos.";
} else {
    echo "Por favor, preencha o formulário corretamente.";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Nome e Idade</title>
</head>
<body>
    <h1>Formulário de Nome e Idade</h1>
    <form method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>