<?php
session_start();
if(!isset($_SESSION['usuario'])||$_SESSION['usuario']!="professor"){
    header("location: sair.php");
}
?>
<?php
    $scanned_directory = array_diff(scandir("Imagens"), array('..', '.'));
    shuffle($scanned_directory); //desbuga o array que começa na posição 2 por algum motivo
    $numero_de_alunos = count($scanned_directory)-1;
    while($scanned_directory[$numero_de_alunos]!="ninguem.jpg"){ // faz o ninguem ser o ultimo do array
        shuffle($scanned_directory);
    }
    if($numero_de_alunos!=29){
        for ($i=$numero_de_alunos; $i <= 29; $i++) { //adicionar quantos gasparzinhos precizar para o array ter 30 espaços
            $scanned_directory[$i] = "ninguem.jpg";
        }
    } 
    shuffle($scanned_directory); //sorteia
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Professor - Sala de Aula</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
</head>
<body>
    <header>
        <h1>Randomizar Lugares - Sala de Aula</h1>
        <br>
        <button><a href='Professor2.php'>Laboratório</a></button>
        <br>
        <button><a href='Professor.php'>Sortear denovo</a></button>
        <br>
        <button><a href='sair.php'>Sair</a></button>
    </header>
    <section class="sala">
        <div class="professor">
            <?php
            echo '<img src="'."Professor.png".'"/>';
            ?>
        </div>
        <div class="fila1">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[0].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[1].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[2].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[3].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[4].'"/>';
        ?>
        </div>
        <div class="fila2">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[5].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[6].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[7].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[8].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[9].'"/>';
        ?>
        </div>
        <div class="fila3">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[10].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[11].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[12].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[13].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[14].'"/>';
        ?>
        </div>
        <div class="fila4">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[15].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[16].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[17].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[18].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[19].'"/>';
        ?>
        </div>
        <div class="fila5">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[20].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[21].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[22].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[23].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[24].'"/>';
        ?>
        </div>
        <div class="fila6">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[25].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[26].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[27].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[28].'"/>';
        echo "           ";
        echo '<img src="'."Imagens/".$scanned_directory[29].'"/>';
        ?>
        </div>
    </section>
    <footer>
        <h4>Feito por: Gabriel Ledur, Giovane Müller e João Vogel</h4>
    </footer>
</body>
</html>