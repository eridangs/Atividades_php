<?php
require_once('menu_ativ.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <h1>Sua idade</h1>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">
            <label for="idade">Sua idade:</label>
            <input type="number" name="idade" id="idade" min="1" max="120" step="1" placeholder="Insira sua idade: ">
            <input type="submit" name="enviar" value="ENVIAR">
        </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $idade = (int)$_POST['idade'];
    }
    if($idade<18){
        echo 'Você é menor de idade';
    }else{
        echo 'Você é maior de idade';
    };
    if($idade>60){
        echo '<br>E você é uma pessoa idosa';
    };
    ?>
</body>
</html>