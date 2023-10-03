<?php
require_once("util-db.php");
require_once("model-countries.php");

$pageTitle = "Countries";
include "view-header.php";
$countries = selectCountries();
include "view-countries.php";
include "view-footer.php";
?>
