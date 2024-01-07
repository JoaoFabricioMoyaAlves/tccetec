<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

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

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo.png" alt="innovare logo" width="98" height="90">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

         
        

          <li class="menu-category">
            <a href="#" class="menu-title">Homens</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Mulheres</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Infantil</a> 
          </li>
        </li>

        <li class="menu-category">
          <a href="#" class="menu-title">Contatos</a>

          
        </li>


         
      </div>

    </nav>

   

         

        

      
     







 
    <!--
      - BANNER
    -->

    <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./assets/images/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Item de tendência</p>

              <h2 class="banner-title">Últimas vendas de moda feminina</h2>

              <p class="banner-text">
                Apartir de R&dollar; <b>20,00</b>
              </p>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-2.jpg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Acessórios em alta</p>

              <h2 class="banner-title">óculos de sol modernos</h2>

              <p class="banner-text">
                Apartir de R&dollar; <b>15,00</b>
              </p>

            </div>

          </div>

          <div class="slider-item">

            <img src="./assets/images/banner-3.jpg" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Oferta de venda</p>

              <h2 class="banner-title">Nova coleção de verão</h2>

              <p class="banner-text">
                Apartir de R&dollar; <b>29,99</b>
              </p>

             

            </div>

          </div>

        </div>

      </div>

    </div>


   

    <section id="produtos_grid">
    <?php
    include("conexao.php");
    
      
                             //selecionando o banco de dados
                            $bd = mysqli_select_db($conexao, "bd_tcc");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "SELECT * FROM tabela_produto ORDER BY cod_produto DESC";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);

                           
                          
                            while($linha = mysqli_fetch_array($resultado))
                            {

?>
                              <div class="card">
                                <div class="img-card">
                                     <?php echo '<img src="/jenifer/tcc2/imagens/'.$linha['imagem_produto'].'" style="width:200px" />'  ?>
                                </div>
                                <div class="title-category">
                                <?php echo $linha['categoria_produto']; ?> 
                                </div>

                                <div class="descricao-product">
                                <?php echo $linha['descricao_produto']; ?> 
                                </div>
                                  <div class="avaliacao-product">
                                    <?php 
                                    if($linha['avaliacao_produto'] < 1)
                                    {
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                    }
                                    else if($linha['avaliacao_produto'] >= 1 && $linha['avaliacao_produto'] < 2)
                                    {
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                    }
                                    else if($linha['avaliacao_produto'] >= 2 && $linha['avaliacao_produto'] < 3)
                                    {
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                    }
                                    else if($linha['avaliacao_produto'] >= 3 && $linha['avaliacao_produto'] < 4)
                                    {
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                    }
                                    else if($linha['avaliacao_produto'] >= 4 && $linha['avaliacao_produto'] < 5)
                                    {
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star2.png" style="width:20px" />';
                                    }
                                    else{
                                     
                                    
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                      echo '<img src="/jenifer/tcc2/assets/images/icons/star.png" style="width:20px" />';
                                    
                                    }
                                    ?> 
                                  
                                  </div>
                                <div class="preco-product">

                                 <?php $valor_com_desconto = (1-($linha['porcentagem_desconto_produto']/100)) *  $linha['valor_produto'] ; ?>
                                 <span style="font-weight:bold; font-size:20px; margin-right:20px"><?php echo "R$ ".$valor_com_desconto ?></span>  <span style="font-size:15px; opacity:0.6"><s>R$ <?php echo $linha['valor_produto']; ?></s></span> 
                                </div>
                                   
                              </div>
<?php


                             //  echo '<tr>';
                              //     echo  '<td><img src="/jenifer/tcc2/imagens/'.$linha['imagem_produto'].'" style="width:80px" /></td>';                  
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
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
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
          Copyright &copy; <a href="#">Anon</a> all rights reserved.
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

</html>