<?php

require 'db.inc.php';



session_start();

if(isset($_SESSION['s_uid']))
{
$suid = $_SESSION['s_uid'];
}

$email = $_POST['Email'];
$phone = $_POST['Phone_Number'];
$division = $_POST['category'];
$district = $_POST['choices'];
$zip = $_POST['Zip'];
$address =  $_POST['Address'];
$institution = $_POST['Institution'];
$group = $_POST['group'];
$subject = $_POST['subject'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$mpayment = $_POST['mpayment'];
$dayspw = $_POST['dayspw'];
$otherequ = $_POST['otherrequ'];
$b = implode($subject);

$stmt = $conn->prepare("INSERT INTO post_to_get (s_uid,p_email,p_phone,p_division,p_district,p_zip,p_institution,p_group,p_gender,p_class,p_mpayment,p_dayspw,p_address,p_subject,other) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("isississssissss",$suid,$email,$phone,$division,$district,$zip,$institution,$group,$gender,$class,$mpayment,$dayspw,$address,$b,$otherequ);
$stmt->execute();

header("Location: ../Home%20Tutor/posttoget.php?Inserted");
$stmt->close();
$conn->close();



 ?>
