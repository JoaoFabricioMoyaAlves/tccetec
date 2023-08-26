<?php
$email=$_POST['c_email'];
$senha=$_POST['c_senha'];

include("conexao.php");



mysqli_select_db($conexao,"bd_etec");
$sql= mysqli_query($conexao, "SELECT * FROM tb_usuario where email_usuario='$email' 
and senha_usuario='$senha'")
 or die(mysqli_error($conexao));




    $cont = mysqli_num_rows($sql);
        if($cont>0){
           session_start();
           

         

          $_SESSION['email_usuario']=$email;
          $_SESSION['senha_usuario']=$senha;
          header("Location:listar_produto.php"); 
        }
        else{
            header("Location:index.html");
        }       
        mysqli_close($conexao);
?>