<!-- Faire un algorithme qui affiche les nombres premiers jusqu’à 1000 en mettant un retour
à la ligne entre chaque nombre (“<br />”). -->



<?php 

function isPrime($val) : bool {
    if ($val <= 1)
        return false;
    if ($val === 2)
        return true;
    if ($val % 2 === 0)
        return false;
    for ($i = 3; $i <= sqrt($val); $i+=2)
        if ($val % $i === 0) return false;
    return true;
} ?>


<?php 
for ($i = 0; $i < 1001; $i++):
    if (isPrime($i)): ?>
        <?= $i ?> <br/>
<?php  
    endif;
endfor; ?>

