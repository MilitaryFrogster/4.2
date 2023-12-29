<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="style.css" media="screen">
        <title>Задание №2</title>
        <style> img{width:200;height:150}</style>
    </head>
    <main>
        <body>
            <div>
                <h2>Рандом [-20;20]</h2>
            </div>
            <img src="lr15.png"/>
            <br>
            <div>
                <?php
                    $A = rand(-20, 20);
                    $C = rand(-20, 20);
                    $D = rand(-20, 20);
                    echo "<br>a = " . $A;
                    echo "<br>C = " . $C;
                    echo "<br>D = " . $D;
                    echo "<br>(".$C." / ". $D . " +3 * ". $A ." /2 ".") / (". $C ." - ". $A ."+ 1 ) = " . (($C/$D)+(3*$A/2))/($C-$A+1));
                ?>
            </div>
        </body>
    </main>
</html>
