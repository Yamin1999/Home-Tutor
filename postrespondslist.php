<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">




  </head>
  <body>

    <?php
     include "header.php";
  $postno = 1;

     if(isset($_SESSION['s_uid']))
     {
     $suid = $_SESSION['s_uid'];
     }
      require 'db.inc.php';

    $postid = $_POST['postid'];

     $sqlget = "SELECT * FROM teacherpanel,studentpanel,postresponse,post_to_get where postresponse.s_uid=studentpanel.s_uid and teacherpanel.uid = postresponse.uid and post_to_get.p_id=postresponse.p_id and postresponse.p_id = $postid ;";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>
<br><br><br><br><br><br>

<div class="table-responsive text-nowrap">
        <!--Table-->
      <table class="table table-striped w-auto" align="center">

         <thead>
    <th> SL no </th>
            <th> Profile Pic </th>
             <th>First Name</th>
             <th>Last Name</th>


               <th> Institution </th>
               <th> Department </th>
                  <th>Address</th>
               <th> Profile</th>
         </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>






                                 <tr>
                                   <td>
                                    <?php echo $postno; ?>
                                   </td>
                                   <td>
                                       <img src="tutorpropic\<?php echo $row['profilepic']; ?>" width="50" height="40" alt="">
                                   </td>
                              <td>
                                     <?php echo $row['first_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['last_name']; ?>
                                   </td>


                                   <td>
                                     <?php echo $row['Institution']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['department']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['address']; ?>
                                   </td>

                                   <form method="post" action="postrespondslistprofile.php">

                                        <input type="hidden" name="tuid" value="<?php echo $row['uid']; ?>">
                                   <td>
                                     <input class="btn btn-success" type="submit" name="up" value="View Profile">

                                   </td>

                               </form>
                      </tr>

                    <?php
                 $postno ++;
                  } ?>
         </tbody>
       </table>
     </div>





     <br>
      <br>
       <br>
       <br>
        <br>
         <br>


       <?php
     include "footer.php";
        ?>
  </body>
  <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</html>
