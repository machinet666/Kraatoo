<?php
if (isset($_GET['option']))
{
    if ($_GET['option'] == 'Applied')
    {
        $option = 'Browse';
    }
    else if ($_GET['option'] == 'Browse')
    {
        $option = 'Applied';
    }
    header("location: ../../../Views/Personal/Jobs/Page/main.php?index=0&option=$option");
}
?>