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

        <form action="homepesquisa.php" class="header-search-container" method="post">
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
          <a href="cliente/HTML/carrinho.php" class="a9"  >
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
          <a href="#" class="menu-title">Contatos</a>

          
        </li>


         
      </div>

    </nav>

    <br>


    <!--
      - FORMULARIO
    -->

    <div id="formulario" style="padding-left: 30px;padding-bottom:30px;height: 650px; margin-left:29%;">
		<div class="row">
			<div class="col">
				<h1 class="my-5">CONTATOS</h1>
				<h3 class="my-6">Preencha o formulário abaixo, para enviar suas dúvidas, <br> sugestões e reclamações para a equipe Harmony Store.</h3><br>
				<form action="enviocontato.php" method="POST">
					<div class="mb-3">
						<input type="text" name="nome" placeholder="Digite seu nome" class="form-control">
					</div>
					<div class="mb-3">
						<input type="email" name="email" placeholder="Digite seu e-mail" class="form-control">
					</div>
          <div class="mb-3">
						<input type="telefone" name="telefone" placeholder="Digite seu telefone" class="form-control">
					</div>
					<div class="mb-3">
						<textarea rows="8" name="mensagem" placeholder="Digite sua mensagem" class="form-control"   width="20" ></textarea><br><br>
					</div>
					<div class="mb-3">
						<center><input type="submit" class="enviar-form" value="Enviar">
					</div>
				</form>
			</div>
		</div>
    <br>
	</div>

  <br>
  <br>

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