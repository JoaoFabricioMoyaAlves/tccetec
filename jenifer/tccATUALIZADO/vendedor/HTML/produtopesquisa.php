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


$psq = $_POST['search-txt'];

$sqlp = "SELECT * from tabela_produto where nome_produto like '$psq%' ";


$resultadop = mysqli_query($conn, $sqlp);

$idP = "";
$nomeP = "";
$valorP = "";
$descricaoP = "";
$imgP = "";

?>
    <nav class="menu-lateral">
   
        <ul>
         <li class="item-menu ativo">
             <a href="index.php">
                 <span class="icon"><i class="bi bi-shop"></i></span>
                 <span class="txt-link">Vendas</span>
             </a>
          </li>
         
          <li class="item-menu">
             <a href="produtos.php">
                 <span class="icon"><i class="bi bi-basket2-fill"></i></span>
                 <span class="txt-link">Produtos</span>
             </a>
          </li>
          <li class="item-menu">
          <a href="msg.php">
            <span class="icon"><i class="bi bi-basket2-fill"></i></span>
            <span class="txt-link">Mensagens</span>
        </a>
     </li>
     
        </ul>
     
       </nav>
<nav class="menu-lateral2">
 
    <div class="btn-expandir3">
        <i class="bi bi-x-lg" id="btn-exp3"></i>
    </div>
    <div class="usuario">
        <i class="bi bi-person-circle" id="mover" style="margin-left:60px;"></i>
        <span class="txt-cliente" id="mover-txt">Vendedor</span>
        <span class="txt-cliente2" id="mover-txt">3800-9292</span>
    </div>
    <ul>
     <li class="item-menu2">
     <a href="../../login.php">
             <span class="icon2"><i class="bi bi-box-arrow-right"></i></span>
             <span class="txt-link2">Sair</span>
         </a>
      </li>
 </nav>

   <main>

<div class="space-top" >
<p>..</p>
</div>

<div class="menu-top">
    <div class="btn-expandir2">
        <i class="bi bi-person-circle" id="btn-exp2"></i>
       </div>
    <div class="btn-expandir">
        <i class="bi bi-list" id="btn-exp"></i>
       </div>

       <form action="produtopesquisa.php"class="search-box" method="post">
    <input type="search" name="search-txt" id="search" placeholder="Pesquisar" class="search-txt">
    <button class="search-btn" type="submit"><i class="bi bi-search"></i></button>
<div class="carrinho">
 

</div>

</div>

</main>
<div class="car-space"></div>
<div class="carrinho-ender">
<div class="space-produto-carrinho">


 </div>
<?php
while ($linha = mysqli_fetch_array($resultadop))
{
    
    $idP = $linha['cod_produto'];
    $nomeP = $linha['nome_produto'];
    $valorP = $linha['valor_produto'];
    $descricaoP = $linha['nome_produto'];
    $imgP = $linha['imagem_produto'];
    $desconto = $linha['porcentagem_desconto_produto'];
    $valor_com_desconto = (1-($linha['porcentagem_desconto_produto']/100)) *  $linha['valor_produto'] ; 


    ?>
        
       
 <div class="produto-carrinho">
 <img src="../../imagens/<?php echo $imgP ;?>" alt="produto" ">
    <div class="prdotuo-carrinho-nome-valor" style="white-space: nowrap;">
        <h2><?php echo "$descricaoP" ?></h2>
        <p>R$<?php echo "$valor_com_desconto" ?></p>
        <p>Desconto:<?php echo "$desconto" ?>%</p>
    </div>
    <a <?php echo "href='editproduto2.php?idp=$idP'"; ?> class="edit-produto"><i class="bi bi-pencil-square"></i></a>
  <a <?php echo "href='exproduto.php?idp=$idP'"; ?> class="excluir-produto"><i class="bi bi-x-circle-fill"></i></a>
 </div>

   <?php
}   

 ?>

 
 

  <div class="carrinho-rodape2">
    
    
        <a href="addproduto.php">
            
             <button type="submit" >Adicionar Produto <i class="bi bi-plus-circle-fill"></i></button>
            
        </a>
 

</div>
  
</body>