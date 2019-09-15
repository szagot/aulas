<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Par ou Ímpar?</title>
</head>
<body>

<form action="par_impar.php" method="post" target="retorno">
    <h1>Par ou Ímpar?</h1>
    <!-- Esse é outro jeito de faer uma label + input. Neste caso não precisa de "for" no label -->
    <label>
        Digite um número Inteiro:
        <input type="number" name="numero" id="numero" value="0" min="0">
    </label>
    <button type="submit">Verificar</button>
</form>
<hr>
<iframe name="retorno"></iframe>

</body>
</html>