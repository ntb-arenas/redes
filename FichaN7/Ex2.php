<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="div-content">
        <Form action="" method="POST">
            <div class="title">
                <h1>Formulário de registo</h1>
            </div>

            <table>
                <tr>
                    <td>
                        <label for="titulo">Título</label>
                    </td>
                    <td>
                        <select name="titulo" id="titulo">
                            <option value="sr">Sr.</option>
                            <option value="sra">Sra.</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="fName">Primeiro Nome: </label>
                    </td>
                    <td>
                        <input type="text" name="fName" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lName">Último Nome: </label>
                    </td>
                    <td>
                        <input type="lName" name="lName" required>
                    </td>
                </tr>
                <tr>
                    <td><label for="endereco">Endereço: </label></td>
                    <td>
                        <textarea id="endereco" name="endereco" rows="4" cols="50"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label for="funcao">Função: </label></td>
                    <td><input type="text" name="funcao"></td>
                </tr>
                <tr>
                    <td><label for="empresa">Empresa: </label></td>
                    <td><input type="text" name="empresa"></td>
                </tr>
                <tr>
                    <td><label for="telefone">Número de telefone: </label></td>
                    <td><input type="number" name="telefone" required></td>
                </tr>
                <tr>
                    <td><label for="faxNumber">Número de Fax: </label></td>
                    <td><input type="number" name="faxNumber"></td>
                </tr>
                <tr>
                    <td><label for="cidade">Cidade: </label></td>
                    <td><input type="text" name="cidade"></td>
                </tr>
                <tr>
                    <td><label for="estado">Estado: </label></td>
                    <td><input type="text" name="estado"></td>
                </tr>
                <tr>
                    <td><label for="pais">País: </label></td>
                    <td>
                        <select name="pais" id="pais">
                            <option value="portugal">Portugal</option>
                            <option value="espanha">Espanha</option>
                            <option value="franca">França</option>
                            <option value="grecia">Grécia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Endereço eletronico: </label></td>
                    <td><input type="email" name="email" required><br></td>
                </tr>
                <tr>
                    <td>&nbsp</td>
                </tr>
                <tr>
                    <td><label for="login">Login<small>(Letras e números apenas,</small><br><small>sem espaços
                                em branco)</small></label>
                    </td>
                    <td><input type="text" name="login" required></td>
                </tr>
                <tr>
                    <td><label for="password">Password: </label>
                    </td>
                    <td><input type="text" name="password" required></td>
                </tr>
            </table>
            <br>
            <input type="checkbox" name="checkbox"> Por favor, desmarque esta caixa se desejar que os seus
            dados não sejam facultados a outras entidades
            <br><br>
            <input type="submit" name="submit" value="Registar">
            <input type="reset" name="reset" value="Apagar">

        </Form>
    </div>

</body>

</html>