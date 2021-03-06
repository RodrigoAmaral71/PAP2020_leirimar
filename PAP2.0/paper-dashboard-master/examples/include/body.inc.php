<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DBASE) or die ('Não foi possível conectar');
function drawTop($menu=VOID,$erro=false){
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            BACKOFFICE
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="../assets/demo/demo.css" rel="stylesheet" />

        <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="../assets/demo/demo.js"></script>
        <style>
            .dashboard{
                font-size: 12px;!important;
            }
        </style>
        <script>
            function confirmaInscrito(id,formacao) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url:"AJAX/AJAXGetNameFuncionario.php",
                    type:"post",
                    data:{
                        id:id,
                        formacao:formacao,
                        delete:0
                    },
                    success:function (result) {
                        if(confirm(result))
                        {
                            $.ajax({
                                url: "AJAX/AJAXConfirmaInscricao.php",
                                type: "post",
                                data: {
                                    fuid: id,
                                    fid: formacao
                                },
                                success: function (result) {

                                    alert('Inscrição efetuada com sucesso');
                                    location.reload();
                                }
                            })
                        }
                    }

                });
            }
            function cancelaInscrito(id,formacao) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url:"AJAX/AJAXGetNameFuncionario.php",
                    type:"post",
                    data:{
                        id:id,
                        formacao:formacao,
                        delete:1
                    },
                    success:function (result) {
                        if(confirm(result))
                        {
                            $.ajax({
                                url: "AJAX/AJAXEliminaInscricao.php",
                                type: "post",
                                data: {
                                    fuid: id,
                                    fid: formacao
                                },
                                success: function (result) {

                                    alert('Inscrição eliminada com sucesso');
                                    location.reload();
                                }
                            })
                        }
                    }

                });
            }
            function changeAnoLectivo(id) {
                $.ajax({
                    url:"AJAX/AJAXChangeAnoLectivo.php",
                    type: "post",
                    data:{
                        id:id
                    },
                    success:function (result) {
                        location.reload();
                    }
                })
            }

            <?php
            if($menu==ADMIN_ALETIVOS){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url: "AJAX/AJAXGetNameAnoLetivo.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function (result) {
                        resNum = parseInt(result);
                        if (resNum == 1)
                            alert('Impossível eliminar este ano letivo porque tem registos relacionados');
                        else if (confirm('De certeza que quer eliminar o ano letivo "' + result + '"?'))
                            window.location = "apagarAnoLetivo.php?id=" + id;
                    }

                });
            }
            <?php
            }

            if($menu==ADMIN_ESCOLAS){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url:"AJAX/AJAXGetNameEscola.php",
                    type:"post",
                    data:{
                        id:id
                    },
                    success:function (result) {
                        resNum=parseInt(result);
                        if(resNum==1)
                            alert('Impossível eliminar esta escola porque tem registos relacionados');

                        else if(confirm('De certeza que quer eliminar a escola "'+ result +'"?'))
                            window.location="apagarEscola.php?id="+id;
                    }

                });
            }
            <?php
            }

            if($menu==ADMIN_FORMACOES){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url:"AJAX/AJAXGetNameFormacao.php",
                    type:"post",
                    data:{
                        id:id
                    },
                    success:function (result) {
                        resNum=parseInt(result);
                        if(resNum==1)
                            alert('Impossível eliminar esta formação porque tem registos relacionados');

                        else if(confirm('De certeza que quer eliminar a formação "'+ result +'"?'))
                            window.location="apagarFormacao.php?id="+id;
                    }

                });
            }
            <?php
            }

            if($menu==ADMIN_PESSOAS){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url:"AJAX/AJAXGetNamePessoa.php",
                    type:"post",
                    data:{
                        id:id
                    },
                    success:function (result) {
                        resNum=parseInt(result);
                        if(resNum==1)
                            alert('Impossível eliminar esta pessoa porque tem registos relacionados');
                        else if(confirm('De certeza que quer eliminar "'+ result +'" da Base de Dados?'))
                            window.location="apagarPessoa.php?id="+id;
                    }

                });
            }

            <?php
            }

            if($menu==ADMIN_FORMADORES){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url: "AJAX/AJAXGetNameFuncionario.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function (result) {
                        if (resNum == 1)
                            alert('Impossível eliminar este formador porque tem registos relacionados');
                        else if (confirm('De certeza que quer eliminar o formador "' + result + '"?'))
                            window.location = "apagarFormador.php?id=" + id;
                    }

                });
            }
            <?php
            }

            if($menu==ADMIN_TIPOS){
            ?>
            function confirma(id) {
                var resNum;
                // AJAX para ir buscar o nome da formacao
                $.ajax({
                    url: "AJAX/AJAXGetNameTipoPerfil.php",
                    type: "post",
                    data: {
                        id: id
                    },
                    success: function (result) {
                        resNum = parseInt(result);
                        if (resNum == 1)
                            alert('Impossível eliminar este tipo de perfil porque tem registos relacionados');
                        else if (confirm('De certeza que quer eliminar "' + result + '" dos tipos de perfil?'))
                            window.location = "apagarTipoPerfil.php?id=" + id;
                    }

                });
            }

            <?php
            }

            ?>
            function erro(err){
                if(err) {
                    alert('Email já existente na Base de dados');
                }

            }
        </script>


    </head>
    <body onload="erro(<?php echo $erro?>)">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a  class="simple-text logo-mini">
                <div class="logo-image-small">
                    <img src="../assets/img/logo-small.png">
                </div>
            </a>
            <a class="simple-text logo-normal">
                BACKOFFICE
            </a>
            <h6>
                <select onchange="changeAnoLectivo(this.value)" id="anoLectivo" name="anoLectivo">
                    <?php
                    $con=mysqli_connect("localhost","root","","pap2020formacao");
                    $sql="SELECT * FROM anolectivos order by anoLectivoNome desc";
                    $result=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($result)){
                        ?>
                        <option value="<?php echo $dados['anoLectivoId'];?>"
                            <?php if($dados['anoLectivoEstado']=='activo') echo " selected ";?>
                        > <?php echo $dados['anoLectivoNome']; ?></option>
                    <?php } ?>
                </select>
            </h6>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li<?php if($menu==VOID) echo " class=\"active \"";?>>
                    <a href="./dashboard.php">
                        <i class="nc-icon nc-bank"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <hr>
                </li>
                <li<?php if($menu==ADMIN_FORMACOES) echo " class=\"active \"";?>>
                    <a href="formacoes.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Formações</p>
                    </a>
                </li>
                <li<?php if($menu==ADMIN_FORMADORES) echo " class=\"active \"";?>>
                    <a href="formadores.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Formadores</p>
                    </a>
                </li>
                <li<?php if($menu==ADMIN_FORMANDOS) echo " class=\"active \"";?>>
                    <a href="formandos.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Formandos</p>
                    </a>
                </li>

                <li<?php if($menu==ADMIN_ESCOLAS) echo " class=\"active \"";?>>
                    <a href="escolas.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Escolas</p>
                    </a>
                </li>
                <li>
                    <hr>
                </li>
                <li<?php if($menu==ADMIN_ALETIVOS) echo " class=\"active \"";?>>
                    <a href="anosLetivos.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Anos Letivos</p>
                    </a>
                </li>
                <li<?php if($menu==ADMIN_TIPOS) echo " class=\"active \"";?>>
                    <a href="tiposPerfis.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Perfis</p>
                    </a>
                </li>
                <li<?php if($menu==ADMIN_PESSOAS) echo " class=\"active \"";?>>
                    <a href="pessoas.php">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Pessoas</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="nc-icon nc-zoom-split"></i>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav> -->
    <?php
}

function drawBottom(){
    ?>


    <!--Start second row of columns-->

    <!-- /container -->
    <div class="modal fade" tabindex="-1" role="dialog" id="mensagem">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" >
                    <p id="modalMensagem"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}
?>