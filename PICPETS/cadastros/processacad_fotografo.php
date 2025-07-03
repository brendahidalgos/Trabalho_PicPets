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
          <div class="title_geral"><br>

        <main class="conteudos container">
          <article class="conteudo_pro_cad_fot bg-white radius">
            <div class="informacao_pro_cad_fot">
				<?php
				date_default_timezone_set('UTC');
				//-----------Conexao com o banco de dados-------
				include_once "../conexao.php";
				//------------Captura os valores digitados-----
				//-----------Tabela CADASTRO DO FOTÓGRAFO
				$arq_perfil = $_FILES['perfil_fotografo'];
				$diretorio_perfil = "foto/fotografo/";
				$maximo_perfil = 9000000000000;
				$perfil_fotografo = $_FILES['perfil_fotografo'];
				$extensoes_perfil = array(".jpg",".jpeg",".gif",".png");
				$ext_perfil = strrchr($perfil_fotografo['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNome = rand() . $ext_perfil;
				
				echo "<h2>Cadastro efetuado com sucesso</h2><br>";
			
				//execução das fotos//
				if(move_uploaded_file($arq_perfil['tmp_name'], $diretorio_perfil.$novoNome)) 	
				{
					/*print "<br><b>Arquivo de perfil enviado</b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo</b>";*/
						if($_FILES['perfil_fotografo']['size'] > $maximo_perfil)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_perfil." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_perfil, $extensoes_perfil))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_perfil = $diretorio_perfil.$novoNome;

				 	$nome_fotografo = $_POST['nome_fotografo'];
					$nascimento_fotografo = $_POST['nascimento_fotografo'];
					$senha_fotografo = $_POST['senha_fotografo'];
					$cpf_fotografo = $_POST['cpf_fotografo'];
					$descricao = $_POST['descricao'];
				 //-------------Contato-----
					$ddd_fotografo = $_POST['ddd_fotografo'];
					$celular_fotografo = $_POST['celular_fotografo'];
					$telefone_fotografo = $_POST['telefone_fotografo'];
					$email_fotografo = $_POST['email_fotografo'];
				//-----------------endereco------
					$endereco_fotografo = $_POST['endereco_fotografo'];
					$cep_fotografo = $_POST['cep_fotografo'];
					$complemento_fotografo = $_POST['complemento_fotografo'];
				//------------bairro--------
					$bairro_fotografo = $_POST['bairro_fotografo'];
				//---------------cidade-----
					$cidade_fotografo = $_POST['cidade_fotografo'];
				//--------------uf------
					$uf_fotografo = $_POST['uf_fotografo'];
				//---------------pais---------
					$pais_fotografo = $_POST['pais_fotografo'];
				//-----------imagens----
				//------------------Primeira imagem
					$img1 = $_FILES['imagem1'];
					$diretorio_img1 = "imagens/";
					$maximo_img1 = 80000000000;
					$imagem1 = $_FILES['imagem1'];
					$extensoes_img1 = array(".jpg",".jpeg",".png");
					$ext_img1 = strrchr($imagem1['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg1 = rand() . $ext_img1;
				//execução das fotos//
				if(move_uploaded_file($img1['tmp_name'], $diretorio_img1.$novoNomeimg1)) 	
				{
					/*print "<br><b>Arquivo 1 enviado</b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 1</b>";*/
						if($_FILES['imagem1']['size'] > $maximo_img1)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img1." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img1, $extensoes_img1))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img1 = $diretorio_img1.$novoNomeimg1;
				//----------------------------------------Segunda imagem
				$img2 = $_FILES['imagem2'];
					$diretorio_img2 = "imagens/";
					$maximo_img2 = 80000000000;
					$imagem2 = $_FILES['imagem2'];
					$extensoes_img2 = array(".jpg",".jpeg",".png");
					$ext_img2 = strrchr($imagem2['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg2 = rand() . $ext_img2;
				//execução das fotos//
				if(move_uploaded_file($img2['tmp_name'], $diretorio_img2.$novoNomeimg2)) 	
				{
					/*print "<br><b>Arquivo 2 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 2</b>";*/
						if($_FILES['imagem2']['size'] > $maximo_img2)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img2." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img2, $extensoes_img2))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}

				}
				$caminho_img2 = $diretorio_img2.$novoNomeimg2;
				//----------------------------------------Terceira imagem
				$img3 = $_FILES['imagem3'];
					$diretorio_img3 = "imagens/";
					$maximo_img3 = 8000000000;
					$imagem3 = $_FILES['imagem3'];
					$extensoes_img3 = array(".jpg",".jpeg",".png");
					$ext_img3 = strrchr($imagem3['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg3 = rand() . $ext_img3;
				//execução das fotos//
				if(move_uploaded_file($img3['tmp_name'], $diretorio_img3.$novoNomeimg3)) 	
				{
					/*print "<br><b>Arquivo 3 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 3</b>";*/
						if($_FILES['imagem3']['size'] > $maximo_img3)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";*/
						/*print "<b>limite máximo de ".$maximo_img3." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img3, $extensoes_img3))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}

				}
				$caminho_img3 = $diretorio_img3.$novoNomeimg3;
				//----------------------------------------Quarta imagem
				$img4 = $_FILES['imagem4'];
					$diretorio_img4 = "imagens/";
					$maximo_img4 = 8000000000;
					$imagem4 = $_FILES['imagem4'];
					$extensoes_img4 = array(".jpg",".jpeg",".png");
					$ext_img4 = strrchr($imagem4['name'],'.');


				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg4 = rand() . $ext_img4;
				//execução das fotos//
				if(move_uploaded_file($img4['tmp_name'], $diretorio_img4.$novoNomeimg4)) 	
				{
					/*print "<br><b>Arquivo 4 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 4</b>";*/
						if($_FILES['imagem4']['size'] > $maximo_img4)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img4." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img4, $extensoes_img4))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img4 = $diretorio_img4.$novoNomeimg4;
				//----------------------------------------Quinta imagem
				$img5 = $_FILES['imagem5'];
					$diretorio_img5 = "imagens/";
					$maximo_img5 = 8000000000;
					$imagem5 = $_FILES['imagem5'];
					$extensoes_img5 = array(".jpg",".jpeg",".png");
					$ext_img5 = strrchr($imagem5['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg5 = rand() . $ext_img5;
				//execução das fotos//
				if(move_uploaded_file($img5['tmp_name'], $diretorio_img5.$novoNomeimg5)) 	
				{
					/*print "<br><b>Arquivo 5 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 5</b>";*/
						if($_FILES['imagem5']['size'] > $maximo_img5)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img5." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img5, $extensoes_img5))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img5 = $diretorio_img5.$novoNomeimg5;
				//----------------------------------------Sexta imagem
				$img6 = $_FILES['imagem6'];
					$diretorio_img6 = "imagens/";
					$maximo_img6 = 8000000000;
					$imagem6 = $_FILES['imagem6'];
					$extensoes_img6 = array(".jpg",".jpeg",".png");
					$ext_img6 = strrchr($imagem6['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg6 = rand() . $ext_img6;
				//execução das fotos//
				if(move_uploaded_file($img6['tmp_name'], $diretorio_img6.$novoNomeimg6)) 	
				{
					/*print "<br><b>Arquivo 6 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 6</b>";*/
						if($_FILES['imagem6']['size'] > $maximo_img6)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img6." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img6, $extensoes_img6))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img6 = $diretorio_img6.$novoNomeimg6;
				//----------------------------------------Sétima imagem
				$img7 = $_FILES['imagem7'];
					$diretorio_img7 = "imagens/";
					$maximo_img7 = 8000000000;
					$imagem7 = $_FILES['imagem7'];
					$extensoes_img7 = array(".jpg",".jpeg",".png");
					$ext_img7 = strrchr($imagem7['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg7 = rand() . $ext_img7;
				//execução das fotos//
				if(move_uploaded_file($img7['tmp_name'], $diretorio_img7.$novoNomeimg7)) 	
				{
					/*print "<br><b>Arquivo 7 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 7</b>";*/
						if($_FILES['imagem7']['size'] > $maximo_img7)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img7." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img7, $extensoes_img7))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}

				}
				$caminho_img7 = $diretorio_img7.$novoNomeimg7;
				//----------------------------------------Oitava imagem
				$img8 = $_FILES['imagem8'];
					$diretorio_img8 = "imagens/";
					$maximo_img8 = 8000000000;
					$imagem8 = $_FILES['imagem8'];
					$extensoes_img8 = array(".jpg",".jpeg",".png");
					$ext_img8 = strrchr($imagem8['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg8 = rand() . $ext_img8;
				//execução das fotos//
				if(move_uploaded_file($img8['tmp_name'], $diretorio_img8.$novoNomeimg8)) 	
				{
					/*print "<br><b>Arquivo 8 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 8</b>";*/
						if($_FILES['imagem8']['size'] > $maximo_img8)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";*/
						/*print "<b>limite máximo de ".$maximo_img8." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img8, $extensoes_img8))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img8 = $diretorio_img8.$novoNomeimg8;
				//----------------------------------------Nona imagem
				$img9 = $_FILES['imagem9'];
					$diretorio_img9 = "imagens/";
					$maximo_img9 = 8000000000;
					$imagem9 = $_FILES['imagem9'];
					$extensoes_img9 = array(".jpg",".jpeg",".png");
					$ext_img9 = strrchr($imagem9['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg9 = rand() . $ext_img9;
				//execução das fotos//
				if(move_uploaded_file($img9['tmp_name'], $diretorio_img9.$novoNomeimg9)) 	
				{
					/*print "<br><b>Arquivo 9 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 9</b>";*/
						if($_FILES['imagem9']['size'] > $maximo_img9)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img9." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img9, $extensoes_img9))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img9 = $diretorio_img9.$novoNomeimg9;
				//----------------------------------------Décima imagem
				$img10 = $_FILES['imagem10'];
					$diretorio_img10 = "imagens/";
					$maximo_img10 = 8000000000;
					$imagem10 = $_FILES['imagem10'];
					$extensoes_img10 = array(".jpg",".jpeg",".png");
					$ext_img10 = strrchr($imagem10['name'],'.');
				//Executa um novo nome para o arquivo do perfil
				$novoNomeimg10 = rand() . $ext_img10;
				//execução das fotos//
				if(move_uploaded_file($img10['tmp_name'], $diretorio_img10.$novoNomeimg10)) 	
				{
					/*print "<br><b>Arquivo 10 enviado </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo 10</b>";*/
						if($_FILES['imagem10']['size'] > $maximo_img10)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_img10." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_img10, $extensoes_img10))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_img10 = $diretorio_img10.$novoNomeimg10;
				//-----formacao-------
					$instituicaoformacao = $_POST['formacao'];
					$nivelensino = $_POST['nivelensino'];
				//-------diploma ou certificado-----
				$arq_diploma = $_FILES['diplomacertificado'];
				$diretorio_diploma = "diploma/"; 
				$maximo_diploma = 50000000000;//50 trilhoes de bytes ou 5.000 megabytes ou 5 gigaytes
				$diploma = $_FILES['diplomacertificado'];
				$extensoes_diploma = array(".docx",".pdf",".jpg",".jpeg",".png");
				$ext_diploma = strrchr($diploma['name'],'.');
				//Executa um novo nome para o documento juntando o novo nome gerado(numeros atraves da funcao rand) com a sua extensao que foi capturada no ext_diploma
				$novoNomeDiploma = rand() . $ext_diploma;
				//execução das fotos//
				if(move_uploaded_file($arq_diploma['tmp_name'], $diretorio_diploma.$novoNomeDiploma)) 	
				{
					/*print "<br><b>O documento foi enviado com sucesso </b>";*/
				}
				else
				{
					/*print "<br><b>Erro ao enviar o arquivo</b>";*/
						if($_FILES['diplomacertificado']['size'] > $maximo_diploma)
						{
						/*print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
						print "<b>limite máximo de ".$maximo_diploma." bytes </b>";*/
						}
						else
						{
							//colocar codigo exemplo anterior aqui dentro
						}
						if(in_array($ext_diploma, $extensoes_diploma))
						{	
							//codigo anterior tudo aqui
						}
						else
						{
							/*print "<br><b>O arquivo enviado não é um documento</b>";*/
						}
				}
				$caminho_diploma = $diretorio_diploma.$novoNomeDiploma;

				//---insere os valores do campo no banco de dados criado 

				//----tabela cadastro_fotografo
				$stmt1 = $conexao->prepare ("INSERT INTO cadastro_fotografo (idcadastro_fotografo, nome_fotografo, data_nascimento_fotografo, senha_fotografo, cpf_fotografo, descricao_fotografo, foto_perfil_fotografo) VALUES ( default, '$nome_fotografo', '$nascimento_fotografo', '$senha_fotografo', '$cpf_fotografo', '$descricao', '$caminho_perfil')");


				//-----tabela contato_fotografo

				$stmt2 = $conexao->prepare("INSERT INTO contato_fotografo(idcontato_fotografo, ddd_fotografo, idcadastro_fotografo, email_fotografo, celular_fotografo, telefone_fotografo) 
					select max(idcontato_fotografo) + 1, '$ddd_fotografo', 
					(select max(idcadastro_fotografo) from cadastro_fotografo),
				 '$email_fotografo', '$celular_fotografo', '$telefone_fotografo' from contato_fotografo;
				 ");

				//-------tabela endereco_fotografo

				$stmt3 = $conexao->prepare("INSERT INTO endereco_fotografo(idendereco_fotografo, endereco_fotografo, cep_fotografo, complemento_fotografo, idcadastro_fotografo, idbairro_fotografo)
					select max(idendereco_fotografo) + 1, '$endereco_fotografo', '$cep_fotografo', '$complemento_fotografo',
					(select max(idcadastro_fotografo) from cadastro_fotografo),
					(select max(idbairro_fotografo) from bairro_fotografo) from endereco_fotografo; 

				");

				//------ tabela bairro_fotografo

				$stmt4 = $conexao->prepare("INSERT INTO bairro_fotografo(idbairro_fotografo, bairro_fotografo, idcidade_fotografo) 
						select max(idbairro_fotografo) + 1, '$bairro_fotografo',
						(select max( idcidade_fotografo ) from cidade_fotografo) 
						from bairro_fotografo;

					");
				//------tabela cidade_fotografo

				$stmt5 = $conexao->prepare("INSERT INTO cidade_fotografo(idcidade_fotografo, cidade_fotografo, iduf_fotografo)
				 	select max(idcidade_fotografo) + 1, '$cidade_fotografo',
					(select max(iduf_fotografo) from uf_fotografo)
					 from cidade_fotografo;
					");
				//------tabela uf_fotografo

				$stmt6 = $conexao->prepare("INSERT INTO uf_fotografo(iduf_fotografo, uf_fotografo, idpais_fotografo) 
					select max(iduf_fotografo) + 1, '$uf_fotografo',
					(select max( idpais_fotografo ) from pais_fotografo) 
					from uf_fotografo;
					 ");
				//------tabela pais_fotografo

				$stmt7 = $conexao->prepare("INSERT INTO pais_fotografo(idpais_fotografo, pais_fotografo) values(default, '$pais_fotografo')");
				//------tabela imagens

				$stmt8 = $conexao->prepare("INSERT INTO imagens(idimagens, idcadastro_fotografo, imagem1, imagem2, imagem3, imagem4, imagem5, imagem6, imagem7, imagem8, imagem9, imagem10) 
				select max(idimagens) + 1, (select max(idcadastro_fotografo) from cadastro_fotografo),
				 '$caminho_img1', '$caminho_img2', '$caminho_img3', '$caminho_img4', '$caminho_img5', '$caminho_img6', '$caminho_img7', '$caminho_img8', '$caminho_img9', '$caminho_img10' from imagens;
					");
				//------tabela formacao

				$stmt9 = $conexao->prepare("INSERT INTO formacao(idformacao, formacao, nivel_ensino) values(default, '$instituicaoformacao', '$nivelensino')");
				//-------tabela diploma_certificado

				$stmt10 = $conexao->prepare("INSERT INTO diploma_certificado(iddiploma_certificado, diploma_certificado, idformacao) 
					select max(iddiploma_certificado) + 1, '$caminho_diploma',
					(select max(idformacao) from formacao) from diploma_certificado;
					");
				//-------tabela formação fotografo-----------------------------

				$stmt11 = $conexao->prepare("INSERT INTO formacao_fotografo(idformacao_fotografo, idformacao, idcadastro_fotografo)
				select max(idformacao_fotografo) + 1,
					(select max(idformacao) from formacao),
					(select max(idcadastro_fotografo) from cadastro_fotografo) from formacao_fotografo; 
					");
				/*---EXECUTAR--*/
				//------tabela pais_fotografo
				$stmt7->execute();
				//------tabela uf_fotografo
				$stmt6->execute();
				//------tabela cidade_fotografo
				$stmt5->execute();
				//------ tabela bairro_fotografo
				$stmt4->execute();
				//----tabela cadastro_fotografo
				$stmt1->execute();
				//-----tabela contato_fotografo
				$stmt2->execute();
				//-------tabela endereco_fotografo
				$stmt3->execute();
				//------tabela imagens
				$stmt8->execute();
				//------tabela formacao
				$stmt9->execute();
				//-------tabela diploma_certificado
				$stmt10->execute();
				//-------tabela formacao_fotografo
				$stmt11->execute();
				
				
				
				?><br><br><br><br>
	<div class="botoes">
            <button class="botoes_conf_ajuda botoes_ajuda radius "><a href="login.php">Para entrar faça o login clicando aqui!</a></button><br><br><br>
            </div></div></div></div>
</article></main>

       <!-- RODAPÉ -->
        <footer class="rodape container bg_white ">
          <div class="social-icons p_bloco">
            <h1>Sobre</h1>
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
            <h1> Ajuda</h1>
            <p><a href="#"> Dúvidas Frequentes</a></p>
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