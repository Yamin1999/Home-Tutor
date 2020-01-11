<?php

session_start();
if(isset($_SESSION['uid']))
{
$tuid = $_SESSION['uid'];
}

$suuid = $_POST['suuid'];

require 'db.inc.php';




  $stmt = $conn->prepare("INSERT INTO requestaccept (uid,s_uid) values (?,?)");
  $stmt->bind_param("ii",$tuid,$suuid);
  $stmt->execute();
   header("Location: ../Home%20Tutor");
  $stmt->close();
  $conn->close();


 ?>
