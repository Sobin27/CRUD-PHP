<?php
include_once "conection.php";

    try{
        $id = filter_var($_POST['id']);
        $nome = filter_var($_POST ['nome']);
        $email = filter_var($_POST ['email']);
        

        $insert = $cone->prepare("INSERT INTO cadastro (nome, email) VALUES(:nome,:email)");
        $insert->bindParam(':nome',$nome);
        $insert->bindParam(':email',$email);
        $insert->execute();

        header("location:index2.php");


    }
    catch(PDOException $erro){
        echo "Deu erro" .$erro->getMessage();

    }

?>