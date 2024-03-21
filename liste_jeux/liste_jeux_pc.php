<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de jeux PC</title>
    <link href="../style.liste_jeux.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="#ps4">PS4</a>
    <a href="#ps5">PS5</a>
    <a href="#one-serie">XBOX ONE</a>
    <a href="#one-serie">SERIES S/X</a>
    <a href="#switch">SWITCH</a>
    <a href="#pc">PC</a>
    <a href="#accueil">ACCUEIL</a>
</div>

<section>
    <h2>Liste de jeux PC :</h2>

<?php
    include '../connexion_bdd.php';

    $sql = " SELECT jeux.nom
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 6
        ORDER BY jeux.nom ASC;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
        '<ul>';
        foreach($resultat as $jeux) { 
            echo '<li>' . $jeux['nom'] . '</li>'. '<br>';
        } 
        '</ul>';
         
    } else {
             echo "Aucun jeu trouvé : " . mysqli_error($connexion); 
    }

?>  

</section>

    
