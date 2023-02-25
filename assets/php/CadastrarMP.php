<?php
/* Chamando a conexão */
include 'conexao.php';

/* Pegando os dados do form */
$Nome = $_POST['Nome'];
$Setor = $_POST['Setor'];
$Email = $_POST['Email'];
$Observacao = $_POST['Observacao'];
$Ultima_Revisao = $_POST['Ultima_Revisao'];
$Proxima_Revisao = $_POST['Proxima_Revisao'];

/*Inserindo no BD*/
$recebendo_novo_infom = "INSERT INTO Man_Prev_Lito (Nome, Setor, Email, Observacao, Ultima_Revisao, Proxima_Revisao)
 VALUES ('$Nome, '$Setor', '$Email', '$Observacao', '$Ultima_Revisao' ,'$Proxima_Revisao' )";

/* Lendo no sql */
$ler_novo_func = mysqli_query($cnx, $recebendo_novo_infom);

/* Voltando para a listagem dos funcionarios */
header('location: ../../index.php');
?>