<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo</title>
</head>

<body>
    <?php
    $a = array("Joana" => 24, "Rute" => 33, "Ricardo" => 28, "Hugo" => 29);
    foreach ($a as $nome => $idade) {
        echo "Nome: " . $nome . "<br>" . "Idade: " . $idade . "<br>";
    }
    ?>
</body>

</html>