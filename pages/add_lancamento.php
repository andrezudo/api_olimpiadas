<?php

session_start();

include_once("../backend/conexao.php");

$competicao = $_SESSION['competicao'];

$cont = 1;

//selecionar a competição criada
$sql_com = "SELECT `id` FROM `ta_lan` WHERE `competicao` LIKE '$competicao'";
$salvar_com = mysqli_query($conn, $sql_com);
while ($seleciona_com = mysqli_fetch_array($salvar_com)) {
    $id_com = $seleciona_com['id'];
}





//seleciona os atletas da competição selecionada
$sql_atletas = "SELECT * FROM `ta_atletas_lan` WHERE `id_competicao` = $id_com ORDER BY `total` DESC";
$salvar_atletas = mysqli_query($conn, $sql_atletas);






?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SysCOB - Lançamento</title>
  <link rel="stylesheet" href="./../node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="./../node_modules/bootstrap/compiler/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">SysCOB</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </ul>
      </div>
    </div>

  </nav>

  <?php
  if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  ?>

  <div class="container">
    <div class="row">

      <div class="col-12 text-center my-3">
        <h2>Criando uma competição de dardo</h2>
        <h3>Nome da competição: <?php echo $_SESSION['competicao'] ?></h3>
      </div>

      <div class="pr-3">
        <a href="#" class="btn btn-success" data-toggle="modal" data-target="#adicionarAtleta">Adicionar competidor</a>
        <a href="lista_vencedor_lan.php" class="btn btn-danger">Encerrar Competição</a>
      </div>

      <div class="col-12 text-center my-5">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col" colspan="6" class="card-header">Rancking atualizado</th>
            </tr>
          </thead>
          <thead>
            <tr>
              <th scope="col">Posição</th>
              <th scope="col">Atleta</th>
              <th scope="col">1º lanca.</th>
              <th scope="col">2º lanca.</th>
              <th scope="col">3º lanca.</th>
              <th scope="col">Melhor lançamento</th>
            </tr>
          </thead>
          <tbody>
          <?php while ($exibir_atletas = mysqli_fetch_array($salvar_atletas)) { ?>
            <tr>
              <th scope="row"><?php echo $cont ++; ?>º</th>
              <td><?php echo $exibir_atletas['nome']; ?></td>
              <td><?php echo $exibir_atletas['lan1']; ?></td>
              <td><?php echo $exibir_atletas['lan2']; ?></td>
              <td><?php echo $exibir_atletas['lan3']; ?></td>
              <td><?php echo $exibir_atletas['total']; ?></td>


              

            </tr>
          <?php } ?>  
          </tbody>
        </table>
      </div>

      <!--Modal adicionar Atleta-->
      <div class="modal fade" id="adicionarAtleta" tabindex="1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Adicionar atleta</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>

            </div>

            <div class="modal-body">
              <form method="POST" action="../backend/add_atleta_lan.php">
                <div class="form-group">
                  <label>Atleta</label>
                  <input type="text" name="nome" class="form-control" placeholder="Nome do Atleta" required="required">
                </div>
                <div class="form-group">
                  <label>1º lancamento</label>
                  <input type="float" name="lan1" class="form-control" placeholder="Primeiro lançamento" required="required">
                </div>
                <div class="form-group">
                  <label>2º lancamento</label>
                  <input type="float" name="lan2" class="form-control" placeholder="Segundo lançamento" required="required">
                </div>
                <div class="form-group">
                  <label>3º lancamento</label>
                  <input type="float" name="lan3" class="form-control" placeholder="Terceiro lançamento" required="required">
                </div>
                <div class="form-group">
                  <label>Melhor lançamento entre os tres</label>
                  <input type="float" name="total" class="form-control" placeholder="Digite seu melhor lançamento" required="required">
                </div>
                <button type="submit" class="btn btn-success">Adicionar</button>
              </form>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="./../node_modules/jquery/dist/jquery.js"></script>
  <script src="./../node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="./../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">SysCOB</a>
  </div>

</footer>
<!-- Footer -->

</html>