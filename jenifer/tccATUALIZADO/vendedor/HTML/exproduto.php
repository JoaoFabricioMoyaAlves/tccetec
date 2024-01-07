<?php
   
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "ecommerce";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    $bd = mysqli_select_db($conn, "ecommerce");

     $idP = $_GET['idp'];

    $sql = "DELETE  from tabela_produto  WHERE cod_produto = '$idP'";

    if ($conn->query($sql) === TRUE) {
        header("Location:produtos.php");
    } else {
        echo "Erro ao excluir produto: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();



    ?>
 
  
  
