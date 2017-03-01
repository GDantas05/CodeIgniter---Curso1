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
		<h2>Compre Agora</h2>
		<?php 
			echo form_open("vendas/nova");

				echo form_hidden("produto_id", $produto["id"]);
				echo form_label("Data de Entrega", "data_de_entrega");
				echo form_input(array(
					"name"  => "data_de_entrega",
					"class" => "form-control",
					"id"    => "data_de_entrega",
					"value" => ""
				));

				echo form_button(array(
					"class"   => "btn btn-primary",
					"content" => "Comprar",
					"type"    => "submit"
				));

			echo form_close();
		?>
	</div>
</body>
</html>