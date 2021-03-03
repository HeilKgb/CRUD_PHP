<?php
//conexao com o servidor 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "CRUD";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, 'utf8');

if (mysqli_connect_error()) :
  echo "Não foi possível concectar ao servidor";

endif;
