
	<?php 
	$cabecalho_title = "Produto da Mirror Fashion";
	$cabecalho_css = '<link rel="styleshett" href="css/produto.css">';
	include("cabecalho.php"); 
	?>

	<link rel="stylesheet" href="css/produto.css">
	
	<div class="container">
	<div class="produto">
		<h1>Fuzzy Cardigan</h1>
		<p>por apenas R$ 129,00</p>

		<form>
			<fieldset class="cores">
				<legend>Escolha a cor:</legend>

				<input type="radio" name="cor" value="verde" id="verde" checked>
				<label for="verde">
					<img src="img/produtos/foto2-verde.png" alt="verde">
				</label>

				<input type="radio" name="cor" value="rosa" id="rosa">
				<label for="rosa">
					<img src="img/produtos/foto2-rosa.png" alt="rosa">
				</label>

				<input type="radio" name="cor" value="azul" id="azul">
				<label for="azul">
					<img src="img/produtos/foto2-azul.png" alt="azul">
				</label>

			</fieldset>

			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="rage" name="tamanho" min="36" max="46" value="42" step="2">
			</fieldset>

			<input type="submit" class="comprar" name="Comprar">
		</form>
	</div>
	<div class="detalhes">
		<h2>Detalhes do produto</h2>

		<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega a jato.</p>
	</div>
	</div>
	<?php include("rodape.php"); ?>
