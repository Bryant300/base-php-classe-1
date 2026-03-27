<?php
// données (Model)
$student = [
    'nom' => "Mike",
    'prenom' => "Pitz",
    'email' => "gitweb@cf2m.be",
    'age' => 49,
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17b-foreach-table.php</title>
</head>
<body>
    <h1>17b-foreach-table.php</h1>
    <p>Créez 17b-foreach-table.php : créez un tableau associatif avec les données d'un stagiaire (nom, prénom, email, âge) et affichez-les dans un tableau HTML &lt;table>.</p>
    <table>
            <?php
            foreach($student as $clef => $valeur){
            ?>
        <tr>
            <td><?= $clef ?></td>
            <td><?= $valeur ?></td>
        </tr>
            <?php
            }
            ?>
        
    </table>

</body>
</html>