<?php 
include_once "conection.php"; 

    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $consult = $cone->query("SELECT * FROM cadastro WHERE id = '$id'");
    $linha = $consult->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="editar.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body id="body">
    <form action="editar.php" method="POST" id="form">
        <div id="div2">
            <h2>
                Faça sua edição da sua conta
            </h2>
        </div>
        <div id="div1">
            <input type="hidden" name="id" value="<?php echo $linha['id'] ?>" >
            Nome:
                <input type="text" name="nome" id="nome" value="<?php echo $linha['nome'] ?>"><br>
            Email:
                <input type="text" name="email" id="email" value="<?php echo $linha['email'] ?>"><br><br>

            <input type="submit" value="Salvar" id="Salvar">
        </div>
        <img src="https://jpimg.com.br/uploads/2017/12/bee-movie.jpg" alt="" id="logo">

        <script>
            document.getElementById("Salvar").onclick = function clicar(){
                alert("Editado com sucesso ")
            }
        </script>
</form>
</body>
</html>