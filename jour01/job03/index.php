
<?php

$bool = true;
$integer = 5;
$string = "abc";
$float = 3.14;

echo "
<table>
  <tr>
  <th>Nom</th>
    <th>Type</th>
    <th>Valeur</th>
  </tr>";
echo "<tr><td>bool</td><td>", gettype($bool), "</td><td>$bool</td></tr>";
echo "<tr><td>integer</td><td>", gettype($integer), "</td><td>$integer</td></tr>";
echo "<tr><td>string</td><td>", gettype($string), "</td><td>$string</td></tr>";
echo "<tr><td>float</td><td>", gettype($float), "</td><td>$float</td></tr>";

echo "</table>";

 
?>


