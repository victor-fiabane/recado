<?php
// Inclui o arquivo de configuração
include("config.php");

// Verifica se o botão "Limpar lista" foi clicado
if(isset($_POST['limpar'])){
  // Define o valor da variável de sessão para "esconder"
  $_SESSION['mostrar_recados'] = false;
}

// Verifica se o botão "Mostrar recados" foi clicado
if(isset($_POST['mostrar'])){
  // Define o valor da variável de sessão para "mostrar"
  $_SESSION['mostrar_recados'] = true;
}

// Define o valor padrão da variável de sessão como "mostrar" (caso ainda não tenha sido definida)
if(!isset($_SESSION['mostrar_recados'])){
  $_SESSION['mostrar_recados'] = true;
}

// Executa a consulta SQL somente se a variável de sessão estiver definida como "mostrar"
if($_SESSION['mostrar_recados']){
  $query = "SELECT * FROM tbrecados";
  $resultado = mysqli_query($conn, $query);

  // Verifica se a consulta retornou algum resultado
  if (mysqli_num_rows($resultado) > 0) {
    // Loop através dos resultados e exibe os dados
    while ($row = mysqli_fetch_assoc($resultado)) {
      echo "ID: " . $row["id"] . "<br>";
      echo "Data: " . $row["data"] . "<br>";
      echo "Recado: " . $row["recado"] . "<br>";
      echo "<br>";
    }
  } else {
    echo "Não foram encontrados resultados.";
  }
}

// Fecha a conexão com o MySQL
mysqli_close($conn);
?>

<html>
<head>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <form method="post">
    <button type="submit" name="limpar">Limpar lista</button>
    <button type="submit" name="mostrar">Mostrar recados</button>
  </form>

  <?php
  // Define o estilo CSS para esconder a lista de recados
  if(!$_SESSION['mostrar_recados']){
    echo "<style>.recados {display: none;}</style>";
  }
  ?>

  <div class="recados">
   
  </div>

</body>
</html>
