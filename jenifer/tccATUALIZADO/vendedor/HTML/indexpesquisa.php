
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
    $sqlp3 = "SELECT * from clientes where nomeC like '$psq%' ";

     
        //if($sqlp3 => .error){
       //     header("Location:pError.php");
       // }else{

        
        
      

      
    $resultadop3 = mysqli_query($conn, $sqlp3);

  
    $idCc = "";
    

    while ($linha = mysqli_fetch_array($resultadop3)) {


      
        $idCc = $linha['idC'];
   
     $sqlp = "SELECT * from vendas  where idC = '$idCc' ";

    $resultadop = mysqli_query($conn, $sqlp);

    $idV = "";
    $idC = "";
    $cod_produto = "";
    $valorP = "";
    $dataV = "";
    $horaV = "";
    }
 
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
   <script src="../JS/script.JS" defer></script> 
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">
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
       <form action="indexpesquisa.php"class="search-box" method="post">
    <input type="search" name="search-txt" id="search" placeholder="Pesquisar" class="search-txt">
    <button class="search-btn" type="submit"><i class="bi bi-search"></i></button>
        
 
    </form>
<div class="carrinho">
   

</div>

</div>

</main>
<div class="form-space"></div>
<div class="formulario-ender2">

<form action="limparnot.php" method="post">
    <button class="limpar-notfic" type="submit">Limpar Tudo</button>
</form>
<div style="
border-bottom:3px solid black;
margin-bottom:30px;
"></div>

<?php
if(isset($resultadop))
      {
        
      
        while ($linha = mysqli_fetch_array($resultadop)) {
            
            $idV = $linha['idV'];
            $idC = $linha['idC'];
            $cod_produto = $linha['cod_produto'];
            $valorP = $linha['valorP'];
            $dataV = $linha['dataV'];
            $horaV = $linha['horaV'];
            $sqlc = "SELECT * from clientes  WHERE idC = '$idC'";
            
            $sqlp2 = "SELECT * from tabela_produto WHERE cod_produto = '$cod_produto'";
        
            $resultadoc = mysqli_query($conn, $sqlc);
        
            $nomeC = "";
            $imgC = "";
           
           
            if ($linha = mysqli_fetch_array($resultadoc)) {
                    
                $nomeC = $linha['nomeC'];
                $imgC = $linha['imgC'];
              
            }
        
            $resultadop2 = mysqli_query($conn, $sqlp2);
        
            $nomeP = "";
           
           
            if ($linha = mysqli_fetch_array($resultadop2)) {
                    
                $nomeP = $linha['nome_produto'];
              
            }
        
            


        ?>

            

  <div class="notifc" style="margin-top:3px;">
  <?php  if($imgC == TRUE){
                                           
                                           echo" <img src='../../imagens/$imgC' alt='produto' style='width:25px;height:25px;border-radius:50%;margin:auto;' > ";
                                           
                                         }else{
                                        
                                          
                                          echo"<ion-icon name='person-outline' style='width:25px;height:25px;border-radius:50%;margin:auto;'></ion-icon>";
                                       }
                                         ?>
 
    <h3><?php echo "$nomeC" ?></h3>
    <p class="nomep"><?php echo "$nomeP" ?></p>
    <p class="quantp">2x</p>
    <h4 class="datap"><?php echo "$dataV" ?></h4>
    <h4><?php echo "$horaV" ?></h4>
    <a href="<?php echo "exnotifc.php?idV=$idV"; ?> " name="caraio" style="
    margin-left:20px;
    margin-top:auto;
    color:blue;
    font-size:18px;
    "><i class="bi bi-trash"></i></a>
    
   
  </div>



         <?php
     }
    
    
    }else{
 echo"<h1 style='font-size:72px;color:#d3d3d3;'>Venda não Encontrada  :(</h1>";
    }
}else{
        header("Location:index.php");
}

        
        ?>


 


    
</div>


</body>