<?php 
require_once('/opt/lampp/htdocs/Kraatoo/Model/DataBaseConnection.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/contact.php');

function insertContact(contact $contact)
{
    $email = $contact->email;
    $phoneNumber = $contact->phoneNumber;
    $address = $contact->address;
	$conn=getConnection();
	$query = "INSERT INTO contact (email, phonenumber, address) VALUES ('$email', '$phoneNumber', '$address');";
    $status=mysqli_query($conn,$query); 

    $query = "SELECT contactid FROM contact ORDER BY contactid DESC LIMIT 1;";
    $status = mysqli_query($conn,$query);

    if (mysqli_num_rows($status) == 1) 
    {
        $row = mysqli_fetch_assoc($status);
        return $row['contactid'];
    } 
    else 
    {
        echo "Failed to insert contact information";
    }
}

function retrieveContact($contactID)
{
    $conn = getConnection();
    $query = "SELECT * FROM contact WHERE contactid = '$contactID';";
    $status = mysqli_query($conn, $query);
    $contact = new contact();
    if (mysqli_num_rows($status) == 1)
    {
        $row = mysqli_fetch_assoc($status);
        $contact = new contact($row['email'], $row['phonenumber'], $row['address'], $row['contactid']);
    }
    return $contact;
} 

function updateContact(contact $contact)
{
    $conn = getConnection();
    $contactId = $contact->id;
    $email = $contact->email;
    $phoneNumber = $contact->phoneNumber;
    $address = $contact->address;

    $query = "UPDATE contact SET email = '$email', phonenumber = '$phoneNumber', address ='$address' WHERE contactid = '$contactId';";
    mysqli_query($conn, $query);


}
function deleteContact ($contactID)
{
    $conn = getConnection();
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 0;");
    $query = "DELETE FROM `contact` WHERE contactid = $contactID;";
    mysqli_query($conn, $query);
    mysqli_query($conn, "SET FOREIGN_KEY_CHECKS = 1;");

}
?>