<?php
$resultat = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre1 = $_POST["nombre1"] ?? "";
    $nombre2 = $_POST["nombre2"] ?? "";
    $operation = $_POST["operation"] ?? "";

    if ($nombre1 !== "" && $nombre2 !== "") {
        switch ($operation) {
            case "+":
                $resultat = $nombre1 + $nombre2;
                break;
            case "-":
                $resultat = $nombre1 - $nombre2;
                break;
            case "*":
                $resultat = $nombre1 * $nombre2;
                break;
            case "/":
                if ($nombre2 != 0) {
                    $resultat = $nombre1 / $nombre2;
                } else {
                    $resultat = "Division par zéro impossible";
                }
                break;
            default:
                $resultat = "Opération invalide";
        }
    } else {
        $resultat = "Veuillez remplir tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<h2>Calculatrice</h2>
<form method="POST">
    <input type="number" name="nombre1" step="any" placeholder="Nombre 1">
    <select name="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="nombre2" step="any" placeholder="Nombre 2">

    <button type="submit">Calculer</button>
</form>
<?php if ($resultat !== ""): ?>
    <p>Résultat : <?= htmlspecialchars($resultat) ?></p>
<?php endif; ?>

</body>
</html>