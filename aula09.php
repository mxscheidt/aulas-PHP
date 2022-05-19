<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $conexao = mysqli_connect("localhost", "root", "", "aula09"); //endereço de onde está rodando, nome de usuário que está acessando o banco de dados, senha, nome da base de dados com quem eu vou me ligar

    if($conexao){
        echo "Conexão estabelecida";

        $sql = "INSERT INTO usuario (nome, email, senha) values ('$nome', '$email', '$senha')";

        $reasultado = mysqli_query($conexao, $sql);
        if($reasultado){
            echo "<br> usuario cadastrado com sucesso";
        }
        else{
            echo "erro ao inserir dados";
        }
    }
    else{
        echo "Erro ao conectar";
    }

    mysqli_close($conexao);

?>