<?php
    //link url data API
    $xml_string = file_get_contents("http://data.bmkg.go.id/gempaterkini.xml");
    
    //memuat data xml
    $xml = simplexml_load_string($xml_string);

    //konversi xml to json
    $json = json_encode($xml);
    
    //menampilkan
    echo $json;
?>