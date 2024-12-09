<?php
require_once("util-db.php");
require_once("model-players.php");
$pageTitle = "Players";

Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPlayer($_POST['pID'], $_POST['pSID'], $_POST['pFName'], $_POST['pLName'], $_POST['pPosition'])) {
        echo '<div class="alert alert-success" role="alert">Player added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deletePlayer($_POST['pID'])) {
        echo '<div class="alert alert-success" role="alert">Player deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updatePlayer($_POST['pSID'], $_POST['pFName'], $_POST['pLName'], $_POST['pPosition'])) {
        echo '<div class="alert alert-success" role="alert">Player edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$players = selectPlayers();
include "view-players.php";
Include "view-footer.php";
?>
