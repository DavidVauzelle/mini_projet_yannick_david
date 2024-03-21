<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de navigation</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="navbar">
    <a href="#ps4">PS4</a>
    <a href="#ps5">PS5</a>
    <a href="#one-serie">XBOX ONE</a>
    <a href="#one-serie">SERIES S/X</a>
    <a href="#switch">SWITCH</a>
    <a href="#pc">PC</a>
</div>

<section>
    <article>
        <h2>PS4</h2>
        <img src="" alt="">
    </article>

<?php
    include './connexion_bdd.php';

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 1;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
         foreach($resultat as $jeux) { 
            echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
        } 
    } else {
             echo "Aucune image trouvée : " . mysqli_error($connexion); 
    }

?>    
    <article>
        <h2>PS5</h2>
        <img src="" alt="">
    </article>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 2;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
    foreach($resultat as $jeux) { 
        echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
        } 
    } else {
         echo "Aucune image trouvé: " . mysqli_error($connexion); 
    }

?>
    <article>
        <h2>XBOX ONE</h2>
        <img src="" alt=""> 
    </article>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 3;
        ";
    $resultat = mysqli_query($connexion, $sql);

        if ($resultat) {
        foreach($resultat as $jeux) { 
            echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
    } 
        } else {
            echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }

?>
    <article>
        <h2>SERIES S/X</h2>
        <img src="" alt=""> 
    </article>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 4;
        ";
    $resultat = mysqli_query($connexion, $sql);

        if ($resultat) {
        foreach($resultat as $jeux) { 
            echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
    }    
        } else {
            echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }

?>
    <article>
        <h2>SWITCH</h2>
        <img src="" alt=""> 
    </article>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 5;
        ";
    $resultat = mysqli_query($connexion, $sql);

        if ($resultat) {
        foreach($resultat as $jeux) { 
            echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
    } 
        } else {
             echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }


?>
    <article>
        <h2>PC</h2>
        <img src="" alt=""> 
    </article>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 6;
        ";
    $resultat = mysqli_query($connexion, $sql);

        if ($resultat) {
        foreach($resultat as $jeux) { 
            echo '<img src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
    } 
        } else {
     echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }
?>

</section>


</body>
</html>













