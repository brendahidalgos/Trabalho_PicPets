<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title> Pic Pets | Aqui você encontra o melhor fotográfo para seu pet </title>
    	<meta name="description" content="Agência especializada em Marketing Digital, Criação de Sites e Aplicativos Mobile.">
    	<meta name="keywords" content="Agência digital, Marketing, Sites">
    	<meta name="robots" content="index, follow">
    	<meta name="author" content="Grupo Pic Pets">
    	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/style2.css">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    	<link rel="sortcut icon" href="img/icone.ico" type="image/x-icon" />
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
          <!--LOGO-->
          <a href="index.html"><h1 class="logo"> Aqui você encontra o melhor fotográfo para seu pet </h1></a>
          <button class="btn-menu bg_minimenu"><i class="fa fa-bars fa-lg"></i></button>
          <!--MENU-->
          <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
              <ul>
                <li><a href="cadastros/cadastro_fotografo.php">Torne-se um parceiro</a></li>
                <li><a href="ajuda.html">Ajuda</a></li>
                <li><a href="cadastros/login.php">Entrar</a></li>
              </ul>
          </nav>           
        </header>
        <!-- BANNER --> 
        <div class="banner container">
          <div class="title_geral">
            <br><br> <br><br>
            <main class="conteudos container">
          		<article class="conteudo_adm radius">
	            	<div class="informacao_adm">
	              	<center>
                  <form method="POST" action="ProcessaloginAdm.php">
      						  <h2>Login Administrativo</h2><br>
      							<input class="input_adm" type="email" name="email_admin" required autofocus><br><br>
      							<input class="input_adm" type="password" name="senha_admin" required><br>
      						    <div class="botoes">
      								  <button class="botoes_conf botoes_adm radius " type="submit" value="enviar"><a>Entrar</a></button>
                      </div><br>
                      <h4> PROIBIDO O ACESSO PARA PESSOAS NÃO ATORIZADAS!</h4></div>
					        </center>
							    </form>
	           	</article>
              
          	</main>
          </div>
        </div>
       <!-- RODAPÉ -->
        <footer class="rodape container bg_white ">
          <div class="social-icons p_bloco">
            <h1><div class="link_footer_sobre">Sobre</div></h1>
            <p><a href="sobre.php">Termos de Uso</a></p>
            <p><a href="sobre.php">Política de Privacidade</a></p>
            <br><br>
            <!--<p><a href="#" id="fb">c</a><a href="#" id="ig">f</a><a href="#" id="pr">g</a></p>   -->   
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="email.php"><i class="fa fa-envelope"></i></a>
          </div>
          <div class="s_bloco social-icons">
            <h1><div class="link_footer_ajuda"> Ajuda</div></h1>
            <p><a href="ajuda.html"> Dúvidas Frequentes</a></p>
            <p><a href="mapa.html"> Mapa do Site</a></p>
            <br><br><br><br><br>
          </div>
           <div class="t_logo">
            <a href="index.html"><img class="_logo" src="img/PicPets.png" width="300px"></a>
            <p class="copyright"><a href="adm.php">Copyright © PicPets 2018. Adm</a></p></div>
        </footer> 
        <!-- JQUERY --> 
        <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>
          $(".btn-menu").click(function(){
            $(".menu").show();
          });
          $(".btn-close").click(function(){
            $(".menu").hide();
          });
        </script>      
    </body>
</html>