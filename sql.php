<?php

    function query($query) {

        $conn = new mysqli('localhost', 'root', '', 'lipiec', '3308');

        $result = $conn->query($query);

        return $result;

        $conn->close();

    }

?>