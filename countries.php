<?php
require_once("util-db.php");
require_once("model-countries.php");

$pageTitle = "Countries";
include "view-header.php";

if (isset($_POST['actionType'])){
switch($_POST['actionType']){
  case "Add":
    if(insertCountry($_POST['cName'], $_POST['capName'])) {
  echo '<div class="alert alert-success" role="alert">Course Added</div></br>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error.</div>"';
    }
  break;
}
}

$countries = selectCountries();
include "view-countries.php";
include "view-footer.php";
?>
