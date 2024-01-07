<?
//include("seguranca.php");
?>
<!doctype html>
<html lang="pt-br">
    <head>
      <title> PRODUCT BOX </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Resolv, Grupo Resolv, Team">
        <meta name="author" content="Rodrigo Topan, Igor Ponso, João Diwan">
        <meta name="description" content="Página Inicial">
        <!--LINK CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style-css.css">
        <!--LINK CDN BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
        integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <style>
          .btnvoltar{
   margin-left:120px;
   margin-top:50px;
   padding-botton:50px;
    font-size: 25px;
    left: 25px;
    top: 25px;
}

          </style>
      </head>
    <body>  
        <div class="btnvoltar">
    <a href="vendedor/HTML/produtos.php">
    <i class="bi bi-arrow-left-circle-fill"></i> voltar
    </a>
</div>
        <div class="container-fluid">
         
        </div>
      <div class="container">
    
        <div class="container-principal-produtos">
         <h4 class="page-header">CADASTRO DE PRODUTO</h4>
         <hr>
            <form action="cadastro.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Descrição do Produto:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="descricao_produto" placeholder="Digite o nome do produto" required/>
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
                      <option value="3">Infantil</option>
                      <option value="2">Mulher</option>
                      <option value="1">Homem</option>   
                      <option value="0">Home</option>   
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

  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>    
  
  
  </body>
</html>

