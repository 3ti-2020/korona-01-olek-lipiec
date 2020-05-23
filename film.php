<?php
    include("header.php");

    include("sql.php");

    $result = query("SELECT * FROM filmy WHERE ID=".$_GET['id']);

    $okladka = "";

    echo("<table class='movies'>
    <th>Film</th><th>Opis</th><th>Długość</th><th class='cost'>Koszt (za miesiąc)</th>");
    while ($rs = $result->fetch_assoc()) {
        $okladka = $rs['Okladka'];
        echo("<tr>
            <td class='movie'><img class='img' src='./img/okladki/".$okladka."'><span class='title'>".$rs['Tytul']."</span></td><td class='description'>".$rs['Opis']."</td><td><span class='duration'>".$rs['Dlugosc']."</span></td><td class='cost'>".$rs['Koszt']."PLN</td>
        </tr>");
    }
    echo("</table>
    
    <div class='movie-img'>
        <img src='./img/okladki/".$okladka."'>
    </div>
    
    <script src='./js/movie.js'></script>");

    include("footer.php");
?>