<?php
$nome=addslashes($_POST['nome']);
$id=intval($_POST['id']);
$descricao=addslashes($_POST['descricao']);
$dataInicio=addslashes($_POST['dataInicio']);
$dataFim=addslashes($_POST['dataFim']);
$horas=addslashes($_POST['horas']);
$creditos=addslashes($_POST['creditos']);
$local=addslashes($_POST['local']);
$estado=addslashes($_POST['estado']);
$publico=addslashes($_POST['publico']);
$ano=addslashes($_POST['anoletivo']);

$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="UPDATE formacoes SET formacaoNome='".$nome."', formacaoDescricao='".$descricao."', formacaoDataInicio='".$dataInicio."', formacaoDataFim='".$dataFim."', formacaoHoras='".$horas."', formacaoCreditos='".$creditos."', formacaoLocal='".$local."', formacaoEstado='".$estado."', formacaoPublicoAlvo='".$publico."', formacaoAnoLectivoId='".$ano."' where formacaoId=".$id;
mysqli_query($con,$sql);

header('location: formacoes.php');
?>