<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Busca de Usuários</title>
</head>
<body>
    <form mathod="POST">
    Busca:
    <input type="text" name="busca">
    <input type="submit" name="" value="Enviar">
    </form>

<?php
    
    $conexao = mysqli_connect("localhost", "root", "", "aula09");
    if(!$conexao){
        die("Falha na conexão");
    }
    $sql = "SELECT id, nome, email FROM usuario";

    if(isset($_POST["busca"])){
        $busca = $_POST["busca"];
        $busca = trim($busca); // tira os espaços em branco
        $busca = filter_var($busca, FILTER_SANITIZE_STRING);//REMOVE COMANDOS SQL MAL INTENSIONADOS DIGITADOS PELO USUARIO
        // se ainda possui caracteres depois de fltrar
        if(strlen($busca) > 0){
            $sql .= " WHERE nome LIKE '%$busca%'";
        }
    }
    
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

    while($linha = mysqli_fetch_array($resultado)){
        echo "<br>Id: ".$linha['id'];// ou $linha['id'];
        echo "<br>Nome: ".$linha['nome'];
        echo "<br>Email: ".$linha['email'];
        echo "<br>";
    }

    mysqli_close($conexao);
?>

</body>
</html>