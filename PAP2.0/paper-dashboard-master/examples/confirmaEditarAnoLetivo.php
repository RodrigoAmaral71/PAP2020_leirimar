<?php
$nome=addslashes($_POST['nome']);
$id=intval($_POST['id']);
$estado=addslashes($_POST['estado']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="UPDATE anolectivos SET anoLectivoNome='".$nome."' where anoLectivoId=".$id;
mysqli_query($con,$sql);
header("location:anosletivos.php");
?>