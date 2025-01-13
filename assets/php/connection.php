<?php
    $mysqli = new mysqli("localhost", "root", "", "series3");
    if ($mysqli->connect_errno) {
        throw new Exception("Falló la conexión con MySQL", $mysqli->connect_error);
        exit();
    };
?>