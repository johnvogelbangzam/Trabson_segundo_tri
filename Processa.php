<?php
    session_start();
        if($_POST['usuario'] == 'professor' && $_POST['senha'] == 'professor' ){
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['senha'] = $_POST['senha'];
            header("Location: Professor.php");       
        }else if($_POST['usuario'] == 'admin' && $_POST['senha'] == 'admin' ){
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['senha'] = $_POST['senha'];
            header("Location: adm.php");
        }else{
            header("location: sair.php");
        }
?>