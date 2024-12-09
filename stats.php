<?php
require_once("util-db.php");
require_once("model-stats.php");
$pageTitle = "Stats";

Include "view-header.php";


if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertStats($_POST['stID'], $_POST['stPID'], $_POST['stPA'], $_POST['stAB'], $_POST['stOPS'], $_POST['stEV'])) {
        echo '<div class="alert alert-success" role="alert">Stats added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteStats($_POST['stID'])) {
        echo '<div class="alert alert-success" role="alert">Stats deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateStats($_POST['stPA'], $_POST['stAB'], $_POST['stOPS'], $_POST['stEV'], $_POST['stID'])) {
        echo '<div class="alert alert-success" role="alert">Stats edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}


$stats = selectStats();
include "view-stats.php";
Include "view-footer.php";
?>
