<?php
include_once("../include/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE);
$id=intval($_POST['id']);
$sql="SELECT * FROM escolas inner join funcionarioEscolas on escolaId = funcionarioEscolasEscolaId  WHERE escolaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
if(mysqli_affected_rows($con)==0){
    $sql="SELECT * FROM escolas WHERE escolaId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    echo $dados['escolaNome'];
}
else{
    echo 1;
}

?>