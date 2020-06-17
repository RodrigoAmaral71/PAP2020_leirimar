<?php
$fuid=intval($_POST['fuid']);
$fid=intval($_POST['fid']);
$con=mysqli_connect('localhost', 'root','','pap2020formacao');
$sql="DELETE from formacaoinscritos WHERE formacaoInscritoFuncionarioId=".$fuid." AND formacaoInscritoFormacaoId=".$fid;
mysqli_query($con,$sql);
?>