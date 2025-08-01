<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->

<?php require_once("../../kpz_lib.php"); ?>

<!DOCTYPE HTML>
<html>

<body>
    <form action="<?php echo kpz_htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        username: <input type="text" name="username"><br>
        password: <input type="text" name="password"><br>
        <input type="submit">
    </form>

    <div>
        <?php
        $len = kpz_count($_POST);
        if ($len != 0 && isset($_POST["username"]) && isset($_POST["password"])) {
            if ($_POST["username"] === "John" && $_POST["password"] === "Rambo") {
                echo "C’est pas ma guerre";
            } else
                echo "Votre pire cauchemar";
        } ?>
    </div>
</body>

</html>