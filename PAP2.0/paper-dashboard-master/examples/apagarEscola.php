<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM escolas WHERE escolaId=$id";
mysqli_query($con,$sql);
header("location:escolas.php");