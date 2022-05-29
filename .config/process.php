


<?php

include_once 'conect.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO disciplina(nome) VALUES ('$nome')";
$resultadousuario = mysqli_query($conexao, $result_usuario);
