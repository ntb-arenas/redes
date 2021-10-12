<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio de Consolidacao</title>
</head>
<body>
    <?php 
        $nomePass = array("Alvaro"=>"ab123", "Anite"=>"cd456", "Damião"=>"ef789", "Flávio"=>"gh123", 
        "Gonçalo"=>"ij456", "Alvaro"=>"kl789", "Marcel"=>"mn123", "Miguel"=>"op456", 
        "Pedro M."=>"st123", "Pedro S."=>"uv456", "Quichane"=>"ab123", "Rafael"=>"qr789");


        foreach ($nomePass as $nomeArray => $passArray) {
            echo "<b>Nome: </b>" . $nomeArray . "<b>Password: </b>" . $passArray . "<br>";
        }
    ?>
</body>
</html>