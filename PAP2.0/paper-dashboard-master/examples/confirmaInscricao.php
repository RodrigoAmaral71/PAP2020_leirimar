<?php
$id=intval($_GET['id']);
$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="UPDATE formacaoinscritos SET formacaoInscritoEstado='inscrito' WHERE formacaoInscritoFuncionarioId=$id";
echo mysqli_query($con,$sql);

header('location: dashboard.php');
?>