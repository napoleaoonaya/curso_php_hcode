<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    $comando = system($cmd, $retorno);

    echo "</pre>";

    /*
    * Atenção para função system e exec sempre trate os dados, usando a função escapeshellcmd().
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
