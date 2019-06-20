<?php
/*
$partes = explode('.',$_FILES['foto']['name']); //pegar o tipo de arquivo. Exemplo: .jpg,jpeg,pdf...
$ext = end($partes);
if($ext==".jpg"){
    replace();
    $nome = str_replace($_FILES['foto']['name'], 'ninguem'.$ext, $_FILES['foto']['name']); //Substituir o nome do arquivo por ninguem
    $caminho = "Imagens"."/"."ninguem".".jpg";
    move_uploaded_file($_FILES['foto']['tmp_name'],$caminho);
    header("location: adm.php"); //Voltar para a pagina anterior
}
*/
?>