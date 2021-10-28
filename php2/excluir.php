<?php
include_once "conection.php";

    try{
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        $excluir = $cone->prepare("DELETE FROM cadastro WHERE id = :id");
        $excluir-> bindParam(':id',$id);
        $excluir->execute();

        header("location:index2.php");

    }
    catch(PDOException $erro){
        echo "Deu erro" .$erro->getMessage();

    }

?>