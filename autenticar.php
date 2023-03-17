<?php

$usuarios = file_get_contents('senhas.txt');
$usuarios = json_decode($usuarios, true);

$login = $_POST['login'];
$senha = $_POST['senha'];


foreach ($usuarios as $usuario) {
  if ($usuario['login'] === $login && $usuario['senha'] === $senha) {

    header('Location: home.php?login=' . urlencode($login));
    exit();
    
  }
 //$admin++;
}

header('Location: erro.php');
exit();

?>