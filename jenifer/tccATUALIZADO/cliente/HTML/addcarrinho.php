<?php
 session_start();

// Configurações do banco de dados
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "ecommerce"; // Nome do banco de dados

// Dados do formulário (substitua pelos dados reais)
$idP = $_GET['idp'];
$valor = $_GET['valor'];

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

$cod = $_SESSION['idC'];


// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


// Query SQL para inserir dados na tabela
$sql2 = "INSERT INTO carrinhos  (idC, cod_produto, precoP) VALUES ('$cod', '$idP', '$valor')";
echo "$sql2";
if ($conn->query($sql2) === TRUE) {
    header("Location:carrinho.php");
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>