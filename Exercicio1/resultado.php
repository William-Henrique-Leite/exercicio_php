<?php

$numero1 = $_GET["numero1"];

$numero2 = $_GET["numero2"];


function maior($numero1, $numero2){ 
    if ($numero1 > $numero2){
        echo "O primeiro numero o maior.<br>";
    }

    else if ($numero2 > $numero1){
        echo "O segundo numero o maior.<br>";
    }

    else{
        echo "Os números são iguais";
    }
}

maior ($numero1, $numero2);


?>