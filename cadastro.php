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

		<?php if( isset($_GET['erro1'])) { ?>
			<div class="bg-danger pt-2 text-white d-flex justify-content-center">
				<h5 class="p-3">Por favor, preencha todos os dados.</h5>
			</div>
		<?php } ?>

		<?php if( isset($_GET['erro2'])) { ?>
			<div class="bg-danger pt-2 text-white d-flex justify-content-center">
				<h5 class="p-3">E-mail já cadastrado, por favor faça <a href="index.php">login.</a></h5>
			</div>
		<?php } ?>

		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-6 mt-5">
					<fieldset class="border border-success rounded pl-5">
                        <legend class="w-auto">Cadastre-se</legend>
                            <form action="valida.cadastro.php" method="post" class="pt-3 pl-0 pr-4">
                                <div class="form-group">
                                    <label for="nome">Nome: </label>
                                    <input name="nome" type="text" class="form-control" placeholder="Digite o nome">
                                </div>
                                <div class="form-group">
                                    <label for="login">E-mail:</label>
                                    <input name="email" type="email" class="form-control" placeholder="Digite o seu e-mail">
                                </div>						
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success mr-1">Cadastrar</button>
                                    <button type="reset" class="btn btn-danger ml-1">Limpar</button>
                                </div>
                            </form>			
                    </fieldset>		
				</div>
			</div>			
		</div>

		
	</body>
</html>