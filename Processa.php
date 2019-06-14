<?php
    if(isset($_POST) && $_POST["botão"] == "Enviar"){
        if($_POST['usuario'] == 'admin' && $_POST['senha'] == 'admin' ){
            session_start();
            header("location: adm.php");        
        }
    }