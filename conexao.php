<?PHP
$conecta = mysql_connect("mysql.hostinger.com.br", "u542430202_banco", "tads2016") or print (mysql_error()); 
print "Conexão OK!"; 
mysql_close($conecta); 
?>