<?php

$cpf_fotografo = $_GET['cpf_fotografo'];
//chamar biblioteca conexao.php ou inserir codigos abaixo

$link   = mysql_connect("localhost:3307", "root", "usbw") 
          or die ("Não foi possível conectar: ". mysql_error()); 

$banco  = mysql_select_db("sistema", $link) 
          or die ("Erro ao abrir o banco de dados: ". mysql_error());
		 
$busca = mysql_query("Select * From tb_cliente WHERE cd_cliente = '".$codigoCliente."'") 
         or die ("Erro ao realizar busca : " . mysql_error()); 

$reg = mysql_fetch_assoc($busca)
?>
<form action = "confirmaExcluir.php" method="POST">

Código:<input type="text" name="codigo" 
              value = "<?php print $reg['cd_cliente'];?>" ><br>
Nome:  <input type="text" name="nome" 
              value = "<?php print $reg['nm_cliente'];?>"><br>
Tipo de Cliente:  <input type="text" name="tipo" 
              value = "<?php print $reg['tp_cliente'];?>"><br>
CPF:  <input type="text" name="cpf" 
              value = "<?php print $reg['cpf_cliente'];?>"><br>
CNPJ:  <input type="text" name="cnpj" 
              value = "<?php print $reg['cnpj_cliente'];?>"><br>
RG:  <input type="text" name="rg" 
              value = "<?php print $reg['rg_cliente'];?>"><br>
Inscrição Estadual:  <input type="text" name="ie" 
              value = "<?php print $reg['ie_cliente'];?>"><br>
Sexo:  <input type="text" name="sexo" 
              value = "<?php print $reg['sexo_cliente'];?>"><br>
Telefone Fixo:  <input type="text" name="fixo" 
              value = "<?php print $reg['telFixo_cliente'];?>"><br>
Telefone Celular:<input type="text" name="cel" 
              value = "<?php print $reg['cel_cliente'];?>"><br>
Email: <input type="text" name="email" 
              value = "<?php print $reg['email_cliente'];?>"><br>
CEP:   <input type="text" name="cep" 
              value = "<?php print $reg['cd_cepCliente'];?>"><br>
<br><br>

Confirma Exclusão? <input type="submit" value="SIM">
<input type="button" value="Não" onclick="javascript: location.href='index.html'">
<?php
mysql_free_result($busca); 
mysql_close($link);

?>