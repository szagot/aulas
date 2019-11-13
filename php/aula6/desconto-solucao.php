<?php
// Verifica se teve postagem
if (!isset($_POST['desconto'])) {
    die('Acesso Negado!');
}

$produtos = [];

// Lendo os dados do formulário
foreach ($_POST['desconto'] as $sku => $desconto) {
    // Salvando o valor em uma variável para facilitar
    $valor = $_POST['valor'][$sku];

    // Gravando dados no array criado
    $produtos[$sku] = [
        'nome'      => $_POST['nome'][$sku],
        'desconto' => $desconto,
        'de'        => $valor,

        // Aplicando desconto
        'por'       => $valor - ($valor * $desconto / 100),
    ];
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <!-- Bootstrap é um Framework de CSS que auxilia nas principais funções -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome é um Framework de CSS para ícones -->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/brands.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/solid.min.css">

    <!-- CSS para alterar o que for necessário -->
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

<main>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Listagem de Produtos</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php foreach ($produtos as $sku => $produto) { ?>

                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <?= $sku ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $produto['nome'] ?>
                            </h5>
                            <p class="card-text">
                                <span class="de">
                                    <strong>De:</strong> R$ <?= number_format($produto['de'], 2, ',', '.') ?>
                                </span>
                                <span class="economize">
                                    (desconto de <?= $produto['desconto'] ?>%)
                                </span>
                                <span class="por">
                                    <strong>Por:</strong> R$ <?= number_format($produto['por'], 2, ',', '.') ?>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>

</main>

</body>
</html>

