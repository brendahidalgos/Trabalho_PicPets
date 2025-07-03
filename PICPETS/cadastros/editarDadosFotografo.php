<?php
session_start();
?>
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
          <div class="title_geral">
            <main class="conteudos container">
          	<article class="conteudo_pro_login_cli bg-white border">
            <div class="informacao_pro_login_cli">
<?php
//conexao com o banco de dados
	include '../conexao.php';
//Abre uma sessão, pega os valores gravados anteriormente
		
		$_SESSION['cpf_fotografo'];
//Se esse valores, diferentes do cpf e da senha dadas pelo usuario anteriormente ele direciona para o sair 
if(!$_SESSION['cpf_fotografo']){
				header("Location:sairFotografo.php");
//Senão serão executados os comandos
			}else{
//Pega os valores gravados anteriormente e injeta nas variaveis $cpf_fotografo e $senha_fotografo
		$cpf_fotografo = $_SESSION['cpf_fotografo'];
//seleciona(pega) os valores que estao na tabela cadastro_fotografo e verifica se são compativeis com as variaveis $cpf_fotografo e $senha_fotografo 
$rs = $conexao->query("select nome_fotografo, cpf_fotografo from cadastro_fotografo where cpf_fotografo = '$cpf_fotografo'");
//Se ouver algum resultado			
	if($rs -> rowcount() == 1){
//Será impresso um cumprimento
		while($nome = $rs->fetch(PDO::FETCH_OBJ))
					{
						echo "<h2>Seja Bem Vinda(o) ". $nome->nome_fotografo ."</h2><br><br>";
					}
//Seleção de tudo de todas as tabelas onde o cpf_fotografo é igual a variavel $cpf_fotografo e senha_fotografo é igual a $senha_fotografo
			$rs = $conexao->query("Select cadastro_fotografo.idcadastro_fotografo, cadastro_fotografo.foto_perfil_fotografo, cadastro_fotografo.nome_fotografo, cadastro_fotografo.data_nascimento_fotografo,
						cadastro_fotografo.senha_fotografo, cadastro_fotografo.cpf_fotografo, cadastro_fotografo.descricao_fotografo,
						 imagens.imagem1, imagens.imagem2, imagens.imagem3, imagens.imagem4, imagens.imagem5, imagens.imagem6, imagens.imagem7, imagens.imagem8, imagens.imagem9, imagens.imagem10,
						contato_fotografo.ddd_fotografo, contato_fotografo.email_fotografo, contato_fotografo.celular_fotografo, contato_fotografo.telefone_fotografo,
						formacao.formacao, formacao.nivel_ensino,
						diploma_certificado.diploma_certificado, formacao.formacao, formacao.nivel_ensino,
						endereco_fotografo.endereco_fotografo, endereco_fotografo.cep_fotografo, endereco_fotografo.complemento_fotografo,
						bairro_fotografo.bairro_fotografo,
						cidade_fotografo.cidade_fotografo,
						uf_fotografo.uf_fotografo,
						pais_fotografo.pais_fotografo
						from cadastro_fotografo, imagens , contato_fotografo, diploma_certificado, formacao, formacao_fotografo, endereco_fotografo, bairro_fotografo, cidade_fotografo, uf_fotografo, pais_fotografo 
						where cadastro_fotografo.cpf_fotografo = '$cpf_fotografo'
						and formacao_fotografo.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
						and formacao.idformacao = formacao_fotografo.idformacao
						and diploma_certificado.idformacao = formacao.idformacao
						and contato_fotografo.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
						and imagens.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
						and cadastro_fotografo.idcadastro_fotografo = endereco_fotografo.idcadastro_fotografo
						and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
						and cidade_fotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo
						and uf_fotografo.iduf_fotografo = cidade_fotografo.iduf_fotografo
						and pais_fotografo.idpais_fotografo = uf_fotografo.idpais_fotografo");
			while($row = $rs->fetch(PDO::FETCH_OBJ))
			{
				?>
					<form action="alterarFotografo.php" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="id" value="<?php echo $row->idcadastro_fotografo;?>"><br>
					<div class="img_perfil_cli_l"><br>
					<img class="img_perfil_cli_l_1" src="<?php echo $row->foto_perfil_fotografo;?>">
					<div id="div_file2" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div><br>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_p radius" type="submit" name="Alterar" value="foto"><a>Alterar foto de perfil</a></button></div>
					<br><br><br><br>
					
					<p>
					Nome: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="nome" value="<?php echo $row->nome_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="nome"><a>Alterar nome</a></button></div><br><br>
						<!--p>Foto de perfil: <div id="div_file" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>-->
					<p>
					Nascimento: 
					<div class='input_pro_editar'><h5>
					<input type="date" name="nascimento" value="<?php echo $row->data_nascimento_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="nascimento"><a>Alterar data </a></button></div><br><br>

					<p>
					Senha: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="senha" value="<?php echo $row->senha_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="senha"><a>Alterar senha</a></button></div><br><br>

					<p>
					CPF: 
					<div class='input_pro_editar'><h5>
					<input type="number" name="cpf" value="<?php echo $row->cpf_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="cpf"><a>Alterar CPF</a></button></div><br><br>

					<p>
					DDD: 
					<div class='input_pro_editar'><h5>
					<input type="number" name="ddd" value="<?php echo $row->ddd_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="ddd"><a>Alterar DDD</a></button></div><br><br>

					<p>
					Email: 
					<div class='input_pro_editar'><h5>
					<input type="email" name="email" value="<?php echo $row->email_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="email"><a>Alterar Email</a></button></div><br><br>

					<p>
					Celular: 
					<div class='input_pro_editar'><h5>
					<input type="number" name="celular" value="<?php echo $row->celular_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="celular"><a>Alterar celular</a></button></div><br><br>

					<p>
					Telefone: 
					<div class='input_pro_editar'><h5>
					<input type="number" name="telefone" value="<?php echo $row->telefone_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="telefone"><a>Alterar telefone</a></button></div><br><br>

					<p>
					Endereco: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="endereco" value="<?php echo $row->endereco_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="endereco"><a>Alterar endereço</a></button></div><br><br>

					<p>
					Cep: 
					<div class='input_pro_editar'><h5>
					<input type="number" name="cep" value="<?php echo $row->cep_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="cep"><a>Alterar CEP</a></button></div><br><br>
					
					<p>
					Complemento: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="complemento" value="<?php echo $row->complemento_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="complemento"><a>Alterar complemento</a></button></div><br><br>
					
					<p>
					Bairro: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="bairro" value="<?php echo $row->bairro_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="bairro"><a>Alterar bairro</a></button></div><br><br>

					<p>
					Cidade: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="cidade" value="<?php  echo $row->cidade_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="cidade"><a>Alterar cidade</a></button></div><br><br>
					
					<p>
					UF: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="uf" value="<?php echo $row->uf_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="uf"><a>Alterar UF</a></button></div><br><br>
					
					<p>
					País: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="pais" value="<?php echo $row->pais_fotografo;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius"  type="submit" name="Alterar" value="pais"><a>Alterar país</a></button></div><br><br>
					
					<p>
					Formacao: 
					<div class='input_pro_editar'><h5>
					<input type="text" name="formacao" value="<?php echo $row->formacao;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="formacao"><a>Alterar Formacão</a></button></div><br><br>

					<p>
					Nível de ensino: </p>
					<div class='input_pro_editar'><h5>
					<input type="text" name="nivel_ensino" value="<?php echo $row->nivel_ensino;?>"></h5></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados radius" type="submit" name="Alterar" value="nivel_ensino"><a>Alterar Nível de ensino</a></button></div><br><br>

					<p>
					Diploma: </p>
			
					<br><br><br><br><br><br>
					<div class='input_pro_login_cli'>						
					<div class="botoes">
					<button class=" radius ver2" type="submit" value="Cadastre-se"><a href="<?php echo $row->diploma_certificado;?>" target="_blank">Ver certificado/diploma</a></button>

					<br><br><div id="div_file3" class="botoes"><a>Adicionar Diploma</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>

					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados2 radius" type="submit" name="Alterar" value="nivel_ensino"><a>Alterar Diploma</a></button></div><br><br>



					<img class="img_port_p" src="<?php echo $row->imagem1;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img1"><a>Alterar imagem 1</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem2;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img2"><a>Alterar imagem 2</a></button></div><br><br> <br><br>

					<img class="img_port_p" src="<?php echo $row->imagem3;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
             		<div class="botoes">
             		<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img3"><a>Alterar imagem 3</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem4;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img4"><a>Alterar imagem 4</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem5;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img5"><a>Alterar imagem 5</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem6;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img6"><a>Alterar imagem 6</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem7;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img7"><a>Alterar imagem 7</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem8;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img8"><a>Alterar imagem 8</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem9;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img9"><a>Alterar imagem 9</a></button></div><br><br><br><br>

					<img class="img_port_p" src="<?php echo $row->imagem10;?>">
					<div id="div_file3" class="botoes"><a>Adicionar Foto</a><input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_img radius" type="submit" name="Alterar" value="img10"><a>Alterar imagem 10</a></button></div><br><br><br>


					<p><br>
					Descrição: <br><textarea class="input_pro_login_descricao" cols="" rows=""><?php echo $row->descricao_fotografo?> </textarea><br>
					<div class="botoes">
					<button class="botoes_editar botoes_editar_dados_descricao radius" type="submit"  name="Alterar" value="descricao"><a>Alterar Descrição</a></button></div><br>

					<?php
					echo "<br><br>";


				}
						
						?>

<div class="botoes">
	<button class="botoes_conf botoes_proc_l1 radius" type="submit" value="enviar"><a>Alterar</a></button>	
	<button class="botoes_conf botoes_proc_l2 radius" type="submit" value="enviar"><a href="sairFotografo.php">Sair</a></button>
</div>
</form>
					<?php

//if
}
	}
?>
</div></article></main></div></div>
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