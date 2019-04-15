	<?php
		$conexao = mysqli_connect("127.0.0.1", "root", "0105bnx55kl", "WD43");
		$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id $_GET[id]");
		$produto =mysqli_fetch_array($dados);
	?>


	<?php 
	$cabecalho_title = "Produto da Mirror Fashion";
	$cabecalho_css = '<link rel="styleshett" href="css/produto.css">';
	include("cabecalho.php"); 
	?>

	<link rel="stylesheet" href="css/produto.css">
	<div class="produto-back">
	<div class="container">
	<div class="produto">
		<h1><?= $produto['nome'] ?></h1>
		<p>por apenas <?= $produto['preco'] ?></p>

		<form action="checkout.php" method="POST">
			<fieldset class="cores">
				<legend>Escolha a cor:</legend>

				<input type="radio" name="cor" value="verde" id="verde" checked>
				<label for="verde">
					<img src="img/produtos/foto<?= $produto['id'] ?>-verde.png" alt="verde">
				</label>

				<input type="radio" name="cor" value="rosa" id="rosa">
				<label for="rosa">
					<img src="img/produtos/foto<?= $produto['id'] ?>-rosa.png" alt="rosa">
				</label>

				<input type="radio" name="cor" value="azul" id="azul">
				<label for="azul">
					<img src="img/produtos/foto<?= $produto['id'] ?>-azul.png" alt="azul">
				</label>

			</fieldset>

			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="range" name="tamanho" min="36" max="46" value="42" step="2">
				<output for="tamaho" name="valortamanho">42</output>
			</fieldset>

			<input type="hidden" name="nome" value="Fuzzy Cardigan">
			<input type="hidden" name="preco" value="129.00">

			<input type="submit" class="comprar" name="Comprar">
		</form>
	</div>
	<div class="detalhes">
		<h2>Detalhes do produto</h2>

		<p><?= $produto['descricao'] ?></p>

		<table>
			<thead>
				<tr>
					<th>Característica</th>
					<th>Detalhe</th>
				</tr>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigan 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</thead>
		</table>
	</div>
	</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/produto.js"></script>
	<?php include("rodape.php"); ?>
