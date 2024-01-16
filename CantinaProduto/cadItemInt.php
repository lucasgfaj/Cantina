<?php
session_start();
ob_start();
if($_SESSION['cod_u'] == null){
  header('location:acesso.php');
  //die("Você precisa estar logado para acessar este arquivo!");
}
include "topo.php";
?>
   <h1>
   <?php 
    $cod_u = $_SESSION['cod_u'];
    $nome_u = $_SESSION['nome_u'];
     echo "codigo: $cod_u";
     echo "Nome: $nome_u";
   ?>
   </h1>
    <form action="cadItem.php" method="post" enctype="multipart/form-data">
      nome item <input type="text" name="nome"><br>
      preço do item <input type="text" name="preco"><br>
      categoria do item
      <select name="cat">
        <option>Selecione uma categoria</option>
<?php
$con = mysqli_connect('localhost','id16815880_banco','SHe-=4%f>?ghr7<T','id16815880_bancodados');
    $sql = "select * from categorias order by nome_cat asc";
    $exe = mysqli_query($con, $sql);
    while($res = mysqli_fetch_object($exe)){
      $cod_cat = $res->cod_cat;
      $nome_cat = $res->nome_cat;
      echo"<option value='$cod_cat'>$nome_cat</option>";
    }
    $fechar = mysqli_close($con);
?>
      </select><br>Enviar esse arquivo: <input name="arquivo" type="file" /><br>
      <input type="submit" value="cadastrar">
    </form>
  </body>
</html>
