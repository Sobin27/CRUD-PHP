<?php
include_once "conection.php";



    try{
        $consult = $cone->query("SELECT * FROM cadastro");

        echo "<div id='div3'><a href='form.php'> Cadastro </a></div>";

    }catch(PDOException $erro){
        echo "Erro de execução" .$erro->getMessage();

    }
    try {
        $stmp = $cone->query("SELECT * FROM cadastro");
            echo "<div id='div1'><table border='1' id='tabela'><tr><td>Nome</td><td>Email</td><td>Ações</td></tr>";
        
                while ($linha = $consult ->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr><td>$linha[nome]</td><td>$linha[email]</td>      
                    <td><a href='formEditar.php?id=$linha[id]'>Editar</a><td><a href='excluir.php?id=$linha[id]'>Excluir</a></td></tr><br>";
                        
                }
                echo "</table></div>";
} 
    catch (PDOException $erro) {
        echo "Erro: ".$erro->getMessage();
    }
    
                
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="indexstyle.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="body">
    
    <img src="https://www.beeculture.com/wp-content/uploads/2018/07/BeeMovie.png" alt="" id="foto">
    
    <script>
        
    </script>
    
</body>
</html>