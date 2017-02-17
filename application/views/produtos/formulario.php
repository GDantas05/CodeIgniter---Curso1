<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Cadastro de Produtos</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Produtos</h1>
		<?php
			echo form_open('produtos/novo');
				echo form_label('Nome', 'nome');
				echo form_input(array(
					"name"      => "nome",
					"id"        => "nome",
					"maxlength" => "255",
					"class"     => "form-control"
				));

				echo form_label('Preço', 'preco');
				echo form_input(array(
					"name" 		=> "preco",
					"id"   		=> "preco",
					"maxlength" => "255",
					"class"     => "form-control",
					"type"      => "number"
				));
				
				echo form_label('Descrição', 'descricao');
				echo form_textarea(array(
					"name"  => "descricao",
					"class" => "form-control",
					"id"    => "descricao"
				));
				?>
				<br>
				<?php
				echo form_button(array(
					"class"   => "btn btn-primary",
					"content" => "Cadastrar",
					"type"    => "submit"
				));
			echo form_close();
		 ?>
	</div>
</body>
</html>