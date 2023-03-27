<?php
session_start();
header('Content-type: text/html; charset=utf-8');
require_once '../config/connexion.php';

if(empty($_POST['ID'])){
    echo "Il manque l'ID du genre que vous souhaitez supprimer !";
    die();
}else{
// DEFINITIONS DES VARIABLES
$ID_genre = htmlspecialchars(strip_tags($_POST['ID']),ENT_QUOTES);

// Suppression des éléments dans les tables de liaisons
$delete_genre_film=$con->prepare("DELETE FROM film_genre WHERE ID_genre = ?");
$delete_genre_film->execute([$ID_genre]);


// Suppression du genre

$delete_genre=$con->prepare("DELETE FROM genre WHERE ID_genre = ?");
$delete_genre->execute([$ID_genre]);

echo "Le genre a bien été supprimé ! ", "<br> var_dump post en bas là ! "; 
var_dump($_POST);

}



?>