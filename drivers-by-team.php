<?php
require_once("util-db.php");
require_once("model-drivers-by-team.php");

$pageTitle = "Drivers by Team";
include "view-header.php";
$drivers = selectDriversByTeam($_GET['id']);
include "view-drivers-by-team.php";
include "view-footer.php";
?>
