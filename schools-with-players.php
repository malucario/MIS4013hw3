<?php
require_once("util-db.php");
require_once("model-schools-with-players.php");
$pageTitle = "Schools With Players";

Include "view-header.php";
$schools = selectSchools();
include "view-schools-with-players.php";
Include "view-footer.php";
?>
