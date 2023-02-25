<?php
include_once('assets/php/conexao.php');
// include_once('conexao.php');
$itens = "SELECT * FROM Man_Prev_Lito";
$resultado_itens = mysqli_query($cnx, $itens);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/phosphor-icons"></script>
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- responsividade -->
  <link rel="stylesheet" href="assets/css/Resposive/1024px.css">
  <link rel="stylesheet" href="assets/css/Resposive/768px.css">
  <link rel="stylesheet" href="assets/css/Resposive/410px.css">
  <link rel="stylesheet" href="assets/css/Resposive/300px.css">
</head>

<script src="https://kit.fontawesome.com/395a561a45.js" crossorigin="anonymous"></script>


<body>


  <header>
    <h1>CRUD PHP + MYSQL Manutenção Preventiva</h1>
    <div class="input-wrapper">
      <label for="filter" class="sr-only">Pesquisar</label>
      <input id="filter" type="text" placeholder="Pesquisar">
      <i class="ph-magnifying-glass"></i>
    </div>
  </header>



  <!-- ESSA PAGINA É PARA VISUALIZAÇÃO DOS ITEMS CADASTRADOS -->




  <!--BOTAO -->

  <div class="text-box cadastro">
    <a href="./assets/php/cadastro.php" class="btn btn-white btn-animate">Cadastrar</a>
  </div>



  <main id="main">


    <div class="menu" id="tv">



      <?php

      while ($row_itens = mysqli_fetch_assoc($resultado_itens)) {
        $Id = $row_itens['Id'];
        $Nome = $row_itens['Nome'];
        $Setor = $row_itens['Setor'];
        $Email = $row_itens['Email'];
        $Contato = $row_itens['Contato'];
        $Observacao = $row_itens['Observacao'];
        $Ultima_Revisao = $row_itens['Ultima_Revisao'];
        $Proxima_Revisao = $row_itens['Proxima_Revisao'];
        $data_inicial = $row_itens['Ultima_Revisao'];
        $data_final = $row_itens['Proxima_Revisao'];
        $dataBr_inicial = $row_itens['Ultima_Revisao'];
        $dataBr_final = $row_itens['Proxima_Revisao'];
        ?>
        <?php
        $hoje = date('Y/m/d');

        // Calcula a diferença em segundos entre as datas
        $diferenca = strtotime($data_final) - strtotime($hoje);

        //Calcula a diferença em dias
        $dias = floor($diferenca / (60 * 60 * 24));



        // BIBLIOTECA PHP PARA TRASFORMAR DATA MYSQL QUE É AMERICANA PARA FORMATO BRASIL
        $timestamp = strtotime($dataBr_inicial);
        $timestamptwo = strtotime($dataBr_final);


        ?>
        <?php
        if ($dias <= '7') {
          $cor = "red";
        } else if ($dias >= 8 && $dias < 25) {
          $cor = "yellow";
        } else {
          $cor = "rgb(0, 255, 128);";
        }
        ?>

        <ul class="cards">
          <li>
            <div class="header box">
              <!-- <i class="ph-graduation-cap"></i> -->
              <h2 class="Width-Cards Width-Name">
                <i class="fa-regular fa-user Card-Margin-Top"></i>
                <?php echo $Nome; ?>
              </h2>

              <p class="Width-Cards Width-Sector">
                <i class="fa-sharp fa-solid Card-Margin-Top fa-warehouse"></i>
                <?php echo $Setor ?>
              </p>
              <p class="Width-Cards Width-Envolope">
                <i class="fa-sharp fa-solid Card-Margin-Top fa-envelope"></i>

                <?php echo $Email ?>
              </p>
              <p class="Width-Cards Width-Phone">

                <i class="fa-sharp fa-solid Card-Margin-Top fa-phone"></i>

                <?php echo $Contato ?>
              </p>
              <!-- <p class="Width-Cards">
                <i class="fa-sharp fa-solid Card-Margin-Top fa-book-open"></i>

                <?php $Observacao ?>
              </p> -->
              <!-- <p class="Ult_Rev">
                            <?php echo "Data da Ultima Revisao: " . $Ultima_Revisao ?>
                          </p>
                          <p class="Pro_Rev">
                            <?php echo "Data da Proxima Revisao: " . $Proxima_Revisao ?>
                          </p> -->

              <!-- Mudança de FORMATO -->
              <p class="Dbr_In Width-Cards DashboardDate">
                <i class="fa-sharp fa-solid fa-calendar-days"></i>
              
                    <?php echo date('d/m/Y', $timestamp); ?>
              </p>
              <p class="Dbr_Fn Width-Cards DashboardDate">
                <i class="fa-sharp fa-solid fa-calendar-check"></i>
            
                    <?php echo date('d/m/Y', $timestamptwo); ?>
              </p>
              <p class="Resultado" style="background-color : <?php echo $cor ?>;">
                <?php echo "Resta $dias dias"; ?>
              </p>
              <div class="footer btn-footer">
                <form action="./assets/php/editar.php" method="post">
                  <input type="hidden" name='id' value="<?php echo $Id; ?>">
                  <button class="Edit">Editar</button>
                </form>
                <br>
                <div class="DelPro btn-footer">
                  <form action="./assets/php/excluir.php" method="post" class="DelForm">
                    <input type="hidden" name='id' value="<?php echo $Id; ?>">
                    <button class="Delete" onclick="Excluir()">Excluir</button>
                  </form>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <br><br>
      <?php }
      ; ?>






  </main>
  </div>
  <script src="assets/javascript/script.js"></script>
  <!-- <script src="script.js"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
    integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
    crossorigin="anonymous"></script>
    <script src="Btn-Del.js"></script>
  <!-- <script src="Btn-Del.js"></script> -->
</body>

</html>