<?PHP

$link = mysql_connect("localhost:3307", "root", "usbw") 
        or die ("Não foi possível conectar: ". mysql_error()); 

$banco = mysql_select_db("sistema", $link) 
         or die ("Erro ao abrir o banco de dados: ". mysql_error());
	
$busca = mysql_query("Select * From tb_cliente") 
         or die ("Erro ao realizar busca : " . mysql_error()); 
include_once'conexao.php';

			$rs = $conexao->query("Select cadastro_fotografo.foto_perfil_fotografo, cadastro_fotografo.nome_fotografo, cadastro_fotografo.data_nascimento_fotografo,
						cadastro_fotografo.senha_fotografo, cadastro_fotografo.cpf_fotografo, cadastro_fotografo.descricao_fotografo,
						 
						contato_fotografo.ddd_fotografo, contato_fotografo.email_fotografo, contato_fotografo.celular_fotografo, contato_fotografo.telefone_fotografo,
						formacao.formacao, formacao.nivel_ensino,
						diploma_certificado.diploma_certificado, formacao.formacao, formacao.nivel_ensino,
						endereco_fotografo.endereco_fotografo, endereco_fotografo.cep_fotografo, endereco_fotografo.complemento_fotografo,
						bairro_fotografo.bairro_fotografo,
						cidade_fotografo.cidade_fotografo,
						uf_fotografo.uf_fotografo,
						pais_fotografo.pais_fotografo
						from cadastro_fotografo, imagens , contato_fotografo, diploma_certificado, formacao, formacao_fotografo, endereco_fotografo, bairro_fotografo, cidade_fotografo, uf_fotografo, pais_fotografo 
						where cadastro_fotografo.cpf_fotografo = cpf_fotografo
						and cadastro_fotografo.senha_fotografo = senha_fotografo
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

						
<p>Descrição: <br><textarea class="input_pro_login_descricao" cols="" rows=""><?php echo $row->descricao_fotografo?> </textarea><br>
	<button type="button" name="Excluir" value="Excluir"><a href="excluir_fotografo.php" />Excluir</a></button>
<?php		
echo "<br><br>";}
		?>


picpets.haaltech.net.br/cpanel


