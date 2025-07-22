<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
valeur.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
tableau : -->


<!DOCTYPE HTML>
<html>

<style>
    table {
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th {
        text-align: left;
    }
</style>


<body>
    <form action="index.php" method="post">
        a: <input type="text" name="a"><br>
        b: <input type="text" name="b"><br>
        c: <input type="text" name="c"><br>
        d: <input type="text" name="d"><br>
        e: <input type="text" name="e"><br>
        <input type="submit">
    </form>

    <div>

        <?php
        $len = count($_POST);
        if ($len != 0) {
            ?>

            <table>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>

                <?php
                foreach ($_POST as $key => $value) {
                    ?>
                    <tr>
                        <td> <?= $key ?></td>
                        <td> <?= $value ?> </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
            <?php
        }
        ?>

    </div>
</body>

</html>