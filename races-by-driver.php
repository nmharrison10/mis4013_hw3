<?php
require_once("util-db.php");
require_once("model-races-by-driver.php");

$pageTitle = "Wins by driver";
include "view-header.php";
$races = selectRacesByDriver($_POST['did']);
include "view-races-by-driver.php";
include "view-footer.php";
?>
