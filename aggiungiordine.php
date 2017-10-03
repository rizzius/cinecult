<?php
        //error_reporting(E_ALL);
        //ini_set( 'display_errors','1');

        session_start();

        if (isset($_SESSION["username"])) {
          $username=$_SESSION["username"];
        }

        $carrello=explode(" ",trim($_SESSION["carrello"]));
        $carrello=array_unique($carrello);

        $totale=$_REQUEST["totale"];

        $connessione = new mysqli("localhost","root","root","cine_cult");


        // AGGIUNTA NUOVO ORDINE
        $query= "INSERT INTO ordini (username,totale) VALUES ('$username',$totale)";

        $connessione->query($query);

        // CARICAMENTO NUOVO ID ORDINE
        $query="select max(id) as m from ordini";

        if (!($risultato = $connessione->query($query)))
                  die("Query fallita!");

        if ($riga = $risultato->fetch_array()) {
            $id_ordine=$riga["m"];
        }

        // AGGIUNTA DETTOGLIO ORDINE
        $query ="insert into dettaglio_ordini (id_prodotto) values";
        for ($i=0;$i<count($carrello);$i++) {
            $query=$query."($id_ordine,".$carrello[$i].")";
            if ($i<count($carrello)-1) {
                //non è l'ultimo elemento --> aggiungo la virgola alla query
                $query=$query.",";
            }
        }
        $connessione->query($query);



        echo "OK";

        if (isset($_SESSION["carrello"])) {
          $_SESSION["carrello"]="";
        }

        header('Location: ordine.php');
        exit;
  ?>
