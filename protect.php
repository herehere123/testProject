<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($_SESSION["ID_USER"])){
        header("Local: ./index.pgp");
    }
?>