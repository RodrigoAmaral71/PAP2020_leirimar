<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$formacao=intval($_POST['formacao']);
$sql="SELECT * FROM funcionarios WHERE funcionarioId='".$id."' AND formacaoId='".$formacao."'";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
    echo $dados['funcionarioNome'];

?>