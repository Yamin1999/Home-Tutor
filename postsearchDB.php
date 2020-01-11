
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


     $division = $_POST['category'];
     $district = $_POST['choices'];
      require 'db.inc.php';


     $sqlget = "SELECT * FROM studentpanel,post_to_get where p_division = '$division' AND p_district = '$district' AND studentpanel.s_uid= post_to_get.s_uid;";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>
<br><br><br><br><br><br>

<div class="table-responsive text-nowrap">
        <!--Table-->
      <table class="table table-striped w-auto" align="center">

         <thead>



           <th> subject </th>
           <th> payment </th>
               <th>Phone</th>
               <th>Address</th>
                <th> Days per week </th>
               <th> veiw details</th>
         </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>





                                 <tr>

                                   <td>
                                    <?php echo $row['p_subject']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['p_mpayment']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['p_phone']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['p_address']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['p_dayspw']; ?>
                                   </td>


                                   <form method="post" action="postdetails.php">

                                        <input type="hidden" name="suid" value="<?php echo $row['s_uid']; ?>">
                                   <td>
                                     <input class="btn btn-success" type="submit" name="up" value="View details">

                                   </td>
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
