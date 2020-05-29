<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM funcionarios where funcionarioId =".$id;
mysqli_query($con,$sql);
header("location:tiposFuncionários.php");