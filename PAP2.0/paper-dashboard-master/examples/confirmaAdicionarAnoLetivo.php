<?php
$nome=addslashes($_POST['nome']);
$estado=addslashes($_POST['estado']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="INSERT INTO anolectivos VALUES(0,'".$nome."','".$estado."')";
mysqli_query($con,$sql);

header('location: anosLetivos.php');
?>