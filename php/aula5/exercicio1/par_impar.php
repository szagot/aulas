<?php
header('Content-type: text/html; charset=utf-8');

// Verifica se não houve postagem
if (!isset($_POST['numero'])) {
    // Impede de continuar, pois se não teve postagem foi um acesso direto a este arquivo
    die('Acesso negado!');
}

// Pega o número digitado
$numero = $_POST['numero'] * 1;

// Verifica se é par ou ímpar, usando operador ternário
$parOuImpar = ($numero % 2 == 0) ? 'Par' : 'Ímpar';

// Retorno
echo "O número [{$numero}] é <strong>{$parOuImpar}</strong>";



/*
Isso:
    if($numero % 2 == 0){
        $parOuImpar = 'Par';
    } else {
        $parOuImpar = 'Ímpar';
    }


É o mesmo que isso:
    $parOuImpar = ($numero % 2 == 0) ? 'Par' : 'Ímpar';
*/