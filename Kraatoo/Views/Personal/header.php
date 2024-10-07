<header>

    <div style="position: relative;">
        <div>
            <h1>Kraatoo</h1>
            <h4>
                <?php
                if ($_SESSION['user']->isAFreelancer)
                    echo "Freelancer";
                else
                    echo "Personal";
                ?>
            </h4>
        </div>
        <div style="position: absolute; right: 20px; top: 0;">
            <a href="../../../../Controller/signOut.php" style="text-decoration: none; color: white;">Sign Out</a>
        </div>
    </div>

    <nav>
        <h2><a href="../../../../Controller/Personal/redirect.php?option=profile">Profile</a></h2>
        <h2><a href="../../../../Controller/Personal/redirect.php?option=community">Community</a></h2>
        <h2><a href="../../../../Controller/Personal/redirect.php?option=jobs">Jobs</a></h2>
        <?php
        if ($_SESSION['user']->isAFreelancer)
            include '../../optionForFreelancer.php';
        ?>
    </nav>
</header>