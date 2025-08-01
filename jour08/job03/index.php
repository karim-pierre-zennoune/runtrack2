<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->

<?php

session_start();
if (!isset($_SESSION["users"])) {
    $_SESSION["users"] = [];
}

if (isset($_GET["reset"])) {
    $_SESSION["users"] = [];
}

if (
    isset($_GET["send"]) &&
    isset($_GET["prenom"]) &&
    $_GET["prenom"] != ""
) {
    $_SESSION["users"][] = $_GET["prenom"];
}

?>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
        <input type="text" name="prenom" autofocus>
        <input name="send" type="submit" value="Submit">
        <input name="reset" type="submit" value="Reset">
    </form>

    <ul>
        <?php
        if (isset($_SESSION["users"])):
            foreach ($_SESSION["users"] as $prenom): ?>
                <li> <?= htmlspecialchars($prenom) ?> </li>
                <?php
            endforeach;
        endif; ?>
    </ul>
</body>