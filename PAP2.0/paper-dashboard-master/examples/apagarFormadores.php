<?php
$id=intval($_GET['id']);
$con=mysqli_connect("localhost", "root", "", "pap2020formacao");
$sql="DELETE FROM funcionarios INNER JOIN formacaoinscritos ON funcionarioId=formacaoInscritoFuncionarioId WHERE funcionarioId=$id AND formacaoInscritoPapel='formador'";
mysqli_query($con,$sql);
header("location:formadores.php");