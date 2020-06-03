<?php
$id=intval($_POST['id']);
$nome=addslashes($_POST['nome']);
$morada=addslashes($_POST['morada']);
$codigoPostal1=addslashes($_POST['cp1']);
$codigoPostal2=addslashes($_POST['cp2']);
$localidade=addslashes($_POST['localidade']);
$codigo=addslashes($_POST['codigo']);
$telefone=addslashes($_POST['telefone']);
$email=addslashes($_POST['email']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");

$sql="UPDATE escolas SET escolaNome='".$nome."', escolaCodigo='".$codigo."', escolaMorada='".$morada."',escolaCodigoPostal1='".$codigoPostal1."',escolaCodigoPostal2='".$codigoPostal2."',escolaLocalidade='".$localidade."',escolaEmail='".$email."',escolaTelefone='".$telefone."' where escolaId=".$id;
mysqli_query($con,$sql);

header("location:escolas.php");
?>