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
    if($numero_de_alunos!=31){
        for ($i=$numero_de_alunos; $i <= 31; $i++) { //adicionar quantos gasparzinhos precizar para o array ter 32 espaços
            $scanned_directory[$i] = "ninguem.jpg";
        }
    } 
    shuffle($scanned_directory); //sorteia
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Professor - Laboratório</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css">
</head>
<body>
    <header>
        <h1>Randomizar Lugares - Laboratório</h1>
        <br>
        <button><a href='Professor.php'>Sala de aula</a></button>
        <br>
        <button><a href='Professor2.php'>Sortear denovo</a></button>
        <br>
        <button><a href='sair.php'>Sair</a></button>

    </header>
    <section class="laboratorio">
        <div class="professor">
            <?php
            echo '<img src="'."Professor.png".'"/>';
            ?>
        </div>
        <div class="fileira1">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[0].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[1].'"/>';
        echo "                        ";
        echo '<img src="'."Imagens/".$scanned_directory[2].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[3].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[4].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[5].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[6].'"/>';
        ?>
        </div>
        <div class="fileira2">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[7].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[8].'"/>';
        echo "                        ";
        echo '<img src="'."Imagens/".$scanned_directory[9].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[10].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[11].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[12].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[13].'"/>';
        ?>
        </div>
        <div class="fileira3">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[14].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[15].'"/>';
        echo "                                         ";
        echo '<img src="'."Imagens/".$scanned_directory[16].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[17].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[18].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[19].'"/>';
        
        ?>
        </div>
        <div class="fileira4">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[20].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[21].'"/>';
        echo "                                         ";
        echo '<img src="'."Imagens/".$scanned_directory[22].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[23].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[24].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[25].'"/>';
        
        ?>
        </div>
        <div class="fileira5">
        <?php
        echo '<img src="'."Imagens/".$scanned_directory[26].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[27].'"/>';
        echo "                                         ";
        echo '<img src="'."Imagens/".$scanned_directory[28].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[29].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[30].'"/>';
        echo '<img src="'."Imagens/".$scanned_directory[31].'"/>';
        ?>
        </div>
    </section>
    <footer>
        <h4>Feito por: Gabriel Ledur, Giovane Müller e João Vogel</h4>
    </footer>
</body>
</html>