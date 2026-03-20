<?php
setlocale(LC_TIME, 'fr_FR.UTF-8');
$dateActuelle = new DateTime();
$dateFormatee = strftime("%A %d %B %Y", $dateActuelle->getTimestamp());
$heure = $dateActuelle->format("H\hi");
$finAnnee = new DateTime(date("Y") . "-12-31");
$interval = $dateActuelle->diff($finAnnee);
$joursRestants = $interval->days;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dates</title>
</head>
<body>
<h2>Date du jour</h2>
<p>
    Nous sommes le <?= ucfirst($dateFormatee) ?>, il est <?= $heure ?>.
</p>
<p>
    Il reste <?= $joursRestants ?> jours avant le 31 décembre.
</p>
</body>
</html>