<?php
$con = mysqli_connect("localhost", "root", "", "pap2020formacao");
if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql=("DELETE FROM escolas where escolaId=$id");
    $result=mysqli_query($con,$sql);
}
header("Location: escolas.php");
?>