<?php
require_once("util-db.php");
require_once("model-countries-with-drivers.php");

$pageTitle = "Countries With Drivers";
include "view-header.php";
$countries = selectCountries();
include "view-countries-with-drivers.php";
include "view-footer.php";
?>
