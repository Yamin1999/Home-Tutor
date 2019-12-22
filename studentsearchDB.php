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


     $subject = $_POST['subject'];
     $division = $_POST['category'];
     $district = $_POST['choices'];
      require 'db.inc.php';


     $sqlget = "SELECT s_first_name,s_last_name,s_email,s_phone,s_address,s_institution,s_group FROM studentpanel where s_subject LIKE '%$subject%' AND s_division = '$division' AND s_district = '$district';";
     $sqldata = mysqli_query($conn,$sqlget) or die ('error getting');
?>
<br><br><br><br><br><br>

<div class="table-responsive text-nowrap">
        <!--Table-->
      <table class="table table-striped w-auto" align="center">

         <thead>


             <th>First Name</th>
             <th>Last Name</th>
             <th> Email </th>
               <th>Phone</th>
               <th>Address</th>
               <th> Institution </th>
               <th> Group </th>
               <th> Profile</th>
         </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>





                                 <tr>
                              <td>
                                     <?php echo $row['s_first_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['s_last_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['s_email']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['s_phone']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['s_address']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['s_institution']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['s_group']; ?>
                                   </td>


                                   <td>
                                     <button class="btn btn-success" name="up">Veiw Profile</button>

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
