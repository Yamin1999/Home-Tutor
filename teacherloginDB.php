<?php

require 'db.inc.php';

if(isset($_POST['submitin']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql= "SELECT * FROM teacherpanel WHERE username='$username' AND password='$password';";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result))
{
  session_start();
  $_SESSION['username']=$row['username'];
  $_SESSION['uid'] = $row['uid'];

   header("Location: ../Home%20Tutor?successfully-login");
}
}
else {
header("Location: ../Home%20Tutor?error=incorrect-psw");
}

  }




 ?>
