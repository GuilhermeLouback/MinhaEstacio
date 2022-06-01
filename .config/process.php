


<?php

include_once 'conect.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao= filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO disciplina(nome) VALUES ('$nome')";
$result_discp = "INSERT INTO disciplina(descricao) VALUES ('$descricao')";


$resultadousuario = mysqli_query($conexao, $result_usuario);
$resultdisp = mysqli_query($conexao, $resultdisp);