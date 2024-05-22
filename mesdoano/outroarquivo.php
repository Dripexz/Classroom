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
    

    echo"<h1> O número é $nota1</h1>";

    
    if ($nota1 == 1) {
        echo "O mês é Janeiro";
        echo"<br>";
    }elseif ($nota1 == 2) {
        echo "O mês é Fevereiro";
        echo"<br>";
    }elseif ($nota1 == 3) {
        echo "O mês é Março";
        echo"<br>";
    }elseif ($nota1 == 4) {
        echo "O mês é Abril";
        echo"<br>";
    }elseif ($nota1 == 5) {
        echo "O mês é Maio";
        echo"<br>";
    }elseif ($nota1 == 6) {
        echo "O mês é Junho";
        echo"<br>";
    }elseif ($nota1 == 7) {
        echo "O mês é Julho";
        echo"<br>";
    }elseif ($nota1 == 8) {
        echo "O mês é Agosto";
        echo"<br>";
    }elseif ($nota1 == 9) {
        echo "O mês é Setembro";
        echo"<br>";
    }elseif ($nota1 == 10) {
        echo "O mês é Outubro";
        echo"<br>";
    }elseif ($nota1 == 11) {
        echo "O mês é Novembro";
        echo"<br>";
    }elseif ($nota1 == 12) {
        echo "O mês é Dezembro";
        echo"<br>";
    }else{
        echo "Esse mês não existe";
        echo "<br>";
    };

    echo "<button onclick=\"window.location= 'index.html'\">Voltar</button>";


    ?>
</body>
</html>