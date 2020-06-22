<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM funcionariotipos where funcionarioTipoId=".$id;
$result=mysqli_query($con,$sql);

header("location:tiposPerfis.php");