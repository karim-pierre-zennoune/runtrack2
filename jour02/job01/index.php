<!-- Afficher tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre
chaque nombre (<br />).
Le nombre 42 doit être en gras et souligné (<b><u>...). -->

<?php for ($i = 0; $i < 1338; $i++): ?>
    <?php if ($i === 42): ?>
        <b><u> <?= $i ?> </u></b><br/>
    <?php else: ?>
        <?= $i ?> <br/>
    <?php endif; ?>
<?php  endfor; ?>




