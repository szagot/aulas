<?php
header('Content-type: text/html; charset=utf-8');

// Verifica se não houve postagem
if (!isset($_POST['valor'])) {
    // Impede de continuar, pois se não teve postagem foi um acesso direto a este arquivo
    die('Acesso negado!');
}

// Pega o caractere digitado, modificando ele para minúsculo
$valor = strtolower($_POST['valor']);

// Imprimindo inicio comum a todos os casos (DRY)
echo "O valor [{$valor}] é um";

// Verifica se é número, vogal ou consoante, usando switch
switch ($valor) {
    case '0':
    case '1':
    case '2':
    case '3':
    case '4':
    case '5':
    case '6':
    case '7':
    case '8':
    case '9':
        echo '<strong>Número</strong>';
        break;

    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo 'a <strong>Vogal</strong>';
        break;

    case '':
    case ' ':
        echo ' <strong>Espaço Vazio</strong>';
        break;

    default:
        echo 'a <strong>Consoante</strong>';
}