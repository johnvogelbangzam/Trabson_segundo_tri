<?php
session_start();
if(!isset($_SESSION['usuario'])||$_SESSION['usuario']!="admin"){
    header("location: sair.php");
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrador</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
</head>
    <body>
        <header>
        <h1>Adicionar ou Remover Foto</h1>
        </header>
        <section>
            <form action="ProcessaImagem.php" method="POST" enctype="multipart/form-data">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto">
                <button id="enviar">Enviar</button>
            </form>
            <!--
            <br>
            <br>
            <form action="ProcessaPreencher.php" method="POST" enctype="multipart/form-data">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto">
                <button id="enviar">Enviar foto para preencher lugares vazios</button>
            </form>
            -->
            <div>
            <br>
            <button><a href='sair.php'>Sair</a></button>
            </div>
        </section>
        <footer>
            <h5>Feito por: Gabriel Ledur, Giovane Müller e João Vogel</h5>
        </footer>
    <script src='main.js'></script>
    </body>
</html>