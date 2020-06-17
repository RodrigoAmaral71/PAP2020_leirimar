<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$formacao=intval($_POST['formacao']);
if($_POST['delete']==true)
    $acao="eliminação";
else
    $acao="inscrição";

$sql="SELECT * FROM funcionarios inner join formacaoinscritos on funcionarioId = formacaoInscritoFuncionarioId ";
$sql.=" inner join formacoes on formacaoId = formacaoInscritoFormacaoId  ";
$sql.=" WHERE funcionarioId='".$id."' AND formacaoId='".$formacao."'";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
echo "Confirma a ".$acao." do ".$dados['funcionarioNome']." na formação ".$dados['formacaoNome']."?";
?>