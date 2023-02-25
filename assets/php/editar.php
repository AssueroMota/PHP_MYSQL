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
    <link rel="stylesheet" href="../css/styleEditar.css">
    <!-- <link rel="stylesheet" href="styleEditar.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:ital@1&display=swap');

    .Obs {
        font-size: 22px;
        margin: auto;
    }

    i {
        margin-left: 3px;
    }

  
</style>

<body>
    <script src="https://kit.fontawesome.com/395a561a45.js" crossorigin="anonymous"></script>

    <?php

    while ($row_itens = mysqli_fetch_array($ler_cadastro_itens)) {
        $id = $row_itens['Id'];
        $Nome = $row_itens['Nome'];
        $Setor = $row_itens['Setor'];
        $Email = $row_itens['Email'];
        $Contato = $row_itens['Contato'];
        $Ultima_Revisao = $row_itens['Ultima_Revisao'];
        $Proxima_Revisao = $row_itens['Proxima_Revisao'];
        $Observacao = $row_itens['Observacao'];
        ?>


    <div class="form">
        <form method="POST" action="editaraction.php" class=''>
            <h1>Manutenção Preventiva</h1>
            <h2>Editar</h2>
            <div class="information">
                <div class="NameDiv None">
                    <input type="hidden" name='id' value="<?php echo $id; ?>">
                    <label>Nome:</label>
                    <input type="text" placeholder="Name" name="Nome" value="<?php echo ($Nome); ?>">
                    <i class="fa-sharp fa-solid fa-user"></i>
                    <!-- <input type="text" size="40" placeholder="Nome Completo"> -->
                </div>
                <div class="NameDiv None">
                    <label>Setor:</label>
                    <!-- <input type="text" placeholder="Setor" name="Setor"> -->
                    <input type="text" placeholder="Setor" name="Setor" value="<?php echo ($Setor); ?>">
                    <i class="fa-sharp fa-solid fa-warehouse Scetor"></i>
                </div>
            </div>

            <div class="Contact">
                <div class="NameDiv None">
                    <label>Email:</label>
                    <input type="text" placeholder="Email" name="Email" value="<?php echo ($Email); ?>">
                    <i class="fa-sharp fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="NameDiv None">
                    <label>Phone:</label>
                    
                    <input type="text" id="Cel" name="Contato" value="<?php echo ($Contato); ?>">
                    <i class="fa-sharp fa-solid fa-phone"></i>
                </div>
            </div>

            <br>
            <div class="rodapé">
                <div>
                    <label>Data da Ultima Revisão:</label>
                    <input type="date" placeholder="Ultima_Revisao" name="Ultima_Revisao"
                        value="<?php echo ($Ultima_Revisao); ?>">
                    <!-- <input type="date" name="data" id="data"> -->
                </div>
                <div>
                    <label>Data da Proxima Revisão:</label>
                    <input type="date" placeholder="Proxima_Revisao" name="Proxima_Revisao"
                        value="<?php echo ($Proxima_Revisao); ?>">
                    <!-- <input type="date" name="data" id="data"> -->
                </div>
            </div>

            <div class="Obs">
                <!-- <label>Observação</label> -->
                <!-- <input type="text" placeholder="Observacao" name="Observacao"> -->
                <textarea id="w3review" name="Observacao" rows="5" cols="70"><?php echo ($Observacao); ?></textarea>
            </div>

            <div>


                <input type="hidden" name="" id="">



            </div>

            <input type="submit" value="Salvar"> &nbsp; &nbsp;
            <a href="../../index.php"><input type="button" value="Voltar"><br><br></a>

        </form>
    </div>






    <?php }
    ; ?>




</body>

</html>