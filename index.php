<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SysCOB - Index</title>
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">SysCOB</a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-3">
        <h2>Sistema para cadastro de competições do COB</h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-12 text-center my-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">100 metros rasos</h5>
            <p class="card-text">Menor tempo vence.</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#criar_100m">
              Criar competição
            </button>
            <a href="pages/todos_100m.php" class="btn btn-success">Todas as competições</a>
          </div>
        </div>
      </div>

      <!--Modal Atividade-->
      <div class="modal fade" id="criar_100m" tabindex="1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">100 metros rasos</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>

            </div>

            <div class="modal-body">
              <form method="POST" action="backend/cria_com_100m.php">
                <div class="form-group">
                  <div class="form-group">
                    <label>Competição</label>
                    <input type="text" name="competicao" class="form-control" placeholder="Nome da competição" required="required">
                  </div>
                  <button type="submit" class="btn btn-success">Criar</button>
              </form>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>






  <!-- lancamento de dardo -->
  <div class="container">
    <div class="row">

      <div class="col-12 text-center my-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">lançamento de dardo</h5>
            <p class="card-text">Maior distancia vence</p>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#lancamentom">
              Criar competição
            </button>
            <a href="pages/todos_lan.php" class="btn btn-success">Todas as competições</a>
          </div>
        </div>
      </div>

      <!--Modal lancamento-->
      <div class="modal fade" id="lancamentom" tabindex="1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-header">
              <h4 class="modal-title">Lançamento de dardo</h4>
              <button type="button" class="close" data-dismiss="modal">
                <span>&times;</span>
              </button>

            </div>

            <div class="modal-body">
              <form method="POST" action="backend/cria_lanca.php">
                <div class="form-group">
                  <div class="form-group">
                    <label>Competição</label>
                    <input type="text" name="competicao" class="form-control" placeholder="Nome da competição" required="required">
                  </div>
                  <button type="submit" class="btn btn-success">Criar</button>
              </form>
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>


  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

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