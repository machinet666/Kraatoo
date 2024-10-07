<div>
    <h2>Business Information <a href="../../../../Controller//Business/Profile/updateBusinessInfo.php"> <img src="../../../Image/edit.png" style="width: 25px; height: 25px"> </a></h2>
    <p>Business Name: <?php echo $_SESSION['user']->name?> </p>
    <p>Business Type: <?php echo $_SESSION['user']->type ?></p>
    <p>Business Size: <?php echo $_SESSION['user']->numberofemployees ?></p>
    <p>Year of Establishment: <?php echo $_SESSION['user']->yearofestablishment ?> </p>
    <p>Trade License Number: <?php echo $_SESSION['user']->tradelicenseno ?> </p>
</div>