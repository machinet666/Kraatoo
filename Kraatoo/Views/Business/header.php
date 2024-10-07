<header>

    <div style="position: relative;">
        <div>
            <h1> Kraatoo </h1>
            <h4>business</h4>
        </div>
        <div style="position: absolute; right: 20px; top: 0; ">
            <a href="../../../../Controller/signOut.php" style="text-decoration: none; color: #339cff;">Sign Out</a>
        </div>
    </div>

    <nav>
        <h2><a href='<?php echo $_SESSION['includeName'] ?>option=profile'> Profile </a></h2>
        <h2><a href='<?php echo $_SESSION['includeName'] ?>option=jobs'> Jobs </a></h2>
        <h2><a href='<?php echo $_SESSION['includeName'] ?>option=applicants'> Applicants </a></h2>
    </nav>
    <br>
    <hr>
</header>