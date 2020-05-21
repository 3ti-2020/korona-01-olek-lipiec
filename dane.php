<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

    function table($query, $col) {

        $conn = new mysqli('localhost', 'root', '', 'lipiec', '3308');

        $result = $conn->query($query);

        echo('<table border="2">');

        while ($rs = $result->fetch_assoc()) {
            echo('<tr>');
            for ($i = 0 ; $i < sizeof($col) ; $i++) {
                echo('<td>'.$rs[$col[$i]].'</td>');
            }
            echo('</tr>');
        }

        echo('</table>');

        $conn->close();

    }

    table("SELECT * FROM klienci", array('ID', 'Imie', 'Nazwisko', 'Numer_telefonu'));
    table("SELECT * FROM filmy", array('ID', 'Tytul', 'Okladka', 'Dlugosc'));
    table("SELECT * FROM klienci, filmy, wypozyczone_filmy WHERE wypozyczone_filmy.ID_klienta=klienci.ID AND wypozyczone_filmy.ID_filmu=filmy.ID", array('Imie', 'Nazwisko', 'Tytul', 'Data_wypozyczenia', 'Termin_oddania'));

?>
    
</body>
</html>