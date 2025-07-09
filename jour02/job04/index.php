<!-- Afficher les nombres de 1 à 100 en mettant un retour à la ligne entre chaque nombre
(“<br />”) et en remplaçant certains nombres par un mot selon les conditions suivantes :
● Si le nombre est un multiple de 3, affichez “Fizz”.
● Si le nombre est un multiple de 5, affichez “Buzz”.
● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”. -->

<?php for ($i = 1; $i <= 100; $i++): ?>
    <?php if ($i % 5 === 0 && $i % 3=== 0): ?>
        FizzBuzz<br/>
    <?php elseif ($i % 5 === 0): ?>
        Buzz<br/>
    <?php elseif ($i % 3 === 0): ?>
        Fizz<br />
    <?php else: ?>
        <?= $i ?><br/>
    <?php endif; ?>
<?php  endfor; ?>




