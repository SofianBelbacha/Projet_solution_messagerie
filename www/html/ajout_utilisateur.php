<?php
// Fonction de connexion à la base de données
// Renvoie un connecteur à la base
function db_connect()
{
 try
 {
 $bdd = new PDO('mysql:host=localhost;dbname=messaging', 'messagingUser', 'kyocr');
 }
 catch(Exception $e)
 {
 die('Erreur : '.$e->getMessage());
 }
 return($bdd);
}

$bdd=db_connect();
$debutEmail = explode('@', $_POST['email'])[0];
$maildirPath = "itinet.fr/" . $debutEmail . "/";

$req = $bdd->prepare('INSERT INTO virtual_users (domain_id, password , email, maildir) VALUES (1, ENCRYPT(:password, CONCAT("$6$", SUBSTRING(SHA(RAND()), -16))), :email, :maildir);');
$req->execute(array(
 'email' => $_POST['email'],
 'password' => $_POST['password'],
 'maildir' => $maildirPath
 ));
$req->closeCursor();

header('Location: http://192.168.1.39/result.php');
exit(); 
?>
