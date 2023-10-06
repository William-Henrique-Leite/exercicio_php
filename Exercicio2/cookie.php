<?php

$nome = $_GET["nome"];

$idade = $_GET["idade"];

setcookie("nome", $nome, (time() +3600) );

setcookie("idade", $idade, (time() +3600) );

header("location: master.php");

?>