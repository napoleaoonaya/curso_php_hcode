<?php

if($_SERVER["REQUEST_METHOD"] === "POST") {


    //$cmd = $_POST["cmd"];

    $cmd = escapeshellarg(escapeshellcmd($_POST["cmd"]));

    var_dump($cmd);

    echo "<pre>";

    $comando = system($cmd, $retorno);

    echo "</pre>";

    /*
    * Atenção para função system e exec sempre trate os dados,
    * usando a função escapeshellcmd() ou escapeshellarg().
    *
    * Pode se usar o escapeshellcmd() e o escapeshellarg() em conjunto,
    * o uso das duas funções em conjunto impede o uso de operadores e
    * argumentos.
    *
    */

}

//echo "<pre>";

//$comando = system("ls -lta",$retorno); Dado estático

//echo "</pre>";

?>
<form method="POST">
    <input type="text" name="cmd"/>
    <button type="submit">Eviar</button>
</form>
