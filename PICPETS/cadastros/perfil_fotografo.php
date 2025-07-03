<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> PicPets | Aqui você encontra o melhor fotográfo para seu pet </title>
      <meta name="description" content="Agência especializada em Marketing Digital, Criação de Sites e Aplicativos Mobile.">
      <meta name="keywords" content="Agência digital, Marketing, Sites">
      <meta name="robots" content="index, follow">
      <meta name="author" content="Grupo Pic Pets">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/style2.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="sortcut icon" href="../img/icone.ico" type="image/x-icon" />
       <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      
    </head>
    <body>
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
          <div class="title">
          <br><br> <br><br>
            <h2> PicPets </h2>
            <h3> Aqui você encontra o melhor fotógrafo para seu pet da Baixada Santista!</h3>
          </div>
          <form action="fotografos.php" method="POST">
          <div class="buscar">
            <input type="text" class="buscar_fotografo" placeholder="Pesquise" name="busca">
          </form>
            <div class="buttons">
              <button class="btn btn-sobre radius pesq"> Buscar <i class="fa fa-question-circle"></i></button>
            </div>
          </div>
        <!-- SERVICOS --> 
        <main class="conteudos container">
          <article class="conteudo_visit_perfil bg-white border">
            <div class="informacao_visit_perfil">
              <?php

              include_once '../conexao.php';

              $idcadastro_fotografo = $_POST['id'];

              $rs = $conexao->query("select cadastro_fotografo.foto_perfil_fotografo, imagens.imagem1, imagens.imagem2, imagens.imagem3, imagens.imagem4, imagens.imagem5, imagens.imagem6, imagens.imagem7, imagens.imagem8, imagens.imagem9, imagens.imagem10,
              	cadastro_fotografo.nome_fotografo, ( Select Year(now()) - (select Year(cadastro_fotografo.data_nascimento_fotografo))) as Idade, cadastro_fotografo.descricao_fotografo,  
              		contato_fotografo.celular_fotografo, contato_fotografo.email_fotografo, contato_fotografo.telefone_fotografo, 
              		diploma_certificado.diploma_certificado,
              		formacao.formacao, formacao.nivel_ensino,
              		cidade_fotografo.cidade_fotografo,
                      uf_fotografo.uf_fotografo
                      from cadastro_fotografo, endereco_fotografo, contato_fotografo, imagens, diploma_certificado, formacao, formacao_fotografo, bairro_fotografo, cidade_fotografo, uf_fotografo     
              			where cadastro_fotografo.idcadastro_fotografo = $idcadastro_fotografo
                          and cadastro_fotografo.idcadastro_fotografo = endereco_fotografo.idcadastro_fotografo
                          and contato_fotografo.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
              			and imagens.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
              			and formacao_fotografo.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
              			and formacao.idformacao = formacao_fotografo.idformacao
              			and diploma_certificado.idformacao = formacao.idformacao
              			and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
              			and cidade_fotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo
                          and uf_fotografo.iduf_fotografo = cidade_fotografo.iduf_fotografo;
                          ");

                    while($row = $rs->fetch(PDO::FETCH_OBJ))
                    			{
                    ?> 

                    <div class="img_perfil">
                      <img class="img_perfil_p" src="<?php echo $row->foto_perfil_fotografo;?>"><br></div>
                    <div class="_text_p3">
                      <p class="_texto_perfil_l2" >Descrição:</p> </div><br><p class="_text_p3"><textarea class="input_pro_login_descricao_perfil2  " disabled="disabled"><?php echo $row->descricao_fotografo?> </textarea><br>
                      
                    <div class="_text_p2">
                      <p class="_texto_perfil_l">Nome:
                 		   <textarea class="input_pro_texto1" disabled="disabled"><?php echo $row->nome_fotografo;?></textarea></p>
                      <p class="_texto_perfil_l">Idade:
                        <textarea class="input_pro_texto2" disabled="disabled"><?php echo $row->Idade." anos de idade";?></textarea></p>
                      <p class="_texto_perfil_l">Celular:
                        <textarea class="input_pro_texto3" disabled="disabled"><?php echo$row->celular_fotografo;?></textarea></p> 
                      <p class="_texto_perfil_l">Telefone:
                        <textarea class="input_pro_texto4" disabled="disabled"><?php echo$row->telefone_fotografo;?></textarea></p>
                      <p class="_texto_perfil_l">E-mail:
                        <textarea class="input_pro_texto5" disabled="disabled"><?php echo$row->email_fotografo;?></textarea></p>
                      <p class="_texto_perfil_l">Formação:
                        <textarea class="input_pro_texto6" disabled="disabled"><?php echo$row->formacao;?></textarea></p>
                      <p class="_texto_perfil_l">Nivel de ensino:
                        <textarea class="input_pro_texto7" disabled="disabled"><?php echo$row->nivel_ensino;?></textarea></p>
                      <p class="_texto_perfil_l">Cidade:
                        <textarea class="input_pro_texto8" disabled="disabled"><?php echo$row->cidade_fotografo;?></textarea></p>
                      <p class="_texto_perfil_l">UF:
                        <textarea class="input_pro_texto9" disabled="disabled"><?php echo$row->uf_fotografo;?></textarea></p><br><br><br><br>
                     <p class="_texto_perfil_c">Diploma:</p> 
                    <div class='input_pro_login_cli'>
                    <div class="botoes">
                      <button class=" radius ver3" type="submit" value="Cadastre-se"><a href="<?php echo $row->diploma_certificado;?>" target="_blank"><div class="botao_ver">Ver certificado/diploma</div></a></button>
                    </div>
                    </div>
                    </div>
                    </div></article>
          <article class="conteudo_visit_perfil2 bg-white border ">
          <div class="imagens_2">
       			<a href="#img1"><img class="img_port_perfil imagens" src="<?php echo $row->imagem1;?>"></a>
    				<a href="#img2"><img class="img_port_perfil imagens" src="<?php echo $row->imagem2;?>"></a>
    				<a href="#img3"><img class="img_port_perfil imagens" src="<?php echo $row->imagem3;?>"></a>
    				<a href="#img4"><img class="img_port_perfil imagens" src="<?php echo $row->imagem4;?>"></a>
    				<a href="#img5"><img class="img_port_perfil imagens" src="<?php echo $row->imagem5;?>"></a>
    				<a href="#img6"><img class="img_port_perfil imagens" src="<?php echo $row->imagem6;?>"></a>
    				<a href="#img7"><img class="img_port_perfil imagens" src="<?php echo $row->imagem7;?>"></a>
    				<a href="#img8"><img class="img_port_perfil imagens" src="<?php echo $row->imagem8;?>"></a>
    				<a href="#img9"><img class="img_port_perfil imagens" src="<?php echo $row->imagem9;?>"></a>
    				<a href="#img10"><img class="img_port_perfil imagens" src="<?php echo $row->imagem10;?>"></a>
          </div></article></main></form></div>

<div class="lbox2" id="img1">
  <div class="lbox2_img" >
    <a href="#img4" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem1;?>"></div>
    <a href="#img2" class="btn_img close" id ="next">&#187;</a>


  </div></div>
  <div class="lbox2" id="img2" href="perfil_fotografo.php">
  <div class="lbox2_img" >
    <a href="#img1" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem2;?>"></div>
    <a href="#img3" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img3">
  <div class="lbox2_img">
    <a href="#img2" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem3;?>"></div>
    <a href="#img4" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img4">
  <div class="lbox2_img">
    <a href="#img3" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem4;?>"></div>
    <a href="#img5" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img5">
  <div class="lbox2_img">
    <a href="#img4" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem5;?>"></div>
    <a href="#img6" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img6">
  <div class="lbox2_img">
    <a href="#img5" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem6;?>"></div>
    <a href="#img7" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img7">
  <div class="lbox2_img">
    <a href="#img6" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem7;?>"></div>
    <a href="#img8" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img8">
  <div class="lbox2_img">
    <a href="#img7" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem8;?>"></div>
    <a href="#img9" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img9">
  <div class="lbox2_img">
    <a href="#img8" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem9;?>"></div>
    <a href="#img10" class="btn_img close" id ="next">&#187;</a>
  </div></div>


  <div class="lbox2" id="img10">
  <div class="lbox2_img">
    <a href="#img9" class="btn_img close" id ="prev">&#171;</a>
<div id="popup1" class="overlay">
  <div class="popup">
   <a class="close" href="#popup1">&times;</a>
  </div>
</div>
    <div class="imgs"><img class="imgs2" src="<?php echo $row->imagem10;?>"></div>
    <a href="#img1" class="btn_img close" id ="next">&#187;</a>
  </div></div>
      <?php 
			}

?>
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