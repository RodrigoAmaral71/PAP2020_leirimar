<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<?php
include_once("include/body.inc.php");
drawTop(ADMIN_FORMACOES);
?>

    <script>
        function confirma(id) {
            // AJAX para ir buscar o nome da formacao
            $.ajax({
                url:"AJAX/AJAXGetNameFormacao.php",
                type:"post",
                data:{
                    id:id
                },
                success:function (result) {

                    if(confirm('De certeza que quer eliminar a formação "'+ result +'"?')){
                        window.location="apagarFormacao.php?id="+id;
                    }


                }

            })




        }
    </script>
  <div class="wrapper ">

    <div class="main-panel">

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> FORMAÇÕES</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>id</th>
                      <th>Nome</th>
                      <th>Ano Letivo</th>
                      <th>Horas</th>
                      <th>&nbsp</th>
                      <th>Data de Início</th>
                      <th>Data de Fim</th>
                      <th>&nbsp</th>
                      <th>Créditos</th>
                      <th>Estado</th>
                      <th><center><a class="btn-sm btn-success" href="adicionarFormacao.php"><i class="fa fa-plus"></i></a></center></th>
                    </thead>
                      <?php
                      $con=mysqli_connect("localhost","root","","pap2020formacao");
                      $sql=("SELECT * FROM formacoes");
                      $result=mysqli_query($con,$sql);
                      while($dados=mysqli_fetch_array($result)){
                      ?>
                    <tbody>
                      <td><?php echo $dados['formacaoId']; ?></td>
                      <td><?php echo $dados['formacaoNome']; ?></td>
                      <td><?php echo $dados['formacaoAnoLectivoId']; ?></td>
                      <td><?php echo $dados['formacaoHoras']; ?></td>
                      <td>&nbsp</td>
                      <td><?php echo $dados['formacaoDataInicio']; ?></td>
                      <td><?php echo $dados['formacaoDataFim']; ?></td>
                      <th>&nbsp</th>
                      <td><?php echo $dados['formacaoCreditos']; ?></td>
                      <td><?php echo $dados['formacaoEstado']; ?></td>
                      <td><center><a id="edit" name="edit" class="btn-sm btn-info" href="editarFormacao.php?id=<?php echo $dados['formacaoId'] ?>"><i class="fas fa-pencil-alt"></a></i>
                       <a onclick="confirma(<?php echo $dados['formacaoId'];?>);" id="delete" name="delete" class="btn-sm btn-danger" href="#"><i class='fas fa-eraser'></a></i></center></td>
                    </tbody>
                      <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
<?php
drawBottom();
?>