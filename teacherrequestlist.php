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


     if(isset($_SESSION['username']))
     {
     $tuid = $_SESSION['uid'];
     }
      require 'db.inc.php';


     $sqlget = "SELECT * FROM teacherpanel,studentpanel,tutorrequwst where teacherpanel.uid=tutorrequwst.uid and teacherpanel.uid =$tuid;";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>
<br><br><br><br><br><br>

<div class="table-responsive text-nowrap">
        <!--Table-->
      <table class="table table-striped w-auto" align="center">

         <thead>

            <th> Profile Pic </th>
             <th>First Name</th>
             <th>Last Name</th>


               <th> Institution </th>
               <th> Group </th>
                  <th>Address</th>
               <th> Profile</th>
         </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>






                                 <tr>
                                   <td>
                                       <img src="studentpropic\<?php echo $row['s_profilepic']; ?>" width="50" height="40" alt="">
                                   </td>
                              <td>
                                     <?php echo $row['s_first_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['s_last_name']; ?>
                                   </td>


                                   <td>
                                     <?php echo $row['s_institution']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['s_group']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['s_address']; ?>
                                   </td>

                                   <form method="post" action="teacherrequeststudentprofile.php">

                                        <input type="hidden" name="suid" value="<?php echo $row['s_uid']; ?>">
                                   <td>
                                     <input class="btn btn-success" type="submit" name="up" value="View Profile">

                                   </td>

                               </form>
                      </tr>

                    <?php } ?>
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
