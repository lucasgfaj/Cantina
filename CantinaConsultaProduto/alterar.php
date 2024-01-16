<html>
    <head>
        <title>Alterar Cadastro</title>
            <meta charset="utf-8"/>
    </head>

<?php

$idproduto=$_GET['idproduto'];

require('config.php');

$sql="SELECT idproduto, nomeproduto, precoprod, qtdprod from produto where idproduto='$idproduto'";

$result= mysqli_query($conexao,$sql);

if(!$result){

    die(mysqli_error());

}

$row=mysqli_fetch_assoc($result);

?>

<html>
    <head>
        <meta charset="uft-8">      
    </head>

<body>

<form action="alterarenvio.php" method="GET">

    <input name="idproduto" type="hidden" value="<?php echo $row['idproduto']?>">
     Nome <input type="text" name="nomeproduto" value="<?php echo $row['nomeproduto']?>"><br><br>
     Preço <input type="text" name="precoprod" value="<?php echo $row['precoprod']?>"><br><br>
     Quantidade <input type="text" name="qtdprod" value="<?php echo $row['qtdprod']?>"><br><br>
    <input type="submit" value="ALTERAR" name="btSalvar" onclick="location.href='consulta.php';">
    <input type="button" value="CANCELAR" name="btSair" onclick="location.href='consulta.php';">

</form>

</body>
</html>
