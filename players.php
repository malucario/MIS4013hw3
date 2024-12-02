<?php
require_once("util-db.php");
require_once("model-players.php");
$pageTitle = "Players";

Include "view-header.php";
$instructors = selectPlayers();
include "view-players.php";
Include "view-footer.php";
?>
