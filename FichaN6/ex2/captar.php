<?php
$titleLivro = $_POST["titleLivro"];
$enderecoWeb = $_POST["enderecoWeb"];
$dataEnvio = $_POST["dataEnvio"];
$email = $_POST["email"];
?>

<html>

<body>
    <h1>Dados Recebidos</h1>
    Titulo do livro: <?php echo $titleLivro; ?><br>
    Endereço Web: <?php echo $enderecoWeb; ?><br>
    Data de envio: <?php echo $dataEnvio; ?><br>
    Mail: <?php echo $email; ?><br>

    <a href="form.html">Voltar</a>
</body>

</html>