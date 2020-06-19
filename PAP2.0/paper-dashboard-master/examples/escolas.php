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
drawTop(ADMIN_ESCOLAS);
?>


  <div class="wrapper ">

    <div class="main-panel">

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> ESCOLAS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>id</th>
                      <th>Nome</th>
                      <th>Telefone</th>
                      <th>Email</th>
                      <th>Localidade</th>
                      <th>Código Postal</th>
                      <th>Código</th>
                      <th><center><a title="Adicionar" class="btn-sm btn-success" href="adicionarEscola.php"><i class="fa fa-plus"></i></a></center></th>
                    </thead>

                    <?php
                    $sql="SELECT * FROM escolas";
                    $result=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($result)){;
                    ?>
                    <tbody>
                      <td><?php echo $dados['escolaId']; ?></td>
                      <td><?php echo $dados['escolaNome']; ?></td>
                      <td><?php echo $dados['escolaTelefone']; ?></td>
                      <td><?php echo $dados['escolaEmail']; ?></td>
                      <td><?php echo $dados['escolaLocalidade']; ?></td>
                      <td><?php echo $dados['escolaCodigoPostal1']; ?> - <?php echo $dados['escolaCodigoPostal2']; ?></td>
                      <td><?php echo $dados['escolaCodigo']; ?></td>
                      <td><center><a title="Editar" class="btn-sm btn-info" id="editar" name="editar" href="editarEscola.php?id=<?php echo $dados['escolaId'];?>"><i class="fas fa-pencil-alt"></a></i>
                       <a title="Eliminar" onclick="confirma(<?php echo $dados['escolaId'];?>);" class="btn-sm btn-danger" id="delete" name="delete" href="#"><i class='fas fa-eraser'></i></a></center></td>
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