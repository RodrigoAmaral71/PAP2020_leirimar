<?php
$nome= addslashes($_POST['nome']);
$email= addslashes($_POST['email']);
$telefone= addslashes($_POST['telefone']);
$morada= addslashes($_POST['morada']);
$codigoPostal1= addslashes($_POST['cp1']);
$codigoPostal2= addslashes($_POST['cp2']);
$localidade= addslashes($_POST['localidade']);
$nif= addslashes($_POST['nif']);
$iban= addslashes($_POST['iban']);
$escalao= addslashes($_POST['escalao']);
$grupoDisciplinar= addslashes($_POST['gd']);
$tipo= addslashes($_POST['tipo']);

$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="INSERT INTO funcionarios VALUES (0, '".$nome."','".$email."','".$telefone."','".$morada."','".$codigoPostal1."','".$codigoPostal2."','".$localidade."','".$nif."','".$iban."','".$escalao."','".$grupoDisciplinar."','".$tipo."')";
mysqli_query($con,$sql);

header('location: tiposFuncionários.php');
?>