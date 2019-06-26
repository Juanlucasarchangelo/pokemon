<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="batalha.css">

    <title>Pokémon</title>
  </head>
  <body>
    <?php
    require_once("class.pokemon.php");
    require_once("class.pikachu.php");
    require_once("class.ponyta.php");
    require_once("class.charizard.php");
    require_once("class.mew.php");
    require_once("class.bubassauro.php");

    $objPokemon=new Pokemon;
    $objPikachu=new Pikachu;
    $objPonyta=new Ponyta;
    $objCharizard=new charizard;
    $objMewtwo=new Mewtwo;
    $objBubassauro=new Bubassauro;

// Pikachu
    $objPikachu-> setNome("Pikachu");
    $objPikachu->getNome();
    $objPikachu-> setAtaque("Choque do Trovão");
    $objPikachu->getAtaque();
    $objPikachu->setDano(31);
    $objPikachu->getDano();
    $objPikachu->setDefesa("Encarar");
    $objPikachu->getDefesa();
    $objPikachu->setDanodefesa(19);
    $objPikachu->getDanodefesa();
    $objPikachu->setVelocidade(50);
    $objPikachu->getVelocidade();
    $objPikachu->setEspecie("Elétrico");
    $objPikachu->getEspecie();
    $objPikachu->setHp(5000);
    $objPikachu->getHp();
    $objPikachu->setPeso("50 Kg");
    $objPikachu->getPeso();
    $objPikachu->setAltura("0.80 Cm");
    $objPikachu->getAltura();

//Ponyta
    echo '<div class="ponyta">';
    echo "<h1>Ponyta</h1>";
    $objPonyta-> setNome("Ponyta");
    $objPonyta->getNome();
    $objPonyta-> setAtaque("Roda Flamejante");
    $objPonyta->getAtaque();
    $objPonyta->setDano(37);
    $objPonyta->getDano();
    $objPonyta->setDefesa("Escudo Flamejante");
    $objPonyta->getDefesa();
    $objPonyta->setDanodefesa(24);
    $objPonyta->getDanodefesa();
    $objPonyta->setVelocidade(39);
    $objPonyta->getVelocidade();
    $objPonyta->setEspecie("Fogo");
    $objPonyta->getEspecie();
    $objPonyta->setHp(3500);
    $objPonyta->getHp();
    $objPonyta->setPeso("80 Kg");
    $objPonyta->getPeso();
    $objPonyta->setAltura("1.10 Cm");
    $objPonyta->getAltura();
    $objPonyta->setImagem("gif/ponyta.gif");
    echo '<img src="' . $objPonyta->getImagem() . '" width="300px"><br>';
    echo "<footer>BOOT</footer>";
    echo '</div>';

//Charizard
    $objCharizard-> setNome("Charizard");
    $objCharizard->getNome();
    $objCharizard-> setAtaque("Fogo Quente");
    $objCharizard->getAtaque();
    $objCharizard->setDano(151);
    $objCharizard->getDano();
    $objCharizard->setDefesa("Bloqueio de Chamas");
    $objCharizard->getDefesa();
    $objCharizard->setDanodefesa(90);
    $objCharizard->getDanodefesa();
    $objCharizard->setVelocidade(50);
    $objCharizard->getVelocidade();
    $objCharizard->setEspecie("Fogo");
    $objCharizard->getEspecie();
    $objCharizard->setHp(6000);
    $objCharizard->getHp();
    $objCharizard->setPeso("580 Kg");
    $objCharizard->getPeso();
    $objCharizard->setAltura("5.10 Cm");
    $objCharizard->getAltura();

// Mewtwo
    $objMewtwo-> setNome("Mewtwo");
    $objMewtwo->getNome();
    $objMewtwo-> setAtaque("Mente que Pensa");
    $objMewtwo->getAtaque();
    $objMewtwo->setDano(500);
    $objMewtwo->getDano();
    $objMewtwo->setDefesa("Escudo da Mente");
    $objMewtwo->getDefesa();
    $objMewtwo->setDanodefesa(349);
    $objMewtwo->getDanodefesa();
    $objMewtwo->setVelocidade(65482);
    $objMewtwo->getVelocidade();
    $objMewtwo->setEspecie("Psíquico");
    $objMewtwo->getEspecie();
    $objMewtwo->setHp(10000);
    $objMewtwo->getHp();
    $objMewtwo->setPeso("150 Kg");
    $objMewtwo->getPeso();
    $objMewtwo->setAltura("2.30 Cm");
    $objMewtwo->getAltura();
        
