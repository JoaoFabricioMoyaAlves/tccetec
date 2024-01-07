<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
   <script src="../JS/script.JS" defer></script> 
   <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">

</head>
<body>
    <?php 
    session_start();
     $servername = "localhost"; // Nome do servidor MySQL
   $username = "root"; // Nome de usuário do banco de dados
   $password = ""; // Senha do banco de dados
   $dbname = "ecommerce"; 
    
   // Cria uma conexão com o banco de dados
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   $bd = mysqli_select_db($conn, "ecommerce");
   
   $cod = $_SESSION['idC'];
   
   $sql = "SELECT * from clientes  WHERE idC = '$cod'";
   
   $resultado = mysqli_query($conn, $sql);
   
   $idC = "";
   $nomeC = "";
   $email = "";
   $senha = "";
   $telefone = "";
   $numero = "";
   $cidade = "";
   $bairro = "";
   $cpf = "";
   $uf = "";
   $cep = "";
   $endereco = "";
   $pais = "";
   
   
   
   if($linha = mysqli_fetch_array($resultado))
   {
       $idC = $linha['idC'];
       $nomeC = $linha['nomeC'];
       $email = $linha['emailC'];
       $senha = $linha['senhaC'];
       $telefone = $linha['telefoneC'];
       $numero = $linha['nC'];
       $cidade = $linha['cidadeC'];
       $bairro = $linha['bairroC'];
       $cpf = $linha['CPFC'];
       $uf = $linha['UFC'];
       $cep = $linha['CEPC'];
       $endereco = $linha['enderecoC'];
       $pais = $linha['paisC'];
      
      
   }  
   
   $sql2 = "SELECT * from carrinhos  WHERE idC = '$cod'";
   
   $resultado2 = mysqli_query($conn, $sql2);
   $idCar = "";
   $idP = "";
   $valorP = "";
   
  



   ?>










         

       
<div class="btnvoltar">
    <a href="../../home.php">
    <i class="bi bi-arrow-left-circle-fill" ></i> voltar
    </a>
</div>
<div class="carrinho-ender">
<div class="space-produto-carrinho">
  </div>  
<?php

while($linha = mysqli_fetch_array($resultado2))
{
    $idCar = $linha['idCar'];
    $idP = $linha['cod_produto'];
    $valorP = $linha['precoP'];
    
   
   
 
$sqlp = "SELECT * from tabela_produto WHERE cod_produto = '$idP' ";


$resultadop = mysqli_query($conn, $sqlp);

$nomeP = "";
$valorP = "";
$descricaoP = "";
$imgP = "";






        while ($linha = mysqli_fetch_array($resultadop))
        {
            
        $nome = $linha['categoria_produto'];
        $valor = $linha['valor_produto'];
        $descricao = $linha['descricao_produto'];
        $img = $linha['imagem_produto'];
        $valor_com_desconto = (1-($linha['porcentagem_desconto_produto']/100)) *  $linha['valor_produto'] ;
        ?>


 <div class="produto-carrinho">
    <img src="../../imagens/<?php echo $img; ?>" alt="img-produto" >
    <div class="prdotuo-carrinho-nome-valor">
        <h2><?php echo "$nome" ?></h2>
        <p>R$<?php echo "$valor_com_desconto" ?></p>
    </div>
    <a <?php echo "href='excarrinho.php?idP=$idP&idC=$idC&idCar=$idCar'"; ?> class="excluir-produto"><i class="bi bi-x-circle-fill"style="color:red;"></i></a>
 </div>

 <?php
        }
    }
        ?>
 

  <div class="carrinho-rodape">
    
    <div class="car-endereco">
    <?php 
            echo" <p>$nomeC,$email,$senha,$telefone ,$numero,$cidade,$bairro,$cpf ,$uf ,$cep , $endereco , $pais</p>";
    ?>
    </div>
    <?php

$sqlv = "SELECT SUM(precoP) AS total FROM carrinhos WHERE idC = '$idC'";
$resultv = $conn->query($sqlv);

// Verifica se há resultados e exibe a soma na tela
if ($resultv->num_rows > 0) {
    $row = $resultv->fetch_assoc();
    $total = $row["total"];
    $total2 = $total + 10;
}
$_SESSION['total1'] = $total;
$_SESSION['total2'] = $total2;
   ?>
   

    <div class="valor-frete">
        <h2>Total:R$<?php echo "$total2" ?></h2>
        <p>Valor:R$<?php echo "$total" ?></p>
         <p class="p2">+R$10,00 Frete</p>
         
       
    </div>
    <?php 
    if(isset($valor))
    {
        ?>
        <a <?php echo "href='finalcarrinho.php?idP=$idP&idC=$idC&valorP=$valor'"?>><button for="btna">Comprar <i class="bi bi-basket2-fill"></i></button></a>
    

   <?php     
    }
   ?>     
    </div>


</div>

  
  
</body>