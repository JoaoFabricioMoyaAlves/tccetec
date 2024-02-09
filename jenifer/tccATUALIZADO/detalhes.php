
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harmony Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="cliente/CSS/style.css">
    <style>
    body{
        background-color: #C0C0C0;
    }
</style>
<link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">
</head>

<body style="height:100%;">
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
    $cod_produto = $_GET['cod'];
    

    $sql2 = "SELECT * from tabela_produto  WHERE cod_produto = '$cod_produto'";

    

    $resultado2 = mysqli_query($conn, $sql2);
     
    $nome = "";
    $valor = "";
    $descricao = "";
    $img = "";
    $categoria = "";

    if ($linha = mysqli_fetch_array($resultado2)) {
        $nome = $linha['descricao_produto'];
        $valor = $linha['valor_produto'];
        $descricao = $linha['nome_produto'];
        $img = $linha['imagem_produto'];
        $categoria = $linha['categoria_produto'];

        $valor_com_desconto = (1-($linha['porcentagem_desconto_produto']/100)) *  $linha['valor_produto'] ;

        $nome =  str_replace("\n", "</p>\n<p>", '<p>'.$nome.'</p>');
    }


    

 ?>
   <div class="btnvoltar">
    <a href="home.php">
    <i class="bi bi-arrow-left-circle-fill"></i> voltar
    </a>
</div>
    <div class="form-space"></div>
    <div class="formulario-ender" style="box-shadow: 8px 8px 5px black">
        <div class="pag-produto">

            <img src="imagens/<?php echo $img; ?>" alt="produto1" class="img-produto">
            
            <div class="lyt-produto">
                <h2 class="nome-produto"><?php echo "<p>$descricao</p>" ?></h2>
                <h2 class="valor-produto">R$<?php echo "$valor_com_desconto" ?></h2>


                
                 <div style="display:flex;margin-top:130px;">
                 <?php
                $sapato = array("Tenis","Sandália","Sapatilha","Calça","Short");
                $nao_roupa = array("Boné","Cinto","Óculos","Relógio","Anel","Bolsa","Brinco","Colar","Pulseira");
                if(in_array($categoria, $sapato)){
                    echo " <select class='tamanhos' style='display:flex;height:50px;margin-top:165px;' name='tamanhos' id='tamanhos' class='tambn'>
                        <option value='40'>40</option>
                        <option value='41'>41</option>
                        <option value='42'>42</option>
                        <option value='43'>43</option>
                        <option value='44'>44</option>
                                     </select>";

                }elseif(in_array($categoria, $nao_roupa)){
                    echo " ";
                       
                }else{
                   echo " <select class='tamanhos' style='display:flex;height:50px;margin-top:165px;' name='tamanhos' id='tamanhos' class='tambn'>
                        <option value='p'>P</option>
                        <option value='m'>M</option>
                        <option value='g'>G</option>
                        <option value='gg'>GG</option>
                                     </select>";}
                                     ?>
                                     <a <?php echo "href='cliente/HTML/addcarrinho.php?idp=$cod_produto&valor=$valor_com_desconto'"; ?> class="tambn" >  <button type="submit">Comprar</button></a>
                 </div>
            </div>
            
        </div>
        <h2 class="descricaoT">Descrição:</h2>
        <div class="descricao"  >

                    <?php echo "<p>$nome</p>" ?>
                  
                    

                </div>
    </div>

</body>