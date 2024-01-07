<?php
   
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "ecommerce";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    $bd = mysqli_select_db($conn, "ecommerce");

       $data = date('y/m/d');
      $hora = date('h:i:s');
     $idP = $_GET['idP'];
     $idC = $_GET['idC'];
     $valorP = $_GET['valorP'];

     $sql2 = "INSERT INTO vendas  (idC, cod_produto, valorP, dataV, horaV) VALUES ('$idC', '$idP', '$valorP', '$data', '$hora')";
     echo "$sql2";
     if ($conn->query($sql2) === TRUE) {
        
            $sql = "DELETE  from carrinhos  WHERE  idC = '$idC'";

                if ($conn->query($sql) === TRUE) {
                    header("Location:pagamento.php");
                } else {
                    echo "Erro ao excluir produto: " . $conn->error;
                }
                
                // Fecha a conexão com o banco de dados
                $conn->close();



       


     } else {
         echo "Erro ao inserir registro: " . $conn->error;
     }
     


    
  ?>