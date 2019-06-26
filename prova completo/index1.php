<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="batalha.css">

    <title>GAME Pokemon</title>
  </head>
  <body>
		<img src="imagens/pokemon logo.png"id="logo" width="500" height="300">
	<div class="champ">
			<H1> ESCOLHA SEU POKEMON</H1>
		<form action="index.php" method="GET">
			<div id="box1">
				<img src="imagens/picahu icon.png" alt="PI" width="200" height="200">
				<div class="info">
						<h3>HP: 4500</h3>
						<h3>ATAQUE: 506</h3>
						<H3>DEFESA: 237</H3>
					</div>
				<h1>PIKACHU</h1>
				<input type="radio" value="PI" name="batalha" checked>

			</div>
			<div id="box2">
				<img src="imagens/charizard1.png" alt="CHA" width="200" height="200">
					<div class="info">
						<h3>HP: 7000</h3>
						<h3>ATAQUE: 716</h3>
						<H3>DEFESA: 550</H3>
					</div>
				<h1>CHARIZARD</h1>
				<input type="radio" value="CHA" name="batalha">
			</div>
			<div id="box3">
				<img src="imagens/mewtwo1.png" alt="MEW" width="200" height="200">
				<div class="info">
						<h3>HP: 10000</h3>
						<h3>ATAQUE: 942</h3>
						<H3>DEFESA: 721</H3>
						<BR>
						<h2>LENDÁRIO</h2>
					</div>
				<h1>MEWTWO</h1>
				<input type="radio" value="MEW" name="batalha">
			</div>
			<div id="box4">
				<img src="imagens/Bubassaur.png" alt="BU" width="200" height="200">
				<div class="info">
						<h3>HP: 6000</h3>
						<h3>ATAQUE: 346</h3>
						<H3>DEFESA: 158</H3>
					</div>
				<h1>BUBASAURO</h1>
				<input type="radio" value="BU" name="batalha">
			</div>
			<BR>
			<input type="submit" value="BATALHA">
		</form>
	</div>
	<img src="gif/ash.gif"id="ash" width="400" height="500">
	<img src="gif/carinha.gif"id="cara" width="400" height="500">
		<div class="personagens">
			<img src="gif/ponyta.gif" width="100" height="100">
			<img src="gif/pedra.gif" width="100" height="100">
			<img src="gif/pikachu.gif" width="150" height="100">
			<img src="gif/CHARIZARD.gif" width="100" height="100">
			<img src="gif/inseto.gif" width="100" height="100">
			<img src="gif/Muk.gif" width="100" height="100">
			<img src="gif/Shieldon.gif" width="100" height="100">
			<img src="gif/borboleta.gif" width="100" height="100">
			<img src="gif/cahororo.gif" width="100" height="100">
			<img src="gif/charmeleon.gif" width="100" height="100">
			<img src="gif/gato.gif" width="100" height="100">
		</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<footer>Pokemon ~ Todos os direitos reservados</footer>
  </body>
</html>
