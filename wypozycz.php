<?php

    include("header.php");

?>

<div class="container">

    <input type="radio" name="registered" id="registered" checked>Zarejestrowany
    <input type="radio" name="registered" id="unregistered">Nowy klient

    <form action="registered.php" class="registered" method="GET">
        <input type="text" name="imie" required placeholder="Imie...">
        <input type="text" name="nazwisko" required placeholder="Nazwisko...">

        <?php

            include("sql.php");

            $result = query("SELECT * FROM filmy");

            echo("<table class='movies'>
            <th>#</th><th>Film</th><th>Długość</th><th class='cost'>Koszt (za miesiąc)</th>");
            while ($rs = $result->fetch_assoc()) {
                echo("<tr>
                    <td><input class='movie-checkbox' data-cost='".$rs['Koszt']."' type='checkbox' name='filmy[]' value='".$rs['ID']."'></td><td class='movie'><a href='film.php?id=".$rs['ID']."' target='_blank'><div class='movie-link'><img src='./img/okladki/".$rs['Okladka']."'><span class='title'>".$rs['Tytul']."</span></div></a></td><td><span class='duration'>".$rs['Dlugosc']."</span></td><td class='cost'>".$rs['Koszt']."PLN</td>
                </tr>");
            }
            echo("</table>");

        ?>
        
        <span class='all-cost'>0PLN</span><input type="submit" class='wypozycz-btn' value="Wypożycz">
    </form>

    <form action="newuser.php" class="new-user" method="GET">
        <input type="text" name="imie" required placeholder="Imie...">
        <input type="text" name="nazwisko" required placeholder="Nazwisko...">
        <input type="text" name="numer_telefonu" required minlength="9" maxlength="9" placeholder="Numer telefonu...">
        <input type="submit" class='zarejestruj-btn' value="Zarejestruj">
    </form>

</div>

    <script src="./js/wypozycz.js"></script>

<?php

    

    include("footer.php");
?>