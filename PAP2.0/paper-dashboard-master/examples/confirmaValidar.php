<?php
$funcionario=$_POST['funcionario'];
$formacao=$_POST['formacao'];

$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="INSERT INTO formacaoinscritos VALUES ('".$funcionario."','".$formacao."', 'formando', 0, '', 'pendente')";
mysqli_query($con,$sql);

header('location: dashboard.php');
?>