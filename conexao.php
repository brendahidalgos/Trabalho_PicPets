
<?php
$conexao = NEW PDO("mysql:host=localhost:3307;dbname=picpets_123", "root", "usbw");

if(!$conexao){
	print "Falha na conexão com o banco de dados!";
}
?>