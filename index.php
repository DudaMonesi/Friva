<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Friva</title>
  <meta name="description" content="Games feitos para você, jogos que te hipnotizam">
  <meta name="keywords" content="games, jogos, lançamentos">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" href="img/icone.ico" type="image/x-icon">


</head>

<body>
   <?php
        //buscar os dados da API de games
        $url = "https://professorburnes.com.br/stem/api/games.php";
        //importar os dados da API
        $dadosApi = file_get_contents($url);
        //transformar de JSON para array ou objeto
        $dadosJogos = json_decode($dadosApi);

        //print_r($dadosJogos);
    ?>

  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo.png" alt="Friva">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                                foreach($dadosJogos as $dados) {
                                    echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                                }
                            ?>
                        </ul>
                    </li>
            <ul class="dropdown-menu">
                 <?php
                                foreach($dadosJogos as $dados) {
                                    echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                                }
                            ?>
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
       <div class="d-flex">
        <a href=https://www.instagram.com/maria_monesi47/ title="Contato" class="btn btn-info">
          <i class="fas fa-envelope"></i>
          Entre em Contato
        </a>
       </div>
      </div>
    </div>
  </nav>

  

  <script src="js/bootstrap.budle.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/fslightbox.js"></script> 
</body>

</html>