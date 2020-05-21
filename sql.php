<?php

    function query($query) {

        $conn = new mysqli('localhost', 'root', '', 'lipiec');

        $result = $conn->query($query);

        return $result;

        $conn->close();

    }

?>