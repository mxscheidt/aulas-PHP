<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" >
        <label for="num">Número do Pokemon</label>
        <input type="number" name="num">
        <input type="submit">
    </form>
    <?php

        if(isset ($_POST["num"]))/*Verifica se a variavel já foi definida isset(var, pra verificar se não foi definido if(not isset(var)){die();}*/
        {
            $num = $_POST["num"];
            echo "<div><p>";
            switch ($num){
                case 1:
                    echo "Bulbassauro";
                break;
                case 2:
                    echo "Ivyssauro ";
                break;
                case 3:
                    echo "Venussauro";
                break;
                case 4:
                    echo "Charmander";
                break;
                case 5:
                    echo "Charmeleon ";
                break;
                case 6:
                    echo "Charizard";
                break;
                case 7:
                    echo "Squirtle";
                break;
                case 8:
                    echo "Wartortle";
                break;
                case 9:
                    echo "Blastoise";
                break;
                case ($num>9) or ($num<1):
                    echo "Pokemon não encontrado";
                break;
                default:
            break;
                
            }
        } 
?>
</body>
</html>