// Bubassauro
    $objBubassauro-> setNome("Bubassauro");
    $objBubassauro->getNome();
    $objBubassauro-> setAtaque("Cipó Venenoso");
    $objBubassauro->getAtaque();
    $objBubassauro->setDano(260);
    $objBubassauro->getDano();
    $objBubassauro->setDefesa("Escudo de Arvore");
    $objBubassauro->getDefesa();
    $objBubassauro->setDanodefesa(132);
    $objBubassauro->getDanodefesa();
    $objBubassauro->setVelocidade(60);
    $objBubassauro->getVelocidade();
    $objBubassauro->setEspecie("Planta");
    $objBubassauro->getEspecie();
    $objBubassauro->setHp(4000);
    $objBubassauro->getHp();
    $objBubassauro->setPeso("100 Kg");
    $objBubassauro->getPeso();
    $objBubassauro->setAltura("0.80 Cm");
    $objBubassauro->getAltura();

//Recebe do form
    $batalha =?$_GET["batalha"]: "Vamos lá.";
//Recebe do form

    echo '<div class="escolha">';
    if($batalha == "PI"){
      echo '<div class="escolha">';
      echo "<h1>Pikachu</h1>";
      $objPikachu->setImagem("imagens/picahu icon.png");
      echo '<img src="' . $objPikachu->getImagem() . '" width="300px"><br>';
      echo '</div>';
      }
      elseif($batalha=="CHA"){
        echo "<h1>Charizard</h1>";
        $objCharizard->setImagem("imagens/charizard1.png");
        echo '<img src="' . $objCharizard->getImagem() . '" width="300px"><br>';
      }
      elseif($batalha=="MEW"){
        echo "<h1>Mewtwo</h1>";
        $objMewtwo->setImagem("imagens/mewtwo1.png");
        echo '<img src="' . $objMewtwo->getImagem() . '" width="300px"><br>';
      }
      elseif($batalha=="BU"){
        echo "<h1>Bubassauro</h1>";
        $objBubassauro->setImagem("imagens/Bubassaur.png");
        echo '<img src="' . $objBubassauro->getImagem() . '" width="300px"><br>';
      }
      echo '</div>';

//AÇOES
echo '<div class="resultado">';
    if($batalha == "PI"){
      $sorteio=rand(1, 2);
      if($sorteio==1){
        echo $objPikachu->getNome() ." com o ataque " . $objPikachu->getAtaque() . " causou um dano de " . ($objPikachu->getDano()-$objPonyta->getDanodefesa()) . " em Ponyta" ;
      }
      else{
        echo $objPikachu->getNome() . " com a defesa " . $objPikachu->getDefesa() . " defendeu-se do ataque " . $objPonyta->getAtaque() . " de " . $objPonyta->getNome() . " recebendo " . ($objPikachu->getdanodefesa()-$objPonyta->getDano()) . " de dano!";
      }
    }
    elseif($batalha == "CHA"){
      $sorteio=rand(1, 2);
      if($sorteio==1){
        echo $objCharizard->getNome() ." com o ataque " . $objCharizard->getAtaque() . " causou um dano de " . ($objCharizard->getDano()-$objPonyta->getDanodefesa()) . " em Ponyta" ;
      }
      else{
        echo $objCharizard->getNome() . " com a defesa " . $objCharizard->getDefesa() . " defendeu-se do ataque " . $objPonyta->getAtaque() . " de " . $objPonyta->getNome() . " recebendo " . ($objCharizard->getdanodefesa()-$objPonyta->getDano()) . " de dano!";
      }
    }
    elseif($batalha == "MEW"){
      $sorteio=rand(1, 2);
      if($sorteio==1){
        echo $objMewtwo->getNome() ." com o ataque " . $objMewtwo->getAtaque() . " causou um dano de " . ($objMewtwo->getDano()-$objPonyta->getDanodefesa()) . " em Ponyta" ;
      }
      else{
        echo $objMewtwo->getNome() . " com a defesa " . $objMewtwo->getDefesa() . " defendeu-se do ataque " . $objPonyta->getAtaque() . " de " . $objPonyta->getNome() . " recebendo " . ($objMewtwo->getdanodefesa()-$objPonyta->getDano()) . " de dano!";
      }
    }
    elseif($batalha == "BU"){
      $sorteio=rand(1, 2);
      if($sorteio==1){
        echo $objBubassauro->getNome() ." com o ataque " . $objBubassauro->getAtaque() . " causou um dano de " . ($objBubassauro->getDano()-$objPonyta->getDanodefesa()) . " em Ponyta" ;
      }
      else{
        echo $objBubassauro->getNome() . " com a defesa " . $objBubassauro->getDefesa() . " defendeu-se do ataque " . $objPonyta->getAtaque() . " de " . $objPonyta->getNome() . " recebendo " . ($objBubassauro->getdanodefesa()-$objPonyta->getDano()) . " de dano!";
      }
    }
    else{
      echo "Volte e selecione um Pokemon";
    }
    echo '</div>';
    ?>
   <a href="index1.php"><input type="submit" value="voltar" class="botao"></a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
