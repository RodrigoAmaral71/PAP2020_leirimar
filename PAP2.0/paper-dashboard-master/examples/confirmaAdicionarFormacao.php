<?php
$nome=addslashes($_POST['nome']);
$descricao=addslashes($_POST['descricao']);
$dataInicio=addslashes($_POST['dataInicio']);
$dataFim=addslashes($_POST['dataFim']);
$horas=addslashes($_POST['horas']);
$creditos=addslashes($_POST['creditos']);
$local=addslashes($_POST['local']);
$estado=addslashes($_POST['estado']);
$publico=addslashes($_POST['publico']);
$ano=intval($_POST['anoletivo']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
echo $sql="INSERT INTO formacoes VALUES (0, '".$nome."','".$descricao."','".$dataInicio."','".$dataFim."','".$horas."','".$creditos."','".$local."','".$estado."','".$publico."',".$ano.")";
mysqli_query($con,$sql);

header('location: formacoes.php');
?>