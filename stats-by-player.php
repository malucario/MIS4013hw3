<?php
require_once("util-db.php");
require_once("model-stats-by-player.php");
$pageTitle = "Stats by Player";

Include "view-header.php";
$stats = selectStatsByPlayer($_POST['pid']);
include "view-stat-by-player.php";
Include "view-footer.php";
?>
