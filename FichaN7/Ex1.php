<html lang="en">

<head>
    <title>Calculadora simples</title>
    <style>
        .div-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh;
            flex-direction: column;
        }
        .div-component {
            border-style: solid;
            border-width: 2px;
            padding: 10px;
        }
    </style>

</head>

<body>
    <div class="div-content">
        <div class="div-component">
            <h1>Calculadora simples</h1>
            <form action="" method="POST">
                <label for="n1">1ºNúmero</label>
                <input type="number" name="n1"><br>
                <label for="n2">2ºNúmero</label>
                <input type="number" name="n2"><br><br>

                <input type="radio" name="operator" value="add"> Add (+)
                <input type="radio" name="operator" value="subtract"> Subtract (-)
                <input type="radio" name="operator" value="multiply"> Multiply (*)
                <input type="radio" name="operator" value="divide"> Divide (/)
                <br><br>
                <input type="submit" name="submit" value="Calcular">
                <input type="reset" name="reset" value="Apagar">
            </form>
            <br><br>

            <?php
            if (isset($_POST['submit'])) {
                $n1 = $_POST['n1'];
                $n2 = $_POST['n2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case 'add':
                        echo $n1 . "+" . $n2 . "=" . $n1 + $n2;
                        break;
                    case 'subtract':
                        echo $n1 . "-" . $n2 . "=" . $n1 - $n2;
                        break;
                    case 'multiply':
                        echo $n1 . "*" . $n2 . "=" . $n1 * $n2;
                        break;
                    case 'divide':
                        echo $n1 . "/" . $n2 . "=" . $n1 / $n2;
                        break;
                };
            } ?>
        </div>
    </div>

</body>

</html>