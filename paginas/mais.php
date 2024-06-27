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
<div class="acenter" style="display: flex;
                    justify-content: center;"> <a href="<?php echo $dados->jogar?>" style=" text-decoration: none;
                        color: white;
                        background: #0064b6;
                        padding: 5PX 10PX ;
                        border-radius: 20px;">Jogar</a> </div>
     </div>
</section>