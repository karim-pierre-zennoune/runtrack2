<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        nombre: <input type="text" name="nombre"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = count($_GET);
        if ($len != 0 && isset($_GET["nombre"]) && is_numeric($_GET["nombre"])) {
            if (intval($_GET["nombre"]) % 2) {
                echo "Nombre impair";
            } else
                echo "Nombre pair";
        } ?>
    </div>
</body>

</html>