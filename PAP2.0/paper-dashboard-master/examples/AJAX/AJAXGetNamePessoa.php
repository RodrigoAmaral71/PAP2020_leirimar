<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$sql="SELECT * FROM funcionarios inner join formacaoinscritos on funcionarioId = formacaoInscritoFuncionarioId WHERE funcionarioId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(mysqli_affected_rows($con)==0){
    $sql="SELECT * FROM funcionarios WHERE funcionarioId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['funcionarioNome'];
}
else{
    echo 1;
}

?>