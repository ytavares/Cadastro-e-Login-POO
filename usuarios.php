<?php
  session_start();
    require_once ("classes/DAO/assinanteDAO.php");
    require_once ("classes/Entidade/assinante.php");

    $assinanteDAO = new assinanteDAO();
    $assinante = new assinante();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">
        <script src="JS/cadastro.js"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">WebDec</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link" href="home.html">Home</a>
                    <a class="nav-item nav-link active" href="usuarios.php">Usuários <span class="sr-only">(Página atual)</span></a>
                    <a class="nav-item nav-link" href="index.php">Sair</a>
                  </div>
                </div>
              </nav>
        </header>

        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nome</th>
              <th scope="col">&nbsp; &nbsp; &nbsp; &nbsp; Opções</th>
            </tr>
          </thead>
          <tbody>
            <?php $assinanteDAO->listaClientesNomes();?>
          </tbody>
        </table>

    </body>
</html>

