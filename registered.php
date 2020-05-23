<?php
    include("header.php");

    include("sql.php");

    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $filmy = $_GET['filmy'];

    $result = query("SELECT * FROM klienci WHERE Imie='".$imie."' AND Nazwisko='".$nazwisko."'");

    if ($result->fetch_row()) {

        $result = query("SELECT * FROM klienci WHERE Imie='".$imie."' AND Nazwisko='".$nazwisko."'");
        $id = 0;
        
        while ($rs = $result->fetch_assoc()) {
            $id = $rs['ID'];
        }
        
        foreach($filmy as $film) {
            query("INSERT INTO `wypozyczone_filmy`(`ID_wypozyczenia`, `ID_klienta`, `ID_filmu`, `Data_wypozyczenia`, `Termin_oddania`) VALUES (null, '".$id."', '".$film."', curdate(), date_add(curdate(), INTERVAL 1 MONTH))");
        }

        echo("<h2>Wypożyczono wybrane filmy</h2>");

    }
    else {
        echo("<h2>Ten użytkownik nie istnieje</h2>");
    }

    include("footer.php");
?>