
<?php

$bool = true;
$integer = 5;
$string = "abc";
$float = 3.14;

?>

<table>
  <tr>
  <th>Nom</th>
    <th>Type</th>
    <th>Valeur</th>
  </tr>

<tr><td>bool</td><td> <?= gettype($bool) ?> </td><td> <?= $bool ?></td></tr>
<tr><td>integer</td><td> <?= gettype($integer) ?></td><td> <?= $integer ?></td></tr>
<tr><td>string</td><td> <?= gettype($string) ?></td><td> <?= $string ?></td></tr>
<tr><td>float</td><td> <?= gettype($float) ?></td><td> <?= $float ?></td></tr>

</table>

