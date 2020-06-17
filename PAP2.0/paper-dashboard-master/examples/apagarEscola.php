<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM escolas WHERE escolaId=$id";
echo mysqli_query($con,$sql);

echo mysqli_error($con);
//header("location:escolas.php");