<?php
session_start();
if(isset($_SESSION['username']))
{
$user = $_SESSION['username'];
}
if(isset($_SESSION['s_username']))
{
$suser = $_SESSION['s_username'];
}



 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Jekyll v3.8.5">
<title></title>
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">

<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

<!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.bd-placeholder-img {
font-size: 1.125rem;
text-anchor: middle;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

@media (min-width: 768px) {
.bd-placeholder-img-lg {
  font-size: 3.5rem;
}
}
</style>
<!-- Custom styles for this template -->
<link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light  fixed-top" style="background-color: #17a2b8;">
      <a class="navbar-brand" href="index.html">
  <img src="images/tutor-png.png" width="60" height="40" alt="">
</a>
    <a class="navbar-brand" href="index.html">Home Tutor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">



      </ul>
    <?php
    if(isset($_SESSION['username']))
    {
      ?>
     <form method="post" action="teacherlogout.inc.php">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout-button">Logout </button>
      &nbsp;&nbsp;&nbsp;
      </form>
      <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout-button"><a class="link" href="teacherprofile.php"> <?php echo $user; ?> </a> </button>
      &nbsp;&nbsp;&nbsp;
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="teacherprofile.php">My Profile </a></button>
        &nbsp;&nbsp;&nbsp;
        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="teacherrequestlist.php"> Request list</a></button>
          &nbsp;&nbsp;&nbsp;




  <?php

    }
    elseif (isset($_SESSION['s_username'])) {
        ?>
        <form method="post" action="teacherlogout.inc.php">
         <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout-button">Logout </button>
         &nbsp;&nbsp;&nbsp;
         </form>
         <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout-button"><a class="link" href="studentprofile.php"> <?php echo $suser; ?> </a> </button>
         &nbsp;&nbsp;&nbsp;
         <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="studentprofile.php">My Profile </a></button>
           &nbsp;&nbsp;&nbsp;
           <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="perticularpostrespondslist.php">Post Responds</a></button>
             &nbsp;&nbsp;&nbsp;
             <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="acceptedrequestlist.php">Accepted Requests</a></button>
               &nbsp;&nbsp;&nbsp;

     <?php
    }
    else {
      ?>

      <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="studentlogin.php">Signin as a Student</a></button>
        &nbsp;&nbsp;&nbsp;
        <button class="btn btn-secondary my-2 my-sm-0" type="submit"><a class="link" href="teacherlogin.php">Signin as a tutor</a></button>
        &nbsp;&nbsp;&nbsp;

  <?php  }


     ?>



      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </body>
</html>
