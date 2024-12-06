<?php
require_once("util-db.php");
require_once("model-schools.php");
$pageTitle = "Schools";

Include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertSchool($_POST['sRanking'], $_POST['sName'], $_POST['sMascot'], $_POST['sConference'])) {
        echo '<div class="alert alert-success" role="alert">School added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
      break;
  }
}

$schools = selectSchools();
include "view-schools.php";
Include "view-footer.php";
?>
