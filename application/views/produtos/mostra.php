<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Visualiza Produto</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Produto</h1>
		<?= html_escape($produto["nome"]) ?>
		Preço: <?= html_escape($produto["preco"]) ?>
		<?= auto_typography(html_escape($produto["descricao"])) ?> <!-- auto_typography -> respeita as quebras de linha do cadastro e o html_escape escapa o conteúdo html caso tenha sido cadastrado como uma descrição -->
	</div>
</body>
</html>