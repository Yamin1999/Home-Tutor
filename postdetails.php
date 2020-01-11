
<?php
include "Header.php";
 ?>

<?php

require 'db.inc.php';

if(isset($_SESSION['uid']))
{
  $ttuid = $_SESSION['uid'];
}


$suid = $_POST['suid'];
 $email = $phone = $division = $district = $zip = $institution = $department = $gender = $otherequ= '';
$sql = "SELECT * FROM studentpanel,post_to_get WHERE post_to_get.s_uid = '$suid' AND studentpanel.s_uid=post_to_get.s_uid;";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{

    $postid = $row['p_id'];
    $email = $row["p_email"];
    $phone = $row["p_phone"];
    $division = $row["p_division"];
    $district = $row["p_district"];
    $zip = $row["p_zip"];
    $institution = $row["p_institution"];
    $department = $row["p_group"];
    $gender = $row['p_gender'];
    $otherequ = $row['other'];



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
   <div class="panel-heading">  <h4 >Post Details</h4></div>
    <div class="panel-body">

     <div class="box box-info">

             <div class="box-body">




 <div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 col-xs-6 "> <?php echo $email ; ?> </div>
      <div class="clearfix"></div>
 <div class="bot-border"></div>


 <div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7"><?php echo $phone ; ?>  </div>
   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " > Division: </div><div class="col-sm-7"><?php echo $division ; ?></div>

   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >District:</div><div class="col-sm-7"><?php echo $district ; ?></div>

   <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Institution:</div><div class="col-sm-7"><?php echo $institution ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Group:</div><div class="col-sm-7"><?php echo $department ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>
 <div class="col-sm-5 col-xs-6 tital " >Gender:</div><div class="col-sm-7"><?php echo $gender ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>

 <div class="col-sm-5 col-xs-6 tital " >Other Requierments:</div><div class="col-sm-7"><?php echo $otherequ ; ?></div>

  <div class="clearfix"></div>
 <div class="bot-border"></div>
 <form method="post" action="postresponds.php">
   <input type="hidden" name="suuid" value="<?php echo $suid; ?>" >
   <input type="hidden" name="postid" value="<?php echo $postid; ?>">
 <hr class="mb-3">
<?php
 $sqld = "SELECT * FROM postresponse WHERE s_uid = '$suid' AND p_id = '$postid' AND uid ='$ttuid';";
 $resultd = mysqli_query($conn, $sqld);
 if(mysqli_num_rows($resultd) > 0)
 {
   ?>
   <button class="btn btn-primary btn-lg btn-block" type="submit"  disabled>Interested</button>


 <?php
}
else {

  ?>
<button class="btn btn-primary btn-lg btn-block" type="submit" name="requ-submit">Interested</button>


  <?php
}
   ?>
</form>




             <!-- /.box-body -->
           </div>
           <!-- /.box -->

         </div>


     </div>
     </div>
 </div>











    </div>
 </div>
 <?php
 include "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
  </body>
</html>
