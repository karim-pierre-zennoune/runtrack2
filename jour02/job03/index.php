<!-- Afficher les nombres de 0 à 100 en mettant un retour à la ligne
  entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>),
     si le nombre est compris entre 25
et 50 : souligner.
Afficher “La Plateforme_” à la place de 42. -->

<?php for ($i = 0; $i < 101; $i++):
    if ($i === 42): ?>
        <?= "La Plateforme_" ?></br>
   <?php elseif ($i <= 20): ?>
        <i> <?= $i ?> </i></br>
    <?php elseif ($i >= 25 && $i <= 50): ?>
        <u> <?= $i ?> </u></br>
    <?php else : ?>
        <?= $i ?> </br>
    <?php  endif; ?>
<?php  endfor; ?>
