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

            <form class="form-signin" id="demoForm" action="tutotsearchDB.php" method="POST">
               <img class="mb-4" src="images/e.jpg" alt="" width="92" height="92">
          <h1 class="h3 mb-3 font-weight-normal">Search subjectwise Tutor</h1>



                <select class="custom-select d-block w-100" id="subject" name="subject" required>
                  <option value="">Choose Subject....</option>
                  <option value="Physics">Physics</option>
                  <option value="Chemistry"> Chemistry </option>
                  <option value="Math">Math</option>
                  <option value="english"> English</option>

                </select>



                    <select class="custom-select d-block w-100" id="country" name="category" required>
                      <option value="">Choose Division..</option>
                      <option>Rajshahi</option>
                      <option> Dhaka </option>
                      <option>Chittagong</option>
                      <option> Barishal</option>
                      <option>Rangpur</option>
                      <option> slyhet </option>
                      <option>khulna</option>
                    </select>





                    <select class="custom-select d-block w-100" name="choices" id="choices" required>

                      <script type="text/javascript">
                      function removeAllOptions(sel, removeGrp) {
                          var len, groups, par;
                          if (removeGrp) {
                              groups = sel.getElementsByTagName('optgroup');
                              len = groups.length;
                              for (var i=len; i; i--) {
                                  sel.removeChild( groups[i-1] );
                              }
                          }

                          len = sel.options.length;
                          for (var i=len; i; i--) {
                              par = sel.options[i-1].parentNode;
                              par.removeChild( sel.options[i-1] );
                          }
                      }

                      function appendDataToSelect(sel, obj) {
                          var f = document.createDocumentFragment();
                          var labels = [], group, opts;

                          function addOptions(obj) {
                              var f = document.createDocumentFragment();
                              var o;

                              for (var i=0, len=obj.text.length; i<len; i++) {
                                  o = document.createElement('option');
                                  o.appendChild( document.createTextNode( obj.text[i] ) );

                                  if ( obj.value ) {
                                      o.value = obj.value[i];
                                  }

                                  f.appendChild(o);
                              }
                              return f;
                          }

                          if ( obj.text ) {
                              opts = addOptions(obj);
                              f.appendChild(opts);
                          } else {
                              for ( var prop in obj ) {
                                  if ( obj.hasOwnProperty(prop) ) {
                                      labels.push(prop);
                                  }
                              }

                              for (var i=0, len=labels.length; i<len; i++) {
                                  group = document.createElement('optgroup');
                                  group.label = labels[i];
                                  f.appendChild(group);
                                  opts = addOptions(obj[ labels[i] ] );
                                  group.appendChild(opts);
                              }
                          }
                          sel.appendChild(f);
                      }


                      document.forms['demoForm'].elements['category'].onchange = function(e) {

                          var relName = 'choices';


                          var relList = this.form.elements[ relName ];

                          var obj = Select_List_Data[ relName ][ this.value ];

                          removeAllOptions(relList, true);


                          appendDataToSelect(relList, obj);
                      };

                      var Select_List_Data = {

                          'choices': {

                              Rajshahi: {

                                      text: ['Choose District..','Bogura','Chapainawabganj','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajgonj'],
                                      value: ['','Bogura','Chapainawabganj','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajgonj']

                              },
                              Dhaka: {

                                  text: ['Choose District..','Kishoreganj', 'Gazipur', 'Gopalganj', 'Jamalpur', 'Tangail','Dhaka','Narsingdi','Narayanganj','Netrakona','Faridpur','Mymensingh','Madaripur','Manikganj','Munshiganj','Rajbari','Shariatpur','Sherpur'],
                                  value: ['','Kishoreganj', 'Gazipur', 'Gopalganj', 'Jamalpur', 'Tangail','Dhaka','Narsingdi','Narayanganj','Netrakona','Faridpur','Mymensingh','Madaripur','Manikganj','Munshiganj','Rajbari','Shariatpur','Sherpur']
                              }

                          }

                      };

                      window.onload = function() {
                          var form = document.forms['demoForm'];

                          var sel = form.elements['category'];
                          sel.selectedIndex = 0;


                          var relName = 'choices';

                          var rel = form.elements[ relName ];

                          var data = Select_List_Data[ relName ][ sel.value ];


                          appendDataToSelect(rel, data);
                      };

                      </script>
                </select>







            <button class="btn btn-lg btn-primary btn-block" type="submit">Check</button>


           </form>
           <br>



   </div>
   </div>
 </div>
 <?php
include "footer.php";
  ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
          <script src="form-validation.js"></script>

  </body>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
</html>
