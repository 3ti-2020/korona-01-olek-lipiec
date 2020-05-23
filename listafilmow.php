<?php
    include("header.php");

    include("sql.php");

    $result = query("SELECT * FROM filmy");

    echo("<table class='movies'>
    <th>Film</th><th>Długość</th><th class='cost'>Koszt (za miesiąc)</th>");
    while ($rs = $result->fetch_assoc()) {
        echo("<tr>
            <td class='movie'><a href='film.php?id=".$rs['ID']."'><div class='movie-link'><img src='./img/okladki/".$rs['Okladka']."'><span class='title'>".$rs['Tytul']."</span></div></a></td><td><span class='duration'>".$rs['Dlugosc']."</span></td><td class='cost'>".$rs['Koszt']."PLN</td>
        </tr>");
    }
    echo("</table>");

    include("footer.php");
?>