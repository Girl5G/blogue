<?php
session_start();
$connexion = mysqli_connect ('localhost', 'root','', 'blogue' );
if(!$connexion){
    die('Erreur de connexion à la Base de Donnée');
     }
echo $_SESSION['user_id'];
if(!empty($_SESSION['user_id'])){
$sessionUserId = $_SESSION['user_id'];
$selection="SELECT * FROM user WHERE id='$sessionUserId' ";

 $query=mysqli_query ($connexion,$selection);

 $user=mysqli_fetch_assoc($query);
 if($user){

 }else{
    die("utilisateur inconnu");
 }
}else{
    header('LOCATION:../../connexion.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer</title>
</head>
<body>
    <h1>L'ARTICLE A ÉTÉ SUPPRIMÉ!</h1>
</body>
</html>