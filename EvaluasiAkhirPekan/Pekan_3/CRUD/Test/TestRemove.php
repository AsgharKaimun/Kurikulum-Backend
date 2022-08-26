<?php

require_once "../Model/Data.php";
require_once "../Controller/Show.php";
require_once "../Controller/Add.php";
require_once "../Controller/Remove.php";

Add("Lee");
Add("May");
Add("Bee");

Remove(2);

Show();
?>