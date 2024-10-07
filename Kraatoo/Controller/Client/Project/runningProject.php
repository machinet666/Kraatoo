<?php
$index = $_GET['index'];
if (isset($_GET['status']))
    header("location: ../../../Views/Client/Project/Page/main.php?index=$index&status");
else
    header("location: ../../../Views/Client/Project/Page/main.php?index=$index");
