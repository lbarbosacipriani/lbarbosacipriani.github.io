<?php

# alterar a variavel abaixo colocando o seu email
$destinatario = "lbarbosacipriani@gmail.com";
$valor = $_REQUEST['valor'];
$email = $_REQUEST['dia_saida'];
$mensagem = $_REQUEST['dia_chegada'];
$valor_orcamento=$_REQUEST['']
// Noite badalada
$form=$_REQUEST['form'];


 // monta o e-mail na variavel $body
 for($i = 0; $i < count($form); $i++) {
    $body = $body . $form[$i] . "; ";
  }
$body = $body . "Valor do orcamento: " . $valor_orcamento . "\n";
$body = $body . "Data de saida : " . $data_saida . "\n";
$body = $body . "Data de chegada: " . $data_chegada . "\n";

$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Nascimento: " . $data_nascimento . "\n";
$body = $body . "Email: " . $email . "\n";

// envia o email
$subject="sugestao de viagens";
mail($destinatario,$subject, $body);
// redireciona para a página de obrigado
header("location:index.html");

?>
