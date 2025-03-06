<?php
require_once('menu_ativ.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavra sem vogal</title>
</head>
<body>
    <h1>Palavra sem vogal</h1>
    <form method="POST">
        <label for="palavra">Palavra:</label>
        <input type="text" id="palavra" name="palavra" value="programação" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $texto = $_POST['palavra'];
}
function removerVogais($texto) {
    $stringSemVogais = preg_replace('/[aeiouAEIOU]/', '', $texto);
    return $stringSemVogais;
}

echo 'Palavra inicial: '.$texto.'<br>';

$resultado = removerVogais($texto);
echo 'Palavra sem vogal: '.$resultado;
?>