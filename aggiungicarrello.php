<?php
        //error_reporting(E_ALL);
        //ini_set( 'display_errors','1');        

        session_start();

        if (isset($_SESSION["carrello"])) {
          $carrello=$_SESSION["carrello"]." ".$_REQUEST["id_prodotto"];
        } else {
          $carrello=$_REQUEST["id_prodotto"];
        }

        $_SESSION["carrello"]=$carrello;

        header('Location: carrello.php');
        exit;
  ?>
