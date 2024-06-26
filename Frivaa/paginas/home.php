<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
     <div class="carousel-item active">
      <img src="img/submarino adventure.png" class="d-block w-100" alt="Submarino Adventure">
    </div>
    <div class="carousel-item">
      <img src="img/escape from espace.jpg" class="d-block w-100" alt="Escape From Space">
    </div>
    <div class="carousel-item">
      <img src="img/time sprint.jpg" class="d-block w-100" alt="Time Sprint">
    </div> 
    <?php
$dadosApi = file_get_contents("https://crackgamess.000webhostapp.com/api/jogo.php");
$dadosApi = json_decode($dadosApi);

foreach ($dadosApi as $dados) {
  ?>
  <div class="carousel-item">
      <img src="<?php echo $dados->banner?>" class="d-block w-100" alt="Time Sprint">
    </div>

  <?php
};
?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section id="main">
<!-- php para trazer os jogos da API -->
<div class="card-flex">
<?php
$dadosApi = file_get_contents("https://crackgamess.000webhostapp.com/api/jogo.php");
$dadosApi = json_decode($dadosApi);

foreach ($dadosApi as $dados) {
  ?>
  <div class="card-info" >
    <a href="<?php echo $dados->jojo?>"><img src="<?php echo $dados->banner ?>" alt="<?php echo $dados->alt ?>" ></a>
    <div class="card-descricao">
      <a href="<?php echo $dados->jojo?>">
        <p>
          <?php echo $dados->nome ?>
        </p>
      </a>
     
    </div>
  </div>
  <?php
};
?>
</div>

<div class="card-flex">
<?php
$dadosApi = file_get_contents("http://localhost/Frivaa/api/jogo.php");
$dadosApi = json_decode($dadosApi);

foreach ($dadosApi as $dados) {
  ?>
  <div class="card-info" >
    <a href="mais/<?= $dados->id?>"><img src="<?php echo $dados->banner ?>" alt="<?php echo $dados->alt ?>" ></a>
    <div class="card-descricao">
      <a href="mais/<?= $dados->id?>">
        <p>
          <?php echo $dados->nome ?>
        </p>
      </a>
     
    </div>
  </div>
  <?php
};
?>
</div>
</section>