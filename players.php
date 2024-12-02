<?php
require_once("util-db.php");
require_once("model-players.php");
$pageTitle = "Players";

Include "view-header.php";
$players = selectPlayers();
include "view-players.php";
Include "view-footer.php";
?>
