<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Vendas</h1>
		<table class="table">
			<tr>
				<td>Nome</td>
				<td>Data de Entrega</td>
			</tr>
		<?php foreach($produtosVendidos as $produto) : ?>
			<tr>
				<td><?= $produto['nome'] ?></td>
				<td><?= dataMySQLParaPtBr($produto['data_de_entrega']) ?></td>
			</tr>
		<?php endforeach ?>
		</table>
	</div>
</body>
</html>