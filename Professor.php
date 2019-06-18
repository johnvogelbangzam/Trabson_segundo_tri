<?php
    $scanned_directory = array_diff(scandir("Imagens"), array('..', '.'));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ibagens</title>
</head>
<body>
    <?php
    foreach ($scanned_directory as $key => $value) {
        echo '<img src="'."Imagens/".$value.'"/>';
    }
    ?>
</body>
</html>