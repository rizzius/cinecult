


<?php



include "per_login.php";

//ottengo i dati del form//
$username = $_POST['username'];
$pwd = $_POST ['pwd'];



 	
 
  $conn = mysqli_connect ("localhost", "root", "root");

  if (!$conn)
	  die ("Errore nella connessione al server");
 $seldb = mysqli_select_db ($conn,"cine_cult");
  if (!$seldb)
	  die ("Errore nella connessione all'archivio ");
  
//controllo l'esistenza della coppia
$sql = "SELECT * FROM utenti WHERE username=='$username' and pwd == '$pass'";
$risultati= mysqli_query($sql);
$numero= mysqli_num_rows($risultati);

//notifico il login/login fallito

if ($numero > 0) {
	echo "Login effettuato con successo";
	
} else {
	
	echo "Login fallito";
	
}
	

?>
