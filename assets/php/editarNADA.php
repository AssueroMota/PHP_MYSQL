<?php
/* Chamando o banco de dados*/
include 'conexao.php';
$id = $_POST['id'];
/* Vamos visualizar os dados do banco de dados */
$chamar_dados = "SELECT * FROM Man_Prev_Lito WHERE id = '$id'";
/* Agora vamos ler o nosso sql */
$ler_cadastro_itens = mysqli_query($cnx, $chamar_dados);
?>






<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    while ($row_itens = mysqli_fetch_array($ler_cadastro_itens)) {
        $id = $row_itens['Id'];
        $Nome = $row_itens['Nome'];
        $Setor = $row_itens['Setor'];
        $Email = $row_itens['Email'];
        $Observacao = $row_itens['Observacao'];
        $Ultima_Revisao = $row_itens['Ultima_Revisao'];
        $Proxima_Revisao = $row_itens['Proxima_Revisao'];

    ?>


    <form method="POST" action="editaraction.php" class=''>
   
        <input type="hidden" name='id' value="<?php echo $id; ?>">
        <br>
        <input type="text" placeholder="Name" name="Nome" value="<?php echo ($Nome); ?>">
        <br>
        <input type="text" placeholder="Setor" name="Setor" value="<?php echo ($Setor); ?>">
        <br>
        <input type="text" placeholder="Email" name="Email" value="<?php echo ($Email); ?>">
        <br>
        <input type="text" placeholder="Observacao" name="Observacao" value="<?php echo ($Observacao); ?>">
        <br>
        <input type="text" placeholder="Ultima_Revisao" name="Ultima_Revisao" value="<?php echo ($Ultima_Revisao); ?>">
        <br>
        <input type="text" placeholder="Proxima_Revisao" name="Proxima_Revisao" value="<?php echo ($Proxima_Revisao); ?>">

        <br>
        <button>SALVAR</button>


    </form>
    <!-- fim do while -->
    <?php }
    ; ?>

</body>

</html>