<?php

require 'db.inc.php';

$uid = $_POST['suid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$profilepic = $_FILES['studentimage']['name'];

$target = 'studentpropic/' . $profilepic;

move_uploaded_file($_FILES['studentimage']['tmp_name'],$target);







if(isset($_POST['signup-submit'])) {
      $upMemQuery = "UPDATE studentpanel SET s_first_name = '$fname',s_last_name='$lname',s_email='$email', s_phone='$phone',s_address='$address' WHERE s_uid = '$uid'";
      $runUpMemQuery = mysqli_query($conn, $upMemQuery);


      if ($runUpMemQuery) {
        echo "<script>alert('Update Successful!');</script>";
      } else {
        echo "<script>alert('Update Failed!');</script>";
      }

   header("Location: ../Home%20Tutor/studentprofile.php");
   }

   else if(isset($_POST['image-submit'])) {
          $upMemQuery1 = "UPDATE studentpanel SET s_profilepic = '$profilepic' WHERE s_uid = '$uid'";
          $runUpMemQuery1 = mysqli_query($conn, $upMemQuery1);


          if ($runUpMemQuery1) {
            echo "<script>alert('Update Successful!');</script>";
          } else {
            echo "<script>alert('Update Failed!');</script>";
          }

       header("Location: ../Home%20Tutor/editstudentprofile.php");
       }


?>
