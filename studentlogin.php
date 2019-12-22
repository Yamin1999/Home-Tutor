<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="text-center">
  <?php
     include "header.php";
   ?>
  <div class="text-center">
   <div class="login-page">
           <div class="form">

            <form class="form-signin" action="studentloginDB.php" method="POST">
               <img class="mb-4" src="images\e.jpg" alt="" width="92" height="92">
          <h1 class="h3 mb-3 font-weight-normal">Login as a Student</h1>
                <br>



         <input type="text" id="username" class="form-control" placeholder="Username" name="username" required >
         <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>




            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submitin">Login</button>
 <br>
 <br>
            <p><a href="studentsignup.php"> Not signup yet</a></p>





           </form>



   </div>
   </div>
 </div>
 <br>
  <br>
   <br>
    <br>
     <br>
 <?php
include "footer.php";
  ?>

  </body>
</html>
