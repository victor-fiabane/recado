<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css"> 
    <title>Projeto Login</title>
</head>
<body>
    <div id="container">
    <h1>ÁREA RESTRITA</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" class="login" 
         placeholder="INFORME O SEU E-MAIL"><br>
        <input type="password" name="senha" class="login" 
         placeholder="INFORME A SENHA"><br>
         <input type="submit" value="ENTRAR"><br>
         <h3>Novo por aqui?<a href="formcad.php">[Cadastre-se] </a></h3>
    </form>
    </div>
</body>
</html>