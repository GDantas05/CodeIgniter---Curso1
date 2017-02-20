<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<?php if ($this->session->flashdata('success')) : ?>
			<p class="alert alert-success"><?= $this->session->flashdata('success') ?></p>
		<?php endif ?>
		<?php if ($this->session->flashdata('danger')) : ?>
			<p class="alert alert-danger"><?= $this->session->flashdata('danger') ?></p>
		<?php endif ?>
		<h1>Produtos</h1>
		<table class="table">
			<tr>
				<td>Nome</td>
				<td>Preço</td>
				<td>Descrição</td>
			</tr>
			<?php foreach ($produtos as $produto) : ?>
			<tr>
				<td><?= anchor("produtos/{$produto['id']}", html_escape($produto["nome"])); ?></td>
				<td><?= numeroEmReais(html_escape($produto['preco'])) ?></td>
				<td><?= character_limiter(html_escape($produto['descricao']), 20) ?></td>
			</tr>
			<?php endforeach ?>
		</table>
		<?php if ($this->session->userdata("usuario_logado")) : ?>
			<?= anchor('login/logout', 'Logout', array('class' => 'btn btn-primary')) ?>
			<?= anchor('produtos/formulario', 'Cadastrar', array('class' => 'btn btn-success')) ?>
		<?php else : ?>
		<h1>Login</h1>
		<?php
			echo form_open('login/autenticar');
				echo form_label('Email', 'email');
				echo form_input(array(
					"name"      => "email",
					"id"        => "email",
					"maxlength" => "255",
					"class"     => "form-control"
				));

				echo form_label('Senha', 'senha');
				echo form_password(array(
					"name" 		=> "senha",
					"id"   		=> "senha",
					"maxlength" => "255",
					"class"     => "form-control"
				));

				echo form_button(array(
					"class"   => "btn btn-primary",
					"content" => "Login",
					"type"    => "submit"
				));
			echo form_close();
		 ?>
		<h1>Cadastro</h1>
		<?php 
			echo form_open("usuarios/novo");

				echo form_label('Nome', 'nome');
				echo form_input(array(
					"name"      => "nome",
					"id"        => "nome",
					"maxlength" => "255",
					"class"     => "form-control"
				));

				echo form_label('Email', 'email');
				echo form_input(array(
					"name"      => "email",
					"id"        => "email",
					"maxlength" => "255",
					"class"     => "form-control"
				));

				echo form_label('Senha', 'senha');
				echo form_password(array(
					"name" 		=> "senha",
					"id"   		=> "senha",
					"maxlength" => "255",
					"class"     => "form-control"
				));
				
				echo form_button(array(
					"class"   => "btn btn-primary",
					"content" => "Cadastrar",
					"type"    => "submit"
				));
				
			echo form_close();
		 ?>
		<?php endif ?>
	</div>
</body>
</html>