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
                    echo "<img src='https://th.bing.com/th/id/OIP.NJ4qTQZdzFWkF6xvBSilzwHaGJ?pid=ImgDet&rs=1' height=100>";
                break;
                case 2:
                    echo'Ivyssauro';
                    echo "<img src='https://th.bing.com/th/id/OIP.xu85gsZxVPppXIovSA2DsAHaG4?pid=ImgDet&rs=1' height=100>";
                break;
                case 3:
                    echo "Venussauro";
                    echo "<img src='https://th.bing.com/th/id/R.a5ceabea1cea8d6a94fa379f2681d099?rik=nb9PiHufxseW8g&pid=ImgRaw&r=0' height=100>";
                break;
                case 4:
                    echo "Charmander";
                    echo "<img src='https://pm1.narvii.com/5706/e7bfe4895d98b54f04a5feefd80001121edd51a8_hq.jpg' height=100>";
                break;
                case 5:
                    echo "Charmeleon ";
                    echo "<img src='https://th.bing.com/th/id/R.86847c485d05ed24f6c52b4262734dd4?rik=CPRLQurdPTA3Bg&pid=ImgRaw&r=0' height=100>";
                break;
                case 6:
                    echo "Charizard";
                    echo "<img src='https://th.bing.com/th/id/R.c137ec0d43a67828128221911a58a9f8?rik=uK1UjXvFuhtZsA&riu=http%3a%2f%2fwww.pokemasters.net%2fpokedex%2fimages%2fpokemon%2f6000.png&ehk=K6YpM24hy0tce1BU%2b3h8nqr6UTdzt409zWOZgRdp5qc%3d&risl=&pid=ImgRaw&r=0' height=100>";
                break;
                case 7:
                    echo "Squirtle";
                    echo "<img src='https://th.bing.com/th/id/OIP.ZfsYZfc-c59Bo12H8XzAvAHaG3?pid=ImgDet&rs=1' height=100>";
                break;
                case 8:
                    echo "Wartortle";
                    echo "<img src='https://th.bing.com/th/id/OIP.ZlitLSUPpskz8XcHCIvfqAHaIA?pid=ImgDet&rs=1' height=100>";
                break;
                case 9:
                    echo "Blastoise";
                    echo "<img src='https://img.pokemondb.net/artwork/large/blastoise.jpg' height=100>";
                break;
                case ($num>9) or ($num<1):
                    echo "Pokemon não encontrado";
                break;
                default:
            break;
            }

            echo "<br><p>";

            if($num==1 or $num==2 or $num==3)
            {
                echo '<h1>Seu adversário é: <br></h1>';
                $jogadaPC = rand(4,6);

                switch ($jogadaPC){
                case 4:
                echo 'Charmander';
                echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                break;
                 case 5:
                    echo 'Charmeleon ';
                    echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                    break;
                    case 6:
                        echo 'Charizard';
                        echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";                 break;
                    default:
               break;
                }
            }

            if($num==4 or $num==5 or $num==6)
            {
                echo '<h1>Seu adversário é: <br></h1>';
                $jogadaPC = rand(7,9);

                    switch ($jogadaPC){
                    case 7:
                    echo 'Squirtle';
                    echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                    break;
                    case 8:
                    echo 'Wartortle';
                    echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                    break;
                    case 9:
                        echo 'Blastoise';
                        echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";                 break;
                    default:
                    break;
                    }
            }
            
            if($num==7 or $num==8 or $num==9)
            {
                echo '<h1>Seu adversário é: <br></h1>';
                $jogadaPC = rand(1,3);

                    switch ($jogadaPC){
                    case 1:
                    echo 'Bulbassauro';
                    echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                    break;
                    case 2:
                    echo 'Ivyssauro';
                    echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";
                    break;
                    case 3:
                        echo 'Venussauro';
                        echo "<p>VOCÊ PERDEU!<br><img src='https://i.pinimg.com/736x/6d/f4/14/6df414034624d895686fa4c43cc9c4c9.jpg' height=100>";                 break;
                    default:
                    break;
                    }
            }     
                
            
        } 
?>
</body>
</html>