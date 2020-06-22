<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$sql="SELECT * FROM funcionariotipos inner join funcionarios on funcionarioTipoId = funcionarioFuncionarioTipoId  WHERE funcionarioTipoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(mysqli_affected_rows($con)==0){
    $sql="SELECT * FROM funcionariotipos WHERE funcionarioTipoId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['funcionarioTipoNome'];
}
else{
    echo 1;
}

?>