<?php
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/personal.php');
require_once('/opt/lampp/htdocs/Kraatoo/Model/contact.php');

function insertPerson($firstName, $lastname, $gender, $contactID, $dateOfBirth = '')
{
    $conn = getConnection();
    $query = "INSERT INTO person (firstName, lastname, gender, dateofbirth, contactid ) VALUES ('$firstName', '$lastname', '$gender', '$dateOfBirth', '$contactID');";
    $status = mysqli_query($conn, $query);

    $query = "SELECT personid FROM person ORDER BY personid DESC LIMIT 1;";
    $status = mysqli_query($conn, $query);

    if (mysqli_num_rows($status) == 1) {
        $row = mysqli_fetch_assoc($status);
        return $row['personid'];
    } else {
        echo "Failed to insert person information";
    }
}

function retrievePerson($personID)
{
    $conn = getConnection();
    $query = "SELECT * FROM person WHERE personid = '$personID';";
    $status = mysqli_query($conn, $query);
    if (mysqli_num_rows($status) == 1) {
        $row = mysqli_fetch_assoc($status);
        $person = new person($row['firstname'], $row['lastname'], $row['gender'], $row['dateofbirth'], retrieveContact($row['contactid']), $row['personid']);
        $person->personID = $personID;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    return $person;
}


function updatePerson(person $person)
{
    $conn = getConnection();
    updateContact($person->contact);

    $personID = $person->personID;
    $firstName = $person->firstName;
    $lastname = $person->lastName;
    $gender = $person->gender;
    $dateOfBirth = $person->dateOfBirth;
    $query = "UPDATE person SET firstname ='$firstName',lastname ='$lastname',gender ='$gender',dateofbirth ='$dateOfBirth' WHERE personid = '$personID' ";
    mysqli_query($conn, $query);
}

function deletePerson($personID)
{

    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM `person` WHERE personid = $personID;";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");
}
