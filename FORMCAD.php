<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/form.css"> 
	<title>Cadastro de Usuários</title>
</head>
<body>
	<h1>Formulário de Cadastro</h1>
	<form action="cad.php" method="post">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" required><br><br>
		
		<input type="submit" value="Enviar">
	</form>
</body>
</html>