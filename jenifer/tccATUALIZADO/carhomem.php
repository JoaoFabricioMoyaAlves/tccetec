<!DOCTYPE html>
                                <html lang="pt-br">

                                <head>
                                  <meta charset="UTF-8">
                                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                  <title>Harmony Store</title>
                            
                                  <!--
                                    - favicon
                                  -->
                                  <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon" width="500" height="00">

                                  <!--
                                    - custom css link
                                  -->
                                  <link rel="stylesheet" href="./assets/css/style-prefix.css">
                                  <style>
    .a9{
      color: black;
    }
   </style>

                                  <!--
                                    - google font link
                                  -->
                                  <link rel="preconnect" href="https://fonts.googleapis.com">
                                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
                                    rel="stylesheet">
                                  
                                    <?php 
                                   session_start();
                                   include("conexao.php");
                                   $cod = $_SESSION['idC'];
                                   $catgo =$_GET['categoria'];
                                   
                                   //selecionando o banco de dados
                                                 $bd = mysqli_select_db($conexao, "ecommerce");
                                                 $sql2 = "SELECT * FROM clientes  WHERE idC = '$cod'";

                                                 $resultado2 = mysqli_query($conexao, $sql2);
                                                  
                                                 $imgC = "";
                                                
                                                 
                                                 
                                                 if($linha = mysqli_fetch_array($resultado2))
                                                 {
                                                     $imgC = $linha['imgC'];
                                                    
                                                     
                                                     
                                                 }  
                                    ?>
                                  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
  .container-main{
    display: flex;
    flex-direction: row;
    align-items: center;
  
          
  }  
  #carousel {
    height: 300px;
    width: 1200px;
    overflow: hidden; 
    font-family: roboto ;
    font-weight: bold;
    padding-bottom:40px;
                border-bottom:1px solid var(--cultured);
  }
  #carousel ul {
    list-style: none;
    padding: 0;
    display: flex;
    transition: transform 0.5s ease;
  }

  #carousel ul li {
    flex: 0 0 25%;
  }

  #prev, #next {
    display: inline-block;
    padding: 10px;
    background-color:#000000 ;
    color: #ffffff;
    cursor: pointer;
    margin: 0 10px;
    
  }
  .items-carrousel{
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
</style>
                                </head>

                                <body>
                                

                                  <!--
                                    - HEADER
                                  -->

                                  <header>

                                    <div class="header-top">

                                      <div class="container">

                                        <ul class="header-social-container">

                                          <li>
                                            <a href="#" class="social-link">
                                              <ion-icon name="logo-facebook"></ion-icon>
                                            </a>
                                          </li>

                                          <li>
                                            <a href="#" class="social-link">
                                              <ion-icon name="logo-twitter"></ion-icon>
                                            </a>
                                          </li>

                                          <li>
                                            <a href="#" class="social-link">
                                              <ion-icon name="logo-instagram"></ion-icon>
                                            </a>
                                          </li>

                                          <li>
                                            <a href="#" class="social-link">
                                              <ion-icon name="logo-linkedin"></ion-icon>
                                            </a>
                                          </li>

                                        </ul>

                                        <div class="header-alert-news">
                                          <p>
                                            <b>FRETE GRÁTIS</b>
                                            PEDIDO ACIMA R$55
                                          </p>
                                        </div>

                                        <div class="header-top-actions">

                                        </div>

                                      </div>

                                    </div>

                                    <div class="header-main">

                                      <div class="container">

                                        <a href="home.php" class="header-logo">
                                          <img src="./assets/images/logo/logo.png" alt="harmony store" width="310" height="130">
                                        </a>

                                     
                                         <form action="homempesquisa.php" class="header-search-container" method="post">
                                          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

                                          <button class="search-btn"type="submit">
                                            <ion-icon name="search-outline"></ion-icon>
                                          </button>
                                        </form>
                                      

                                        <div class="header-user-actions">

                                         <?php 
                                          if($imgC == TRUE){
                                            echo"<a href='clienteinfo.php' >";
                                            echo"<img src='imagens/$imgC' style='width:35px;height:35px;border-radius:50%;' > ";
                                            echo "</a>";
                                          }else{
                                          echo"<a href='clienteinfo.php' class='a9' >";
                                           echo "<button class='action-btn'>";
                                           
                                           echo"<ion-icon name='person-outline'></ion-icon>";
                                           echo "</a>";
                                           echo"</button>";
                                          }
                                         ?>

                                          

                                          

                                          <button class="action-btn">
                                            <a href="cliente/HTML/carrinho.php" class="a9" >
                                              <ion-icon name="bag-handle-outline"></ion-icon>
                                            </a>
                                            <span class="count">0</span>
                                          </button>

                                        </div>

                                      </div>

                                    </div>


                                    <nav class="desktop-navigation-menu">

                                      <div class="container">

                                        <ul class="desktop-menu-category-list">

                                          <li class="menu-category">
                                            <a href="home.php" class="menu-title">Home</a>
                                          </li>

                                          <li class="menu-category">
                                            <a href="homem.php" class="menu-title">Homens</a>
                                          </li>

                                          <li class="menu-category">
                                            <a href="mulher.php" class="menu-title">Mulheres</a>
                                          </li>

                                          <li class="menu-category">
                                            <a href="infantil.php" class="menu-title">Infantil</a> 
                                          </li>
                                        </li>

                                        <li class="menu-category">
                                          <a href="contato.php" class="menu-title">Contatos</a>

                                          
                                        </li>


                                        
                                      </div>

                                    </nav>

                                    <br>

                                        

                                        

                                      
                                    







                                
                                    <!--
                                      - BANNER
                                    -->

                                    <div class="banner" style="margin-left:80px;">

                                    <img src="./assets/images/baner.jpg" alt=" sale" class="banner-img">
                                            <img src="./assets/images/banner_homem.jpg" alt="women's latest fashion sale" class="banner-img" style="padding-bottom:60px;border-bottom:1px solid var(--cultured)">

                                          
                                    </div>
                                    <div class="container-main" style="margin-left:260px;margin-top:40px;">
       
        <div id="carousel" >
        <ul style="
                
                width:800px;
                ">
                    <li>
                        <div><?php 
                        
                        ?>
                            <a <?php echo "href='carhomem.php?categoria=Acessorios'"; ?> style="color:black">
                              <figure>
                                  <img src="categoria/masc/acessorio.png" alt="my img" style="width:100%"/>
                                  <figcaption style="text-align: center;"> Acessorios </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                    </li>
                    <li>
                        <div>
                            <a <?php echo "href='carhomem.php?categoria=camisa'"; ?> style="color:black">
                              <figure>
                                  <img src="categoria/masc/blusa.png" alt="my img" style="width:100%"/>
                                  <figcaption style="text-align: center;"> Blusas </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                    </li>
                    <li>
                        <div>
                            <a <?php echo "href='carhomem.php?categoria=calça'"; ?> style="color:black">
                              <figure>
                                  <img src="categoria/masc/calça.png" alt="my img" style="width:100%"/>
                                  <figcaption style="text-align: center;"> Calça </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                    </li>
                    <li>
                        <div>
                            <a <?php echo "href='carhomem.php?categoria=Tenis'"; ?> style="color:black">
                              <figure>
                                  <img src="categoria/masc/calcado.png" alt="my img" style="width:100%"/>
                                  <figcaption style="text-align: center;"> Calçado </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                    </li>
                    <li>
                        <div>
                            <a <?php echo "href='carhomem.php?categoria=Moletom'"; ?> style="color:black">
                              <figure>
                                  <img src="categoria/masc/moletom.png" alt="my img" style="width:100%"/>
                                  <figcaption style="text-align: center;"> Moletom </figcaption>
                                </figure>
                            </a>
                        </div>
                        
                    </li>
                  
                    <li>
                      <div>
                          <a <?php echo "href='carhomem.php?categoria=Short'"; ?> style="color:black">
                            <figure>
                                <img src= "categoria/masc/short.png" alt="my img" style="width:100%"/>
                                <figcaption style="text-align: center;"> Short </figcaption>
                              </figure>
                          </a>
                      </div>
                      
                  </li>
                    
                    </li><!-- Adicione mais imagens conforme necessário -->
                </ul>
        </div>
     
    </div>


                                  

                                    <section id="produtos_grid" style="padding-top:50px;padding-bottom:60px;width:1352px;margin:auto;">
                                    <?php
                                  /*  include("conexao.php");
                                    
                                      
                                              //selecionando o banco de dados
                                                            $bd = mysqli_select_db($conexao, "ecommerce");

                                                            $resultado2 = mysqli_query($conexao, $sql2);
                                                             
                                                            $imgC = "";
                                                           
                                                            
                                                            
                                                            if($linha = mysqli_fetch_array($resultado))
                                                            {
                                                                $imgC = $linha['imgC'];
                                                               
                                                                
                                                                
                                                            }  */
                                                            if($catgo == 'Acessorios'){

                                                              $nao_roupa = array("Boné","Cinto","Óculos","Relógio","Anel","Bolsa","Brinco","Colar","Pulseira");

                                                              $sql = "SELECT * FROM tabela_produto WHERE   categoria_produto in ('Boné','Cinto','Óculos','Relógio', 'Anel', 'Bolsa','Brinco', 'Colar','Pulseira')  AND tipo_produto = '1' ; ";
                                                            //pegando os dados da tabela. Executando query
                                                            $resultado = mysqli_query($conexao, $sql);
                                                                 
                                                            }else{
                                                            $sql = "SELECT * FROM tabela_produto WHERE   categoria_produto = '$catgo' AND tipo_produto = '1' ";
                                                            //pegando os dados da tabela. Executando query
                                                            $resultado = mysqli_query($conexao, $sql);
                                                            //fazendo a seleção da tabela tb_evento
                                                            }

                                                            
                                                           
                                                             
                                                           
                                                            
                                                            while($linha = mysqli_fetch_array($resultado))
                                                            {
                                                              $cod=$linha['cod_produto'];
                                ?>
                                                              <div class="card" <?php echo 'onclick="RedirecionarPaginaDetalhes('.$cod.')"'; ?>; >
                                                                <div class="img-card">
                                                                    <?php echo '<img src="imagens/'.$linha['imagem_produto'].'" style="width:200px;height:220px;" />'  ?>
                                                                </div>
                                                                <div class="title-category">
                                                                <?php echo $linha['categoria_produto']; ?> 
                                                                </div>

                                                                <div class="descricao-product" style="max-width:220px;overflow:hidden;max: height 35px;">
                                                                <?php echo $linha['nome_produto']; ?> 
                                                                </div>
                                                                  <div class="avaliacao-product">
                                                                    <?php 
                                                                    if($linha['avaliacao_produto'] < 1)
                                                                    {
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                    }
                                                                    else if($linha['avaliacao_produto'] >= 1 && $linha['avaliacao_produto'] < 2)
                                                                    {
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                    }
                                                                    else if($linha['avaliacao_produto'] >= 2 && $linha['avaliacao_produto'] < 3)
                                                                    {
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                    }
                                                                    else if($linha['avaliacao_produto'] >= 3 && $linha['avaliacao_produto'] < 4)
                                                                    {
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                    }
                                                                    else if($linha['avaliacao_produto'] >= 4 && $linha['avaliacao_produto'] < 5)
                                                                    {
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star2.png" style="width:20px" />';
                                                                    }
                                                                    else{
                                                                    
                                                                    
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                      echo '<img src="assets/images/icons/star.png" style="width:20px" />';
                                                                    
                                                                    }
                                                                    ?> 
                                                                  
                                                                  </div>
                                                                <div class="preco-product">

                                                                <?php 
                                                                
                                                                  if($linha['porcentagem_desconto_produto'] == 0)
                                                                  {

                                                                    ?>
                                                                        <span style="font-weight:bold; font-size:20px; margin-right:20px"><?php echo "R$ ".$linha['valor_produto']; ?>
                                                                        </span> 
                                                                    <?php
                                                                  }else{

                                                                    $valor_com_desconto = (1-($linha['porcentagem_desconto_produto']/100)) *  $linha['valor_produto'] ; 
                                                                
                                                                    ?>
                                                                
                                                                      <span style="font-weight:bold; font-size:20px; margin-right:20px"><?php echo "R$ ".$valor_com_desconto ?></span>  <span style="font-size:15px; opacity:0.6"><s>R$ <?php echo $linha['valor_produto']; ?></s></span> 
                                                                  <?php
                                                                  }
                                                                  
                                                                  
                                                                
                                                                ?>
                                                            
                                                                </div>
                                                                  
                                                              </div>
                                <?php


                                                            //  echo '<tr>';
                                                              //     echo  '<td><img src="/imagens/'.$linha['imagem_produto'].'" style="width:80px" /></td>';                  
                                                              //    echo  '<td>'.$linha['cod_produto'].'</td>';
                                                              //    echo  '<td>'.$linha['descricao_produto'].'</td>';  
                                                                  //Ações                                      
                                                                  // echo  "<td><button type='button' class='btn btn-sm btn-info'  data-bs-toggle='modal' data-bs-target='#myModal$linha[cod_produto]'>
                                                                  //  Mostrar</button>&nbsp<button type='button' class='btn btn-sm btn-warning'>Editar</button>&nbsp
                                                                //   <button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#apagar$linha[cod_produto]'>
                                                                  //  Deletar</button>&nbsp</td>"; 
                                                                                                      
                                                              echo "</tr>";
                                                              ?>
                                                            
                                                                <!--fim modal-->    
                                                                      <?php
                                                                }
                                                              mysqli_close($conexao);
                                                              ?>
                                                            </tbody>
                                                      </table>
                                                    

                                      
                                    </section>




                                    <!--
                                      - CATEGORY
                                    -->

                                  

                                    


                                  <!--
                                    - FOOTER
                                  -->

                                  <footer>

                                    <div class="footer-nav">

                                      <div class="container">

                                        

                                        

                                        <ul class="footer-nav-list">
                                        
                                          <li class="footer-nav-item">
                                            <h2 class="nav-title">Início</h2>
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                            <a href="home.php" class="footer-nav-link">Home</a>
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                            <a href="homem.php" class="footer-nav-link">Homens</a>
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                            <a href="mulher.php" class="footer-nav-link">Mulheres</a>
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                            <a href="infantil.php" class="footer-nav-link">Infantis</a>
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                            <a href="#" class="footer-nav-link">Contato</a>
                                          </li>
                                        
                                        </ul>

                                        <ul class="footer-nav-list">
                                        
                                          <li class="footer-nav-item">
                                            <h2 class="nav-title">Serviços</h2>
                                          </li>

                                            
                                          </li>
                                        
                                          <li class="footer-nav-item">
                                          
                                          <address class="content">
                                                                  Priorizamos a segurança e eficiência<br>
                                                                                na entrega das suas encomendas,<br>
                                                                              garantindo cuidado e pontualidade.<br>
                                                                          
                                                              </addres>
                                              
                                              
                                          </li>
                                        
                                          </li>
                                        
                                    
                                        
                                        </ul>

                                        <ul class="footer-nav-list">

                                          <li class="footer-nav-item">
                                            <h2 class="nav-title">Contato</h2>
                                          </li>

                                          <li class="footer-nav-item flex">
                                            <div class="icon-box">
                                              <ion-icon name="location-outline"></ion-icon>
                                            </div>

                                            <address class="content">
                                              AV. Rio Branco, 1000 |
                                              Adamantina(SP), BR
                                            </address>
                                          </li>

                                          <li class="footer-nav-item flex">
                                            <div class="icon-box">
                                              <ion-icon name="call-outline"></ion-icon>
                                            </div>

                                            <address class="content">(113) 946-0010 </address>
                                          </li>

                                          <li class="footer-nav-item flex">
                                            <div class="icon-box">
                                              <ion-icon name="mail-outline"></ion-icon>
                                            </div>

                                            <address class="content">harmonyof@gmail.com</address>
                                          </li>


                                        </ul>

                                        <ul class="footer-nav-list">

                                          <li class="footer-nav-item">
                                            <h2 class="nav-title">Follow Us</h2>
                                          </li>

                                          <li>
                                            <ul class="social-link">

                                              <li class="footer-nav-item">
                                                <a href="#" class="footer-nav-link">
                                                  <ion-icon name="logo-facebook"></ion-icon>
                                                </a>
                                              </li>

                                              <li class="footer-nav-item">
                                                <a href="#" class="footer-nav-link">
                                                  <ion-icon name="logo-twitter"></ion-icon>
                                                </a>
                                              </li>

                                              <li class="footer-nav-item">
                                                <a href="#" class="footer-nav-link">
                                                  <ion-icon name="logo-linkedin"></ion-icon>
                                                </a>
                                              </li>

                                              <li class="footer-nav-item">
                                                <a href="#" class="footer-nav-link">
                                                  <ion-icon name="logo-instagram"></ion-icon>
                                                </a>
                                              </li>

                                            </ul>
                                          </li>

                                        </ul>

                                      </div>

                                    </div>

                                    <div class="footer-bottom">

                                      <div class="container">

                                        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                                        <p class="copyright">
                                          Copyright &copy; Harmony Store.
                                        </p>

                                      </div>

                                    </div>

                                  </footer>






                                  <!--
                                    - custom js link
                                  -->
                                  <script src="./assets/js/script.js"></script>

                                  <!--
                                    - ionicon link
                                  -->
                                  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                                  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

                                </body>

                                <script>
                                    
                                    function RedirecionarPaginaDetalhes(id)
                                    {

                                      // alert(id);
                                          window.location.href = "http://localhost:8080/jenifer/tccATUALIZADO/detalhes.php?cod="+id+"";
                                    }

                                </script>

                                </html>