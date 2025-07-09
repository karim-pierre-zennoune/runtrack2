<!-- Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez pour chaque nombre “X est paire<br />” ou “X est
impaire<br />”, sur votre page index.php. X prenant tour à tour chacune des valeurs
comprises dans ce tableau. -->

<?php
$table = [ 200, 204, 173, 98, 171, 404, 459 ];

foreach ($table as $elem):
    if ( $elem % 2== 0): ?>
        <?= "$elem est pair <br/>" ?>
    <?php
    else: ?>
    <?= "$elem est impair <br/>" ?>
        <?php
    endif;
endforeach;
?>