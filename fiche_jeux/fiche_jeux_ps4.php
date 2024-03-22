<section>
    <article>
        <h2>Liste de jeux PS4 :</h2>

    <?php
    include '../connexion_bdd.php';
    
    $sql = "SELECT jeux.nom, jeux.image, jeux.annee, jeux.note, jeux.description, jeux.video
        FROM jeux
        INNER JOIN plateforme
        ON jeux.id_plateforme = plateforme.id_plateforme
        where plateforme.id_plateforme = 1 and jeux.id_jeux = '$id'
        ORDER BY jeux.nom ASC";
        
    $resultat = mysqli_query($connexion, $sql);

    if ($resultat && mysqli_num_rows($resultat) > 0) {
        while ($jeux = mysqli_fetch_assoc($resultat)) {
                echo 
                '<a href="../fiche_jeux/fiche_jeux_ps4?id_jeux=' . $jeux['id_jeux'] . '">' . $jeux['nom'] . '</a><br>' .
                '<img class="jaquette"  src="' . $jeux["image"] . '"><br>' .
                'Année de sortie : ' . $jeux['annee'] . '<br>' . 
                'Note metacritic : ' . $jeux['note'] . '<br>' . 
                'Description : ' . $jeux['description'] . '<br><br>';

                // Vérification si la vidéo existe
                if (!empty($jeux['video'])) {
                    // Affichage de l'iframe YouTube avec l'URL de la vidéo
                        echo '<iframe width="560" height="315" src="' . $jeux['video'] . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
                }
            }  
    
    } else {
             echo "Aucun jeu trouvé : " . mysqli_error($connexion); 
    }
}

    </article>
</section>

?>

// Vérifier si l'ID est présent dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Récupérer et échapper l'ID pour éviter les injections SQL
    $id = mysqli_real_escape_string($connexion, $_GET['id']);
 
    // Préparer la requête SQL
    $sql = "SELECT * FROM chaussure WHERE id = '$id'";
 
    // Exécuter la requête SQL
    $resultat = mysqli_query($connexion, $sql);
 
 
    if ($resultat && mysqli_num_rows($resultat) > 0) {
        $chaussure = mysqli_fetch_assoc($resultat);
 
        echo '<img title="chaussure" src=' . $chaussure['URL'] . '></img>' . '<br>
        ' . 'Modèle : ' . $chaussure['modele'] . '<br>
        ' . 'Etat : ' . $chaussure ['etat'] . '<br>
        ' . 'Prix : ' . $chaussure['prix'] . ' €';
    } else {
        echo "Aucun résultat trouvé pour cet ID.";
    }
} else {
    echo "Aucun ID n'a été spécifié dans l'URL.";
}