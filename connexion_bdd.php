<?php 

// Paramètres de connexion 

$serveur = "localhost"; 
$utilisateur = "root"; 
$mot_de_passe = ""; 
$base_de_donnees = "mini_projet_yannick_david"; 

// Établir la connexion

$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion 

if (!$connexion) { 
    die("Échec de la connexion : " . mysqli_connect_error()); 
} else { 
    //echo "Connexion réussie à la base de données."; 
} 

?>