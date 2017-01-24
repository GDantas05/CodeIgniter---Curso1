<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Produtos</h1>
		<table class="table">
			<tr>
				<td>Nome</td>
				<td>Descrição</td>
				<td>Preço</td>
			</tr>
			<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?= $produto['nome'] ?></td>
				<td><?= $produto['descricao'] ?></td>
				<td><?= $produto['preco'] ?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>