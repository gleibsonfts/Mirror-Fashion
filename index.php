
	
	<?php 
	$cabecalho_title = "Mirror Fashion";
	include("cabecalho.php"); 
	?>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'
rel='stylesheet'>
	<div class="container destaque">
		<section class="busca">
			<h2>Busca</h2>
			<form>
				<input type="search">
				<input type="image" src="img/busca.png">
			</form>
		</section>
		<!-- fim .busca -->

		<section class="menu-departamentos">
			<h2>Departamentos</h2>

			<nav>
				<ul>
					<li><a href="#">Blusas e Camisas</a></li>
					<ul>
						<li><a href="#">Manga curta</a></li>
						<li><a href="#">Manga comprida</a></li>
						<li><a href="#">Camisa sicial</a></li>
						<li><a href="#">Camisa casual</a></li>
					</ul>
					<li><a href="#">Calças</a></li>
					<li><a href="#">Saias</a></li>
					<li><a href="#">Vestidos</a></li>
					<li><a href="#">Sapatos</a></li>
					<li><a href="#">Bolsas e Carteiras</a></li>
					<li><a href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section>
		<!-- fim menu-departamentos -->

		<img src="img/destaque-home.png" alt="Promoção: Big City Nigth">
	</div>
	<!-- fim de container destaque -->

	<div class="container paineis">
		<!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->

		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<?php
					$conexao= mysqli_connect("127.0.0.1", "root", "0105bnx55kl", "WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 12");

					while ($produto = mysqli_fetch_array($dados)):

				?>
				<li>
					<a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= produto['nome'] ?>">
							<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
						</figure>
					</a>
				</li>

			<?php endwhile; ?>
			</ol>
			<button type="button">Mostra mais</button>
		</section>
		

	<!-- fim do painel novidade -->


		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<?php
					$conexao= mysqli_connect("127.0.0.1", "root", "0105bnx55kl", "WD43");
					$dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 12");

					while ($produto = mysqli_fetch_array($dados)):

				?>
				<li>
					<a href="produto.php?id=<?= $produto['id'] ?>">
						<figure>
							<img src="img/produtos/miniatura<?= $produto['id'] ?>.png" alt="<?= produto['nome'] ?>">
							<figcaption><?= $produto['nome'] ?> por <?= $produto['preco'] ?></figcaption>
						</figure>
					</a>
				</li>

			<?php endwhile; ?>
			</ol>
				
			<button type="button">Mostra mais</button>
		</section>
		
	</div>

	<!-- fim do painel mais vendidos -->

	<script src="js/jquery.js"></script>
	<script src="js/home.js"></script>
	<script src="js/converteMoeda.js"></script>
	<script src="js/testaConversao.js"></script>
	<?php include("rodape.php"); ?>

