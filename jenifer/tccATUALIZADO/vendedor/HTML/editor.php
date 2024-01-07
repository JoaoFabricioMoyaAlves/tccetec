<?php
// Configurações do banco de dados
// Configurações do banco de dados
$servername = "localhost"; // Nome do servidor MySQL
$username = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "ecommerce"; // Nome do banco de dados




$idP = $_GET['idp'];
// Dados do formulário (substitua pelos dados reais)
$nm_produto = $_POST['descricao_detalhada_produto'];
$valor_produto = $_POST['valor_produto'];
$porcentagem_desconto_produto = $_POST['porcentagem_desconto_produto'];


$tipo_produto =$_POST['tipo_produto']; 
$categoria_produto =$_POST['categoria_produto']; 
$ds_produto = $_POST['descricao_produto'];


$pasta='../../imagens';
$permitido=array('image/jpg','image/jpeg','image/pjpeg'); //extensões permitidas
$img=$_FILES['picture__input2'];

$modifica = false;

if(empty($_FILES['picture__input2']['name'])) 
{

 $modifica = false;
}
else{
    $modifica = true;
}


$tmp=$img['tmp_name'];
$name=$img['name']; //nome da imagem;
$type=$img['type']; 

;


// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
$imagem='img-'.time().'.jpg';


//   echo $imagem;
  // exit;
 


   if($modifica == true)
   {
         
    $sql = "UPDATE tabela_produto Set     
tipo_produto = '$tipo_produto',
nome_produto = '$ds_produto',
categoria_produto = '$categoria_produto',
descricao_produto = '$nm_produto',
valor_produto = '$valor_produto',
porcentagem_desconto_produto = '$porcentagem_desconto_produto',
imagem_produto = '$imagem'
WHERE cod_produto = '$idP'";


   upload($tmp,$imagem,500,$pasta);

   }
   else{


    $sql = "UPDATE tabela_produto Set     
    tipo_produto = '$tipo_produto',
    nome_produto = '$ds_produto',
    categoria_produto = '$categoria_produto',
    descricao_produto = '$nm_produto',
    valor_produto = '$valor_produto',
    porcentagem_desconto_produto = '$porcentagem_desconto_produto'
    
    WHERE cod_produto = '$idP'";
    
}







if ($conn->query($sql) === TRUE) {
    header("Location:produtos.php");
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