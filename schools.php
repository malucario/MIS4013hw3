<?php
require_once("util-db.php");
require_once("model-schools.php");
$pageTitle = "Schools";

Include "view-header.php";
$schools = selectSchools();
include "view-schools.php";
Include "view-footer.php";
?>
