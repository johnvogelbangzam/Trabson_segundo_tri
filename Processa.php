<?php
    if(isset($_POST) && $_POST["botão"] == "Enviar"){
        if($_POST['usuario'] == 'admin' && $_POST['senha'] == 'admin' ){
            session_start();
            header("location: adm.php");        
        }else if($_POST['usuario'] != 'admin' || $_POST['senha'] != 'admin'){
            header("sair.php");
        }
    }
    if(isset($_POST) && $_POST["botão"] == "Enviar"){
        if($_POST['usuario'] == 'professor' && $_POST['senha'] == 'professor' ){
            session_start();
            header("location: Professor.php.php");        
        }else if($_POST['usuario'] != 'professor' || $_POST['senha'] != 'professor'){
            header("sair.php");
        }
    }

?>