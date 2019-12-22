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


     $sqlget = "SELECT first_name,last_name,email,phone,address,Institution,department FROM teacherpanel where subject LIKE '%$subject%' AND division = '$division' AND district = '$district';";
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
               <th> Department </th>
               <th> Profile</th>
         </thead>




         <tbody>
           <?php while ($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)) { ?>





                                 <tr>
                              <td>
                                     <?php echo $row['first_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['last_name']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['email']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['phone']; ?>
                                   </td>
                                   <td>
                                    <?php echo $row['address']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['Institution']; ?>
                                   </td>
                                   <td>
                                     <?php echo $row['department']; ?>
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
