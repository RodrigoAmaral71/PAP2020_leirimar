<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM formacoes WHERE formacaoId=$id";
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)>0){

}
header("location:formacoes.php");