<?php
$nome = str_replace(' ', '_', $_POST['nome']); //Substituir o espaço em branco por underline
$caminho = "Imagens"."/".$nome;
move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
header("location: adm.php"); //Voltar para a pagina anterior       
