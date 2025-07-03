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
              </article>
              <div class="title_geral">
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
                        <button class="botoes_conf botoes_conf_adm2 radius" type="submit"><a href="consulta_fot.php">Excluir Usuário</a></button>
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
                             <?php
    include_once "conexao.php";
    echo "<h2> Todos os Fotógrafos </h2>";
                         $rs = $conexao->query("select nome_fotografo, data_nascimento_fotografo, senha_fotografo, cpf_fotografo, descricao_fotografo, foto_perfil_fotografo from cadastro_fotografo");

  while($row = $rs->fetch(PDO::FETCH_OBJ))
      {
        echo "<div class='pergunta'>Nome: </div><div class='resposta'>".$row->nome_fotografo."</div><br>";
        echo "<div class='pergunta'>Data de Nascimento: </div><div class='resposta'>".$row->data_nascimento_fotografo."</div><br>";
        echo "<div class='pergunta'>Senha: </div><div class='resposta'>".$row->senha_fotografo."</div><br>";
        echo "<div class='pergunta'>CPF: </div><div class='resposta'>".$row->cpf_fotografo."</div><br>";
        echo "<div class='pergunta'>Descrição: </div><div class='resposta'>".$row->descricao_fotografo."</div><br>";?>
        <?php
        echo "<br><br><br>";
      }
                    ?>
                    </div></article></div>
                      
          	</main>
          </div>
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