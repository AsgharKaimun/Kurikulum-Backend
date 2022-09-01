<?php

// require_once __DIR__ . "/Model/DataSantri.php";
// require_once __DIR__ . "/Helper/Input.php";

// require_once __DIR__ . "/Controller/ShowSantri.php";
// require_once __DIR__ . "/Controller/AddSantri.php";
// require_once __DIR__ . "/Controller/RemoveSantri.php";

// require_once __DIR__ . "/View/ViewShowSantri.php";
// require_once __DIR__ . "/View/ViewAddSantri.php";
// require_once __DIR__ . "/View/ViewRemoveSantri.php";


require_once "Model/DataSantri.php";
require_once "Helper/Input.php";

require_once "Controller/ShowSantri.php";
require_once "Controller/AddSantri.php";
require_once "Controller/RemoveSantri.php";
require_once "Controller/UpdateSantri.php";

require_once "View/ViewShowSantri.php";
require_once "View/ViewAddSantri.php";
require_once "View/ViewRemoveSantri.php";
require_once "View/ViewUpdateSantri.php";

echo "==== SELAMAT DATANG DI APLIKASI TO DO LIST SAYA ====" ."\n\n"; 

viewShowSantri();

?>
