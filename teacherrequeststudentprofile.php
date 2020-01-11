
<?php
include "Header.php";
 ?>

<?php
if(isset($_SESSION['uid']))
{
  $tuid = $_SESSION['uid'];
}
require 'db.inc.php';

$suid = $_POST['suid'];
$fname = $lname = $username = $password = $email = $phone = $division = $district = $zip = $institution = $department = $address = $subject = $profilepic = $studentidcard= '';
$sql = "SELECT * FROM studentpanel WHERE s_uid = '$suid'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["s_first_name"];
		$lname = $row["s_last_name"];
    $username = $row["s_username"];
		$password = $row["s_password"];
    $email = $row["s_email"];
    $phone = $row["s_phone"];
    $division = $row["s_division"];
    $district = $row["s_district"];
    $zip = $row["s_zip"];
    $institution = $row["s_institution"];
    $department = $row["s_group"];
    $address = $row["s_address"];
    $subject = $row["s_subject"];
		$profilepic = $row["s_profilepic"];
		$studentidcard = $row['s_studentidcard'];


	}
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


 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>




 <div class="container">
	 <br>
	 <br>
	 <br>
<div class="row"style="margin-left: 80px; width: 1200px;">



        <div class="col-md-7 ">

 <div class="panel panel-default">
   <div class="panel-heading">  <h4 >User Profile</h4></div>
    <div class="panel-body">

     <div class="box box-info">

             <div class="box-body">
                      <div class="col-sm-6">
                      <div  align="center"> <img alt="" src="studentpropic\<?php echo $profilepic ?>" id="profile-image1" class="img-circle img-responsive">









                      </div>

               <br>

               <!-- /input-group -->
             </div>
             <div class="col-sm-6">
             <h4 style="color:#00b1b1;"> <?php echo $fname; echo ' '; echo $lname; ?>  </h4></span>
               <span><p>Student</p></span>
             </div>
             <div class="clearfix"></div>
             <hr style="margin:5px 0 5px 0;">


 <div class="col-sm-5 col-xs-6 tital " >First Name:</div><div class="col-sm-7 col-xs-6 "> <?php echo $fname ; ?> </div>
      <div class="clearfix"></div>
 <div class="bot-border"></div>


 <div class="col-sm-5 col-xs-6 tital " >Last Name:</div><div class="col-sm-7"><?php echo $lname ; ?>  </div>
   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " > Username: </div><div class="col-sm-7"><?php echo $username ; ?></div>

   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7"><?php echo $email ; ?></div>

   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7"><?php echo $phone ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Address:</div><div class="col-sm-7"><?php echo $address ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>
 <form method="post" action="studentrequestaccept.php"  class="form-disable">
   <input type="hidden" name="suuid" value="<?php echo $suid; ?>" >

 <hr class="mb-3">
<?php
$sqld = "SELECT * FROM requestaccept WHERE uid = '$tuid' and s_uid = '$suid'";
$resultd = mysqli_query($conn, $sqld);

if(mysqli_num_rows($resultd) > 0)
{

 ?>
 <button class="btn btn-primary btn-lg btn-block" type="submit" disabled> request accepted </button>
<?php
}
else {

 ?>
 <button class="btn btn-primary btn-lg btn-block" type="submit" name="requ-submit"> accept request </button>

 <?php
}
  ?>







             <!-- /.box-body -->
           </div>
           <!-- /.box -->

         </div>


     </div>
     </div>
 </div>
     <script>
               $(function() {
     $('#profile-image1').on('click', function() {
         $('#profile-image-upload').click();
     });
 });
               </script>










    </div>
 </div>
 <?php
 include "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </body>
</html>
