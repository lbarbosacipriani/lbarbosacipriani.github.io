<?php

declare(strict_types=1);

// Endpoint legado mantido apenas para compatibilidade com formulários antigos.
$destinatario = 'lbarbosacipriani@gmail.com';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.html', true, 303);
    exit;
}

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) ?: '';
$form = filter_input(INPUT_POST, 'form', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY) ?: [];
$valor = trim((string) ($_POST['valor'] ?? ''));
$dataSaida = trim((string) ($_POST['dia_saida'] ?? ''));
$dataChegada = trim((string) ($_POST['dia_chegada'] ?? ''));

$body = implode('; ', array_map('trim', $form));
$body .= "\nValor do orçamento: {$valor}";
$body .= "\nData de saída: {$dataSaida}";
$body .= "\nData de chegada: {$dataChegada}";
$body .= "\nE-mail: {$email}";

if ($email !== '') {
    mail($destinatario, 'Sugestão de viagens', $body, "Reply-To: {$email}");
}

header('Location: index.html', true, 303);
exit;
