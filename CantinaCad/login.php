<?php

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{


    include_once('config.php');

    $email= $_POST['email'];
    $senha= $_POST['senha'];


  //print_r('Email:' . $email);
     
      $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

      $result = $conexao->query($sql);

      //print_r($result);

      if(mysqli_num_rows($result) < 1){

        header('Location:login.html');
      }
      else{

       header('Location:loginindex.html');
      }




    }else{

        header('Location: login.php');

    }


//if (isset($entrar)) {

    //$verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    //'$login' AND senha = '$senha'") or die("erro ao selecionar");
      //if (mysql_num_rows($verifica)<=0){
        //echo"<script language='javascript' type='text/javascript'>
        //alert('Login e/ou senha incorretos');window.location
        //.href='login.html';</script>";
        //die();
      //}else{
        //setcookie("login",$login);
        //header("Location:index.php");
      //}
  //}

   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Cantina_Login</title>

    <meta http-equiv="refresh" content="0; URL='/CantinaIndex/index.html'"/>
</head>
<body>
    <p>
        <a href="/CantinaIndex/index.html"></a>
    </p>
</body>
</html>