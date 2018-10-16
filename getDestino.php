<?php

    $url = "https://localhost:8080/aviones/index.php/getAvionOrigen";
    $json = file_get_contents($url);
    $obj = json_decode($json);

    return $obj;
