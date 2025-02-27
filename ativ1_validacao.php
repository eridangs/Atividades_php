<?php
include("./ativ1.php");
if(isset($_POST['enviar'])){
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