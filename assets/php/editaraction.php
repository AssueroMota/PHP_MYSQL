<?php

include_once 'conexao.php';



$id = $_POST['id'];
$nome = $_POST['Nome'];
$setor = $_POST['Setor'];
$email = $_POST['Email'];
$contato = $_POST['Contato'];
$obs = $_POST['Observacao'];
$ult_rev = $_POST['Ultima_Revisao'];
$pro_rev = $_POST['Proxima_Revisao'];



$Editando_BD = "UPDATE Man_Prev_Lito
    SET Nome = '$nome',
    Setor = '$setor' ,
    Email = '$email',
    Observacao = '$obs',
    Contato = '$contato',
    Ultima_Revisao = '$ult_rev',
    Proxima_Revisao = '$pro_rev'
    Where id='$id'
    ";

$ler_item_editado = mysqli_query($cnx, $Editando_BD);

header('location: ../../index.php');
?>