<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<script type="text/javascript"></script>
<title> Consulta Produto </title>
</head>
<body>
<h1>Consulta Produto </h1>

<?php
require ('config.php');
//variavel pesquisa 
$result = mysqli_query($conexao,"SELECT * FROM produto");

if (!$result){

    echo "NÃO FORAM ENCONTRADAS USUARIOS CADASTROS.";
exit;
}
echo "<table border=1><tr><td width='25%'><strong>CÓDIGO</strong></td><td
 width='50%' colspan=4><strong>INFORMAÇÕES</strong></td></tr>";

 $linha=1;
while($row = mysqli_fetch_assoc($result)){
 echo "<tr><td>" .$row['idproduto']."</td><td>". $row['nomeproduto'] . "</td><td>" . $row['precoprod'] . "</td><td>" . $row['qtdprod'] . "</td><td>" .
 "<a href='alterar.php?idproduto=".$row['idproduto']."'><img src='alterar.png'title='Alterar Produto' width=40px height=40px>
 </a>"."</td></tr>";
 $linha++;
}

echo"</table>";
mysqli_free_result($result);
?>
</body>
</html>