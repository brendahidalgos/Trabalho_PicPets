<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Pic Pets | Aqui você encontra o melhor fotográfo para seu pet </title>
      <meta name="author" content="Grupo Pic Pets">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/style2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="sortcut icon" href="../img/icone.ico" type="image/x-icon" />
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
        <!-- CABEÇALHO --> 
        <header class="cabecalho container">
          <!--LOGO-->
          <a href="../index.html"><h1 class="logo"> Aqui você encontra o melhor fotográfo para seu pet </h1></a>
          <button class="btn-menu bg_minimenu"><i class="fa fa-bars fa-lg"></i></button>
          <!--MENU-->
          <nav class="menu">
            <a class="btn-close"><i class="fa fa-times"></i></a>
              <ul>
                <li><a href="cadastro_fotografo.php">Torne-se um parceiro</a></li>
                <li><a href="../ajuda.html">Ajuda</a></li>
                <li><a href="login.php">Entrar</a></li>
              </ul>
          </nav>           
        </header>
        <!-- BANNER --> 
        <div class="banner container">
          <div class="title_geral">
            <br><br> <br><br>
            <main class="conteudos container">
          		<article class="conteudo_login radius">
            		<div class="informacao_login">
				          <center>
                  <form method="POST" action="ProcessaloginFotografo.php">
    							   <h2>Login</h2><br>
    							   <p>CPF: <input class="input" type="text" name="cpf_fotografo" placeholder=" Digite seu cpf" required autofocus><br></p>
    							   <p>Senha: <input class="input" type="password" name="senha_fotografo" placeholder=" Digite a senha" required><br></p>

							       <div class="botoes">
								        <button class="botoes_conf botoes_login radius " type="submit" value="Entrar"><a>Entrar</aa></button>
                     </div><br>
							       <div class="ou">Ou </div>
							       <div class="botoes">
								        <button class="botoes_conf botoes_login radius" type="submit" value="Cadastre-se"><a href="cadastro_fotografo.php">Cadastre-se</a></button>
							       </div>
                     <br><br>
					        </center>
							    </form>
            	  </div>
          	</main>
          </div>
        </div>
       <!-- RODAPÉ -->
        <footer class="rodape container bg_white ">
          <div class="social-icons p_bloco">
            <h1><div class="link_footer_sobre">Sobre</div></h1>
            <p><a href="../sobre.php">Termos de Uso</a></p>
            <p><a href="../sobre.php">Política de Privacidade</a></p>
            <br><br>
            <!--<p><a href="#" id="fb">c</a><a href="#" id="ig">f</a><a href="#" id="pr">g</a></p>   -->   
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="../email.php"><i class="fa fa-envelope"></i></a>
          </div>
          <div class="s_bloco social-icons">
            <h1><div class="link_footer_ajuda"> Ajuda</div></h1>
            <p><a href="../ajuda.html"> Dúvidas Frequentes</a></p>
            <p><a href="mapa.html"> Mapa do Site</a></p>
            <br><br><br><br><br>
          </div>
          <div class="t_logo">
            <a href="../index.html"><img class="_logo" src="../img/PicPets.png" width="300px"></a>
            <p class="copyright"><a href="../adm.php">Copyright © PicPets 2018. Adm</a></p></div>
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