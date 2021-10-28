<?php
$disciplina = array(
    'M1' => 'Arq. Computadores', 'M3' => 'Sistemas Operativos',
    'M9' => 'Prog. Sist. Informação'
);
$disciplina2 = array(
    'M1' => 'Arq. Computadores', 'M3' => 'Sistemas Operativos',
    'M9' => 'Prog. Sist. Informação', 'M4' => 'Redes Comunicação'
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <b>A)</b>
    <h1>Inscrições Exames - Época Setembro</h1>
    <p>Até ao momento, existem inscrições para 3 exames. <br>
        Pretendo inscrever-me às disciplinas de: <b>Sistemas Operativos-M3 e Prog. Sist. Informação-M9</b></p>

    <table class="table1">
        <?php
        foreach ($disciplina as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>

    <br><br>

    <b>B)</b>
    <h1>Inscrições Exames - Época Setembro</h1>
    <p>Pretendo inscrever-me às disciplinas de: <b>Sistemas Operativos - M3 e Prog. Sist. Informação - M9</b>
        <br>Também gostaria de me inscrever à disciplina de <b>Redes Comunicação - M4</b>
        <br>Até ao momento, existem inscrições para <b>4 exames.</b>
    </p>

    <table class="table1">
        <?php
        foreach ($disciplina2 as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>

    <br><br>

    <b>2.</b>

    <h1>Inscrições Exames - Época Setembro</h1>
    <p>Também gostaria de me inscrever à disciplina de <b>Redes Comunicação - M4</b></p>

    <select name="disciplina" id="disciplina">
        <option value="redes">Redes Comunicação - M4</option>
        <option value="arqComp">Arq. Computadores - M1</option>
        <option value="sistOpe">Sistemas Operativos - M3</option>
        <option value="progInfo">Prog. Sist. Informação - M9</option>
    </select>

    <br><br>

    <b>3.</b>

    <h1>Inscrições Exames - Época Setembro</h1>
    
    <table border="0">
        <?php
        foreach ($disciplina2 as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>

    <br><br>

    <b>4.</b>
    
    <h1>Inscrições Exames - Época Setembro</h1>

    <table class="tableColor" border="0">
        <?php
        foreach ($disciplina2 as $key => $value) {
            echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        ?>
    </table>
</body>

</html>