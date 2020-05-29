<?php

$nome=addslashes($_POST['nome']);
$formacao=addslashes($_POST['formacao']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="INSERT INTO formacaoinscritos VALUES(0,'".$nome."','".$formacao."',formando,0,0)";
mysqli_query($con,$sql);

header('location: formandos.php');
?>