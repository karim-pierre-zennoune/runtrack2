<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->


<?php require_once("../../kpz_lib.php"); ?>

<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo kpz_htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        nombre: <input type="text" name="nombre" autofocus><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = kpz_count($_GET);
        if ($len != 0 && isset($_GET["nombre"]) && kpz_is_integer($_GET["nombre"])) {
            if (
                $_GET["nombre"][kpz_strlen($_GET["nombre"]) - 1] == "0" ||
                $_GET["nombre"][kpz_strlen($_GET["nombre"]) - 1] == "2" ||
                $_GET["nombre"][kpz_strlen($_GET["nombre"]) - 1] == "4" ||
                $_GET["nombre"][kpz_strlen($_GET["nombre"]) - 1] == "6" ||
                $_GET["nombre"][kpz_strlen($_GET["nombre"]) - 1] == "8"
            ) {
                echo "Nombre pair";
            } else
                echo "Nombre impair";
        } ?>
    </div>
</body>

</html>