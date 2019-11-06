<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Contato</title>
    </head>
    <body>
        <h1>Formulario de Contato</h1>
        <form action="processa.php" method="POST">
            <label for="">Nome</label>
            <input type="text" name="nome" placeholder="Nome Completo"><br><br>

            <label for="">Email</label>
            <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>

            <label for="">Mensagem</label>
            <textarea name="mensagem" cols="50" rows="4"></textarea><br><br>

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>