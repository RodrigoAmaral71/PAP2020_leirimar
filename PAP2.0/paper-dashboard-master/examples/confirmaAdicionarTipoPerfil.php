<?php
$nome=addslashes($_POST['nome']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="INSERT INTO funcionariotipos (funcionarioTipoNome) VALUES('".$nome."')";
mysqli_query($con,$sql);

header('location: tiposPerfis.php');
?>