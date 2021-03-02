<?php
$a = $_POST["n1"];
$b = $_POST["n2"];
$opc = $_POST["accion"];

if($opc == 1){
    echo "La suma es : ".($a + $b);
    }
    else if ($opc == 2 ){
        echo "La resta es : ".($a - $b);
    }
    else if ($opc == 3 ){
        echo "La Multiplicación es : ".($a * $b);
    }
?>