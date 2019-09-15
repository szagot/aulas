<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tipo de Caractere</title>
</head>
<body>

<form action="tipo_caractere.php" method="post" target="retorno">
    <h1>Tipo de Caractere</h1>
    <label>
        Digite um número caractere:
        <!-- A propriedade "maxlength" indica qual o limite de caracteres que o campo pode receber -->
        <input type="text" name="valor" id="valor" value="" maxlength="1">
    </label>
    <button type="submit">Verificar</button>
</form>
<hr>
<iframe name="retorno"></iframe>

</body>
</html>