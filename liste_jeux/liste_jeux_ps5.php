<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de jeux PS5</title>
    <link href="../style.liste_jeux.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps4.php">PS4</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps5.php">PS5</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_xbox_one.php">XBOX ONE</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_series_s_x.php">SERIES S/X</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_switch.php">SWITCH</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_pc.php">PC</a>
    <a href="../index.php">ACCUEIL</a>
</div>

<section>
    <h2>Liste de jeux PS5 :</h2>

<?php
    include '../connexion_bdd.php';

    $sql = " SELECT jeux.nom
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 2
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

    
