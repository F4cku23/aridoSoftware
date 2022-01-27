<?php

$host = 'localhost';
$db = 'aridosSoftware';
$user = 'root';
$pass = '';

$dbh = new PDO('mysql:host='.$host.';dbname='.$db,$user,$pass); 

if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
	$stmt = $dbh->prepare('SELECT * FROM usuarios WHERE id = ?');
	$stmt->execute([$id]);
}else{
	$stmt = $dbh->prepare('SELECT * FROM usuarios');
	$stmt->execute();	
}

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);
/* $lista =file_put_contents("listaUsuarios.json", $json); */
echo $json;
?> 