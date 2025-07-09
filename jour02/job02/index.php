
<!-- Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />).

note: 3233 > 1337 , no need to test for it in the if-->


<?php for ($i = 0; $i < 1338; $i++): ?>
    <?php if ($i === 26 || $i === 37 || $i === 88 || $i === 1111): 
        continue; 
     else: ?>
        <?= $i ?> <br/>
    <?php endif; ?>
<?php  endfor; ?>