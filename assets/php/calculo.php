<?php
$data_inicial = '2013-08-01';
$data_final = '2013-08-16';

// Calcula a diferença em segundos entre as datas
$diferenca = strtotime($data_final) - strtotime($data_inicial);

//Calcula a diferença em dias
$dias = floor($diferenca / (60 * 60 * 24));

echo "A diferença é de $dias dias entre as datas";
?>

<!-- EU UTILIZEI ESSE ARQUIVO PARA UM 
TESTE ANTES DE COLOCAR NA APLICAÇÃO FINAL
 E TAMBÉM PERMANCI PARA QUE EU POSSO 
 TESTAR OUTRAS COISAS SE FOR NECESSARIO -->