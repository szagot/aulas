<?php
header('Content-type: text/html; charset=utf-8');

// Verifica se não houve postagem
if (!isset($_POST['valor1'])) {
    // Impede de continuar, pois se não teve postagem foi um acesso direto a este arquivo
    die('Acesso negado!');
}

// Pegando valores e convertendo para inteiro
$valor1 = $_POST['valor1'] * 1;
$valor2 = $_POST['valor2'] * 1;
$desconto = $_POST['desconto'] * 1;
$frete = $_POST['frete'] * 1;

// Verifica se o desconto está entre 0 e 100
if ($desconto < 0 || $desconto > 100) {
    die('O valor de desconto do produto deve estar entre 0% e 100%');
}

// Verifica se o frete não é menor que 0
if ($frete < 0) {
    $frete = 0;
}

// Calcula o valor dos produtos
$produtos = $valor1 + $valor2;

// Calcula o valor do carrinho
$valorCarrinho = ($produtos - ($produtos * $desconto / 100)) + $frete;
?>

<p>
    Valor do carrinho: <strong>R$ <?= $valorCarrinho ?></strong>
</p>