<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
   <script src="../JS/script.JS" defer></script> 
   <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">
<style>
    body{
        background-color: #C0C0C0;
    }
</style>

</head>
<body>
    <?php 
    session_start();
     $servername = "localhost"; // Nome do servidor MySQL
   $username = "root"; // Nome de usuário do banco de dados
   $password = ""; // Senha do banco de dados
   $dbname = "ecommerce"; 
    
   $total = $_SESSION['total1'];
   $total2 = $_SESSION['total2'];
  
   // Cria uma conexão com o banco de dados
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   $bd = mysqli_select_db($conn, "ecommerce");
   
   $cod = $_SESSION['idC'];

    

   $sql = "SELECT * from clientes  WHERE idC = '$cod'";
   
   $resultado = mysqli_query($conn, $sql);
   
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
   

    
    ?>


    
<div class="form-space" ></div>
<div class="btnvoltar">
    <a href="../../home.php">
    <i class="bi bi-arrow-left-circle-fill"></i> voltar
    </a>
</div>
<div class="formulario-ender" style="box-shadow:8px 8px 5px black;">
<div class="rapart-pagamento">
 <div class="pagamentoqr">
    <?php 
            echo" <p>$nomeC,$email,$senha,$telefone ,$numero,$cidade,$bairro,$cpf ,$uf ,$cep , $endereco , $pais</p>";
    ?>
    <img src="../MD/qrcode.png" alt="qrcode">
 </div>
  <div class="pagamentopp">
    <div class="pagamentop1">
    <h2>Valor Total+Frete</h2>
    <p>Frete:R$10,00</p>
    <h3>R$<?php echo "$total2" ?></h3>
</div>
    <div class="pagamentop2">
    <h2>Support:</h2>
    <h3>Email</h3>
    <p>tccdarapaziada@gmail.com</p>
    <h3>Telefone</h3>
    <p>(99)9999-9999</p>
    </div>
  </div>
  </div>
  <div class="correio">
      <h2>Acompanhe o Envio pelo link logo abaixo.</h2>
      <a href="https://www.correios.com.br/" >Correios (acompanhar)🚛</a>
  </div>
</div>


</body>