<?php

include_once('conexao.php');

/* Pegando os dados do form */
$id = filter_input(INPUT_POST, 'Id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
$contato = filter_input(INPUT_POST, 'Contato', FILTER_SANITIZE_NUMBER_INT);
$ult_rev = filter_input(INPUT_POST, 'Ultima_Revisao', FILTER_SANITIZE_STRING);
$pro_rev = filter_input(INPUT_POST, 'Proxima_Revisao', FILTER_SANITIZE_STRING);
$obs = filter_input(INPUT_POST, 'Observacao', FILTER_SANITIZE_STRING);

// $Res_MP = "UPDATE manu_prev_lito SET Nome = '$nome' Setor = '$setor', Email = '$email', Observacao = '$obs',
// Ultima_Revisao = '$ult_rev', Proxima_Revisao = '$pro_rev', Where Id='$id'";

// $Res_MPLito = mysqli_query($cnx, $Res_MP);



?>














?>