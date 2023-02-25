<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/styleCadastra.css">
    <!-- <link rel="stylesheet" href="styleCadastra.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
<script src="https://kit.fontawesome.com/395a561a45.js" crossorigin="anonymous"></script>

<body>
    <div class="form">
        <form method="POST" action="../php/processa.php">
        <!-- <form method="POST" action="processa.php"> -->
            <h1>Manutenção Preventiva</h1>
            <h2>Cadastro</h2>

            <div class="information">
                <div class="NameDiv None">
                    <label>Nome:</label>
                    <input type="text" placeholder="Usuário" name="Nome" size="40" class="NameOne" maxlength="14" required>
                    <i class="fa-sharp fa-solid fa-user"></i>
                </div>
                <!-- <input type="text" size="40" placeholder="Nome Completo"> -->
                <div class="NameDiv">
                    <label>Setor:</label>
                    <!-- <input type="text" placeholder="Setor" name="Setor"> -->
                    <select name="Setor" required id="Setor">
                        <label for='styledSelect1' class='custom-select'></label>
                        <option valor="BOA VIAGEM">Boa Viagem</option>
                        <option value="DEPARTAMENTO PESSOAL" selecionado>Departamento Pessoal</opção>
                        <option value="Fiscal Acene">Fiscal Acene</option>
                        <option value="PCP / LOJA VIRTUAL">PCP / Loja Virtual</option>
                        <option valor="COSTURA / ACABAMENTO">Costura / Acabamento</opção>
                        <option value="ESTOQUE">Estoque / Almoxarifado </opção>
                        <option value="EXPEDIÇÃO">Expedição / Corte</option>
                        <option value="Gerência">Gerência</option>
                        <option value="GRÁFICO">Gráfico</option>
                        <option valor="LOJA OUTLET">Loja Outlet</opção>
                        <option value="LOJA MIDWAY">Loja Midway</option>
                        <option value="LOJA PARALELA">Loja Paralela</option>
                        <option valor="LOJA Praia do Forte">Loja Praia do Forte</opção>
                        <option value="COMERCIAL">Comercial</option>
                        <option value="Mag Shopping">Mag Shopping</opção>
                        <option valor="LOJA SHOPPING RIO MAR">Shopping Rio Mar</opção>
                        <option valor="LOJA SHOPPING RECIFE">Shopping Recife</opção>
                        <option valor="LOJA SHOOPING GUARARAPES">Shopping Guararapes</opção>
                        <option valor="LOJA SHOPPING SALVADOR">Shopping Salvador</opção>
                    </select>
                    <i class="fa-sharp fa-solid fa-warehouse Scetor"></i>
                </div>
            </div>

            <div class="Contact">
                <div class="NameDiv TrEmail">
                    <label id="labelEmail">Email:</label>
                    <input type="email" placeholder="Email" name="Email" size="40" id="email" maxlength="25"
                     required />
                    <i class="fa-sharp fa-solid fa-envelope-open-text"></i>
                </div>
                <div class="NameDiv">
                    <label>Phone:</label>
                    <input type="tel" id="Cel" name="Contato"
                        maxlength="11" placeholder="(81)99616-0298"/>
                    <i class="fa-sharp fa-solid fa-phone"></i>
                </div>
            </div>
            <br>
            <div class="rodapé">
                <div class="">
                    <label>Ultima Revisão:</label>
                    <input type="date" name="Ultima_Revisao" id="Ul_Rev">
                    <!-- <input type="date" name="data" id="data"> -->
                </div>
                <div class="">
                    <label>Proxima Revisão:</label>
                    <input type="date" name="Proxima_Revisao" id="Pro_Rev">
                    <!-- <input type="date" name="data" id="data"> -->
                </div>
            </div>

            <div class="Obs">
                <!-- <label>Observação</label> -->
                <!-- <input type="text" placeholder="Observacao" name="Observacao"> -->
                <textarea id="w3review" name="Observacao" rows="5" cols="70" placeholder="Observação"></textarea>
            </div>

            <br>

            <input type="submit" value="Cadastrar"> &nbsp; &nbsp;
            <a href="../../index.php"><input type="button" value="Voltar"><br><br></a>
        </form>
    </div>
    <script src="../javascript/Cadastro.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script>

    </script>







</body>

</html>