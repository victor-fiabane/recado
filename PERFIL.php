<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// exibir as informações do usuário logado
$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<h1>Seu perfil</h1>
	<p>ID: <?php echo $id; ?></p>
	<p>Nome: <?php echo $nome; ?></p>
	<p>Email: <?php echo $email; ?></p>
	<p><a href="editar_usuario.php">Editar cadastro</a></p>
	<p><a href="excluir_usuario.php">Excluir cadastro</a></p>
</body>
</html>