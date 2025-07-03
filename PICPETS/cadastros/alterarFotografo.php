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
          	<article class="conteudo_alterar_cliente bg-white radius">
            <div class="informacao_alterar_cliente">
<?php
//conexao com o banco de dados




$_SESSION['cpf_fotografo'];
$_SESSION['senha_fotografo'];	

include_once '../conexao.php';
if((!$_SESSION['cpf_fotografo'])&&(!$_SESSION['senha_fotografo'])){
				header("Location:sairFotografo.php");
}else{
$id = $_POST['id'];
$foto = $_FILES['foto'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$descricao = $_POST['descricao'];
$ddd = $_POST['ddd'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$pais = $_POST['pais'];
$formacao = $_POST['formacao'];
$nivel_ensino = $_POST['nivel_ensino'];
$diploma = $_FILES['diploma'];
$img1 = $_FILES['img1'];
$img2 = $_FILES['img2'];
$img3 = $_FILES['img3'];
$img4 = $_FILES['img4'];
$img5 = $_FILES['img5'];
$img6 = $_FILES['img6'];
$img7 = $_FILES['img7'];
$img8 = $_FILES['img8'];
$img9 = $_FILES['img9'];
$img10 = $_FILES['img10'];

	switch($_POST['Alterar']){

		case 'foto':

	$arq_foto = $_FILES['foto'];
	$diretorio = "foto/fotografo/";
	$maximo = 5000000;//5 milhoes 
	$extensoes = array(".jpg",".jpeg",".gif",".png");
	$ext = strrchr($foto['name'],'.');

	//Executa um novo nome para o arquivo
	$novoNome = rand() . $ext;
	$caminho_foto = $diretorio.$novoNome;

	//execução das fotos//
	if(move_uploaded_file($arq_foto['tmp_name'], $diretorio.$novoNome)) 	
	{
		print "<br><b>Arquivo gravado com o nome = </b>".$novoNome;

		
	}
	else
	{
		print "<br><b>Erro ao enviar o arquivo</b>";
			if($_FILES['foto']['size'] > $maximo)
			{
			print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
			print "<b>limite máximo de ".$maximo." bytes </b>";
			}
			else
			{
				//colocar codigo exemplo anterior aqui dentro
			}
			if(in_array($ext, $extensoes))
			{	
				//codigo anterior tudo aqui
			}
			else
			{
				print "<br><b>O arquivo enviado não é imagem</b>";
			}

	}

	$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set foto_perfil_fotografo = '$caminho_foto' where idcadastro_fotografo = '$id'"); 

					$stmt1->execute();
					
		break;

		case 'nome':

			$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set nome_fotografo = '$nome' where idcadastro_fotografo = '$id'"); 

					$stmt1->execute();
					
		break;

		case 'nascimento':

			$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set data_nascimento_fotografo = '$nascimento' where idcadastro_fotografo = '$id'");

					$stmt1->execute();
					
		break;

		case 'senha':

			$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set senha_fotografo = '$senha' where idcadastro_fotografo = '$id'"); 

					$stmt1->execute();
					
		break;

		case'cpf':
			
			$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set cpf_fotografo = '$cpf' where idcadastro_fotografo = '$id'"); 

					$stmt1->execute();
					
		break;

		case 'descricao':
			
			$stmt1 = $conexao->prepare("UPDATE cadastro_fotografo set descricao_fotografo = '$descricao' where idcadastro_fotografo = '$id'"); 

					$stmt1->execute();
					
		break;

		case 'ddd':
			
			$stmt2 = $conexao->prepare("UPDATE contato_fotografo set ddd_fotografo = '$ddd' where idcadastro_fotografo = '$id'"); 

					$stmt2->execute();
					
		break;

		case 'email':
			
			$stmt2 = $conexao->prepare("UPDATE contato_fotografo set email_fotografo = '$email' where idcadastro_fotografo = '$id'");

					$stmt2->execute();
					
		break;

		case 'celular':
			
			$stmt2 = $conexao->prepare("UPDATE cadastro_fotografo set celular_fotografo = '$celular' where idcadastro_fotografo = '$id'"); 

					$stmt2->execute();
					
		break;

		case 'telefone':
			
			$stmt2 = $conexao->prepare("UPDATE contato_fotografo set telefone_fotografo = '$telefone' where idcadastro_fotografo = '$id'"); 

					$stmt2->execute();
					
		break;

		case 'endereco':
			
			$stmt3 = $conexao->prepare("UPDATE endereco_fotografo set endereco_fotografo = '$endereco' where idcadastro_fotografo = '$id'"); 

					$stmt3->execute();
					
		break;

		case 'cep':
			
			$stmt3 = $conexao->prepare("UPDATE endereco_fotografo set cep_fotografo = '$cep' where idcadastro_fotografo = '$id'"); 

					$stmt3->execute();
					
		break;

		case 'complemento':
			
			$stmt3 = $conexao->prepare("UPDATE endereco_fotografo set complemento_fotografo = '$complemento' where idcadastro_fotografo = '$id'"); 

					$stmt3->execute();
					
		break;

		case 'bairro':
			
			$stmt4 = $conexao->prepare("UPDATE bairro_fotografo, endereco_fotografo set bairro_fotografo = '$bairro' where bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
		and endereco_fotografo.idcadastro_fotografo = '$id'"); 

					$stmt4->execute();
					
		break;

		case 'cidade':
			
			$stmt5 = $conexao->prepare("UPDATE cidade_fotografo, bairro_fotografo, endereco_fotografo set cidade_fotografo = '$cidade' where cidadefotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo
		and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
		and endereco_fotografo.idcadastro_fotografo = '$id'");

					$stmt5->execute();
					
		break;

		case 'uf':
			
			$stmt6 = $conexao->prepare("UPDATE uf_cliente, cidade_fotografo, bairro_fotografo, endereco_fotografo set uf_fotografo = '$uf' where uf_fotografo.iduf_fotografo = cidade_fotografo.iduf_fotografo
		and cidade_fotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo
		and bairro_cliente.idbairro_cliente = endereco_cliente.idbairro_cliente
		and endereco_fotografo.idcadastro_fotografo = '$id'");

					$stmt6->execute();
					
		break;

		case 'pais':
			
			$stmt7 = $conexao->prepare("UPDATE pais_fotografo, uf_fotografo, cidade_fotografo, bairro_fotografo, endereco_fotografo set pais_fotografo = '$pais' where pais_fotografo.idpais_fotografo = uf_fotografo.idpais_fotografo 
		and uf_fotografo.iduf_fotografo = cidade_fotografo.iduf_fotografo
		and cidade_fotografo.idcidade_fotografo = bairro_fotografofotografo.idcidade_fotografo
		and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
		and endereco_fotografo.idcadastro_fotografo = '$id'"); 

					$stmt7->execute();
					
		break;

		case 'formacao':
			
			$stmt8 = $conexao->prepare("UPDATE formacao, formacao_fotografo, cadastro_fotografo set formacao = '$formacao'
		where formacao_fotografo.idcadastro_fotografo = '$id'
		and formacao.idformacao = formacao_fotografo.idformacao");

					$stmt8->execute();
					
		break;

		case 'nivel_ensino':
			
			$stmt8 = $conexao->prepare("UPDATE formacao, formacao_fotografo, cadastro_fotografo set nivel_ensino = '$nivel_ensino' 
		where formacao_fotografo.idcadastro_fotografo = '$id'
		and formacao.idformacao = formacao_fotografo.idformacao");

					$stmt8->execute();
					
		break;

		case 'diploma':
			
			//-------- Diploma  -------------------

			$arq_diploma = $_FILES['diploma'];
			$diretorio_diploma = "diploma/"; 
			$maximo_diploma = 50000000000;//50 trilhoes de bytes ou 5.000 megabytes ou 5 gigaytes
			$extensoes_diploma = array(".docx",".pdf",".jpg",".jpeg",".png");
			$ext_diploma = strrchr($diploma['name'],'.');


			//Executa um novo nome para o documento juntando o novo nome gerado(numeros atraves da funcao rand) com a sua extensao que foi capturada no ext_diploma

			$novoNomeDiploma = rand() . $ext_diploma;
			$caminho_diploma = $diretorio_diploma.$novoNomeDiploma;


			//execução das fotos//
			if(move_uploaded_file($arq_diploma['tmp_name'], $diretorio_diploma.$novoNomeDiploma)) 	
			{
				print "<br><b>Arquivo gravado com o nome = </b>".$novoNomeDiploma;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo</b>";
					if($_FILES['diploma']['size'] > $maximo_diploma)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_diploma." bytes </b>";
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
						print "<br><b>O arquivo enviado não é um documento</b>";
					}

			}
			$stmt9 = $conexao->prepare("UPDATE diploma_certificado, formacao, formacao_fotografo, cadastro_fotografo set diploma_certificado = '$caminho_diploma'
					where formacao_fotografo.idcadastro_fotografo = '$id'
					and formacao.idformacao = formacao_fotografo.idformacao
					and diploma_certificado.idformacao = formacao.idformacao"); 
					
					$stmt9->execute();

		break;

		case 'img1':
			
			//-------- Imagem1-

			$img1 = $_FILES['img1'];
				$diretorio_img1 = "imagens/";
				$maximo_img1 = 80000000000;
				$extensoes_img1 = array(".jpg",".jpeg",".png");
				$ext_img1 = strrchr($img1['name'],'.');


			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg1 = rand() . $ext_img1;
			$caminho_img1 = $diretorio_img1.$novoNomeimg1;

			//execução das fotos//
			if(move_uploaded_file($img1['tmp_name'], $diretorio_img1.$novoNomeimg1)) 	
			{
				print "<br><b>Arquivo 1 gravado com o nome = </b>".$novoNomeimg1;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 1</b>";
					if($_FILES['img1']['size'] > $maximo_img1)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img1." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem1 = '$caminho_img1'
					where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();
			
		break;

		case 'img2':
			
			//-------- Imagem2-

				$img2 = $_FILES['img2'];
				$diretorio_img2 = "imagens/";
				$maximo_img2 = 80000000000;
				$extensoes_img2 = array(".jpg",".jpeg",".png");
				$ext_img2 = strrchr($img2['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg2 = rand() . $ext_img2;

			$caminho_img2 = $diretorio_img2.$novoNomeimg2;

			//execução das fotos//
			if(move_uploaded_file($img2['tmp_name'], $diretorio_img2.$novoNomeimg2)) 	
			{
				print "<br><b>Arquivo 1 gravado com o nome = </b>".$novoNomeimg2;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 2</b>";
					if($_FILES['img2']['size'] > $maximo_img2)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img2." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem2 = '$caminho_img2' 
					where imagens.idcadastro_fotografo = '$id'");  

			$stmt10->execute();
			
		break;

		case 'img3':
			
			//-------- Imagem3-

				$img3 = $_FILES['img3'];
				$diretorio_img3 = "imagens/";
				$maximo_img3 = 80000000000;
				$extensoes_img3 = array(".jpg",".jpeg",".png");
				$ext_img3 = strrchr($img3['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg3 = rand() . $ext_img3;

			$caminho_img3 = $diretorio_img3.$novoNomeimg3;

			//execução das fotos//
			if(move_uploaded_file($img3['tmp_name'], $diretorio_img3.$novoNomeimg3)) 	
			{
				print "<br><b>Arquivo 3 gravado com o nome = </b>".$novoNomeimg3;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 3</b>";
					if($_FILES['img3']['size'] > $maximo_img3)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img3." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
					$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem3 = '$caminho_img3' 
					where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();
			
		break;

		case 'img4':
			
	$img4 = $_FILES['img4'];
	$diretorio_img4 = "imagens/";
	$maximo_img4 = 80000000000;
	$extensoes_img4 = array(".jpg",".jpeg",".png");
	$ext_img4 = strrchr($img4['name'],'.');
	

//Executa um novo nome para o arquivo do perfil

$novoNomeimg4 = rand() . $ext_img4;

$caminho_img4 = $diretorio_img4.$novoNomeimg4;

//execução das fotos//
if(move_uploaded_file($img4['tmp_name'], $diretorio_img4.$novoNomeimg4)) 	
{
	print "<br><b>Arquivo 4 gravado com o nome = </b>".$novoNomeimg4;
}
else
{
	print "<br><b>Erro ao enviar o arquivo 4</b>";
		if($_FILES['img4']['size'] > $maximo_img4)
		{
		print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
		print "<b>limite máximo de ".$maximo_img4." bytes </b>";
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
			print "<br><b>O arquivo enviado não é uma imagem</b>";
		}

}
$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem4 = '$caminho_img4'
		where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();
			
		break;

		case 'img5':

			//-------- Imagem5-

			$img5 = $_FILES['img5'];
			$diretorio_img5 = "imagens/";
			$maximo_img5 = 80000000000;
			$extensoes_img5 = array(".jpg",".jpeg",".png");
			$ext_img5 = strrchr($img5['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg5 = rand() . $ext_img5;

			$caminho_img5 = $diretorio_img5.$novoNomeimg5;

			//execução das fotos//
			if(move_uploaded_file($img5['tmp_name'], $diretorio_img5.$novoNomeimg5)) 	
			{
				print "<br><b>Arquivo 5 gravado com o nome = </b>".$novoNomeimg5;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 5</b>";
					if($_FILES['img5']['size'] > $maximo_img5)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img5." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem5 = '$caminho_img5' 
			where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();
			
		break;

		case 'img6':

			//-------- Imagem6-

			$img6 = $_FILES['img6'];
			$diretorio_img6 = "imagens/";
			$maximo_img6 = 80000000000;
			$extensoes_img6 = array(".jpg",".jpeg",".png");
			$ext_img6 = strrchr($img6['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg6 = rand() . $ext_img6;

			$caminho_img6 = $diretorio_img6.$novoNomeimg6;

			//execução das fotos//
			if(move_uploaded_file($img6['tmp_name'], $diretorio_img6.$novoNomeimg6)) 	
			{
				print "<br><b>Arquivo 6 gravado com o nome = </b>".$novoNomeimg6;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 6</b>";
					if($_FILES['img6']['size'] > $maximo_img6)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img6." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem6 = '$caminho_img6' 
		where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();
			
		break;

		case 'img7':

			//-------- Imagem7-

			$img7 = $_FILES['img7'];
			$diretorio_img7 = "imagens/";
			$maximo_img7 = 80000000000;
			$extensoes_img7 = array(".jpg",".jpeg",".png");
			$ext_img7 = strrchr($img7['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg7 = rand() . $ext_img7;

			$caminho_img7 = $diretorio_img7.$novoNomeimg7;

			//execução das fotos//
			if(move_uploaded_file($img7['tmp_name'], $diretorio_img7.$novoNomeimg7)) 	
			{
				print "<br><b>Arquivo 7 gravado com o nome = </b>".$novoNomeimg7;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 7</b>";
					if($_FILES['img7']['size'] > $maximo_img7)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img7." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem7 = '$caminho_img7' 
		where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();

		break;

		case 'img8':

			//------------------Imagem8

			$img8 = $_FILES['img8'];
			$diretorio_img8 = "imagens/";
			$maximo_img8 = 80000000000;
			$extensoes_img8 = array(".jpg",".jpeg",".png");
			$ext_img8 = strrchr($img8['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg8 = rand() . $ext_img8;

			$caminho_img8 = $diretorio_img8.$novoNomeimg8;

			//execução das fotos//
			if(move_uploaded_file($img8['tmp_name'], $diretorio_img8.$novoNomeimg8)) 	
			{
				print "<br><b>Arquivo 8 gravado com o nome = </b>".$novoNomeimg8;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 8</b>";
					if($_FILES['img8']['size'] > $maximo_img8)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img8." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem8 = '$caminho_img8' 
		where imagens.idcadastro_fotografo = '$id'");
			
			$stmt10->execute();

		break;

		case 'img9':

			//---------------Imagem9

			$img9 = $_FILES['img9'];
			$diretorio_img9 = "imagens/";
			$maximo_img9 = 80000000000;
			$extensoes_img9 = array(".jpg",".jpeg",".png");
			$ext_img9 = strrchr($img9['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg9 = rand() . $ext_img9;

			$caminho_img9 = $diretorio_img9.$novoNomeimg9;

			//execução das fotos//
			if(move_uploaded_file($img9['tmp_name'], $diretorio_img9.$novoNomeimg9)) 	
			{
				print "<br><b>Arquivo 9 gravado com o nome = </b>".$novoNomeimg9;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 9</b>";
					if($_FILES['img9']['size'] > $maximo_img9)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img9." bytes </b>";
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
						print "<br><b>O arquivo enviado não é uma imagem</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem9 = '$caminho_img9' 
		where imagens.idcadastro_fotografo = '$id'"); 

			$stmt10->execute();

		break;

		case 'img10':

			//------------- imagem10

			$img10 = $_FILES['img10'];
			$diretorio_img10 = "imagens/";
			$maximo_img10 = 80000000000;
			$extensoes_img10 = array(".jpg",".jpeg",".png");
			$ext_img10 = strrchr($img10['name'],'.');
				

			//Executa um novo nome para o arquivo do perfil

			$novoNomeimg10 = rand() . $ext_img10;

			$caminho_img10 = $diretorio_img10.$novoNomeimg10;

			//execução das fotos//
			if(move_uploaded_file($img10['tmp_name'], $diretorio_img10.$novoNomeimg10)) 	
			{
				print "<br><b>Arquivo 10 gravado com o nome = </b>".$novoNomeimg10;
			}
			else
			{
				print "<br><b>Erro ao enviar o arquivo 10</b>";
					if($_FILES['img10']['size'] > $maximo_img10)
					{
					print "<br><b>Erro! O arquivo enviado ultrapassa o </b>";
					print "<b>limite máximo de ".$maximo_img10." bytes </b>";
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
						print "<br><b>O arquivo enviado não é um documento</b>";
					}

			}
			
			$stmt10 = $conexao->prepare("UPDATE imagens, cadastro_fotografo set imagem10 = '$caminho_img10' 
		where imagens.idcadastro_fotografo = '$id'");

			$stmt10->execute();

		break;

	}
}
  echo "<h2>Alteração efetuada</h2>";
?>
<div class="botoes">
<button class="botoes_conf radius"><a href="perfileditado.php">Voltar</a></button></div><br><br>
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