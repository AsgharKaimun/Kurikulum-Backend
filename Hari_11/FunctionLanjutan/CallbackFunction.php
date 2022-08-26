<?php

$HKG = ["1st" => "Hashirama Senju",
        "2nd" => "Tobirama Senju",
        "3rd" => "Hiruzen Tobirama",
        "4th" => "Minato Namikaze",
        "5th" => "Tsunade Senju",
        "6th" => "Kakashi Hatake",
        "7th" => "Naruto Uzumaki"];

function Listing(array $List, callable $callback){
    foreach($List as $Key => $Value){
        $callback($Key,$Value);
    }
}

function Data($Num,$Name){
    echo "$Num => $Name".PHP_EOL;
}

Listing($HKG,'Data');
echo "\n";
call_user_func('Data',"6th",$HKG["6th"] );


?>