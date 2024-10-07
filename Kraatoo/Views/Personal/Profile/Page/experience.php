<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
?>
<div>
    <p>Company: <?php echo $_SESSION['job']->company ?> </p>
    <p>Position: <?php echo $_SESSION['job']->position ?> </p>
    <p>Started from <?php echo $_SESSION['job']->startedFrom ?> to <?php $_SESSION['job']->to ?>  </p>
</div>