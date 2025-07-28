<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

session_start();
if (!isset($_SESSION["nbvisites"])) {
    $_SESSION["nbvisites"] = 1;
} else {
    $_SESSION["nbvisites"] = $_SESSION["nbvisites"] + 1;
}

if (isset($_GET["reset"])) {
    $_SESSION["nbvisites"] = 0;
}

?>

<body>
    <p>
        Nombre de visites: <?= $_SESSION["nbvisites"] ?>
    </p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input name="reset" type="submit">
    </form>
</body>