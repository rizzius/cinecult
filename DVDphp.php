 <!doctype html>
<html>
<head>
<title>DVD</title>
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
	 <a href="#" class="navbar-brand">CINECULT</a>
	 </div>
	 <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav">
	         <li class="active"><a href="home_cinecult.php">Home</a></li>
  
	
	 <li>
	 <a href="DVDphp.php">Dvd</a></li>	
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
	
   


	$connessione = new mysqli("localhost","root","root","cine_cult");


   $query_prodotti = "SELECT * FROM prodotti";


   ?>
	
	
	

	
	
	
	 <?php

        if (!($risultato = $connessione->query($query_prodotti)))
          die("Query sui prodotti fallita!");

        $i=1;
        while ($riga = $risultato->fetch_array()) {
          $id_prodotto=$riga["id_prodotto"];
		  $titolo=$riga["titolo"];
          $regia = $riga["regia"];
          $descrizione=substr($riga["descrizione"],0,100)."...";
          $prezzo=$riga["prezzo"];
          $immagine=$riga["immagine"];

          if ($i==1) {
            echo "<div class='row'>";
          }

          echo "<div class='col-xs-4'>";
          echo "<article class='schedavg' data-src='http://localhost:8888/cinecult/img/".$immagine."'>";
			
          echo "<img style='width: 50%;' src='http://localhost:8888/cinecult/img/".$immagine."' />";
          //echo "<p>".$immagine."<p/>";
                //echo "<a href='dettaglio_prodotto.php?id=$id'><img class='img-thumbnail prodotto' src='images/prodotti/$immagine' alt=''/></a>";
          echo "<h5><a href='carrello.php?id_prodotto=$id_prodotto'>$titolo - $regia</a></h5>";
          echo "<p>$descrizione";
          echo " <span class='badge badge-success'>EUR $prezzo</span>";
          echo "<a href='aggiungicarrello.php?id_prodotto=$id_prodotto'><span class='glyphicon glyphicon-shopping-cart' aria-hidden='true'></span></a>";
          echo "</p>";
          echo "</article>";
          echo "</div>";

          if ($i==3) {
            echo "</div>";
            $i=1;
          } else {
            $i++;
          }

        }
        if ($i!=1) {
          echo "</div>";
        }

        ?>
	
	
	
	
	
	
	
	
	
	
	<div clas="row">
	<div id="footerWrap">
	<footer class="container">
		<p class="text-center">Copyright &copy; 2017 <br> Via Genova 91/32 <br> Tel:011-9042040 <br> E-mail: cinecult@info.it</p>
	</footer>
</div>
</div>
</body>
</html>
