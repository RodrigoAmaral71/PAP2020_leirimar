<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$sql="SELECT * FROM formacoes inner join anolectivos on anoLectivoId = formacaoAnoLectivoId WHERE formacaoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(mysqli_affected_rows($con)==0){
    $sql="SELECT * FROM formacoes WHERE formacaoId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['formacaoNome'];
}
else{
    echo 1;
}

?>