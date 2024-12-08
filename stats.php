<?php
require_once("util-db.php");
require_once("model-stats.php");
$pageTitle = "Stats";

Include "view-header.php";
$players = selectStats();
include "view-stats.php";
Include "view-footer.php";
?>
