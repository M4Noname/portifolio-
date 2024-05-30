<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "m4ryshan@gmail.com"; // Insira o endereço de email para onde deseja enviar os dados do formulário
    $subject = "Formulário de Contato";
    $body = "Nome: $name\nEmail: $email\nMensagem:\n$message";
    
    if (mail($to, $subject, $body)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem.";
    }
}
?>