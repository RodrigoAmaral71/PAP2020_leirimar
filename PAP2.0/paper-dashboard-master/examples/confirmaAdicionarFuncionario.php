<?php
    if(isset($_POST['submit'])){
       $nome= $_POST['escolaNome'];
       $morada= $_POST['escolaMorada'];
       $codigoPostal1= $_POST['escolaCodigoPostal1'];
       $codigoPostal2= $_POST['escolaCodigoPostal2'];
       $localidade= $_POST['escolaLocalidade'];
       $email= $_POST['escolaEmail'];
       $telefone= $_POST['escolaTelefone'];
       $codigo= $_POST['escolaCodigo'];
    }

    $con=mysqli_connect('localhost', 'root','','pap2020formacao');
    $sql="INSERT INTO escolas VALUES (0, '".$nome."','".$codigo."','".$morada."','".$codigoPostal1."','".$codigoPostal2."','".$localidade."','".$email."','".$telefone."')";
    $result=mysqli_query($con,$sql);


header('location: escolas.php');
?>