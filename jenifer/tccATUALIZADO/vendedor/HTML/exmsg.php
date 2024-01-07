<?php
   
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "ecommerce";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    $bd = mysqli_select_db($conn, "ecommerce");
    
    
    $ctcod = $_GET['ctcod'];

    $sql = " DELETE  from contato  WHERE CTcod = '$ctcod'";

    if ($conn->query($sql) === TRUE) {
        header("Location:msg.php");
    } else {
        echo "Erro ao excluir notificação: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();



    ?>
 
  
  
