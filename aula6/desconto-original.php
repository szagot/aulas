<?php
/**
 * APLIQUEM O DESCONTO NESSE PRIMEIRA PARTE.
 *
 * Lá embaixo, no HTML, mostrem a listagem, substituindo os valores de exemplo pelos valores reais, uando foreach
 *
 * Site do booststrap para mais detalhes: https://getbootstrap.com/docs/4.3/components/card/
 */

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>

    <!-- Bootstrap é um Frameword de CSS que auxilia nas principais funções -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fontawesome é um Frameword de CSS para ícones -->
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

            <!-- Isso é apenas para mostrar o que foi postado e como foi postado. APAGUEM depois! -->
            <pre><?php var_dump($_POST); ?></pre>

        </div>
    </div>

    <div class="container">
        <div class="row">

            <!--
                Modelo de produtos.
                Está repetindo por ser exemplo.
                Remova todos, deixando só o primeiro.
                Quem deve repetir é o foreach
            -->

            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- REMOVER ESSES REPETIDOS -->
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        <!-- Coloque a referência aqui -->
                        REF0001
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- Coloque o nome do produto aqui -->
                            Nome do Produto
                        </h5>
                        <p class="card-text">
                            <!-- COloque os valores aqui, no formato indicadp -->
                            <span class="de"><strong>De:</strong> R$ 9.999,99</span>
                            <span class="economize">(desconto de 10%)</span>
                            <span class="por"><strong>Por:</strong> R$ 8.888,88</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- FIM DOS REPETIDOS -->

        </div>
    </div>

</main>

</body>
</html>

