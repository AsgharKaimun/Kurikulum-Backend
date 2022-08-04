<?php

// Array Numerik - Model Lama
echo "Array Numerik Model Lama \n";
$NumerikLama = array(100, 50.33, "Riku", null, true);
var_dump($NumerikLama);
echo "\n";

// Array Numerik Model Baru
echo "Array Numerik Model Baru \n";
$NumerikBaru = [77, 35.78, "Trafalgar", null, false];
var_dump($NumerikBaru);
echo "\n";

// Array Assosiatif Model Baru
echo "Array Assosiatif Model Baru \n";
$ArrayAssosiatif = [
    "Buah" => "Mangga",
    "Rasa" => "Manis",
    "Umur" => "Ranum",
    "Warna" => "Hijau Kekuning-kuningan"
];
var_dump($ArrayAssosiatif);
echo "\n";

// Array Multidimensi / ArrayDiDalamArray - Hanya Bisa Assosiatif
echo "Array Multidimensi \n";
$ArrayMultidimensi = [
    "Name" => "WhitebeardPirates",
    "Captain" => "Edward_Newgate",
    "Ships" => "MobyDick",
    "DivisionCommanders" => [
        "1st_Division" => "Marco",
        "2nd_Division" => "Portgas_D_Ace",
        "3rd_Division" => "Jozu",
        "4th_Division" => "Thatch",
        "5th_Division" => "Vista"
    ]
];
var_dump($ArrayMultidimensi);
echo "\n";

//ArrayDalamArrayTanpaBatas
echo "Array Dalam Array Tanpa Batas \n";
$TanpaBatas = [
    // Array 1
    "Name" => "StrawHatPirates",
    "Captain" => "Monkey_D_Luffy",
    "Ships" => "GoingMerry-ThousandSunny",
    // Array 2
    "Crew" => [
        "Captain" => "Monkey_D_Luffy",
        "Combatant" => "Roronoa_Zoro",
        "Navigator" => "Nami",
        "Sniper" => "Usopp",
        "Cook" => "Vinsmoke_Sanji",
        "Doctor" => "TonyTony_Chopper",
        "Archaeologist" => "Nico_Robin",
        "Shipwright" => "Franky",
        "Musician" => "Brook",
        "Helmsman" => "Jinbe",
        //Array 3
        "Epithet" => [
            "Monkey_D_Luffy" => "StrawHat",
            "Roronoa_Zoro" => "PirateHunter",
            "Nami" => "CatBurglar",
            "Usopp" => "Sogeking",
            "Vinsmoke_Sanji" => "BlackLag",
            "TonyTony_Chopper" => "CottonCandyLover",
            "Nico_Robin" => "DevilChild",
            "Franky" => "Cyborg",
            "Brook" => "SoulKing",
            "Jinbe" => "KnightOfTheSea",
            //Array 4
            "Bounty" => [
                "Monkey_D_Luffy" => 3000000000,
                "Roronoa_Zoro" => 320000000,
                "Nami" => 66000000,
                "Usopp" => 200000000,
                "Vinsmoke_Sanji" => 330000000,
                "TonyTony_Chopper" => null,
                "Nico_Robin" => 130000000.768,
                "Franky" => 94000000.334,
                "Brook" => 83000000.761,
                "Jinbe" => 438000000.888
            ]
        ]
    ]
];
var_dump($TanpaBatas);
echo "\n";

?>
