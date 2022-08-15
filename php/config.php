<?php

    $hostname = "localhost";
    $username = "root";
    $password = "78832112";
    $dbname = "chatapp";
  
    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
      echo "Erro na conexão com o banco de dados" .mysqli_connect_error();
   }
?>
