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

    $sqlp = "SELECT * from produtos ";

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
    $nomeP = "";
    $valorP = "";
    $descricaoP = "";
    $imgP = "";


    if ($linha = mysqli_fetch_array($resultado)) {
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

    $resultadop = mysqli_query($conn, $sqlp);

    $nomeP = "";
    $valorP = "";
    $descricaoP = "";
    $imgP = "";
    $idP = "";

    ?>

    <nav class="menu-lateral">

        <ul>
            <li class="item-menu ativo">
            <a href="support.php">
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

        <section class="slider">
            <div class="slider-content">
                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">


                <div class="slide-box primeiro">
                    <a href="#"><img src="../MD/slide1.png" alt="slide1" srcset="" class="img-desktop"></a>
                </div>
                <div class="slide-box">
                    <a href="#"><img src="../MD/slide2.png" alt="slide2" srcset="" class="img-desktop"></a>
                </div>
                <div class="slide-box">
                    <a href="#"><img src="../MD/slide3.png" alt="slide3" srcset="" class="img-desktop"></a>
                </div>
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>



                <div class="nev-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>

                </div>
            </div>
        </section>
        <div class="space-baixopromo">

        </div>
    </main>

    <section class="produtos-geral">


        <?php
        while ($linha = mysqli_fetch_array($resultadop)) {
            
            $idP = $linha['idP'];
            $nomeP = $linha['nomeP'];
            $valorP = $linha['valorP'];
            $descricaoP = $linha['descricaoP'];
            $imgP = $linha['imgP'];

        ?>

            <a <?php echo "href='produto.php?nome=$nomeP&valor=$valorP&descricao=$descricaoP&img=$imgP&idp=$idP'"; ?>>
                <div class="produto">
                    <img src="../../vendedor/UPLOAD/<?php echo $imgP; ?>" alt="" style="width:270px;
    height: 300px; margin-right: 15px;">
                    <p><?php echo "<p>$nomeP</p>" ?></p>
                    <p class="valor">R$<?php echo "$valorP" ?></p>

                </div>
            </a>

        <?php
        }

        ?>

    </section>


    <footer>

    </footer>


</body>

</html>



