
<?php
    session_start();
    $servername = "localhost"; // Nome do servidor MySQL
    $username = "root"; // Nome de usuário do banco de dados
    $password = ""; // Senha do banco de dados
    $dbname = "ecommerce";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    $bd = mysqli_select_db($conn, "ecommerce");


    $sqlp = "SELECT * from vendas ";


    $resultadop = mysqli_query($conn, $sqlp);

    $idV = "";
    $idC = "";
    $cod_produto = "";
    $valorP = "";
   
 
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
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
            form input{
                position:static;
            }
        </style>
         <link rel="shortcut icon" href="../../assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">
</head>
<body style="height:800px">
   
   <nav class="menu-lateral" >
   
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
          <i class="bi bi-person-circle" id="mover" style="margin-left:60px;"></i>
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
   <div class="search-box">
      <input type="search" name="search-txt" id="search" placeholder="Pesquisar" class="search-txt">
      <a href="#" class="search-btn">
          <i class="bi bi-search"></i>
      </a>
   </div>
   <div class="carrinho">
     
   
   </div>
   
   </div>
   
   </main>
   <div class="form-space"></div>
   <div class="formulario-ender3" style="height:600px;margin-top:30px;">
   
   
   <div class="container" style="margin-top:60px; position: absolute; top: 38%; left: 50%; transform: translate(-50%, -50%);">
   
          <div class="container-principal-produtos" style="width:1080px;margin-left:50px;">
           <h4 class="page-header">CADASTRO DE PRODUTO</h4>
           <hr>
              <form action="../../cadastro.php" method="POST" enctype="multipart/form-data" name="upload" style="position:static;">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Descrição do Produto:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="descricao_produto" placeholder="Digite o nome do produto" " required/ >
                  </div>
                  <div class="form-group col-md-4">
                    <label>Valor do Produto:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="valor_produto" placeholder="Digite o valor do produto" required/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Porcentagem do Produto:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="porcentagem_desconto_produto" placeholder="Digite oa porcentagem do produto" />
                  </div>
   
                    <div class="form-group col-md-2">
                      <label>Tipo do Produto:</label>
                      <select  name="tipo_produto" class="form-control form-control-sm col-md-10 col-sm-10" placeholder="Digite o tipo do produto" required>
                        <option value="0">Home</option>
                        <option value="2">Mulher</option>
                        <option value="1">Homem</option>
                        <option value="3">Infantil</option>
                     </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label>Categoria Produto:</label>
                      <select  name="categoria_produto" class="form-control form-control-sm col-md-10 col-sm-10" placeholder="Digite o tipo do produto" required>
                        <option value="Moletom">Moletom</option>
                        <option value="Camisa">Camisa</option>
                        <option value="Cropped">Cropped</option>
                        <option value="Vestido">Vestido</option>
                        <option value="Macaquinho">Macaquinho</option>
                        <option value="Pijama">Pijama</option>
                        <option value="calça">Calça</option>
                        <option value="Short">Short</option>
                        <option value="Saia">Saia</option>
                        <option value="Tenis">Tenis</option>
                        <option value="Sandália">Sandália</option>
                        <option value="Sapatilha">Sapatilha</option>
                        <option value="Carteira">Carteira</option>
                        <option value="Boné">Boné</option>
                        <option value="Cinto">Cinto</option>
                        <option value="Óculos">Óculos</option>
                        <option value="Pochete">Pochete</option>
                        <option value="Relógio">Relógio</option>
                        <option value="Anel">Anel</option>
                        <option value="Bolsa">Bolsa</option>
                        <option value="Brinco">Brinco</option>
                        <option value="Colar">Colar</option>
                        <option value="Pulseira">Pulseira</option>
                     </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8">
                                  <!--Realizando Upload de Imagem-->
                              <label class="control-label">Imagem</label>
                              <input class="form-control" type="file" required name="imagem_produto">
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                    <label>Descrição do Produto:</label>
                    <textarea cols="4" rows="2" class="form-control col-md-8" name="descricao_detalhada_produto" placeholder="Digite alguma descrição sobre o produto"></textarea>
                  </div>
                </div>
                <input type="submit" class="btn btn-primary" name="btn_enviar" value="Cadastrar">
              </form>
            </div>
         </div><!--Fechando container bootstrap-->
      
   </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    

</body>