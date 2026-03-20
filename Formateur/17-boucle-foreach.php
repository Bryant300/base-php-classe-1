<?php
// MVC => Model (datas), View (Vue, html, css etc..), Controller (routage, logique, lien entre les Models et Views)

// Model
$prenoms = [
    'Laetitia',
    'Inès',
    'Badr',
    'Meidhy',
    'Robin',
    'Yuliia',
    'Bryan',
    'Soufiane',
    'Raphaël',
    'Michaël',
];






// View
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17-boucle-foreach.php</title>
</head>
<body>
    <h1>17-boucle-foreach.php</h1>
    <p>La boucle foreach permet de lister tous les éléments d'un array ou d'un object, il s'occupe de tout, il lance la boucle au premier élément, et continue jusqu'au dernier élément, il arrête la boucle et remet l'élément au début</p>
    <p>Créez 17-boucle-foreach.php : créez un tableau de 10 prénoms et affichez-les dans une liste HTML &lt;ul>&lt;li>.</p>
    <ul>
    <?php
    // tant qu'on a des prénoms, on les affiche 
    // en utilisant un alias (as) d'un nom qu'on choisit
    foreach($prenoms as $item){
        // affichage du li en php (pratique contestabme)
        echo "<li>$item</li>";
    }
    ?>
    </ul>
    <hr>
    <ul>
        
        <?php
        // typage des fonctions PHP pour les templates
        foreach($prenoms as $prenom):
        ?>
    <li><?=$prenom?></li>
        <?php
        endforeach;
        ?>

    </ul>
    <hr>
    <ul>
<?php
// si pas de parenthèse, la boucle tourne jusqu'au premier ;
// pour afficher la clef et la valeur foreach($tab as $key => $value){}
foreach($prenoms as $clef => $prenom) echo "        <li>".($clef+1).") $prenom</li>".PHP_EOL;

?>

    </ul>

</body>
</html>