<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Se tivermos um elemento GET chamado 'cidade', vamos imprimir a cidade:</h1>

    <form action="" method="get">
        Qual a cidade de origem <input type="text" name="cidade">
        <input type="submit" name="submit" value="Submeter">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $cidade = $_GET["cidade"];
    ?>
    <br><br><br>
    <?php
        echo "Disse que era da cidade: " . $cidade;
    }
    ?>
</body>

</html>