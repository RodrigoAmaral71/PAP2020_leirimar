<?php
$fuid=intval($_POST['fuid']);
$fid=intval($_POST['fid']);
$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="UPDATE formacaoinscritos SET formacaoInscritoEstado='inscrito' WHERE formacaoInscritoFuncionarioId=".$fuid." AND formacaoInscritoFormacaoId=".$fid;
mysqli_query($con,$sql);
?>