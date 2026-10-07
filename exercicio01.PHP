<?php
//Recebe os dados
$nome = $_GET['nome'];
$cidade = $_GET['cidade'];

    //Saída Formatada
    echo "<h3>Dados recebidos</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cidade:</strong> $cidade</p>";
?>