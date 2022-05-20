<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<style>
			body, html{
				height:  100%;
			}
		</style>

	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
			</div>
		</nav>

		<?php if( isset($_GET['sucesso'])) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5 class="p-3">Cadastro realizado, agora faça login! ;D</h5>
			</div>
		<?php } ?>

		<?php if( isset($_GET['logError1'])) { ?>
			<div class="bg-danger pt-2 text-white d-flex justify-content-center">
				<h5 class="p-3">E-mail e/ou senha incorretos.</h5>
			</div>
		<?php } ?>

		<?php if( isset($_GET['logError2'])) { ?>
			<div class="bg-danger pt-2 text-white d-flex justify-content-center">
				<h5 class="p-3">Você precisa fazer login.</h5>
			</div>
		<?php } ?>


		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-6 border border-success rounded mt-5">
					<form action="valida.login.php" method="post" class="pt-3 pl-3 pr-3">
						<div class="form-group">
							<label for="login">E-mail:</label>
							<input name="email" type="email" class="form-control" placeholder="Digite o seu e-mail cadastrado">
						</div>						
						<div class="form-group">
							<label for="senha">Senha:</label>
							<input type="password" name="senha" class="form-control" placeholder="Digite a sua senha">
						</div>
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-success mr-1">Entrar</button>
							<button type="reset" class="btn btn-danger ml-1">Limpar</button>
						</div>
					</form>					
				</div>
			</div>
			<div class="row d-flex justify-content-center mt-2">
				<h6><button class="btn btn-primary btn-sm"><a href="cadastro.php" class="text-white">Cadastre-se</a></button></h6>
			</div>
		</div>

		
	</body>
</html>