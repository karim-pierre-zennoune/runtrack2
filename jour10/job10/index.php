<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
croissante. Affichez le résultat de cette requête dans un tableau html. La première ligne
de votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir
les données présentes dans votre base de données. -->


<?php
$mysqli = new mysqli("localhost", "root", "", "jour09");
$result = $mysqli->query("SELECT nom, id_etage, capacite FROM salles ORDER BY capacite ASC");
$fields = $result->fetch_fields();
?>

<!DOCTYPE html>
<html lang="en">

<head>
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



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <?php foreach ($fields as $field): ?>
                    <th> <?= htmlspecialchars($field->name) ?> </th>
                <?php endforeach; ?>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($result as $row): ?>
                <tr>
                    <?php foreach ($row as $key => $value): ?>
                        <td> <?= htmlspecialchars($value) ?> </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>