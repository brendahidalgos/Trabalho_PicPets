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
	include_once'../conexao.php';
//Captura os valores inseridos no campo
	$cpf_fotografo = $_POST['cpf_fotografo'];
	$senha_fotografo = $_POST['senha_fotografo'];
//seleciona(pega) os valores que estao na tabela cadastro_fotografo
	$rs = $conexao->query("select nome_fotografo, cpf_fotografo, senha_fotografo from cadastro_fotografo where cpf_fotografo = '$cpf_fotografo' and senha_fotografo = '$senha_fotografo'");
//Se ouver algum resultado
	if($rs -> rowcount() == 1){
//Abre uma sessão, pega os valores que serão gravados 
		
		$_SESSION['cpf_fotografo'] = $cpf_fotografo;
		$_SESSION['senha_fotografo'] = $senha_fotografo;
//Será impresso um cumprimento
		while($nome = $rs->fetch(PDO::FETCH_OBJ))
					{
						echo "<h2>Seja Bem Vinda(o) ". $nome->nome_fotografo ."</h2><br><br>";
					}
//Se o cpf e a senha for diferente da secao sera direcionado para a pagina de login
		if((!$_SESSION['cpf_fotografo'])&&(!$_SESSION['senha_fotografo'])){
				header("Location:login.php")
				;
//Senão serão executados os comandos
			}else{
//Seleção de tudo da tabela cadastro onde o cpf_fotografo é igual a variavel $cpf_fotografo
			$rs = $conexao->query("Select cadastro_fotografo.foto_perfil_fotografo, cadastro_fotografo.nome_fotografo, cadastro_fotografo.data_nascimento_fotografo,
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
						and cadastro_fotografo.senha_fotografo = '$senha_fotografo'
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
						<form action="editarDadosFotografo.php" method="POST">
						<input type="hidden" name="id" value="<?php echo $row->idcadastro_fotografo;?>"><br>
						<div class="img_perfil_cli_l">
						<img class="img_perfil_cli_l_1" src="<?php echo $row->foto_perfil_fotografo;?>"></div></div><br><br><br><br><br><br><br><br><br><br>
						<?php
						echo "<p>Nome: "."<div
							class='input_pro_login'></p><h5>".$row->nome_fotografo."</h5></div>";

						echo "<p>Data de nascimento:"."<div
							class='input_pro_login'></p><h5>".$row->data_nascimento_fotografo."</h5></div>";

						echo "<p>Senha: "."<div
							class='input_pro_login'></p><h5>".$row->senha_fotografo."</h5></div>";

						echo "<p>CPF: "."<div
							class='input_pro_login'></p><h5>".$row->cpf_fotografo."</h5></div>";

						echo "<p>DDD: "."<div
							class='input_pro_login'></p><h5>".$row->ddd_fotografo."</h5></div>";

						echo "<p>Email: "."<div
							class='input_pro_login'></p><h5>".$row->email_fotografo."</h5></div>";

						echo "<p>Celular: "."<div
							class='input_pro_login'></p><h5>".$row->celular_fotografo."</h5></div>";

						echo "<p>Telefone: "."<div
							class='input_pro_login'></p><h5>".$row->telefone_fotografo."</h5></div>";

						echo "<p>Endereço: "."<div
							class='input_pro_login'></p><h5>".$row->endereco_fotografo."</h5></div>";

						echo "<p>CEP: "."<div
							class='input_pro_login'></p><h5>".$row->cep_fotografo."</h5></div>";

						echo "<p>Complemento: "."<div
							class='input_pro_login'></p><h5>".$row->complemento_fotografo."</h5></div>";

						echo "<p>Bairro: "."<div
							class='input_pro_login'></p><h5>".$row->bairro_fotografo."</h5></div>";

						echo "<p class='texto_pro_login'>Cidade: "."<div
							class='input_pro_login'></p><h5>".$row->cidade_fotografo."</h5></div>";

						echo "<p>UF: "."<div
							class='input_pro_login'></p><h5>".$row->uf_fotografo."</h5></div>";

						echo "<p>País: "."<div
							class='input_pro_login'></p><h5>".$row->pais_fotografo."</h5></div>";

						echo "<p>Formação: "."<div
							class='input_pro_login'></p><h5>".$row->formacao."</h5></div>";

						echo "<p>Nível de ensino: "."<div
							class='input_pro_login'></p><h5>".$row->nivel_ensino."</h5></div>";?>

						<p>Diploma: <div class='input_pro_login_cli'></p>
						<div class="botoes">
							<button class=" radius ver" type="submit" value="Cadastre-se"><a href="<?php echo $row->diploma_certificado;?>" target="_blank">Ver certificado/diploma</a></button>
							</div>

						<h2>Minhas imagens</h2><br><br>
				<img class="img_port_p" src="<?php echo $row->imagem1;?>">
				<img class="img_port_p" src="<?php echo $row->imagem2;?>">
				<img class="img_port_p" src="<?php echo $row->imagem3;?>">
				<img class="img_port_p" src="<?php echo $row->imagem4;?>">
				<img class="img_port_p" src="<?php echo $row->imagem5;?>">
				<img class="img_port_p" src="<?php echo $row->imagem6;?>">
				<img class="img_port_p" src="<?php echo $row->imagem7;?>">
				<img class="img_port_p" src="<?php echo $row->imagem8;?>">
				<img class="img_port_p" src="<?php echo $row->imagem9;?>">
				<img class="img_port_p" src="<?php echo $row->imagem10;?>">

<p>Descrição: <br><textarea class="input_pro_login_descricao" cols="" rows=""><?php echo $row->descricao_fotografo?> </textarea><br>

<?php		
echo "<br><br>";}
		?>
<!-- Botão sair da secão que é direcionado a pagina sair.php onde é fechada a seção e direciona o usuario para a pagina de login-->
<div class="botoes">
<button class="botoes_conf botoes_proc_l1 radius" type="submit" value="enviar"> <a href="editarDadosFotografo.php">Editar meus dados</a></button>	

<button class="botoes_conf botoes_proc_l2 radius" type="submit" value="enviar"><a href="sairFotografo.php">Sair</a></button>
</div></form>
<?php
}
}
// senão ele é direcionado para a página loginfotografo.php
	else{
		header('location: login.php');
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