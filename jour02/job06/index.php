<!-- Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
facilement. -->

<?php 
$hauteur = 10;
$largeur = 20;
$symbol = "#";
?> 

<?php
for ($i = 0; $i < $hauteur; $i++):
    for($j = 0; $j < $largeur; $j++):
?>
   <?= $symbol ?>
   <?php endfor; ?>
<br/>
<?php endfor; ?>
