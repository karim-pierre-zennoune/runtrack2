<!DOCTYPE html>
<html>

<?php
if (isset($_GET["style"])): ?>

    <link rel="stylesheet" href="<?= $_GET["style"] ?> ">

<?php endif; ?>

<body>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get ">
        <label for="style">Choose a style:</label>
        <select id="style" name="style">
            <option value="style1.css">style1</option>
            <option value="style2.css">style2</option>
            <option value="style3.css">style3</option>
        </select>
        <input type="submit">
    </form>

</body>

</html>