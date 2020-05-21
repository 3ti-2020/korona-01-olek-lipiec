<?php
    include("header.php");

    include("sql.php");

    $result = query("SELECT * FROM filmy");

    echo("<table class='movies'>
    <th>Film</th><th>Długość</th>");
    while ($rs = $result->fetch_assoc()) {
        echo("<tr>
            <td class='movie'><a href='#'><div class='movie-link'><img src='./img/okladki/".$rs['Okladka']."'><span class='title'>".$rs['Tytul']."</span></div></a></td><td><span class='duration'>".$rs['Dlugosc']."</span></td>
        </tr>");
    }
    echo("</table>");

    include("footer.php");
?>