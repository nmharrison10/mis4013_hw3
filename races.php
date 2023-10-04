<?php
require_once("util-db.php");
require_once("model-races.php");

$pageTitle = "Races";
include "view-header.php";
$races = selectRaces();
include "view-races.php";
include "view-footer.php";
?>
