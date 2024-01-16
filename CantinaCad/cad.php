<?php

if(isset($_POST['submit'])){


    include_once('config.php');

    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO usuario(nome,email,senha ) 
    VALUES ('$nome','$email','$senha')");
}

///$logarray = $array['login'];

//if($login == "" || $login == null){
  //echo"<script language='javascript' type='text/javascript'>
  //alert('O campo login deve ser preenchido');window.location.href='
  //cadastro.html';</script>";

  //}else{
    //if($logarray == $login){

      //echo"<script language='javascript' type='text/javascript'>
      //alert('Esse login já existe');window.location.href='
      //cadastro.html';</script>";
      //die();

    //}else{
      //$query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
      //$insert = mysql_query($query,$connect);

      //if($insert){
        //echo"<script language='javascript' type='text/javascript'>
        //alert('Usuário cadastrado com sucesso!');window.location.
        //href='login.html'</script>";
      //}else{
        //echo"<script language='javascript' type='text/javascript'>
        //alert('Não foi possível cadastrar esse usuário');window.location
        //.href='cadastro.html'</script>";
     // }
   // }
 // }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cantina_Cadastro</title>

    <meta http-equiv="refresh" content="0; URL='login.html'"/>
</head>
<body>
    <p>
        <a href="login.html"></a>
    </p>
</body>
</html>