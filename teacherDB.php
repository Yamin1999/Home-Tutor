<?php


if(isset($_POST['signup-submit']))
{
require 'db.inc.php';

$first_name = $_POST['First_name'];
$last_name = $_POST['Last_name'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$phone = $_POST['Phone_Number'];
$division = $_POST['category'];
$district = $_POST['choices'];
$zip = $_POST['Zip'];
$address =  $_POST['Address'];
$institution = $_POST['Institution'];
$department = $_POST['department'];
$subject = $_POST['subject'];
$b = implode($subject);
$stmt = $conn->prepare("INSERT INTO teacherpanel (first_name,last_name,username,password,email,phone,division,district,zip,address,subject,Institution,department) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssississss",$first_name,$last_name,$username,$password,$email,$phone,$division,$district,$zip,$address,$b,$institution,$department);
$stmt->execute();
header("Location: ../Home%20Tutor/teachersignup.php?Inserted");
$stmt->close();
$conn->close();

}

 ?>
