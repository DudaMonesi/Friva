<?php
$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/Frivaa/api/jogo.php");
$dadosApi = json_decode($dadosApi);
$dados = $dadosApi-> $id;
?>


<section id="main">

<div class="banner">
    <img src="<?php echo $dados-> banner?> " alt="" width="100%" style="border-radius: 20px;">
</div>


      <div class="card-descri">
       <h3 class="text-center">Descrição</h3>
 <p>
       <?php echo $dados->descricao?> 
 </p>
     </div>
</section>