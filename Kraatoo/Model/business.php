<?php
require_once('/opt/lampp/htdocs/Kraatoo/Entity/business.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/user.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/contact.php');

function insertBusiness(Business $business, user $user)
{
    $userid = insertUser($user);
    if ($userid != -1)
    {
        $contactID = insertContact($business->contact);

        $name = $business->name;
        $type = $business->type;
        $tradelicenseno = $business->tradelicenseno;
        $numberofemployees = $business->numberofemployees;
        $websiteurl = $business->websiteurl;
        $yearofestablishment = $business->yearofestablishment;
        $cName = $business->cName;
        $cEmail = $business->cEmail;
        $cNumber = $business->cNumber;

        $conn = getConnection();
        $query = "INSERT INTO business VALUES ('$userid', '$name', '$type', '$tradelicenseno', '$numberofemployees', '$websiteurl', '$yearofestablishment', '$contactID', '$cName', '$cEmail', '$cNumber')";
        mysqli_query($conn, $query);
        return true;
    }
    else
    {
        return false;
    }
}

function retreiveBusiness($userID)
{
    $conn = getConnection();
    $query = "SELECT * FROM business WHERE userid = '$userID';";
    $status = mysqli_query($conn, $query);
    if (mysqli_num_rows($status) == 1) 
    {
        $row = mysqli_fetch_assoc($status);
        $business = new Business($row['name'], $row['type'], $row['tradelicenseno'], $row['numberofemployee'], $row['yearofestablishment'], $row['websiteurl'], $row['Contact_Person_Name'], $row['Contact_Person_Email'], $row['Contact_Person_Number']);
        $business->userID = $row['userid'];
        $business->contact = retrieveContact($row['contactid']);
    }
    return $business;
}


function retreiveAllBusiness()
{
    $conn = getConnection();
    $query = 'SELECT * FROM business;';
    $status = mysqli_query($conn, $query);
    $numberOfUser = mysqli_num_rows($status);
    $allBusinessUser = [];
    if ($numberOfUser > 0)
    {
        for ($i = 0; $i < $numberOfUser; $i++) 
        {
            $row = mysqli_fetch_assoc($status);
            $allBusinessUser[$i] = new Business($row['name'], $row['type'], $row['tradelicenseno'],$row['numberofemployee'],$row['yearofestablishment'],$row['websiteurl'],$row['Contact_Person_Name'],$row['Contact_Person_Email'],$row['Contact_Person_Number']);
            $allBusinessUser[$i]->contact = retrieveContact($row['contactid']);
        }
        return $allBusinessUser;
    }
}


function updateBusiness(Business $business)
{

    $conn = getConnection();
    updateContact($business->contact);

    $userId = $business->userID;
    $name = $business->name;
    $type = $business->type;
    $tradelicenseno = $business->tradelicenseno;
    $numberofemployees =$business->numberofemployees;
    $yearofestablishment = $business->yearofestablishment;

    $query = "UPDATE business SET name ='$name',type ='$type',tradelicenseno ='$tradelicenseno',numberofemployee ='$numberofemployees', yearofestablishment ='$yearofestablishment' WHERE userid = '$userId' ";
    mysqli_query($conn, $query);

}

function updateContactInfo(Business $business)
{
    $conn = getConnection();
    updateContact($business->contact);
    $userId = $business->userID;
    $websiteurl = $business->websiteurl;

    $query = "UPDATE business SET websiteurl = '$websiteurl'";
    mysqli_query($conn, $query);

    
}

function updatePersonContactInfo(Business $business)
{
    $conn = getConnection();
    $userId = $business->userID;
    $cName =$business->cName;
    $cEmail =$business->cEmail;
    $cNumber =$business->cNumber;

    $query = "UPDATE business SET Contact_Person_Name ='$cName',  Contact_Person_Email ='$cEmail', Contact_Person_Number ='$cNumber'  WHERE userid = '$userId' ";
    mysqli_query($conn, $query);

}

function deleteBusiness($userID, $contactID)
{
    deleteUser($userID);
    deleteContact($contactID);

    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM `business` WHERE userid = $userID;";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");

}





?>