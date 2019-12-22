<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  </head>
  <body>

    <?php
include "header.php";
     ?>

<br><br><br><br>

     <div class="card-deck" style="max-width:960px; margin-left:260px;">
       <div class="card">
         <img src="images\n.png" class="card-img-top" alt="..." >
         <div class="card-body">
           <h5 class="card-title">Students</h5>
           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
         </div>
         <?php
         if(isset($_SESSION['uid']))
         {
           ?>
         <div class="card-footer">
          <button class="btn btn-lg btn-primary btn-block" type="submit"><a class="link" href="studentsearch.php">Veiw Student</a></button>
         </div>
          <?php } ?>
       </div>
       <div class="card">
         <img src="images\teacher.png" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">Tutor</h5>
           <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
         </div>
         <?php
         if(isset($_SESSION['s_uid']))
         {
           ?>
         <div class="card-footer">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><a class="link" href="tutuorsearch.php">Search Tutor</a></button>
         </div>
       <?php } ?>
       </div>
       <div class="card">
         <img src="images\tutor-png.png" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title">About us</h5>
           <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
         </div>
         <div class="card-footer">
              <button class="btn btn-lg btn-primary btn-block" type="submit"><a class="link" href="issrecT.php">Veiw Details</a></button>
         </div>
       </div>
     </div>


     <br>
     <br>
  <?php
include "footer.php";
   ?>
  </body>
</html>
