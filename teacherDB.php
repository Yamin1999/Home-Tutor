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
$gender = $_POST['gender'];
$year = $_POST['year'];
$profilepic = $_FILES['profilepic']['name'];
$studentidcard = $_FILES['studentidcard']['name'];
$b = implode($subject);
$target = 'tutorpropic/' . $profilepic;
$target1 = 'tutorstudentidcard/' . $studentidcard;
move_uploaded_file($_FILES['profilepic']['tmp_name'],$target);
move_uploaded_file($_FILES['studentidcard']['tmp_name'],$target1);
$passwordmd5 = md5($password);

if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
header("Location: ../Home%20Tutor/teachersignup.php?error=invalidemail");
exit();
}

else  {
$sql = "SELECT username from teacherpanel where username=?";
$stpt = mysqli_stmt_init($conn);
mysqli_stmt_bind_param($stpt,"s",$username);
mysqli_stmt_execute($stpt);
$resultcheck = mysqli_stmt_num_rows($stpt);
if($resultcheck > 0)
{
header("Location: ../Home%20Tutor/teachersignup.php?error=usernametaken");
exit();
}

else{

$stmt = $conn->prepare("INSERT INTO teacherpanel (first_name,last_name,username,password,email,phone,division,district,zip,address,subject,Institution,department,profilepic,studentidcard,gender,year) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssississssssss",$first_name,$last_name,$username,$passwordmd5,$email,$phone,$division,$district,$zip,$address,$b,$institution,$department,$profilepic,$studentidcard,$gender,$year);
$stmt->execute();

header("Location: ../Home%20Tutor/teachersignup.php?Inserted");
$stmt->close();
$conn->close();
}
}

}

 ?>
