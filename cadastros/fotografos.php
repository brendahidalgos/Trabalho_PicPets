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
          <a href="../index.html"><h1 class="logo"> Aqui você encontra o melhor fotógrafo para seu pet </h1></a>
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
            <h3> Aqui você encontra o melhor fotográfo para seu pet da Baixada Santista!</h3>
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
          <article class="conteudo_pesq_fotografo bg-white radius">
            <div class="informacao_pesq_fotografo">
            <table>
<?php

//conexao com o banco de dados
include_once "../conexao.php";

//Captura os valores inseridos no campo
$busca = $_POST['busca'];
$rs = $conexao->query("select nome_fotografo from cadastro_fotografo where nome_fotografo = '$busca'");
$limite = 3;
$cont = 0;
//---Se houver algum resultado
if($rs -> rowcount() > 0){

//---Seleciona o nome, a idade(ano atual menos a data de nascimento), a foto do perfil, e a cidade em que o fotografo mora através da busca pelo nome 
$rs = $conexao->query("select cadastro_fotografo.foto_perfil_fotografo, cadastro_fotografo.nome_fotografo, (Select Year(now()) - (select Year(cadastro_fotografo.data_nascimento_fotografo))) as Idade,  
                cidade_fotografo.cidade_fotografo, 
                cadastro_fotografo.idcadastro_fotografo 
                from cadastro_fotografo, endereco_fotografo, bairro_fotografo, cidade_fotografo     
                where cadastro_fotografo.idcadastro_fotografo = endereco_fotografo.idcadastro_fotografo
                and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
                and cidade_fotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo 
                and cadastro_fotografo.nome_fotografo = '$busca'");

      while($row = $rs->fetch(PDO::FETCH_OBJ))
      {
        if($cont == $limite){
        echo "<tr></tr>";
        $cont = 0;
        }
        ?>  <div class="port_pesq_fotografo inner_pesq_fotografo" >
            <td rowspan="3" colspan="3">
            <img class="_img_p" src="<?php echo $row->foto_perfil_fotografo;?>">
            <div class="_text_p">
            
            <?php
            echo "$row->nome_fotografo <br><br>";
            echo "$row->Idade anos de idade <br><br>";
            echo "$row->cidade_fotografo <br><br>";
            $cont ++;
            ?> 
            
            <form action="perfil_fotografo.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row->idcadastro_fotografo;?>">
            <div class="botoes">
            <button class="botoes_conf botoes_fotografos radius " type="submit" name="Conhecer"><h5>Conhecer mais</h5></button><br><br></div></form>
        </tr></div>
        <?php 
        echo "<br>";?>
        <?php
      }
    }
    else{

//---Seleciona o nome, a idade(ano atual menos a data de nascimento), a foto do perfil, e a cidade em que o fotografo mora através da busca pela cidade

    $rs = $conexao->query("select cadastro_fotografo.foto_perfil_fotografo, cadastro_fotografo.nome_fotografo, (Select Year(now()) - (select Year(cadastro_fotografo.data_nascimento_fotografo))) as Idade,  
                cidade_fotografo.cidade_fotografo, 
                cadastro_fotografo.idcadastro_fotografo 
                from cadastro_fotografo, endereco_fotografo, bairro_fotografo, cidade_fotografo     
                where cadastro_fotografo.idcadastro_fotografo = endereco_fotografo.idcadastro_fotografo
                and bairro_fotografo.idbairro_fotografo = endereco_fotografo.idbairro_fotografo
                and cidade_fotografo.idcidade_fotografo = bairro_fotografo.idcidade_fotografo 
                and cidade_fotografo.cidade_fotografo = '$busca'");

while($row = $rs->fetch(PDO::FETCH_OBJ))
      {
        if($cont == $limite){
        echo "<tr></tr>";
        $cont = 0;
        }
        ?>  
            <td rowspan="3" colspan="3">
            <img class="_img_p" src="<?php echo $row->foto_perfil_fotografo;?>">
            <div class="_text_p">
            
            <?php
            echo $row->nome_fotografo ."</p><br>";
            echo $row->Idade ." anos de idade </p><br>";
            echo $row->cidade_fotografo ."</p><br>";
            $cont ++;
            ?> 
            
            <form action="perfil_fotografo.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row->idcadastro_fotografo;?>">
            <div class="botoes">
            <button class="botoes_conf botoes_fotografos radius" type="submit" name="Conhecer"><h5>Conhecer mais</h5></button></div></form><br><br>
        </tr></div>
        <?php 
        echo "<br>";?>
        <?php
      }
    }

/* name="<?php echo $row->idcadastro_fotografo;?>"*/
?>
  </table>
    </div></article>
        </main></form></div>

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
            <p><a href="ajuda.html"> Dúvidas Frequentes</a></p>
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