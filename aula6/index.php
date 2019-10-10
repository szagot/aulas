<?php
// Criando listagem de produtos. Simulando que veio do Banco de Dados
$produtos = [
    [
        'sku'   => 'REF0001',
        'nome'  => 'iPhone 7',
        'valor' => 2999.98,
    ],
    [
        'sku'   => 'REF0002',
        'nome'  => 'Motorola G7 Play',
        'valor' => 1509.8,
    ],
    [
        'sku'   => 'REF0003',
        'nome'  => 'Motorola G7 Plus',
        'valor' => 1799.99,
    ],
    [
        'sku'   => 'REF0004',
        'nome'  => 'Motorola Z3 Play',
        'valor' => 2599.98,
    ],
    [
        'sku'   => 'REF0005',
        'nome'  => 'Motorola Z3 Plus',
        'valor' => 3005.7,
    ],
    [
        'sku'   => 'REF0006',
        'nome'  => 'Headphone Motorola',
        'valor' => 87.9,
    ],
];

// Ordenações
if (isset($_GET['ordem'])) {
    $_GET['ordem'] = strtolower($_GET['ordem']);
    switch ($_GET['ordem']) {

        // Ordena pelo nome
        case 'nome':
            // usort ordena um array multidimensional
            usort($produtos, function ($a, $b) {
                return $a['nome'] > $b['nome'];
            });
            break;

        // Ordena pelo valor
        case 'valor':
            // usort ordena um array multidimensional
            usort($produtos, function ($a, $b) {
                return $a['valor'] > $b['valor'];
            });
            break;

        default:
            // Define o padrão
            $_GET['ordem'] = 'sku';
    }
} else {
    // Se acabou de entrar na página, define o SKU como ordem padrão
    $_GET['ordem'] = 'sku';
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
            <p class="mt-5">
                Proposta do Exercício:
            <hr>
            Aplicar um desconto individual por produto. Todos os valores podem ser alterados, mas o exercício exige que
            seja verificado se há um desconto, que esse desconto seja aplicado ao valor do produto caso o desconto seja
            maior que 0 e que seja mostrada uma lista com os novos valores.
            </p>
        </div>
    </div>

    <div class="container">

        <form class="form-group" method="post" action="desconto-solucao.php">
            <table class="table table-striped">
                <thead>
                <tr class="thead-dark">
                    <th scope="col">
                        <?= ($_GET['ordem'] == 'sku') ? '<i class="fas fa-sort-down"></i>' : '' ?>
                        <a class="text-white" href="/">SKU</a>
                    </th>
                    <th scope="col">
                        <?= ($_GET['ordem'] == 'nome') ? '<i class="fas fa-sort-down"></i>' : '' ?>
                        <a class="text-white" href="/?ordem=nome">Nome</a>
                    </th>
                    <th scope="col">
                        <?= ($_GET['ordem'] == 'valor') ? '<i class="fas fa-sort-down"></i>' : '' ?>
                        <a class="text-white" href="/?ordem=valor">Valor</a>
                    </th>
                    <th scope="col">Desconto (%)</th>
                </tr>
                </thead>
                <tbody>

                <!-- Listando os produtos -->
                <?php foreach ($produtos as $produto) { ?>
                    <tr>
                        <th><?= $produto['sku'] ?></th>
                        <td>
                            <input class="form-control"
                                   type="text"
                                   name="nome[<?= $produto['sku'] ?>]"
                                   value="<?= $produto['nome'] ?>">
                        </td>
                        <td>
                            <input class="form-control"
                                   type="number"
                                   name="valor[<?= $produto['sku'] ?>]"
                                   value="<?= $produto['valor'] ?>"
                                   min="0" step="0.01">
                        </td>
                        <td>
                            <input class="form-control"
                                   type="number"
                                   name="desconto[<?= $produto['sku'] ?>]"
                                   value="0"
                                   min="0"
                                   max="100">
                        </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-calculator"></i>
                Calcular Desconto
            </button>
        </form>

    </div>

</main>
</body>
</html>
