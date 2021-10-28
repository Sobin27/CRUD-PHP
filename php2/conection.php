<?php

    try{
        $cone= new PDO ("mysql:host=localhost; dbname=crud2", "root");
        $cone->exec("set names utf8");

    }catch (PDOException $erro){
        echo "Erro com a conecção do banco de dados" .$erro->getMessage();

    }
?>