<html>
    <head>
     <meta charset="utf-8">
     <script type="text/javascript"></script>
    </head>
<body>
    <?php

    $idproduto = $_GET['idproduto'];
    $nomeproduto = $_GET['nomeproduto'];
    $qtdprod = $_GET['qtdprod'];
    $precoprod = $_GET['precoprod'];
    
    require('config.php');

    $sqlupdate = "update produto set  nomeproduto ='$nomeproduto', qtdprod ='$qtdprod', precoprod ='$precoprod' where idproduto='$idproduto'";
    
    mysqli_query($conexao, $sqlupdate) or die('Não foi possível alterar');
    echo "<script>alert('Cadastro alterado com sucesso!');
    window.location.href='consulta.php'</script>";
    ?>

</body>
</html>