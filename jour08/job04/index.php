<!-- Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion. -->


<?php
$login = null;
setcookie("test_cookie", "test");
if (isset($_COOKIE["test_cookie"])) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

if (
    isset($_GET["connexion"]) &&
    isset($_GET["prenom"]) &&
    $_GET["prenom"] != ""
) {
    setcookie("prenom", $_GET["prenom"]);
    $login = $_GET["prenom"];
} else if (isset($_COOKIE["prenom"])) {
    $login = $_COOKIE["prenom"];
}

if (isset($_GET["deco"])) {
    setcookie("prenom", "");
    $login = null;
}
?>

<body>
    <?php if (isset($login)): ?>
        <p> Bonjour <?= htmlspecialchars($login) ?> !</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <input name="deco" type="submit" value="Déconnexion">
        </form>

    <?php else: ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
            <input type="text" name="prenom" autofocus>
            <input name="connexion" type="submit" value="Connexion">
        </form>

    <?php endif; ?>


</body>