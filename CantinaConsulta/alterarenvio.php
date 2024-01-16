<html>
    <head>
     <meta charset="utf-8">
     <script type="text/javascript"></script>
    </head>
<body>
    <?php

    $id = $_GET['id'];
    $email = $_GET['email'];
    $nome = $_GET['nome'];
    $senha = $_GET['senha'];
    
    require('config.php');

    $sqlupdate = "update usuario set  email ='$email', nome ='$nome', senha ='$senha' where id='$id'";
    
    mysqli_query($conexao, $sqlupdate) or die('Não foi possível alterar');
    echo "<script>alert('Cadastro alterado com sucesso!');
    window.location.href='consulta.php'</script>";
    ?>

</body>
</html>