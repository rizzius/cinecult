<!doctype html>
<html>
<head>
<title>Carrello</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="widht=device-widht, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="stilecss.css">
</head>

<body>
<div id="headerWrap" class="wrap">
 <nav id="mainNav" class="navbar navbar-inverse" role="navigation">
     <div class="container-fluid">
	 <!--logo-->
	 <div class="navbar-header">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
	 <span class="icon-bar"></span>
     <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
	 </button>
	 <a href="home_cinecult.php" class="navbar-brand">CINECULT</a>
	 </div>
	 <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav">
	         <li class="active"><a href="home_cinecult.php">Home</a></li>
  
	 
	 <li>
	 <a href="DVDphp.php">Dvd</a>
     </li>	
	 
	 <li><a href="carrello.php">Carrello</a></li>
	 <li><a href="about_us.html">About us</a></li>
	    </ul>
	    
	    
	 
	 <ul class="nav navbar-nav navbar-right">
	 <li><a href="login.html">Login</a></li>
	 </ul>
	 
	 	 
     </div>
	 
	 
	 
	 </div>
</nav>
	</div>
	
	
<?php
	
//$_SESSION["carrello"]="18";

  if ($_SESSION["carrello"]=="") {
    $carrello=array();
  } else {
    $carrello=explode(" ",trim($_SESSION["carrello"]));
    $carrello=array_unique($carrello);
  }

  $connessione = new mysqli("localhost","root","root","cine_cult");


  $totale=0;
  if (count($carrello)>0) {
    $carrello_string=implode(",", $carrello);
    $query_carrello="select * from prodotti where id_prodotto in ($carrello_string)";
  }

  ?>
	
	 <?php

            if (count($carrello)>0) {

              $totale=0;
              if (!($risultato = $connessione->query($query_carrello)))
                die("Query su carrello fallita!");

              echo '<table class="table table-striped">';
              echo '<thead>';
              echo '<tr>';
              echo '<th>#</th>';
              echo '<th>Prodotto</th>';
              echo '<th>Prezzo</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';

              $i=1;
              while ($riga = $risultato->fetch_array()) {
                $id_prodotto = $riga["id_prodotto"];
                $titolo = $riga["titolo"];
                $regia = $riga["regia"];
			    $descrizione=$riga["descrizione"];
                $prezzo=$riga["prezzo"];
                $totale=$totale+$prezzo;

                echo "<tr>";
                echo "<td>$i</td>";
                //echo "<td><a href='dettaglio_prodotto.php?id=$id_prodotto'>$titolo</a></td>";
                echo "<td>$prezzo</td>";
                echo "</tr>";

                $i++;
              }
              echo "</tbody>";
              echo "</table>";
              echo "<p>Totale:$totale EUR</p>";
              echo "<form action='aggiungiordine.php' method='post'>";
              echo "<input type='hidden' name='totale' value='".$totale."'/>";
              echo "<button class='btn btn-primary' type='submit'>Ordina adesso!</button>";
              echo "<button class='btn' type='button' id='svuotacarrello'>Svuota il carrello</button>";
              echo "</form>";

              echo "<p>Informativa sul regolamento di vendita <a href='#myModal' role='button' class='btn' data-toggle='modal'>link</a></p>";

            } else {
              echo "<p>Il tuo carrello &egrave; vuoto!</p>";
            }
	
            ?>
            
            
	<div id="footerWrap">
	<footer class="container">
		<p class="text-center">Copyright &copy; 2017 <br> Via Genova 91/32 <br> Tel:011-9042040 <br> E-mail: cinecult@info.it</p>
	</footer>
</div>
</body>
</html>
