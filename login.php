<?php

  $user = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  
  
  $servername = "localhost";
  $username = "root";
  $pwdserver = "";
  $dbname = "cine_cult";
  
 
  $conn = mysqli_connect ($servername, $username, $pwdserver);
  if (!$conn)
	  die ("Errore nella connessione al $servername");

 $seldb = mysqli_select_db ($conn,$dbname);
  if (!$seldb)
	  die ("Errore nella connessione all'archivio $dbname");
  
  $query = "SELECT * FROM utenti WHERE username='$user'";

  $result =mysqli_query($conn,$query);
  if (!$result)
	  die ("Errore nell'accesso: $query");
  
  $numero_tuple = mysqli_num_rows ($result);
  if ($numero_tuple==0) {

       header('Location: home_cinecult.php?errore=1');
	   exit ();
  }
  
  $query = "SELECT password FROM utenti WHERE username='$user'";
  $result = mysqli_query($conn,$query);
  if (!$result)
	  die ("Errore nell'accesso: $query");
  $tupla = mysqli_fetch_array($result);
  $password_corretta = $tupla["password"];
  
  if($password!=$password_corretta){
	  header ('Location: home_cinecult.php?errore=2');
	  exit();
  }
  else{
	  header('Location: home_cinecult.php');
	  exit();
  }
  
  mysqli_close($conn);
  
?>
