<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedra-Papel-Tesoura-Lagarto-Spock</title>
</head>
<body>
    <form method="POST">

    <input type="radio" name="opcao" value=1><img src="http://pngimg.com/uploads/stone/stone_PNG13556.png" height="100"> 

    <input type="radio" name="opcao" value=2><img src="https://www.blankespapier.de/wp-content/uploads/2012/01/Paper-Texture-006.png" height="100">

    <input type="radio" name="opcao" value=3><img src="https://www.nicepng.com/png/detail/407-4074972_tesoura-scissors.png" height="100">

    <input type="radio" name="opcao" value=4><img src="https://www.kindpng.com/picc/m/137-1376898_download-lizard-png-pic-lizard-without-the-background.png" height="100">
    
    <input type="radio" name="opcao" value=5><img src="https://www.startrek.com/sites/default/files/styles/1080x1080/public/images/2019-07/8b10a9280bd46b8874af9b5cadec91d5.jpg?itok=xnRqsuq6" height="100">
    <input type="submit" name="submit" value="Jogar!">
</form>

<?php

    if(isset($_POST["opcao"])){ //Verificar se existe
        $op = $_POST["opcao"];
        $jogadaPC = rand(1,5); //num aleatório, mínimo 1 e no máximo 5 (5 está incluído)

        echo "Jogada do PC";
        switch ($jogadaPC){
            case 1:
                echo '<img src="http://pngimg.com/uploads/stone/stone_PNG13556.png" height="100">';
            break;
            case 2:
                echo '<img src="https://www.blankespapier.de/wp-content/uploads/2012/01/Paper-Texture-006.png" height="100">';
            break;
            case 3:
                echo '<img src="https://www.nicepng.com/png/detail/407-4074972_tesoura-scissors.png" height="100">';
            break;
            case 4:
                echo '<img src="https://www.kindpng.com/picc/m/137-1376898_download-lizard-png-pic-lizard-without-the-background.png" height="100">';
            break;
            case 5:
                echo '<img src="https://www.startrek.com/sites/default/files/styles/1080x1080/public/images/2019-07/8b10a9280bd46b8874af9b5cadec91d5.jpg?itok=xnRqsuq6" height="100">';
            break;
            default:
        break;
        }

        echo "<br><br><br>";
        if($op==$jogadaPC){
            echo "Empate";
        }
        //1=pedra 2=papel 3=tesoura 4=lagarto 5=spock

        else if(($op==1 and ($jogadaPC==3 or $jogadaPC==4)) or ($op==2 and ($jogadaPC==1 or $jogadaPC==5)) 
        or ($op==3 and ($jogadaPC==2 or $jogadaPC==4)) or ($op==4 and ($jogadaPC==5 or $jogadaPC==2)) or ($op==5 and ($jogadaPC==1 or $jogadaPC==3))){
            echo "VOCÊ VENCEU!<br><img src='https://1.bp.blogspot.com/--htdUWsBfg8/XFYoFlYUbDI/AAAAAAAAcoo/mv4zuyNVGO0ms2pAurdKeI8tQKLK-kZjACLcBGAs/s1600/FELIZ.jpg' height=100>";
        }
        else{
            echo "VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
        }
    }
    else{
        die();
    }
    

?>
</body>
</html>