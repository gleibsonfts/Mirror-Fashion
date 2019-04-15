<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
</head>
<script type="text/javascript">
	document.querySelector('input[type=email]').oninvalid = function() {
		this.setCustomValidity("");

		if (!this.validity.valid) {
			this,setCustomValidity("Email inválido");
		}
	}

</script>
<style type="text/css">
	.navbar {
		margin: 0;
	}
	body {
		padding-top: 70px;
	}
</style>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 35%">
			<span class="glyphicon glyphicon-home"></span>
			</a>
			<button class="navbar-toggle" type="button"
data-target=".navbar-collapse" data-toggle="collapse">
<span class="glyphicon glyphicon-align-justify"></span>
</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda
			<span class="glyphicon glyphicon-bullhorn"></span>
			</a></li>
			<li><a href="#">Perguntas frequentes
			<span class="glyphicon glyphicon-question-sign"></span>
			</a></li>
			<li><a href="#">Entre em contato
			<span class="glyphicon glyphicon-list-alt"></span>
			</a></li>
		</ul>
	</nav>

	<div class="jumbotron">
		<div class="container">
		<h1>Ótima escolha!</h1>
		<p>Obrigado por comprar na Mirror Fashion!
		Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
	<div class="panel panel-success">
		<div class="panel-heading">
			<h2 class="panel-title">Sua compra</h2>
		</div>

	<div class="panel-body">
		<dl>

			<img src="img/produtos/foto2<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png"
class="img-thumbnail img-responsive">

			<dt>Cor</dt>
			<dd><?= $_POST["cor"]?></dd>

			<dt>Preço</dt>
			<dd id="preco"><?= $_POST["preco"]?></dd>

			<dt>Tamanho</dt>
			<dd><?= $_POST["tamanho"]?></dd>

			<dt>Produto</dt>
			<dd><?= $_POST["nome"] ?></dd>

			
		</dl>

		<div class="form-group">
			<label for="qt">Quantidade</label>
			<input type="number" id="qt" class="form-control" min="0" max="99" value="1">
		</div>
		<div class="form-group">
			<label for="total">Total</label>
			<output for="qt valor" id="total" class="form-control">
				<?= $_POST["preco"] ?>
			</output>
		</div>

		</div>
	</div>
</div>
	<form class="col-sm-8">
		<div class="row">
		<fieldset class="col-md-6">
			<legend>Dados pessoais</legend>

			<div class="form-group">
				<label for="name">Nome completo</label>
				<input type="text" class="form-control" id="nome" name="nome" autofocus required>
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
			</div>

			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" requiredss>
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox" value="sim" name="spam" checked="">
					Quero receber spam da Mirror Fashion
				</label>
			</div>
		</fieldset>

		<fieldset class="col-md-6">
			<legend>Cartão de crédito</legend>

			<div class="form-group">
				<label for="numero-cartao">Número do cartão</label>
				<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
			</div>

			<div class="form-group">
				<label for="bandeira-cartao">Bandeira</label>
				<select name="bandeira-cartao" id="bandeira-cartao">
					<option value="master">MasterCard</option>
					<option value="visa">VISA</option>
					<option value="amex">American Express</option>
				</select>
			</div>

			<div class="form-group">
				<label for="validade-cartao">Validade</label>
				<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
			</div>
		</fieldset>
		</div>

		<button type="submit" class="btn btn-primary btn-lg pull-right">
			<span class="glyphicon glyphicon-thumbs-up"></span>
			Confirmar Pedido
		</button>
	</form>
	</div>
	</div>

	<script type="js/jquery.js"></script>
	<script type="js/bootstrap.js"></script>
	<script type="js/converteMoeda.js"></script>
	<script type="js/testaConversao.js"></script>
	<script type="js/total.js"></script>
</body>
</html>