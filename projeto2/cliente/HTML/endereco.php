<?php

session_start();
// Configurações do banco de dados
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "ecommerce"; // Nome do banco de dados

// Dados do formulário (substitua pelos dados reais)
$numero = $_POST["numero"];
$cidade = $_POST["cidade"];
$bairro = $_POST["bairro"];
$cpf = $_POST["cpf"];
$uf = $_POST["uf"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$pais = $_POST["pais"];





//include("../../login.php");



// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
$cod = $_SESSION['idC'];
// Query SQL para inserir dados na tabela
$sql = "UPDATE clientes Set nC = '$numero', cidadeC = '$cidade', bairroC = '$bairro', CPFC = '$cpf', UFC = '$uf', CEPC = '$cep', enderecoC = '$endereco',  paisC = '$pais' WHERE idC = '$cod'"; // (nC, cidadeC, bairroC, CPFC, UFC, CEPC, enderecoC, paisC) VALUES ('$numero', '$cidade', '$bairro', '$cpf','$uf', '$cep', '$endereco', '$pais')";



if ($conn->query($sql) === TRUE) {
    header("Location:index.html");
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
