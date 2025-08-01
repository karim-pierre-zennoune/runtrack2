<!-- Faire un algorithme qui affiche un triangle de 5 de hauteur. Cette dimension devra être
stockée dans une variable $hauteur, modifiable facilement.

Exemple si $hauteur = 5

    /\
   /  \
  /    \
 /      \
/________\

-->
<?php
$hauteur = 5;

for ($i = 0; $i < $hauteur; $i++):
    for ($j = $hauteur - $i; $j > 0; $j--):
        echo " ";
    endfor;
    echo "/";
    for ($k = $i * 2; $k > 0; $k--):
        if ($i === $hauteur - 1):
            echo "_";
        else:
            echo " ";
        endif;
    endfor;
    echo "\\ <br/>";

endfor;
?>