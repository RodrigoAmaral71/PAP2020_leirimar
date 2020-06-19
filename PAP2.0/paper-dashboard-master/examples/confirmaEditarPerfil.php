<?php
$nome=addslashes($_POST['nome']);
$id=intval($_POST['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="UPDATE funcionariotipos SET funcionarioTipoNome='".$nome."' where funcionarioTipoId=".$id;
mysqli_query($con,$sql);
header("location:tiposPerfis.php");
?>