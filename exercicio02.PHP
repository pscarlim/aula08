<?php
//Recebe os dados
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

    //Saída Formatada
    echo "<h3>Dados recebidos</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
   
    if ($cidade == "Curitiba") {
    echo "<p>Curitibano!</p>";
    }
?>