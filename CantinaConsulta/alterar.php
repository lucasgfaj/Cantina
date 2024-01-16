<html>
    <head>
        <title>Alterar Cadastro</title>
            <meta charset="utf-8"/>
    </head>

<?php

$id=$_GET['id'];

require('config.php');

$sql="SELECT id, nome, email, senha from usuario where id='$id'";

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

    <input name="id" type="hidden" value="<?php echo $row['id']?>">
     Email <input type="text" name="email" value="<?php echo $row['email']?>"><br><br>
     Nome <input type="text" name="nome" value="<?php echo $row['nome']?>"><br><br>
     Senha <input type="text" name="senha" value="<?php echo $row['senha']?>"><br><br>
    <input type="submit" value="ALTERAR" name="btSalvar" onclick="location.href='consulta.php';">
    <input type="button" value="CANCELAR" name="btSair" onclick="location.href='consulta.php';">

</form>

</body>
</html>
