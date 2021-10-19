<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>
    <style>
        table {
            border-style: solid;
            border-width: 5px;
            border-color: black;
            margin: 20px;
        }

        table td {
            border-style: solid;
            border-width: 1px;
            padding: 0 30px 0 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <!--First Table-->
    <table>
        <tr>
            <td><b>Jogos</b></td>
        </tr>
        <?php
        $jogo = array("Wow", "GTA", "Doom", "UFO", "Crysis");
        foreach ($jogo as $jogoA) {
        ?>
            <tr>
                <td>
                    <?php echo $jogoA; ?>
                </td>
            </tr>
        <?php }; ?>
    </table>
    <!--First Table-->

    <!--Second Table-->
    <table>
        <tr>
            <td><b>Jogos</b></td>
            <td><b>Cotação</b></td>
        </tr>
        <?php
        $jogo = array("Wow" => 3,  "GTA" => 1, "Doom" => 5, "UFO" => 4, "Crysis" => 2);
        foreach ($jogo as $chave => $cotacao) {
        ?>
            <tr>
                <td>
                    <?php echo $chave; ?>
                </td>
                <td><?php echo $cotacao; ?></td>
            </tr>
        <?php }; ?>
    </table>
    <!--Second Table-->
</body>

</html>