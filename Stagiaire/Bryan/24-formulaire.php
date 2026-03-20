<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST["nom"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $messageTexte = trim($_POST["message"] ?? "");
    if ($nom && $email && $messageTexte) {
        $message = " Message envoyé avec succès !";
    } else {
        $message = " Veuillez remplir tous les champs.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de contact</title>
</head>
<body>
<h2>Contact</h2>
<?php if ($message): ?>
    <p><?= htmlspecialchars($message) ?></p>
<?php endif; ?>
<form method="POST">
    <label>Nom :</label><br>
    <input type="text" name="nom"><br><br>
    <label>Email :</label><br>
    <input type="email" name="email"><br><br>
    <label>Message :</label><br>
    <textarea name="message"></textarea><br><br>
    <button type="submit">Envoyer</button>
</form>
</body>
</html>