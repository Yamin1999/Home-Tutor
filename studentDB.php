<?php

if(isset($_POST['s_signup-submit']))
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
$group = $_POST['group'];
$subject = $_POST['subject'];
$b = implode($subject);
$stmt = $conn->prepare("INSERT INTO studentpanel (s_first_name,s_last_name,s_username,s_password,s_email,s_phone,s_division,s_district,s_zip,s_institution,s_group,s_address,s_subject) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssississss",$first_name,$last_name,$username,$password,$email,$phone,$division,$district,$zip,$institution,$group,$address,$b);
$stmt->execute();
header("Location: ../Home%20Tutor/studentsignup.php?Inserted");
$stmt->close();
$conn->close();

}

 ?>
