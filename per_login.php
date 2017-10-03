<?php



$username = $_POST["username"];
$pwd = $_POST["pwd"];
  
$servername = "localhost";
$usernameDB = "root";
$pwd = "root";
$db ="cine_cult";


 	
 
  $conn = mysqli_connect ($servername, $usernameDB, $pwd);
  if (!$conn)
	  die ("Errore nella connessione al $servername");
 $seldb = mysqli_select_db ($conn,$db);
  if (!$seldb)
	  die ("Errore nella connessione all'archivio $db");
  
  
  $query = "INSERT INTO utenti (username,password) VALUES ('$username', '$pwd')";
  
  $result = mysqli_query ($conn, $query);
  if (!$result)
	  die ("Errore nella registrazione dell'utente: $query");
  
  
  header('Location: home_cinecult.php');
  exit ();
?>
