<?php

$file = 'guns.json';
if(file_exists($file)){
    $filedata = file_get_contents($file);
    // echo $filedata;
    $objson = json_decode($filedata, true);
    echo "<hr><code><pre>";
    print_r($objson);
    echo "</pre></code></hr>";
} else {
    echo $file . "doesn't exist.";
}


echo($objson['guns']['pistols']['FN Five-seveN']['origin']);

?>