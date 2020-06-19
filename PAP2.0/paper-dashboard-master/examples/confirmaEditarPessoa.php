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
$gDisciplinar= addslashes($_POST['gDisciplinar']);
$tipo= addslashes($_POST['tipo']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="UPDATE funcionarios SET funcionarioNome='".$nome."', funcionarioEmail='".$email."', funcionarioTelefone='".$telefone."', funcionarioMorada='".$morada."', funcionarioCodigoPostal1='".$codigoPostal1."',funcionarioCodigoPostal2='".$codigoPostal2."',funcionarioLocalidade='".$localidade."',funcionarioNIF='".$nif."', funcionarioIBAN='".$iban."', funcionarioEscalao='".$escalao."', funcionariogrupoDisciplinar='".$gDisciplinar."', funcionarioFuncionarioTipoId='".$tipo."' where funcionarioId=".$id;
mysqli_query($con,$sql);

header("location:pessoas.php");
?>