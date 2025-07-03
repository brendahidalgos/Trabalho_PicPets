<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login= $_POST['email_admin'];
$senha = $_POST['senha_admin'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("localhost:3307", "root", "usbw") or die ("Sem conexão com o servidor");
$select = mysql_select_db("picpets_123") or die ("Sem acesso ao DB, Entre em contato com o Administrador");
 
// A variavel $result pega as varias $login e $senha, faz uma pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `admin` WHERE `email_admin` = '$email' AND `senha_admin`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:ProcessaloginAdm.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    header('location:adm.php');

    }
 
?>