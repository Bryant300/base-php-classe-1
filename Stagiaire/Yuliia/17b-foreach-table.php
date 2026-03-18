<?php
$personne = ["Prenom" => "Yuliia", "Nom" => "Dmytruk", "Age" => 24];
echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;'>";
echo "<thead>";
echo "<tr>";
echo "<th>Personal information</th>";
echo "<th>Value</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($personne as $cle => $valeur) {
     echo "<tr>";
    echo "<td><strong>$cle</strong></td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
}
