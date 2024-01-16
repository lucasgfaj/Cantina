<?php

if(isset($_POST['submit'])){


    include_once('config.php');

    $nomeproduto= $_POST['nomeproduto'];
    $qtdprod= $_POST['qtdprod'];
    $precoprod= $_POST['precoprod'];


    $result = mysqli_query($conexao, "INSERT INTO produto(nomeproduto,qtdprod,precoprod ) 
    VALUES ('$nomeproduto','$qtdprod','$precoprod')");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cantina_CadastroProduto</title>

    <meta http-equiv="refresh" content="0; URL='cadproduto.html'"/>
</head>
<body>
    <p>
        <a href="cadproduto.html"></a>
    </p>
</body>
</html>