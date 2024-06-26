<?php

header("Access-Controla-Allow-Origin: *");
header("Content-tipe: application/json; charset=utf-8");    
    
          

    $game[1]= array (
        "id"=> 1,
        "banner"=> "http://localhost/Frivaa/img/submarino adventure.png",
        "nome"=> "nome1",
        "descricao"=> "Em Submarine Adventure, o bravo submarino explorador, conhecido como Subby, embarca em uma jornada épica para encontrar o lendário tesouro perdido nas profundezas do oceano. No entanto, para chegar ao tesouro, Subby deve enfrentar desafios perigosos pelo caminho. Nadando através de recifes de coral, esquivando-se de cardumes de peixes coloridos e escapando de criaturas marinhas assustadoras, como tubarões famintos e águas-vivas venenosas, Subby avança corajosamente, determinado a alcançar seu objetivo. Com habilidade e destreza, você pode ajudar Subby a superar todos os obstáculos e desbloquear os segredos do tesouro perdido?
",
        "jogar"=> "",
    );

    $game[2]= array (
        "id"=> 2,
        "banner"=> "http://localhost/Frivaa/img/escape from espace.jpg",
        "nome"=> "nome2",
        "descricao"=> "Esse jogo vai demandar de suas habilidades e reflexos para conseguir sobreviver nessa atmosfera! Controlando seu foguete, desviando de obstáculos e ganhando armamento para enfrentá-los, você só pode e deve contar com suas habilidades, prepare-se piloto!!
",

        "jogar"=> "",
    );
    $game[3]= array (
        "id"=> 3,
        "banner"=> "http://localhost/Frivaa/img/time sprint.jpg",
        "nome"=> "nome2",
        "descricao"=> "Em Time Sprint, os jogadores mergulham em uma emocionante corrida contra o tempo
em um mundo futurista cheio de desafios tecnológicos. Assuma o papel de um corredor intrépido em
busca de atravessar uma cidade distópica cheia de obstáculos cibernéticos. Com um design simples
e envolvente, o jogo oferece uma experiência viciante e memorável, perfeita para quem busca
diversão em meio a tecnologia.
-Ficha Técnica
Engine Construct 3
Plataforma PC
Mecânica Corrida de plataforma com elementos de ação e esquiva
Dispositivos de Entrada Teclado (setas para mover e barra de espaço para saltar)",
        "jogar"=> "",
    );
   
   
    

     echo json_encode($game);