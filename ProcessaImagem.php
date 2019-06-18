<?php
$nome = str_replace(' ', '_', $_POST['nome']); //Substituir o espaço em branco por underline
$partes = explode('.',$_FILES['foto']['name']); //pegar o tipo de arquivo. Exemplo: .jpg,jpeg,pdf...
$ext = end($partes);
$caminho = "Imagens"."/".$nome.".".$ext;
move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
header("location: adm.php"); //Voltar para a pagina anterior       
