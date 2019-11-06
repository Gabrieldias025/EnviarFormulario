<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    require 'vendor/autoload.php';

    $from = new SendGrid\Email(null, "gabriel.dias126@etec.sp.gov.br");
    $subject = "Mensagem de contato TECESTAGIO";
    $to = new SendGrid\Email(null, "gabriel.dias025@hotmail.com");
    $content = new SendGrid\Content("text/html", "Olá Gabriel, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    //Necessário inserir a chave
    $apiKey = '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';
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);
    echo "Mensagem enviada com sucesso";

    ?>
</body>

</html>