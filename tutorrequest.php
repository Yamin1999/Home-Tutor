<?php

session_start();
if(isset($_SESSION['s_uid']))
{
$s_uid = $_SESSION['s_uid'];
}

$tuid = $_POST['tuuid'];

require 'db.inc.php';


  $stmt = $conn->prepare("INSERT INTO tutorrequwst (uid,s_uid) values (?,?)");
  $stmt->bind_param("ii",$tuid,$s_uid);
  $stmt->execute();
   header("Location: ../Home%20Tutor");
  $stmt->close();
  $conn->close();


 ?>
