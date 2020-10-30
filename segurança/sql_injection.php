<?php

/*
* Uma forma de evitar o SQL Injection é
* usar a função addslashes, is_numeric e 
* strlen para validar o dado que não for
* numérico.
*/

$id = addslashes(isset($_GET["id"])) ? $_GET["id"] : 1;

if(!is_numeric("id") || strlen("id") > 3) {
   echo "SQL Injection aqui não!";
}

$conexao = mysqli_connect("localhost","root","162130","hcode");

$sql = "SELECT * FROM usuarios WHERE id = $id";

$execute = mysqli_query($conexao, $sql);

while($resultado = mysqli_fetch_object($execute)){

   echo $resultado->nome."<br/>";

   //echo "<pre>";
   //var_dump($resultado);
   //echo "</pre>";
}


?>
