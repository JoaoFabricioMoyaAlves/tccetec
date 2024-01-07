<?php
// Configurações do banco de dados
// Configurações do banco de dados
session_start();
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "ecommerce"; // Nome do banco de dados


$pasta='imagens';
$permitido=array('image/jpg','image/jpeg','image/pjpeg'); //extensões permitidas
$img=$_FILES['picture__input'];
$tmp=$img['tmp_name'];
$name=$img['name']; //nome da imagem;
$type=$img['type']; 

;





$cod = $_SESSION['idC'];
// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
$imagem='img-'.time().'.jpg';


//   echo $imagem;
  // exit;
   upload($tmp,$imagem,500,$pasta);
// Query SQL para inserir dados na tabela
$sql = "UPDATE clientes Set imgC = '$imagem' WHERE idc = '$cod'";

if ($conn->query($sql) === TRUE) {
    header("Location:clienteinfo.php");
  //  echo "foiiiiiiiiiiiiiiiiiiiii";
   // exit;
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}


function upload($tmp,$nome,$largura,$pasta){
    $img = imagecreatefromjpeg($tmp);
    
    $x = imagesx($img);
    $y = imagesy($img);
    $altura =($largura *$y)/$x;
    $nova=  imagecreatetruecolor($largura, $altura);
    imagecopyresampled($nova,$img,0,0,0,0,$largura,$altura,$x,$y);
    imagejpeg($nova,"$pasta/$nome");
    imagedestroy($nova);
    imagedestroy($img);
    
    return($nome);
}



// Fecha a conexão com o banco de dados
$conn->close();
?>