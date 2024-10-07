<?php
$index = $_GET['index'];
$projectID = $_SESSION['retreiveAllPendingProjectForClient'][$_GET['index']]->projectID;
$requestID = $_SESSION['requester'][$_SESSION['responseIndex']]->userID;
?>
<div>

    <label>
        <br>
        <a style="text-decoration: none;" href="../../../../Controller/Client/Response/requester.php?option=profile&index=<?php echo $index ?>"> <?php echo $_SESSION['requester'][$_SESSION['responseIndex']]->firstName . " " . $_SESSION['requester'][$_SESSION['responseIndex']]->lastName ?></a>
        <?php
        if (!array_key_exists($projectID, $_SESSION['accept'])) {
        ?>
            <div style="display: flex;; margin-left: 210px; margin-top: -20px; ">
                <div style="border: 1px solid black; padding: 3px; background-color: #b6f5dc;"><a style="text-decoration: none;" href="../../../../Controller/Client/Response/requester.php?option=accept&index=<?php echo $index . "&projectID=$projectID&requestID=$requestID" ?>">Accept</a></div>
                <div style="margin-left: 60px; border: 1px solid black; padding: 3px; background-color: #b6f5dc; "><a style="text-decoration: none; color: red;" href="../../../../Controller/Client/Response/requester.php?option=delete&index=<?php echo $index ?>">Decline</a></div>
            </div>
        <?php
        } else 
        {
            if ($_SESSION['accept'][$projectID] == $requestID)
            {

        ?>
            <label style="color: green; border: 1px solid black; padding: 3px; background-color: #b6f5dc; margin-left: 10px ">Accepted</label>

        <?php
    }}
        ?>

    </label> <br>
    <label><?php echo "<b>Rating:</b> " . $_SESSION['requester'][$_SESSION['responseIndex']]->rating ?></label><br>
    <label><?php echo "<b>Asking Price:</b> " . $_SESSION['response'][$_SESSION['responseIndex']]->askingPrice ?></label><br>
    <label><?php echo "<b>Asking Time:</b> " . $_SESSION['response'][$_SESSION['responseIndex']]->askingTime . " Days" ?></label><br><br>
</div>