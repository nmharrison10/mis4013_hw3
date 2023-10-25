<?php
require_once("util-db.php");
require_once("model-races.php");

$pageTitle = "Races";
include "view-header.php";

if (isset($_POST['actionType'])){
switch($_POST['actionType']){
  case "Add":
    if(insertRace($_POST['did'], $_POST['track'],$_POST['date'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Race Added</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
  case "Delete":
    if(deleteRace($_POST['rid'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Race Deleted</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
  case "Edit":
    if(updateRace($_POST['did'], $_POST['track'], $_POST['date'],$_POST['rid'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Race Edited</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
}
}


$races = selectRaces();
include "view-races.php";
include "view-footer.php";
?>
