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
      		<!-- Adicionando Javascript -->
    <script type="text/javascript" >
    function limpa_formulário_cep_fotografo() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco_fotografo').value=("");
            document.getElementById('bairro_fotografo').value=("");
            document.getElementById('cidade_fotografo').value=("");
            document.getElementById('uf_fotografo').value=("");           
    }
    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco_fotografo').value=(conteudo.logradouro);
            document.getElementById('bairro_fotografo').value=(conteudo.bairro);
            document.getElementById('cidade_fotografo').value=(conteudo.localidade);
            document.getElementById('uf_fotografo').value=(conteudo.uf);
      } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep_fotografo();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep_fotografo(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep_fotografo = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep_fotografo != "") {

            //Expressão regular para validar o CEP.
            var validacep_fotografo = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep_fotografo.test(cep_fotografo)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco_fotografo').value="...";
                document.getElementById('bairro_fotografo').value="...";
                document.getElementById('cidade_fotografo').value="...";
                document.getElementById('uf_fotografo').value="...";
                

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep_fotografo + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep_fotografo();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep_fotografo();
        }
    };
</script>
	</head>
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
		    <main class="conteudos container"><br><br><br><br>
            <div class="conteudo_cad_fotografo border ">
            <!--=======================================================================  Formulario  ================================-->
            <article class="conteudo_cad_fotografo border dados">
            <div class="informacao_cad_fotografo">
            <h2> Dados Pessoais </h2>
            <form method="POST" action="processacad_fotografo.php" enctype="multipart/form-data">
			<p>Foto de perfil: <div id="div_file" class="botoes">Adicionar Foto<input class="botoes_conf radius" id="btn_enviar" type="file" name="perfil_fotografo"></p></div>
			<p>Nome: <input class="input_cad_fotografo" type="text" name="nome_fotografo" maxlength="100" placeholder="Digite o nome completo."></p>
			<p>Data de nasc. :<input class="input_cad_fotografo" type="date" name="nascimento_fotografo"></p>
			<p>Senha: <input class="input_cad_fotografo" type="password" name="senha_fotografo" maxlength="20" placeholder="Digite a senha com letras e números."></p>
			<p>CPF: <input class="input_cad_fotografo" type="number" name="cpf_fotografo" maxlength="12" placeholder="Digite seu CPF sem pontos ou traços."></p>
                      <?php
			function validaCPF($cpf_fotografo) {
			 
			    // Extrai somente os números
			    $cpf_fotografo = preg_replace( '/[^0-9]/is', '', $cpf_fotografo );
			     
			    // Verifica se foi informado todos os digitos corretamente
			    if (strlen($cpf_fotografo) != 11) {
			        return false;
			    }
			    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
			    if (preg_match('/(\d)\1{10}/', $cpf_fotografo)) {
			        return false;
			    }
			    // Faz o calculo para validar o CPF
			    for ($t = 9; $t < 11; $t++) {
			        for ($d = 0, $c = 0; $c < $t; $c++) {
			            $d += $cpf_fotografo{$c} * (($t + 1) - $c);
			        }
			        $d = ((10 * $d) % 11) % 10;
			        if ($cpf_fotografo{$c} != $d) {
			            return false;
			        }
			    }
			    return true;
			}
			            ?>
			</div></article>
            
            
		     <article class="conteudo_cad_fotografo border dados">
            <div class="informacao_cad_fotografo">
            <h2> Contato </h2>
			<p>DDD: <input class="input_cad_fotografo" type="number" name="ddd_fotografo" maxlength="2" placeholder="Digite o DDD do seu telefone/celular."></p>
			<p>Celular: <input class="input_cad_fotografo" type="number" name="celular_fotografo" maxlength="9" placeholder="Digite os 9 digitos do celular."></p>
			<p>Telefone: <input class="input_cad_fotografo" type="number" name="telefone_fotografo" maxlength="8" placeholder="Digite os 8 digitos do telefone."></p>
			<p>Email: <input class="input_cad_fotografo" type="email" name="email_fotografo" maxlength="50" placeholder="Digite seu e-mail."></p>
            </div></article>
            
            <article class="conteudo_cad_fotografo  border dados">
            <div class="informacao_cad_fotografo">
            <h2> Endereço </h2>
 			<p>Cep: <INPUT class="input_cad_fotografo_endereco_cep" type="number" NAME="cep_fotografo" ID="cep_fotografo" placeholder="Digite seu CEP." requerid></p>
			<p>Endereço: <input class="input_cad_fotografo" type="text" name="endereco_fotografo" ID="endereco_fotografo" maxlength="100" placeholder="Digite o nome da sua Rua/Av."></p>
			<p>Completo: <input class="input_cad_fotografo" type="text" name="complemento_fotografo" ID="complemento_fotografo" maxlength="100" placeholder="Digite o complemento do endereço."></p>
			<p>Bairro: <input class="input_cad_fotografo" type="text" name="bairro_fotografo" ID="bairro_fotografo" maxlength="50" placeholder="Digite seu bairro."></p>
			<p>Cidade / UF: <input class="input_cad_fotografo_endereco_cidade" type="text" name="cidade_fotografo" ID="cidade_fotografo" maxlength="50" placeholder="Digite sua cidade.">
                            <input class="input_cad_fotografo_endereco_uf" type="text" name="uf_fotografo" ID="uf_fotografo" maxlength="50" placeholder="Digite o UF.">
			<p>País: <input class="input_cad_fotografo" type="text" name="pais_fotografo" maxlength="50" placeholder="Digite seu país."></p>
            <div class="botoes">
            <button class="radius botoes_conf busca_cep" type="button" NAME="buscacep_fotografo" VALUE="" ONCLICK="pesquisacep_fotografo(cep_fotografo.value);">Buscar</div>
            </div></article>

                
            <article class="conteudo_cad_fotografo border dados">
            <div class="informacao_cad_fotografo">    
            <h2> Formação </h2>
			<p>Instituição : <input class="input_cad_fotografo" type="text" name="formacao" maxlength="100" placeholder="Digite o nome da escola." ></p>
            <p>Nível : <input class="input_cad_fotografo" type="text" name="nivelensino" maxlength="50" placeholder="Digite o seu nível de ensino."></p>
			<p>Diploma/<br>Certificado: <div id="div_file" class="botoes">Adicionar Diploma/Certificado<input  class="botoes_conf radius" id="btn_enviar" type="file" name="diplomacertificado"></p></div>
			<p>Descreva-se: <input class="input_cad_fotografo" type="textarea" name="descricao" maxlength="100" placeholder="Fale sobre você!"></p>
			</div></article>

            <article class="conteudo_cad_fotografo border dados">
            <div class="informacao_cad_fotografo_l">
            <h2> Portifólio </h2><br>

            <p>Imagem 1: <div id="div_file" class="botoes">Adicionar Foto 1<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem1"></p></div>
            <p>Imagem 2: <div id="div_file" class="botoes">Adicionar Foto 2<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem2"></p>  </div>         
            <p>Imagem 3: <div id="div_file" class="botoes">Adicionar Foto 3<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem3"></p>  </div>
            <p>Imagem 4: <div id="div_file" class="botoes">Adicionar Foto 4<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem4"></p></div>
            <p>Imagem 5: <div id="div_file" class="botoes">Adicionar Foto 5<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem5"></p> </div>
            </div></article>
    	    <article class="conteudo_cad_fotografo border dados">
            <div class="informacao_cad_fotografo_l"><br><br><br><br>
             <p>Imagem 6: <div id="div_file" class="botoes">Adicionar Foto 6<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem6"></p></div>
            <p>Imagem 7: <div id="div_file" class="botoes">Adicionar Foto 7<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem7"></p>  </div>
            <p>Imagem 8: <div id="div_file" class="botoes">Adicionar Foto 8<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem8"></p></div>
            <p>Imagem 9: <div id="div_file" class="botoes">Adicionar Foto 9<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem9"></p></div>
            <p>Imagem 10: <div id="div_file" class="botoes">Adicionar Foto 10<input class="botoes_conf radius" id="btn_enviar"  type="file" name="imagem10"></p></div>
        		</div></article>


            <article class="servico_cad_fotografo border termos">
            <div class="informacao_cad_fotografo_r">
           <p><input type="checkbox" name="" value="" required /> Declaro concordar com os termos de privacidade do site PicPets.</p>
            <p>Termos:<div class='input_pro_login_cli'></p>
                        <div class="botoes">
                         <button class=" radius ver4" type="submit" value="Cadastre-se"><a href="../manual/Termos de Uso Picpets.docx" target="_blank">Clique aqui</a></button>
                            </div>
             <div class="botoes">
            <button class="botoes_conf botoes_cad_fot radius" type="submit" value="Cadastrar" >Cadastrar</button></div><br><br>
            </form></div></article></div></main></div></div>


            <!--=============================================================================-->


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