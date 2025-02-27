<?php
require_once('menu_ativ.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <h1>Laço de repetição</h1>
    <div class="p-5 d-flex align-items-center bg-primary text-white rounded">
        <form method="POST">
            <input type="text" value="Continue: ">
            <input type="submit" name="enviar" value="ENVIAR">
        </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        for ($i=1;$i<101;$i++){
            if($i%3==0 && $i%5==0){
                echo 'AB<br>';
            }elseif($i%3==0){
                echo "A<br>";
            }elseif($i%5==0){ 
                echo "B<br>";
            }else{
                echo $i.'<br>';
            };
        };
    }
    ?>
</body>
</html>