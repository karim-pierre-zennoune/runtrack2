<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
“Le nombre d’argument GET envoyé est : “ -->



<?php require_once("../../kpz_lib.php"); ?>


<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo kpz_htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        a: <input type="text" name="a"><br>
        b: <input type="text" name="b"><br>
        c: <input type="text" name="c"><br>
        d: <input type="text" name="d"><br>
        e: <input type="text" name="e"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = kpz_count($_GET);
        echo "Le nombre d’argument GET envoyé est : $len ";
        ?>

    </div>
</body>

</html>