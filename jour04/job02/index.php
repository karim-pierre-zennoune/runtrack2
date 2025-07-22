<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
arguments $_GET et les valeurs associées.
Il doit y avoir deux colonnes : argument et valeur. -->


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
    <form action="index.php" method="get">
        a: <input type="text" name="a"><br>
        b: <input type="text" name="b"><br>
        c: <input type="text" name="c"><br>
        d: <input type="text" name="d"><br>
        e: <input type="text" name="e"><br>
        <input type="submit">
    </form>

    <div>

        <?php
        $len = count($_GET);
        if ($len != 0) {
            ?>

            <table>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>

                <?php
                foreach ($_GET as $key => $value) {
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