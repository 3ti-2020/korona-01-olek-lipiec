<?php

    include("header.php");

?>

    <div class="container">

        <form class="wypozyczenia-form" action="wypozyczenia.php#view" method="GET">
            <input type="text" name="imie" placeholder="Imie...">
            <input type="text" name="nazwisko" placeholder="Nazwisko...">
            <input type="submit" value="Sprawdź">
        </form>

    </div>

<?php
    
    if (isset($_GET['imie']) && isset($_GET['nazwisko'])) {

        echo("<div id='view'>");
        
        include("sql.php");

        $result = query("SELECT * FROM klienci, filmy, wypozyczone_filmy WHERE klienci.imie='".$_GET['imie']."' AND klienci.nazwisko='".$_GET['nazwisko']."' AND wypozyczone_filmy.ID_klienta=klienci.ID AND wypozyczone_filmy.ID_filmu=filmy.ID");

        if ($result->fetch_row()) {
            echo("<h2>Filmy wypożyczone przez ".$_GET['imie']." ".$_GET['nazwisko'].":</h2><table>
            <th>Film</th><th>Długość</th>");
            
            while ($rs = $result->fetch_assoc()) {
                echo("<tr>
                    <td class='movie'><a href='#'><div class='movie-link'><img src='./img/okladki/".$rs['Okladka']."'><span class='title'>".$rs['Tytul']."</span></div></a></td><td><span class='duration'>".$rs['Dlugosc']."</span></td>
                </tr>");
            }
            echo("</table>");
        }
        else {
            echo("<h2>Ten klient nie wypożyczył żadnego filmu</h2>");
        }

        echo("</div>");

    }

    include("footer.php");
?>