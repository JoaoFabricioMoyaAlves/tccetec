<!--Criando segurança para não deixar que usuários entrem no sistema sem fazer login-->
<?php
//include("seguranca.php");

//entrada de formulário
$nm_produto = $_POST['descricao_produto'];

$nn_produto = nl2br($nm_produto);
$valor_produto = $_POST['valor_produto'];
$porcentagem_desconto_produto = $_POST['porcentagem_desconto_produto'];


$tipo_produto =$_POST['tipo_produto']; 
$categoria_produto =$_POST['categoria_produto']; 
$ds_produto = $_POST['descricao_detalhada_produto'];

//parametros para imagem
$pasta='imagens';
$permitido=array('image/jpg','image/jpeg','image/pjpeg'); //extensões permitidas
$img=$_FILES['imagem_produto'];
$tmp=$img['tmp_name'];
$name=$img['name']; //nome da imagem;
$type=$img['type']; //tipo nativo do arquivo;
    include("conexao.php");
    mysqli_select_db($conexao,"ecommerce");
    //require('funcao.php');



    if(!empty($name) && in_array($type, $permitido)){
        $imagem='img-'.time().'.jpg';







       
     //   echo $imagem;
       // exit;
        upload($tmp,$imagem,500,$pasta); //upload + conversão da img com 500px;
        $avaliacao = 1; 
       // $sql = "INSERT INTO tabela_produto VALUES (DEFAULT,'$categoria_produto', '$nm_produto', '$avaliacao','$valor_produto','$porcentagem_desconto_produto','$imagem','$tipo_produto','$ds_produto')";
        $sql = "INSERT INTO tabela_produto (tipo_produto, categoria_produto, nome_produto, descricao_produto, avaliacao_produto, valor_produto, porcentagem_desconto_produto,  imagem_produto) VALUES ('$tipo_produto', '$categoria_produto', '$nm_produto', '$ds_produto', '$avaliacao', '$valor_produto', '$porcentagem_desconto_produto', '$imagem')";
       
       echo "$tipo_produto";
      

        if ($conexao->query($sql) === TRUE )
        header("Location:vendedor/HTML/produtos.php");
        } else {
            echo "Erro ao inserir registro: " . $conn->error;
        }



     //    if($tipo_produto == 1)
       //     header("Location:homem.php");
       //  else if($tipo_produto == 2)
         //   header("Location:Mulher.php");
        // else if($tipo_produto == 3)
          //  header("Location:infantil.php");
    
   // }else{
     //   echo "Extensão de arquivo não suportada";
   // }



    function upload($tmp,$name,$largura,$pasta){
        $img = imagecreatefromjpeg($tmp);
        $x = imagesx($img);
        $y = imagesy($img);
        $altura =($largura *$y)/$x;
        $nova=  imagecreatetruecolor($largura, $altura);
        imagecopyresampled($nova,$img,0,0,0,0,$largura,$altura,$x,$y);
        imagejpeg($nova,"$pasta/$name");
        imagedestroy($nova);
        imagedestroy($img);
        
        return($name);
    }


 
    
mysqli_close($conexao);
?>



