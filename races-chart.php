<?php
require_once("util-db.php");
require_once("model-races-chart.php");

$pageTitle = "Races Chart";
include "view-header.php";
$races = selectRaces();
include "view-races-chart.php";
include "view-footer.php";
?>
