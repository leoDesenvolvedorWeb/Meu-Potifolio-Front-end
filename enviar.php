<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  // Aqui você pode adicionar a lógica para enviar o e-mail usando a função mail() do PHP ou uma biblioteca de e-mail, como PHPMailer.

  // Exemplo usando a função mail() do PHP:
  $to = 'querogame12@gmail.com';
  $assunto = 'Nova mensagem do formulário de contato';
  $conteudo = "Nome: $nome\nE-mail: $email\nMensagem: $mensagem";
  $headers = "From: $email";

  if (mail($to, $assunto, $conteudo, $headers)) {
    echo 'Mensagem enviada com sucesso!';
  } else {
    echo 'Erro ao enviar a mensagem.';
  }
}
?>