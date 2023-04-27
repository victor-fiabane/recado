<?php
// verificar se o usuário está logado
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

// conectar-se ao banco de dados
include("config.php");

// verificar se o usuário confirmou a exclusão
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["confirmacao"] == "sim") {
		// excluir o usuário do banco de dados
		$id = $_SESSION["id"];
		$sql = "DELETE FROM tbusuario WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
			// encerrar a sessão
			session_destroy();
			echo"<script> alert('Usuário excluído com sucesso.'); </script>"; 
			echo"<script> location.href='index.php'; </script>"; 
		} else {
			echo "Erro ao excluir usuário: " . mysqli_error($conn);
		}

		exit();
	}
}

// exibir a mensagem de confirmação
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/excluir.css"> 
	<title>Excluir cadastro</title>
</head>
<body>
	<h1>Excluir cadastro</h1>
	<p>Tem certeza que deseja excluir sua conta?</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="radio" name="confirmacao" value="sim">Sim<br>
		<input type="radio" name="confirmacao" value="nao" checked>Não<br>
		<input type="submit" name="submit" value="Excluir">
	</form>
</body>
</html>