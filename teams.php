<?php
require_once("util-db.php");
require_once("model-teams.php");

$pageTitle = "Teams";
include "view-header.php";

if (isset($_POST['actionType'])){
switch($_POST['actionType']){
  case "Add":
    if(insertTeam($_POST['teamName'], $_POST['cid'],$_POST['pName'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Team Added</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
  case "Delete":
    if(deleteTeam($_POST['tid'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Team Deleted</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
  case "Edit":
    if(updateTeam($_POST['teamName'], $_POST['cid'], $_POST['pName'],$_POST['tid'])) {
  echo '<div style="margin:15px" class="alert alert-success" role="alert">Team Edited</div>';
    }
    else{
echo '<div class="alert alert-danger" role="alert">Error</div>"';
    }
  break;
}
}

$teams = selectTeams();
include "view-teams.php";
include "view-footer.php";
?>
