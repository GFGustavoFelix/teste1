<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doação de Sangue</title>
</head>
<body>
<?php 
        $nome = "Gustavo Felix";
        $idade = "19";
        $peso = "60.00";

        if(($idade>=18) && ($idade<=60) && ($peso>50.00)){
            echo "Olá " . $nome . ", Tendo a idade de " . $idade . " ,  peso de " .$peso. ", Você pode doar SANGUE =) !" ;
        }
        else{
        echo "Olá " . $nome . ", Tendo a idade de " . $idade . " ,  peso de " .$peso. ", Você não pode doar SANGUE =( !";
        }
       
        
    ?>

    <h1>Dados Paciente</h1>
    <br>
    <p> Nome: <?=$nome?> </p>
    <p> Idade: <?=$idade?></p>
    <p> Peso: <?=$peso?></p>
</body>
</html>