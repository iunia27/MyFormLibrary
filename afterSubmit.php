<?php
/**
 * Created by PhpStorm.
 * User: iunia
 * Date: 05/02/2017
 */

$connection = mysqli_connect("localhost", "root", "root"); //Connect to the Database
$db = mysqli_select_db($connection, "formlib"); //Select DB

//sanitize everything
//$firstname = filter_var($_POST['description'], FILTER_SANITIZE_STRING); this is for HTML output

$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
$lastname=  mysqli_real_escape_string($connection, $_POST['lastname']);
$gender =  mysqli_real_escape_string($connection, $_POST['gender']);
$description = mysqli_real_escape_string($connection, $_POST['firstname']);
$status = mysqli_real_escape_string($connection, $_POST['status']);
//or using PDO and prepared statements
//send data to the database
$query = mysqli_query($connection, "insert into submissions(firstname, lastname, gender, description, status) values ('$firstname', '$lastname', '$gender', '$description', '$status')");

if ($query !== false) {
    header('Content-Type: application/json');
    print json_encode( "Thank you for submitting the data!");

} else {
    header('Content-Type: application/json');
    print json_encode("Something went wrong, please try again!");
}
mysqli_close($connection);
?>