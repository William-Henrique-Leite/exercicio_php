<?php

$nome = $_GET["nome"];

$cidade_nascimento = $_GET["cidade_nascimento"];

setcookie("nome", $nome, (time() +3600) );

setcookie("cidade_nascimento", $cidade_nascimento, (time() +3600) );

header("location: mensagem.php");

?>