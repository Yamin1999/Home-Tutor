<?php

require 'db.inc.php';

$uid = $_POST['uid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$profilepic = $_FILES['tutorimage']['name'];

$target = 'tutorpropic/' . $profilepic;

move_uploaded_file($_FILES['tutorimage']['tmp_name'],$target);







if(isset($_POST['signup-submit'])) {
      $upMemQuery = "UPDATE teacherpanel SET first_name = '$fname',last_name='$lname',email='$email', phone='$phone',address='$address' WHERE uid = '$uid'";
      $runUpMemQuery = mysqli_query($conn, $upMemQuery);


      if ($runUpMemQuery) {
        echo "<script>alert('Update Successful!');</script>";
      } else {
        echo "<script>alert('Update Failed!');</script>";
      }

   header("Location: ../Home%20Tutor/teacherprofile.php");
   }

  else if(isset($_POST['image-submit'])) {
         $upMemQuery1 = "UPDATE teacherpanel SET profilepic = '$profilepic' WHERE uid = '$uid'";
         $runUpMemQuery1 = mysqli_query($conn, $upMemQuery1);


         if ($runUpMemQuery1) {
           echo "<script>alert('Update Successful!');</script>";
         } else {
           echo "<script>alert('Update Failed!');</script>";
         }

      header("Location: ../Home%20Tutor/editteacherprofile.php");
      }




?>
