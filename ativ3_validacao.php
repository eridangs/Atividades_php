<?php
include("./ativ1.php");
if(isset($_POST['enviar'])){
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