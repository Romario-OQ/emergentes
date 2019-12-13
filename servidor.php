<?php
    try{
        $HOST = "localhost";
        $BANCO = "emergentes";
        $USUARIO = "root";
        $SENHA = "";
        //$PDO = mysqli_connect($HOST,$BANCO,$USUARIO,$SENHA);
        $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8",$USUARIO,$SENHA);
    }
    catch(PDOException $error){
        echo "Error de Conexion";
    }


?>