<?php

// Operator == Sama Dengan - Akan Bernilai True Apabila Nilai Sama
echo "== SAMA DENGAN \n \n";

echo "Nilai Sama Tapi Tipe Data Berbeda (True) \n";
var_dump(1 == "1");
echo "\n";

echo "Nilai Dan Tipe Data Sama(True) \n";
var_dump("Contoh" == "Contoh");
echo "\n";

echo "Nilai Dan Tipe Data Berbeda(False) \n";
var_dump(1 == "9");
echo "\n";

echo "Nilai Berbeda Tapi Tipe Data Sama(False) \n";
var_dump(1 == 7);
echo "\n";

// Operator === Identik - Hanya Akan Bernilai True Apabila Nilai Dan Tipe Data Sama
echo "=== IDENTIK \n \n";

echo "Nilai Sama Tapi Tipe Data Berbeda (False) \n";
var_dump(1 === "1");
echo "\n";

echo "Nilai Dan Tipe Data Sama(True) \n";
var_dump("Contoh" === "Contoh");
echo "\n";

echo "Nilai Dan Tipe Data Berbeda(False) \n";
var_dump(1 === "9");
echo "\n";

echo "Nilai Berbeda Tapi Tipe Data Sama(False) \n";
var_dump(1 === 7);
echo "\n";

// Operator != Tidak Sama Dengan(Kebalikan Dari == Sama Dengan) - Akan Bernilai True Apabila Nilai Berbeda 
echo " != TIDAK SAMA DENGAN \n \n";

echo "Nilai Sama Tapi Tipe Data Berbeda (False) \n";
var_dump(1 != "1");
echo "\n";

echo "Nilai Dan Tipe Data Sama(False) \n";
var_dump("Contoh" != "Contoh");
echo "\n";

echo "Nilai Dan Tipe Data Berbeda(True) \n";
var_dump(1 != "9");
echo "\n";

echo "Nilai Berbeda Tapi Tipe Data Sama(True) \n";
var_dump(1 != 7);
echo "\n";

// Operator !== Tidak Identik(Kebalkan Dari === Identik) - Hanya Akan Bernilai False Apabila Nilai Dan Tipe Data Sama
echo "!== TIDAK IDENTIK \n \n";

echo "Nilai Sama Tapi Tipe Data Berbeda (True) \n";
var_dump(1 !== "1");
echo "\n";

echo "Nilai Dan Tipe Data Sama(False) \n";
var_dump("Contoh" !== "Contoh");
echo "\n";

echo "Nilai Dan Tipe Data Berbeda(True) \n";
var_dump(1 !== "9");
echo "\n";

echo "Nilai Berbeda Tapi Tipe Data Sama(True) \n";
var_dump(1 !== 7);
echo "\n";