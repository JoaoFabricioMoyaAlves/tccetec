<?php

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

include("conexao.php");



mysqli_select_db($conexao, "ecommerce");
$sql = mysqli_query($conexao, "SELECT * FROM clientes where emailC='$email' 
and senhaC='$senha'")
  or die(mysqli_error($conexao));




$cont = mysqli_num_rows($sql);
if ($cont > 0) {
  session_start();
  $_SESSION['emailC'] = $email;
  $_SESSION['senhaC'] = $senha;
  $idcc = $_SESSION['idC'];
  if ($linha = mysqli_fetch_array($sql)) {

    $_SESSION['idC'] = $linha['idC'];

    

    if ($linha['vendedor'] == 1)
      header("Location:vendedor/HTML/index.html");
    else
      header("Location:cliente/HTML/index.html");
  }
} else {
  header("Location:index.html");
}
mysqli_close($conexao);
