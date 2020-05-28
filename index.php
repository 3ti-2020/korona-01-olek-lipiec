<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php

        require("table.php");

        table("SELECT * FROM autorzy, tytuly, krzyzowa WHERE krzyzowa.id_autor=autorzy.id_autor AND krzyzowa.id_tytul=tytuly.id_tytul");

    ?>

    <form action="add.php" method="GET">

        <input type="text" name="imie-autora">
        <input type="text" name="nazwisko-autora">
        <input type="text" name="tytul">
        <input type="text" name="isbn">
        <input type="submit" value="Dodaj">

    </form>

    <form action="remove.php" method="GET">

        <input type="text" name="imie-autora">
        <input type="text" name="nazwisko-autora">
        <input type="text" name="tytul">
        <input type="submit" value="Usuń">

    </form>
    
</body>
</html>