<?php
// Configurações do banco de dados
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "ecommerce"; // Nome do banco de dados

// Dados do formulário (substitua pelos dados reais)
$nome=$_POST  ["nome"];
$email=$_POST  ["email"];
$senha=$_POST  ["senha"];
$telefone=$_POST ["telefone"];

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Query SQL para inserir dados na tabela
$sql = "INSERT INTO clientes (nomeC, emailC, senhaC, telefoneC) VALUES ('$nome', '$email', '$senha', '$telefone')";

if ($conn->query($sql) === TRUE) {
    header("Location:index.html");
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>