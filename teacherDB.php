<?php

require 'db.inc.php';

if(isset($_POST['signup-submit']))
{


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
$profilepic = $_FILES['profilepic']['name'];
$studentidcard = $_FILES['studentidcard']['name'];
$b = implode($subject);
$target = 'tutorpropic/' . $profilepic;
$target1 = 'tutorstudentidcard/' . $studentidcard;
move_uploaded_file($_FILES['profilepic']['tmp_name'],$target);
move_uploaded_file($_FILES['studentidcard']['tmp_name'],$target1);
$stmt = $conn->prepare("INSERT INTO teacherpanel (first_name,last_name,username,password,email,phone,division,district,zip,address,subject,Institution,department,profilepic,studentidcard) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssississssss",$first_name,$last_name,$username,$password,$email,$phone,$division,$district,$zip,$address,$b,$institution,$department,$profilepic,$studentidcard);
$stmt->execute();

header("Location: ../Home%20Tutor/teachersignup.php?Inserted");
$stmt->close();
$conn->close();

}

 ?>
