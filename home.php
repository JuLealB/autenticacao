<?php

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);
  
?>

<!DOCTYPE>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body><div class="bloco">
         <?php if (isset($_GET['login'])): ?>
  <h1 class="titulo">Bem-vindo(a) <?php echo $_GET['login']; ?>!</h1>
    <?php endif; ?>
    
  </div>
 
  </body>
</html>


