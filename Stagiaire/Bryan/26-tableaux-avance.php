<?php
$numbers = [];
for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
}
sort($numbers);
$numbers = array_unique($numbers);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableaux avancés</title>
</head>
<body>
<h2>Résultat</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Index</th>
        <th>Valeur</th>
    </tr>
    <?php foreach ($numbers as $index => $value): ?>
        <tr>
            <td><?= $index ?></td>
            <td><?= htmlspecialchars($value) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>