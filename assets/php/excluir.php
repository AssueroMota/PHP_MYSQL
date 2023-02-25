<?php
include_once('conexao.php');

/* Recebendo o id que querendo excluir */
$id = $_POST['id'];

/*deletando do BD*/
$deletando_item = "DELETE FROM Man_Prev_Lito WHERE id = '$id'";

/* Atualizando o BD */
$ler_item = mysqli_query($cnx, $deletando_item);

/*Voltando para a listagem dos funcionarios */
header('location: ../../index.php');









?>