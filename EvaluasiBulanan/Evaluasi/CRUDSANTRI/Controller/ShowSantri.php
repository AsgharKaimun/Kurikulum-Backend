<?php

function showSantri() {
    global $dataSantri;

    echo "===== DATA LIST =====" .PHP_EOL;

    if($dataSantri == null){
        echo "<There is No Data>";
    } else {
        foreach($dataSantri as $key => $value) {
            echo "$key. $value" .PHP_EOL;
        }
    }
    
    echo "\n";
}


?>