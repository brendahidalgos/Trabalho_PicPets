<?PHP

$link = mysql_connect("localhost:3307", "root", "usbw") 
        or die ("Não foi possível conectar: ". mysql_error()); 

$banco = mysql_select_db("sistema", $link) 
         or die ("Erro ao abrir o banco de dados: ". mysql_error());
	
$busca = mysql_query("Select * From tb_cliente") 
         or die ("Erro ao realizar busca : " . mysql_error()); 

while ($reg = mysql_fetch_assoc($busca)) 
{  
	echo "<hr>";  
	echo "<br>Nome: " . $reg["nome_fotografo"];  
	echo "<br>CPF: " . $reg["cpf_fotografo"];
	echo "<br>E-mail: " . $reg["email_fotografo"];
	echo "<br>Cep: " . $reg["cep_fotografo"];
?>
	<br>
	<input type="button" name="Alterar" value="Alterar" onclick="javascript: location.href='alterar_cliente.php?id=<?php echo$reg["cpf_fotografo"];?>'" />
	<input type="button" name="Excluir" value="Excluir" onclick="javascript: location.href='excluir_cliente.php?id=<?php echo$reg["cpf_fotografo"];?>'" />
	<input type="button" name="Voltar" value="Voltar" onclick="javascript: location.href='index.html'">
<?php
} 
mysql_free_result($busca); 
mysql_close($link);
?>
</body>
</html>
