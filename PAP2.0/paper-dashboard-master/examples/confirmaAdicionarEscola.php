<?php
$nome= addslashes($_POST['nome']);
$morada= addslashes($_POST['morada']);
$codigoPostal1= addslashes($_POST['cp1']);
$codigoPostal2= addslashes($_POST['cp2']);
$localidade= addslashes($_POST['localidade']);
$email= addslashes($_POST['email']);
$telefone= addslashes($_POST['telefone']);
$codigo= addslashes($_POST['codigo']);

$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="INSERT INTO escolas VALUES (0, '".$nome."','".$codigo."','".$morada."','".$codigoPostal1."','".$codigoPostal2."','".$localidade."','".$email."','".$telefone."')";
mysqli_query($con,$sql);


header('location: escolas.php');
?>