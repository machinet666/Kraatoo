<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$index = $_GET['index'];

header("location: ../../../Views/Client/Project/Page/builderProfile.php?index=$index");