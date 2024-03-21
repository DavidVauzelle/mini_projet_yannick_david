<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barre de navigation</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<nav>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps4.php">PS4</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps5.php">PS5</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_xbox_one.php">XBOX ONE</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_series_s_x.php">SERIES S/X</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_switch.php">SWITCH</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_pc.php">PC</a>
    <a id="accueil">ACCUEIL</a>
</nav>

<section>
    <article>
        <h2>PS4</h2>

<?php
    include './connexion_bdd.php';

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 1
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
        echo '<div class="jaquette">';
         foreach($resultat as $jeux) { 
            echo '<img class="jeux" src="' . $jeux['image'] . '" alt="Image de jeu">';
        } 
        echo '</div>';
    } else {
             echo "Aucune image trouvée : " . mysqli_error($connexion); 
    }

?>  
    </article>

    <article>
        <h2>PS5</h2>

<?php
    
    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 2
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat) {
        echo '<div class="jaquette">';
    foreach($resultat as $jeux) { 
        echo '<img class="jeux" src="' . $jeux['image'] . '" alt="Image de jeu"><br>';
        } 
        echo '</div>';
    } else {
         echo "Aucune image trouvé: " . mysqli_error($connexion); 
    }

?>
    </article>

    <article>
        <h2>XBOX ONE</h2>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 3
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);

        if ($resultat) {
            echo '<div class="jaquette">';
        foreach($resultat as $jeux) { 
            echo '<img class="jeux" src=' . $jeux['image'] . ' alt="Image de jeu"><br>';
        } 
            echo '</div>';
        } else {
            echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }

?>

    </article>

    <article>
        <h2>SERIES S/X</h2>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 4
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);
        if ($resultat) {
            echo '<div class="jaquette">';
        foreach($resultat as $jeux) { 
            echo '<img class="jeux"src ='. $jeux['image'] . ' alt="Image de jeu"><br>';
    }    
            echo '</div>';
        } else {
            echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }

?>

    </article>

    <article>
        <h2>SWITCH</h2>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 5
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);
        if ($resultat) {
            echo '<div class="jaquette">';
        foreach($resultat as $jeux) { 
            echo '<img class="jeux"src='. $jeux['image'] . ' alt="Image de jeu"><br>';
    } 
            echo '</div>';
        } else {
             echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }


?>

    </article>

    <article>
        <h2>PC</h2>

<?php

    $sql = " SELECT jeux.image
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 6
        limit 7;
        ";
    $resultat = mysqli_query($connexion, $sql);
        if ($resultat) {
            echo '<div class="jaquette">';
        foreach($resultat as $jeux) { 
            echo '<img class="jeux"src='. $jeux['image'] . ' alt="Image de jeu"><br>';
    } 
            echo '</div>';
        } else {
     echo "Aucune image trouvé: " . mysqli_error($connexion); 
        }
?>

    </section>
</body>
</html>













