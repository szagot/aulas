<?php
header('Content-type: text/html; charset=utf-8');

// Verifica se não houve postagem
if (!isset($_POST['valor'])) {
    // Impede de continuar, pois se não teve postagem foi um acesso direto a este arquivo
    die('Acesso negado!');
}

// Pegando valores e convertendo para inteiro
$valor = $_POST['valor'] * 1;
$desconto = $_POST['desconto'] * 1;

// Verifica se o desconto está entre 0 e 100
if ($desconto < 0 || $desconto > 100) {
    die('O valor de desconto do produto deve estar entre 0% e 100%');
}

// Calcula o valor do produto com desconto
$valorDesconto = $valor - ($valor * $desconto / 100);
?>

<p>
    Valor com desconto: <strong>R$ <?= $valorDesconto ?></strong>
</p>