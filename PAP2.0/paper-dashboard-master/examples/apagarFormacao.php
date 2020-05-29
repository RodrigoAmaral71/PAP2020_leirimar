<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM formacoes WHERE formacaoId=$id";
mysqli_query($con,$sql);
header("location:formacoes.php");