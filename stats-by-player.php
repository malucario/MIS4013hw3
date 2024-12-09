<?php
require_once("util-db.php");
require_once("model-stats-by-player.php");
$pageTitle = "Stats by Player";

Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertStats($_POST['sID'], $_POST['sPID'], $_POST['sPA'], $_POST['sAB'], $_POST['sOPS'], $_POST['sEV'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteStats($_POST['sID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateStats($_POST['sPA'], $_POST['sAB'], $_POST['sOPS'], $_POST['sEV'], $_POST['sID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$stats = selectStatsByPlayer($_POST['pid']);
include "view-stats-by-player.php";
Include "view-footer.php";
?>
