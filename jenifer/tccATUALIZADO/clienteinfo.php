<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="cliente/CSS/style.css">
    <link rel="stylesheet" href="vendedor/CSS/style.css">
   <script src="p.js" defer></script> 
   <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">

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

    $nomeC = "";
    $email = "";
    $numero = "";
    $cidade = "";
    $bairro = "";
    $cpf = "";
    $uf = "";
    $cep = "";
    $endereco = "";
    $pais = "";

    if ($linha = mysqli_fetch_array($resultado)) {
        $nomeC = $linha['nomeC'];
        $email = $linha['emailC'];
        $numero = $linha['nC'];
        $cidade = $linha['cidadeC'];
        $bairro = $linha['bairroC'];
        $cpf = $linha['CPFC'];
        $uf = $linha['UFC'];
        $cep = $linha['CEPC'];
        $endereco = $linha['enderecoC'];
        $pais = $linha['paisC'];
        $imgC = $linha['imgC'];
    }

    ?>




<div class="formulario-enderinfo">
<div class="btnvoltar">
    <a href="home.php">
    <i class="bi bi-arrow-left-circle-fill"></i> voltar
    </a>
</div>
<div style="
display: flex;
padding-bottom:30px;
border-bottom:1px solid #c7c6c6;
">
    
    <form action="imgcliente.php" enctype="multipart/form-data" method="post" style="display: flex; width:280px; margin-left:100px;margin-top:50px;">
    
         <div class="lyt-form">
    
                    <label class="picture"  for="picture__input" tabIndex="0">
                      <!--  <span class="picture__image"></span> -->
    
    
    
                        <?php echo '<img id="minhaImagem" src="imagens/'.$imgC.'" class="picture__image" />'  ?>
                      </label>
    
                      <input type="file" name="picture__input" id="picture__input">
         </div>
        <button type="submit" class="btnimgc" style="position: relative;">Carregar.</button>
    </form>
    <div class="necliente" style="min-width:200px;max-width:200px">
    
        <h2>Conta</h2>
        <h3><?php echo "$nomeC" ?></h3>
        <h3><?php echo "$email" ?></h3>
    </div>
         <a href="index.html" class="btn-exit" style="    width: 120px;
    height: 40px;  margin-top: 85px;
    margin-left: 140px;"><button>Sair</button></a>
</div>


 <form action="cliente/HTML/enderecoedit.php" method="POST"  class="form-endereco" enctype="multipart/form-data">
  





    
      <div class="form-nome">
          <label for="nome" class="form-nome" style="color:black;">Editar Endereço:</label>
       
      </div>
      <div class="form-n">
        <label for="numero">N°</label>
        <input type="number" name="numero" id="numero" placeholder="<?php echo "$numero" ?>">
    </div>
      <div class="form-cidade">
          <label for="cidade">Cidade:</label>
          <input type="text" name="cidade" id="cidade" placeholder="<?php echo "$cidade" ?>">
      </div>
      <div class="form-bairro">
          <label for="bairro">Bairro:</label>
          <input type="text" name="bairro" id="bairro" placeholder="<?php echo "$bairro" ?>">
      </div>
    

      <div class="form-cpf">
          <label for="cpf">CPF:</label>
          <input type="text" name="cpf" id="cpf" placeholder="<?php echo "$cpf" ?>" >
      </div>
      <div class="form-uf">
          <label for="uf">Estado:</label>
          <input type="text" name="uf" id="uf" placeholder="<?php echo "$uf" ?>">
      </div>
      <div class="form-cep">
          <label for="cep">CEP:</label>
          <input type="text" name="cep" id="cep" placeholder="<?php echo "$cep" ?>">
      </div>
      <div class="form-rua">
          <label for="rua">Endereço:</label>
          <input type="text" name="endereco" id="endereco" placeholder="<?php echo "$endereco" ?>">
      </div>
      <div class="form-pais">
        <label for="pais">País:</label>
        <input type="text" name="pais" id="pais" placeholder="<?php echo "$pais" ?>">
    </div>
      <button type="submit" class="bt-endereco">Editar</button>
     
 </form>

</div>


</body>