<?php
    include("header.php");

    include("sql.php");

    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $numerTelefonu = $_GET['numer_telefonu'];


    if (isInt($numerTelefonu)) {

        $result = query("SELECT * FROM klienci WHERE Imie='".$imie."' AND Nazwisko='".$nazwisko."' AND Numer_telefonu='".$numerTelefonu."'");

        if (!$result->fetch_row()) {

            query("INSERT INTO klienci (`ID`, `Imie`, `Nazwisko`, `Numer_telefonu`) VALUES (null, '".$imie."', '".$nazwisko."', '".$numerTelefonu."')");

            echo("<h2>Stworzono nowego użytkownika</h2>");

        }
        else {
            echo("<h2>Ten użytkownik już istnieje</h2>");
        }
    }
    else {
        echo("<h2>Proszę podać poprawny numer telefonu</h2>");
    }

    include("footer.php");
?>