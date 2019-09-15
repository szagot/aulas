<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desconto de produto</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<form action="calc.php" method="post" target="retorno">
    <h1>Produto com Desconto</h1>
    <p>
        <label for="valor">Valor do produto:</label>
        <input type="number" name="valor" id="valor" step="0.01" min="0" value="0">
    </p>
    <p>
        <label for="desconto">Desconto (%):</label>
        <!-- Mínimo e máximo não definidos para poder tratar no PHP -->
        <input type="number" name="desconto" id="desconto" value="0">
    </p>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
</form>

<hr>

<iframe name="retorno"></iframe>

</body>
</html>