<?php

    include("header.php");

    echo("<div class='container'>".file_get_contents('http://loripsum.net/api')."</div>");

    include("footer.php");
?>