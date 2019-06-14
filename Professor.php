<?php
    $scanned_directory = array_diff(scandir("Imagens"), array('..', '.'));
echo [$scanned_directory[1]];