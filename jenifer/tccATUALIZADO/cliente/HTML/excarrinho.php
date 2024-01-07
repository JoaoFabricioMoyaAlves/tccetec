<?php
   
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "ecommerce";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    $bd = mysqli_select_db($conn, "ecommerce");

    $idCar = $_GET['idCar'];
     $idP = $_GET['idP'];
     $idC = $_GET['idC'];
     
    $sql = "DELETE  from carrinhos  WHERE cod_produto = '$idP' AND idC = '$idC' AND idCar = '$idCar'";

    if ($conn->query($sql) === TRUE) {
        header("Location:carrinho.php");
    } else {
        echo "Erro ao excluir produto: " . $conn->error;
    }
    
    // Fecha a conexão com o banco de dados
    $conn->close();



    ?>
 
  
  
