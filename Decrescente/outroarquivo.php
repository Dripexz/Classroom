<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    
    $n1 = $_GET['Colocanota1'];
    $n2 = $_GET['Colocanota2'];
    $n3 = $_GET['Colocanota3'];

    echo"<h1> Seus números são $n1 , $n2 , $n3</h1>";

    if ( $n1 > $n2 && $n1 > $n3 ) {
        echo "$n1";
        echo"<br>";
        if ( $n2 > $n3 ) {
            echo "$n2";
            echo"<br>";
            echo "$n3";
        }else{
                echo "$n3";
                echo"<br>";
                echo "$n2";
                echo "<br>";
            }

    }elseif( $n2 > $n1 && $n2 >$n3 ){
        echo "$n2";
        echo"<br>";
        if ( $n1 > $n3 ) {
            echo "$n1";
            echo"<br>";
            echo "$n3";
        }else{
                echo "$n3";
                echo"<br>";
                echo "$n1";
                echo "<br>";
            }

    }elseif( $n3 > $n1 && $n3 > $n2 ){
        echo "$n3";
        echo"<br>";
        if ( $n1 > $n2 ) {
            echo "$n1";
            echo"<br>";
            echo "$n2";
        }else{
                echo "$n2";
                echo"<br>";
                echo "$n1";
                echo "<br>";
            }
        }            


    echo "<button onclick=\"window.location= 'index.html'\">Voltar</button>";


    ?>
</body>
</html>