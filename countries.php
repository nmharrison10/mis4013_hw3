<?php
require_once("util-db.php");
require_once("model-countries.php");

$pageTitle = "Countries";
include "view-header.php";

if (isset($_POST['actionType'])){
switch($_POST['actionType']){
  case "Add":
    if(insertCountry($_POST['cName'], $_POST['capName'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Country Added</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error.</div>"';
    }
  break;
  case "Delete":
    if(deleteCountry($_POST['cid'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Country Deleted</div>';
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
