<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="../JS/script.JS" defer></script>
</head>

<body style="background-color: rgb(220, 220, 220);">
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


    if ($linha = mysqli_fetch_array($resultado)) {
        $idC = $linha['idC'];
        $nomeC = $linha['nomeC'];
        $email = $linha['emailC'];
    }

    ?>
 <?php
    $idP = $_GET['idp'];
   $nome = $_GET['nome'];
   $valor = $_GET['valor'];
   $descricao = $_GET['descricao'];
   $img = $_GET['img'];

 ?>
    <nav class="menu-lateral">

        <ul>
            <li class="item-menu ativo">
                <a href="index.php">
                    <span class="icon"><i class="bi bi-shop"></i></span>
                    <span class="txt-link">Loja</span>
                </a>
            </li>
            <li class="item-menu">
            <a href="support.php">
                    <span class="icon"><i class="bi bi-question-octagon-fill"></i></span>
                    <span class="txt-link">Suporte</span>
                </a>
            </li>
            <li class="item-menu">
            <a href="carrinho.php">
                    <span class="icon"><i class="bi bi-basket2-fill"></i></span>
                    <span class="txt-link">Carrinho</span>
                </a>
            </li>
           
            <li class="item-menu">
            <a href="endereco.php">
                    <span class="icon"><i class="bi bi-house-add"></i></span>
                    <span class="txt-link">Endereço</span>
                </a>
            </li>

        </ul>

    </nav>
    <nav class="menu-lateral2">

        <div class="btn-expandir3">
            <i class="bi bi-x-lg" id="btn-exp3"></i>
        </div>
        <div class="usuario">
            <i class="bi bi-person-circle" id="mover"></i>
            <span class="txt-cliente" id="mover-txt"><?php echo "<p>$nomeC</p>" ?></span>
            <span class="txt-cliente2" id="mover-txt"><?php echo "<p>$email</p>" ?></span>
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

        <div class="space-top">
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
            <a href="carrinho.php">
                    <i class="bi bi-basket2-fill"></i>
                </a>

            </div>

        </div>

    </main>
    <div class="form-space"></div>
    <div class="formulario-ender">
        <div class="pag-produto">

            <img src="../../vendedor/UPLOAD/<?php echo $img; ?>" alt="produto1" class="img-produto">
            <div class="lyt-produto">
                <h2 class="nome-produto"><?php echo "<p>$nome</p>" ?></h2>
                <h2 class="valor-produto">R$<?php echo "$valor" ?></h2>


                
                 <select class="tamanhos" name="tamanhos" id="tamanhos" class="tambn">
                    <option value="p">P</option>
                    <option value="m">M</option>
                    <option value="g">G</option>
                    <option value="gg">GG</option>
                </select>
                <a <?php echo "href='addcarrinho.php?idp=$idP&valor=$valor'"; ?> class="tambn" >  <button type="submit">Comprar</button></a>
            </div>
            
        </div>
        <h2 class="descricaoT">Descrição:</h2>
        <div class="descricao">

                    <p><?php echo "$descricao" ?>
                    </p>

                </div>
    </div>


</body>