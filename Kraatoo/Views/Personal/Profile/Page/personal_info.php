 <div>
     <div style="display: flex;">
         <h2>Personal Information</h2>
         <a href="../../../../Controller/Personal/Profile/update_personal_info.php"> <img src="../../../Image/edit.png" style="width: 25px; height: 25px"> </a>
     </div>

     <div>
         <p>Name: <?php echo $_SESSION['user']->firstName . ' ' . $_SESSION['user']->lastName; ?> </p>
         <p>Gender: <?php echo $_SESSION['user']->gender; ?></p>
         <p>Date of Birth: <?php echo $_SESSION['user']->dateOfBirth; ?></p>
         <p>Email: <?php echo $_SESSION['user']->contact->email; ?> </p>
         <p>Phone Number: <?php echo $_SESSION['user']->contact->phoneNumber; ?> </p>
         <p>Address: <?php echo $_SESSION['user']->contact->address; ?></p>
     </div>
 </div><br>