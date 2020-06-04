<?php
$id=intval($_POST['id']);
include_once ("../include/body.inc.php");
$sql="Update anolectivos set anoLectivoEstado='inactivo'";
mysqli_query($con,$sql);
$sql="Update anolectivos set anoLectivoEstado='activo' where anoLectivoId=".$id;
mysqli_query($con,$sql);
?>