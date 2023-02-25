<?php

include_once('conexao.php');

$nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$setor = filter_input(INPUT_POST, 'Setor', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);
$contato = filter_input(INPUT_POST, 'Contato', FILTER_SANITIZE_STRING);
$ult_rev = filter_input(INPUT_POST, 'Ultima_Revisao', FILTER_SANITIZE_STRING);
$pro_rev = filter_input(INPUT_POST, 'Proxima_Revisao', FILTER_SANITIZE_STRING);
$obs = filter_input(INPUT_POST, 'Observacao', FILTER_SANITIZE_STRING);

$Op_MPLITO = "INSERT INTO Man_Prev_Lito (Nome, Setor, Email, Contato, Ultima_Revisao ,Proxima_Revisao, Observacao)
VALUES ('$nome','$setor','$email','$contato','$ult_rev','$pro_rev','$obs')";

$preventive_maintenance = mysqli_query($cnx, $Op_MPLITO);

if (mysqli_insert_id($cnx)) {
    header('location: ../../index.php');
} else {
    echo ('deu um erro');
}



?>