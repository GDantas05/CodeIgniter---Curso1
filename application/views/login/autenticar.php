<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Autenticação de usuário</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<?php if ($retorno == 1) { ?>
			<div class="row alert alert-success">
				<p>Usuário logado com sucesso</p>
			</div>
		<?php } else { ?>
			<div class="row alert alert-danger">
				<p>Usuário ou senha inválida</p>
			</div>
		<?php } ?>
	</div>
</body>
</html>