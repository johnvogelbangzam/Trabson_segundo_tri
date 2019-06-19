<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Layout com Grid e Flex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
</head>
<body>
    <header>
        <h1>Randomizador de Lugares</h1>
        <h2>Login</h2>
    </header>
    <section>
        <form method="POST" action="Processa.php" enctype="multipart/form-data">
            <div class="login"><input type="text" name="usuario" placeholder="Login"></div>
            <div class="login"><input type="password" name="senha" id="senha" placeholder="Senha"></div>
            <div class="login"><button name="botão" id="botão">Enviar</button></div>
        </form>
    </section>
    <footer>
        <h4>Feito por: Gabriel Ledur, Giovane Müller e João Vogel</h4>
    </footer>
</body>
</html>