<?php
$caminho = "Imagens"."/" . 'imagem_do_'.$_POST['nome'];
move_uploaded_file($_FILES["foto"]['tmp_name'],$caminho);