<?php
require_once("util-db.php");
require_once("model-instructors.php");
$pageTitle = "Intructors";

Include "view-header.php";
$instructors = selectInstructors();
include "view-instructors.php";
Include "view-footer.php";
?>
