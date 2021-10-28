<?php
include_once "conection.php";

    try{
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_var($_POST ['nome']);
        $email = filter_var($_POST ['email']);

        $insert = $cone->prepare("UPDATE cadastro SET nome =:nome, email =:email WHERE id = :id ");
        $insert->bindParam(':id',$id);
        $insert->bindParam(':nome',$nome);
        $insert->bindParam(':email',$email);
        $insert->execute();

        header("location:index2.php");


    }
    catch(PDOException $erro){
        echo "Deu erro" .$erro->getMessage();

    }

?>