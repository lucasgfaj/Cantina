<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8"/>
<script type="text/javascript"></script>
<title> Consulta Usuarios </title>
</head>
<body>
<h1>Consulta Usuarios </h1>

<?php
require ('config.php');
//variavel pesquisa 
$result = mysqli_query($conexao,"SELECT * FROM usuario");

if (!$result){

    echo "NÃO FORAM ENCONTRADAS USUARIOS CADASTROS.";
exit;
}
echo "<table border=1><tr><td width='25%'><strong>CÓDIGO</strong></td><td
 width='50%' colspan=4><strong>INFORMAÇÕES</strong></td></tr>";

 $linha=1;
while($row = mysqli_fetch_assoc($result)){
 echo "<tr><td>" .$row['id']."</td><td>". $row['nome'] . "</td><td>" . $row['email'] . "</td><td>" . $row['senha'] . "</td><td>" .
 "<a href='alterar.php?id=".$row['id']."'><img src='alterar.png'title='Alterar Usuarios' width=40px height=40px>
 </a>"."</td></tr>";
 $linha++;
}

echo"</table>";
mysqli_free_result($result);
?>
</body>
</html>