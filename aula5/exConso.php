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
        $nome = array("Alvaro", "Anite", "Damião", "Flávio", "Gonçalo", "Alvaro", "Marcel", "Miguel", 
        "Pedro M.", "Pedro S.", "Quichane", "Rafael");
        $password = array("ab123", "cd456", "ef789", "gh123", "ij456", "kl789", "mn123", "op456", 
        "qr789", "st123", "uv456", "ab123");

        foreach ($nome as $nomeArray) {
            echo "<b>Nome: </b>" . $nomeArray . "<br>";
        }
    ?>
    <br><br>
    <?php
        foreach ($password as $passwordArray) {
            echo "<b>Password: </b>" . $passwordArray . "<br>";
        }
    ?>
</body>
</html>