<?php
$fuid=intval($_GET['fuid']);
$fid=intval($_GET['fid']);
$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="UPDATE formacaoinscritos SET formacaoInscritoEstado='inscrito' WHERE formacaoInscritoFuncionarioId=".$fuid." AND formacaoInscritoFormacaoId=".$fid;
mysqli_query($con,$sql);
header('location: dashboard.php');
?>