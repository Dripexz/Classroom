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
    $nota2 = $_GET['Colocanota2'];

    $total = ($nota1 + $nota2);

    $totalreal = $total;

    echo "<h1>seu numero é $total<h1/>";
    if ($total > 20) {
       $totalreal= $totalreal + 8;
    }elseif ($total <= 20) {
        $totalreal= $totalreal - 5;
    }
    echo "<h1> mas diante das condições seu verdadeiro numero é $totalreal <h1/>";

    echo "<button onclick=\"window.location= 'index.html'\">Voltar</button>";


    ?>
</body>
</html>