<?php
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,"");
    curl_setopt($ch, CURLOPT_HEADER,0);

    $ret = curl_exec($ch);
    curl_close($ch);
    var_dump($ret);



?>