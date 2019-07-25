<?php
    define("HOSTNAME", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "pelatihan_angularjs");

    $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die ("Connection Failed");
?>