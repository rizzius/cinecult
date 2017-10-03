<?php
$conn = new mysqli('localhost','root','root','cine_cult');
$query = "INSERT INTO utenti (username,email,pwd) VALUES (?,?,?)";


$st = $conn->stmt_init();
if ($st->prepare($query)) {
    $st->bind_param(sss, $_POST['username'], $_POST['email'], $_POST['pwd']);
	$st->execute();
}
	
	if($st) {
	echo "Registrazione avvenuta";
	}
	else {
	echo "Registrazione fallita";
	}
	
?>	