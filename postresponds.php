<?php

session_start();
if(isset($_SESSION['uid']))
{
$tuid = $_SESSION['uid'];
}

$suid = $_POST['suuid'];
$postid = $_POST['postid'];
require 'db.inc.php';


  $stmt = $conn->prepare("INSERT INTO postresponse (p_id,uid,s_uid) values (?,?,?)");
  $stmt->bind_param("iii",$postid,$tuid,$suid);
  $stmt->execute();
   header("Location: ../Home%20Tutor");
  $stmt->close();
  $conn->close();


 ?>
