<?php
if (isset($_GET['prenom'])) {
    $prenom = $_GET['prenom'];

    $prenomFormate = ucfirst(strtolower($prenom));

    echo "Bonjour " . $prenomFormate . " !";
}
?>

<form method="GET">
    <input type="text" name="prenom" placeholder="Entrez votre prénom">
    <button type="submit">Envoyer</button>
</form>