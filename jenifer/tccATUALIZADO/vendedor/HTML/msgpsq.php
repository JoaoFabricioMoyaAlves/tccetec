
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
    if ( $psq == true){
    


   

    
   
   
 

    

?>
   

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
   <script src="../JS/script.JS" defer></script> 
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">
   <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">

</head>
<body>
 
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
            <span class="icon"><i class="bi bi-envelope-fill"></i></span>
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
        <i class="bi bi-person-circle" id="mover" style="margin-left:60px;" ></i>
        <span class="txt-cliente" id="mover-txt">Harmony Store</span>
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

 
       <form action="msgpsq.php"class="search-box" method="post">
    <input type="search" name="search-txt" id="search" placeholder="Pesquisar" class="search-txt">
    <button class="search-btn" type="submit" style="
    background-color: transparent;
    border:none;
    font-size:22px;
    "><i class="bi bi-search"></i></button>
        
 
    </form>
<div class="carrinho">
   

</div>

</div>

</main>
<div class="form-space"></div>
<div class="formulario-ender2">

<form action="limparmsg.php" method="post">
    <button class="limpar-notfic" type="submit">Limpar Tudo</button>
</form>
<div style="
border-bottom:3px solid black;
margin-bottom:30px;
"></div>

<?php

$sqlc2 = "SELECT * from clientes where nomeC like '$psq%' ";


$resultadoc2 = mysqli_query($conn, $sqlc2);
  
$nomeC = "";
$imgC = "";
$emailC = "";
$telefoneC = "";
$idC = "";


    

    
while ($linha = mysqli_fetch_array($resultadoc2)) {
              
    $nomeC = $linha['nomeC'];
    $imgC = $linha['imgC'];
    $emailC = $linha['emailC'];
    $telefoneC = $linha['telefoneC'];
    $idC = $linha['idC'];
}

if($idC == null){
    echo"<h1 style='font-size:62px;color:#d3d3d3;'>Nenhum Comentário Encontrado :( </h1>";
      exit();  
  }else{

$sql = "SELECT * from contato where idc = '$idC' ";




$resultadoc = mysqli_query($conn, $sql);

    $ctcod = "";
    $ctnome = "";
    $ctemail = "";
    $cttelefone = "";
    $ctmsg = "";
    $idC = "";
    

   


    while ($linha = mysqli_fetch_array($resultadoc)) {
            
        $ctcod = $linha['CTcod'];
        $ctnome = $linha['nomeCT'];
      $ctemail = $linha['emailCT'];
      $cttelefone = $linha['telefoneCT'];
      $ctmsg = $linha['mensagemCT'];
      $idC = $linha['idC'];
    
      
     
  
     
      




   ?>
    
            

 <div class="box-ct">
   
    <div class="boxrep-ct">
        <div class="box1-ct" style="display:flex;">
        <?php  if($imgC == TRUE){
                                           
                                            echo" <img src='../../imagens/$imgC' alt='produto' style='width:50px;height:50px;border-radius:50%;margin-right:20px;margin-top:5px;' '> ";
                                            
                                          }else{
                                         
                                           
                                           echo"<ion-icon name='person-outline' style='width:50px;height:50px;border-radius:50%;margin-right:20px;margin-top:5px;'></ion-icon>";
                                        }
                                          ?>
            <div style="display:block;">
                <h3 class="nome-ct" ><?php echo "$nomeC" ?></h3>
                <h3 class="email-ct"><?php echo "$emailC" ?></h3>
            </div>
        </div>
        <div class="box2-ct">
            <h3 class="tel-ct">tel:<?php echo "$telefoneC" ?></h3>
            <h3 class="cod-ct">nº<?php echo "$ctcod" ?></h3>
        </div>
    </div>
     <div class="msg-ct">
        <h4><?php echo "$ctmsg" ?></h2>
     </div>
     <a href="<?php echo "exmsg.php?ctcod=$ctcod"; ?> " name="caraio" style="
    margin-left:98%;
    margin-top:15px;
    color:blue;
    font-size:18px;
    "><i class="bi bi-trash"></i></a>
    
 </div>



        <?php
       
        }
    }
    }else{
        header("Location:msg.php");
    }
        ?>





    
</div>


</body>