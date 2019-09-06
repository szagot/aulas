<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
</head>
<body>

<form action="calc.php" method="post" target="retorno">
    <h1>Produtos do Carrinho</h1>
    <p>
        <label for="valor1">Valor do produto 1:</label>
        <input type="number" name="valor1" id="valor1" step="0.01" min="0" value="0">
    </p>
    <p>
        <label for="valor2">Valor do produto 2:</label>
        <input type="number" name="valor2" id="valor2" step="0.01" min="0" value="0">
    </p>
    <p>
        <label for="desconto">Desconto (%):</label>
        <!-- Mínimo e máximo não definidos para poder tratar no PHP -->
        <input type="number" name="desconto" id="desconto" value="0">
    </p>
    <p>
        <label for="frete">Frete:</label>
        <!-- Mínimo e máximo não definidos para poder tratar no PHP -->
        <input type="number" name="frete" id="frete" value="0">
    </p>

    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>
</form>

<hr>

<iframe name="retorno"></iframe>

</body>
</html>