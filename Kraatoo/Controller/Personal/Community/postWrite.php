<?php
require_once('../../../Model/post.php');
if (isset($_POST['postdate']))
{
    $date = date('Y-m-d', strtotime($_POST['postdate']));
    insertPost($_POST['article'], $date);
}

?>