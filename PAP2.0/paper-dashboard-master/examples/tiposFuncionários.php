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
drawTop(ADMIN_FUNCIONARIOS);
?>


  <div class="wrapper ">

    <div class="main-panel">

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                    <h4 class="card-title">INSCRITOS</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Grupo Disciplinar</th>
                        <th>Código Postal</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>NIF</th>
                        <th><center><a class="btn-sm btn-success" href="adicionarFuncionario.php"><i class="fa fa-plus"></i></a></center></th>
                    </tr>
                    </thead>
                      <?php
                          $sql=("SELECT * FROM funcionarios INNER JOIN funcionariotipos ON funcionarioFuncionarioTipoId=funcionarioTipoId ORDER BY funcionarioId ASC");
                          $result=mysqli_query($con,$sql);
                          while($dados=mysqli_fetch_array($result)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo $dados['funcionarioId']; ?></td>
                          <td><?php echo $dados['funcionarioNome']; ?></td>
                          <td><?php echo $dados['funcionarioTipoNome']; ?></td>
                          <td><?php echo $dados['funcionarioCodigoPostal1']; ?> - <?php echo $dados['funcionarioCodigoPostal2']; ?></td>
                          <td><?php echo $dados['funcionarioTelefone']; ?></td>
                          <td><?php echo $dados['funcionarioEmail']; ?></td>
                          <td><?php echo $dados['funcionarioNIF']; ?></td>
                          <td><center><a class="btn-sm" href="historico.php?id=<?php echo $dados['funcionarioId'];?>"><i class="fa fa-history"></a></i>
                           <a class="btn-sm btn-info" href="editarFuncionario.php?id=<?php echo $dados['funcionarioId'];?>"><i class="fas fa-pencil-alt"></a></i>
                           <a onclick="confirma(<?php echo $dados['funcionarioId'];?>);" class="btn-sm btn-danger" id="delete" name="delete" href="#"><i class='fas fa-eraser'></a></i></center></td>
                          <?php } ?>
                        </tr>
                    </tbody>
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