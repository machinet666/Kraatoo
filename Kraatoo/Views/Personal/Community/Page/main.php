<?php
require_once('../../../../Entity/personal.php');
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Community</title>
    <link rel="stylesheet" href="../../header.css">

</head>

<body>
    <?php
    include '../../header.php';
    ?>
    <hr>
    
    <main>
        <div>
            <form method="POST" action="../../../../Controller/Personal/Community/postWrite.php">
                <label>Hi <?php echo $_SESSION['user']->firstName ?>, Share your thought with others</label><br>
                <textarea name ="article" placeholder="Write Something....."></textarea><br>
                <input type="date" name="postdate" hidden>
                <input type="submit" name="post" value="Post">
            </form>
        </div>
    </main>
    <?php
    include '../../../footer.php';
    ?>
</body>

</html>