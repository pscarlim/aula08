<?php
//Recebe os dados
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];
$resultado = $numero1 + $numero2;
    //Saída Formatada
    echo "<p><strong>Resultado:</strong> $resultado</p>";

    echo "<h4>Debug com var_dump:</h4>";
    var_dump($_GET);
?>