<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    $nomealuno = $_GET['Nomealuno'];
    $sexo = $_GET['Colocanota1'];
    $nota2 = $_GET['Colocanota2'];
    

    echo"<h1> Você é $nomealuno</h1>";

    echo "seu sexo é $sexo e sua idade é $nota2";

    if( $sexo == "Fem" && $nota2 < 25){
        echo"<br>";
        echo "$nome aluno , Aceita!";
    }else{
        echo"<br>";
        echo " $nomealuno , Não Aceita!";
    }


    ?>
</body>
</html>