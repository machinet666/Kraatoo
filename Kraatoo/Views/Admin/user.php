<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<div>
    <p>
        <?php
        $userId = $_SESSION['currentUser']->userID;
        $contactId = $_SESSION['currentUser']->contact->id;
        if ($_SESSION['key'] == 'allPersonalUser')
        {
            $personId = $_SESSION['currentUser']->personID;
            // echo "<a href = '../../Controller/Admin/userProfile/personal.php'>". $_SESSION['currentUser']->firstName, " " , $_SESSION['currentUser']->lastName, "</a> Personal", "<a href=''> View Post </a> <a href=''>Delete </a>";
            echo "<a href='../../Controller/Admin/userProfile.php?userId=$userId'>" . 
                $_SESSION['currentUser']->firstName . " " . 
                $_SESSION['currentUser']->lastName . "</a> Personal" . 
                "<a href=''> View Post </a> 
                <a href='../../Controller/Admin/userDelete.php?userId=$userId&personId=$personId&ContactId=$contactId&userType=personal'>Delete </a>";

            
        }

        else if ($_SESSION['key'] == 'allBusinessUser')
        {
            echo "<a href='../../Controller/Admin/userProfile.php?userId=$userId'>" . $_SESSION['currentUser']->name. "</a> Business" . 
                "<a href=''> View Job Circular </a> 
                <a href='../../Controller/Admin/userDelete.php?userId=$userId&ContactId=$contactId'>Delete </a>";
        }
        

        else if ($_SESSION['key'] == 'allClientUser')
        {
            $personId = $_SESSION['currentUser']->personID;
            echo "<a href='../../Controller/Admin/userProfile.php?userId=$userId'>" . 
                $_SESSION['currentUser']->firstName . " " . 
                $_SESSION['currentUser']->lastName . "</a> Client" . 
                "<a href=''> View Project </a> 
                <a href='../../Controller/Admin/userDelete.php?userId=$userId&personId=$personId&ContactId=$contactId'>Delete </a>";
        }
        else 
        {
            echo "No user found.";
        }


?>
    </p>
</div> 
