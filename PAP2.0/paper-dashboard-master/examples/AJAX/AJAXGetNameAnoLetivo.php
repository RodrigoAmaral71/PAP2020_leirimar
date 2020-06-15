<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$sql="SELECT * FROM anolectivos inner join formacoes on anoLectivoId = formacaoAnoLectivoId  WHERE anoLectivoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(mysqli_affected_rows($con)==0){
    $sql="SELECT * FROM anolectivos WHERE anoLectivoId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['anoLectivoNome'];
}
else{
    echo 1;
}

?>