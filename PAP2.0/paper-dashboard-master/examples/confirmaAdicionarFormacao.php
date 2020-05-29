<?php
$nome=addslashes($_POST['nome']);
$horas=addslashes($_POST['horas']);
$creditos=addslashes($_POST['creditos']);
$formador=addslashes($_POST['formador']);
$dataInicio=addslashes($_POST['dataInicio']);
$dataFim=addslashes($_POST['dataFim']);
$local=addslashes($_POST['local']);
$estado=addslashes($_POST['estado']);
$publico=addslashes($_POST['publico']);
$descricao=addslashes($_POST['descricao']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="INSERT INTO formacoes VALUES(0,'".$nome."','".$descricao."','".$dataInicio."','".$dataFim."','".$horas."','".$creditos."','".$local."','".$estado."','".$publico."','".$formador."')";
mysqli_query($con,$sql);

header('location: formacoes.php');
?>