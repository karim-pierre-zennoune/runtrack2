<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php

setcookie("test_cookie", "test");
if (isset($_COOKIE["test_cookie"])) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

$displaycookie = null;
if (isset($_COOKIE["visites"])) {
    $newval = intval($_COOKIE["visites"]) + 1;
    setcookie("visites", $newval);
    $displaycookie = $newval;
} else {
    setcookie("visites", 1);
    $displaycookie = 1;
}

if (isset($_GET["reset"]) && isset($_COOKIE["visites"])) {
    setcookie("visites", 0);
    $displaycookie = 0;
}

?>

<body>
    <p>
        Nombre de visites: <?= $displaycookie ?>
    </p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input name="reset" type="submit">
    </form>
</body>