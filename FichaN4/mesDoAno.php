<?php
    $mes = array(
        "Janeiro", "Fevreiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    );
    $arrayLength = count($mes);

    for ($i = 0; $i < 12; $i++) {
        echo $mes[$i];
        echo "<br>";
    }
    ?>
    <br>
    <?php
    $i = 0;
    while ($i < $arrayLength) {
        echo $mes[$i] . "<br>";
        $i++;
    }
?>