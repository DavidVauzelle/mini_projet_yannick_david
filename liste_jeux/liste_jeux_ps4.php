<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de jeux PS4</title>
    <link href="../style.liste_jeux.css" rel="stylesheet">
</head>
<body>

<nav>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps4.php">PS4</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_ps5.php">PS5</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_xbox_one.php">XBOX ONE</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_series_s_x.php">SERIES S/X</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_switch.php">SWITCH</a>
    <a href="/mini_projet_yannick_david/liste_jeux/liste_jeux_pc.php">PC</a>
    <a href="../index.php">ACCUEIL</a>
</nav>

<section>
    <h2>Liste de jeux PS4 :</h2>

<?php
    include '../connexion_bdd.php';

    // Vérifier si l'ID est présent dans l'URL
    if (isset($_GET['id_jeux']) && !empty($_GET['id_jeux'])) {

    // Récupérer et échapper l'ID pour éviter les injections SQL
    $id = mysqli_real_escape_string($connexion, $_GET['id_jeux']);

    $sql = " SELECT jeux.nom, jeux.jeux_nom
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 1 AND jeux.id_jeux = '$id' 
        ORDER BY jeux.nom ASC;
        ";
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat && mysqli_num_rows($resultat) > 0) {
        while ($jeux = mysqli_fetch_assoc($resultat)) {
        '<ul>';
            echo '<li>' . '<a href="../fiche_jeux/fiche_jeux_ps4?id_jeux=' . $jeux['jeux.id_jeux'] . '">' . $jeux['nom'] . '</a>' . '<br>' . '</li>' . '<br>';
        '</ul>';
            }
        }
    }
?>  

</section>