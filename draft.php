<?php
require_once("util-db.php");
require_once("model-draft.php");
$pageTitle = "Draft Info";

Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertDrafts($_POST['dID'], $_POST['dPID'], $_POST['dRound'], $_POST['dPick'], $_POST['dTeam'], $_POST['dBonus'])) {
        echo '<div class="alert alert-success" role="alert">Draft data added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Delete":
      if (deleteDrafts($_POST['dID'])) {
        echo '<div class="alert alert-success" role="alert">Draft data deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
    case "Edit":
      if (updateDrafts($_POST['dRound'], $_POST['dPick'], $_POST['dTeam'], $_POST['dBonus'])) {
        echo '<div class="alert alert-success" role="alert">Draft data edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$drafts = selectDrafts();
include "view-draft.php";
Include "view-footer.php";
?>
