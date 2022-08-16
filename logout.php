<?php

session_start();

if(isset($_SESSION['id']))
    {
        $_SESSION['id']='';
        header("Location: index.php");
    }
die;

?>