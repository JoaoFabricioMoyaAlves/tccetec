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
$telefone=$_POST  ["telefone"];
$mensagem=$_POST  ["mensagem"];

session_start();

$cod = $_SESSION['idC'];


// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}



//   echo $imagem;
  // exit;
 
// Query SQL para inserir dados na tabela
$sql = "INSERT INTO contato (nomeCT, emailCT, telefoneCT, mensagemCT, idC) VALUES ('$nome', '$email', '$telefone', '$mensagem', '$cod')";

if ($conn->query($sql) === TRUE) {
    header("Location:contato.php");
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}




// Fecha a conexão com o banco de dados
$conn->close();
?>