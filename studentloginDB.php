<?php

require 'db.inc.php';

if(isset($_POST['submitin']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql= "SELECT * FROM studentpanel WHERE s_username='$username' AND s_password='".md5($password)."';";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
  session_start();
  $_SESSION['s_username']=$row['s_username'];
  $_SESSION['s_uid'] = $row['s_uid'];

   header("Location: ../Home%20Tutor?successfully-login");
}
}
else {
header("Location: ../Home%20Tutor/studentlogin.php?error=incorrect-psw");
}

  }




 ?>
