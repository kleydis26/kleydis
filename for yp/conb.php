<?php  
$host='localhost:8080';
$bd=''

$user='';
$pass=''

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");

$query=("INSET INTO -----"(----------));


$consulta=pg_query($conexion,$query);

pg_close();
echo "datos de clientes corecto";

?>