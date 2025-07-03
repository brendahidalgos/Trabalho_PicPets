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
    <body class="body_adm">
         <!-- CABEÇALHO --> 
        <header class="cabecalho container">
          <!--LOGO-->
          <a href="ProcessaloginAdm.php"><h1 class="logo"> Aqui você encontra o melhor fotográfo para seu pet </h1></a>
          <button class="btn-menu bg_minimenu"><i class="fa fa-bars fa-lg"></i></button>
          
        </header>
        <!-- BANNER --> 
        <div class=" banner_adm container">
          <div class="title_geral">
            <br><br> <br><br>
            <main class="conteudos container">
          		<article class="conteudo_adm_conf radius">
	            	<div class="informacao_adm_conf">
	       
                        <h2>Pesquisas</h2><br>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_todos_os_fotografos.php">Todos os Fotógrafos</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_praia_grande.php">Praia Grande</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_sao_vicente.php">São Vicente</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_santos.php">Santos</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_mongagua.php">Mongagua</a></button>
                         </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_guaruja.php">Guarujá</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_sao_sebastiao.php">São Sebastião</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_cubatao.php">Cubatão</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm radius" type="submit"><a href="pesq_peruibe.php">Peruibe</a></button>
                         </div>
                         </div></article>
                         <article class="conteudo_adm_conf3 radius">
                      <div class="informacao_adm_conf3">
                        
                        <h2>Ações</h2><br><div class="altura_botoes">
                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="acao_contato.php">Todos os Contatos</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="pesq_dados_pessoais.php">Dados Pessoais</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="pesq_endereco.php">Endereço</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="pesq_documentos.php">Documentos</a></button>
                        </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="pesq_fotos.php">Fotos</a></button>
                         </div>

                        <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="excluir_usuario.php">Excluir Usuário</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="editar_usuario.php">Editar Usuário</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="alterar_minha_senha.php">Alterar minha senha</a></button>
                         </div>

                         <div class="botoes">
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="sair_adm.php">Sair</a></button>
                         </div></div></div>
              </article>
                <article class="conteudo_adm_conf2 radius">
                    <div class="informacao_adm_conf2">
                        <?php   include_once "conexao.php";
                    echo "<h2>Peruíbe"."</h2><br>";


                    $rs = $conexao->query("select count(cidade_fotografo) as 'Peruíbe' from cidade_fotografo
                      where cidade_fotografo = 'Peruíbe'");

                    while($row = $rs->fetch(PDO::FETCH_OBJ))
                        {

                           echo "<div class='pergunta'> Contem ".$row->Peruíbe." Fotógrafos nessa Cidade.</div><br>";

                        }


                    $rs = $conexao->query("select nome_fotografo from cadastro_fotografo, endereco_fotografo, bairro_fotografo, cidade_fotografo
                      where endereco_fotografo.idcadastro_fotografo = cadastro_fotografo.idcadastro_fotografo
                        and endereco_fotografo.idbairro_fotografo = bairro_fotografo.idbairro_fotografo
                        and bairro_fotografo.idcidade_fotografo = cidade_fotografo.idcidade_fotografo
                        and cidade_fotografo = 'Peruíbe'");

                    while($row = $rs->fetch(PDO::FETCH_OBJ))
                        {

                          echo "<div class='resposta'>".$row->nome_fotografo."</div><br>";

                        }
                       echo "";?>
                    </div></article></div>
                    <div class="title_geral">
                   
          	</main>
          </div>
    
       
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