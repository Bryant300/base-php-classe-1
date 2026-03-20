    <?php
 for ($i=0; $i<=50; $i++): 
      if($i%2===0):
    ?>
    <span style="color:cornflowerblue"><?= $i ?></span>
    <?php
      else:
     ?>
     <span style="color:coral"><?= $i ?></span>
    <?php
      endif;
    endfor;
    ?>


<h2>Affichez la table de multiplication de 7</h2>
    <?php $number=7;
$res=0;
 for ($i = 1; $i <= 10; $i++): {
$res=$i*$number;

 }
 ?>
 <span style="color:coral"><?=" $i x 7 = $res"."<br>"?></span>
 <?php
    endfor;
    ?>

<?php 
$prenoms = ["Inès", "Badr","Yuliia","Bryan","Soufiane","Laetitia" ,"Meidhy","Raphaël","Robin","Jean"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <ul>
  <?php 
  foreach ($prenoms as $prenom):
   ?> 
<li> <?= strtolower($prenom)  ?> </li>
<?php 
endforeach;
 ?>

 </ul>
</body>
</html>


<?php
$personne = [ "Yuliia",  "Dmytruk", 24];
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

$html = "<script>alert('XSS')</script>";
echo htmlspecialchars($html); // &lt;script&gt;alert('XSS')&lt;/script&gt;
