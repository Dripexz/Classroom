<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    


    $nota1 = $_GET['Colocanota1'];

    echo"<h1> seu numero é $nota1</h1>";

    

    
    if($nota1 % 10 == 0 && $nota1 % 5 == 0 && $nota1 % 2 == 0) {
        echo "Divisivel por 10, 5 e 2";
        echo"<br>";
    }elseif($nota1 %10 == 0&& $nota1 %5 == 0) {
        echo "divisivel por 10 e 5 ";
        echo"<br>"; 
    }elseif($nota1 % 10 == 0){
            echo "Divisivel por 10";
            echo"<br>";
    }elseif($nota1 % 5 == 0) {
        echo "Divisivel por 5";
        echo "<br>";
    }elseif($nota1 %2 == 0) {
        echo "divisivel por 2 ";
        echo"<br>"; 
    }else{
        echo "Divisivel por nenhum dos três";
        echo"<br>";
    }

    echo "<button onclick=\"window.location= 'index.html'\">Voltar</button>";


    ?>
</body>
</html>