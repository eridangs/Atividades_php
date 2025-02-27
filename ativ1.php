<?php
require_once('menu_ativ.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <h1>Calculos Matemáticos Inteiros</h1>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">
            <label for="1numero"> Número 1:</label>
            <input type="number" name="1numero" id="1numero" min="1" max="1000" step="1" placeholder="Insira o primeiro número: ">
            <label for="2numero"> Número 2:</label>
            <input type="number" name="2numero" id="2numero" min="1" max="1000" step="1" placeholder="Insira o segundo número: ">
            <input  type="submit" name="enviar" value="ENVIAR">
        </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = (int)$_POST['1numero'];
        $num2 = (int)$_POST['2numero'];
    }
    $adic = $num1 + $num2;
    $subt = $num1 - $num2;
    $mult = $num1 * $num2;
    $divi = $num1/$num2;
    echo'<br> Adição'.$num1.'+'.$num2.'='.$adic.' Tipo:'.gettype($adic).'<br>'.
    'Subtração'.$num1.'-'.$num2.'='.$subt.' Tipo:'.gettype($subt).'<br>'.
    'Multiplicação'.$num1.'x'.$num2.'='.$mult.' Tipo:'.gettype($mult).'<br>'.
    'Divisão'.$num1.'÷'.$num2.'='.$divi.' Tipo:'.gettype($divi);
    ?>
</body>
</html>
