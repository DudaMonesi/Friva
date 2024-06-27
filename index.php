<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Friva</title>
  <meta name="description" content="Games feitos para você, jogos que te hipnotizam">
  <meta name="keywords" content="games, jogos, lançamentos">
  <base href="http://localhost/Frivaa/api">

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
            $dadosApi = file_get_contents("http://localhost/Frivaa/api/jogo.php");
            $dadosApi = json_decode($dadosApi);

            foreach ($dadosApi as $dados) {
              ?>
              <li><a class="dropdown-item" href="mais/<?= $dados->id?>"><?php echo $dados->nome?></a></li>

              <?php
            };
            ?>

            
            
           
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
  <main>

    <?php

    if (isset($_GET["param"])) {
      $param = $_GET["param"];
      $p = explode("/", $param);
    }

    $page = $p[0] ?? "home";
    $jogo = $p[1] ?? NULL;

    if ($page == "jogo") {
      $pagina = "jogo/{$jogo}.php";

    } else {
      $pagina = "paginas/{$page}.php";
    }

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }

    ?>
    </main>

  <footer>

  </footer>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>