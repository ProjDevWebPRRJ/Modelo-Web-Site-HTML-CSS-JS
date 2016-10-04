<?PHP
$conecta = mysql_connect("host.com.br", "usuario", "senha") or print (mysql_error()); 
print "Conexão OK!"; 
mysql_close($conecta); 
?>
