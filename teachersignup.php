
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Checkout example · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


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
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

<br>
<br>

<?php include "header.php" ?>
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images\tutor-png.png" alt="" width="92" height="72">
    <h2>Tutor Signup</h2>

  </div>

  <div class="row"style="margin-left: 60px; width: 1200px;">
    <div class="col-md-8 order-md-1">

      <form class="needs-validation" id="demoForm" method="post" action="teacherDB.php" enctype="multipart/form-data" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" name="First_name" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" name="Last_name" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
       <div class="row">
      <div class="col-md-6 mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="Username" placeholder="Username"  required>
            <div class="invalid-feedback" style="width: 100%;">
           Valid username required.
            </div>
          </div>
        </div>


        <div class="col-md-6 mb-3">
          <label for="email">Password </label>
          <input type="password" class="form-control" id="password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
          <div class="invalid-feedback">
           Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters
          </div>
        </div>
      </div>

       <div class="row">
        <div class="col-md-6 mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="Email" placeholder="you@example.com" required>
          <div class="invalid-feedback">
            Please enter a valid email address.
          </div>
        </div>


        <div class="col-md-6 mb-3">
          <label for="phone">Phone Number</label>
          <input type="tel" class="form-control" id="phone" name="Phone_Number" pattern="^\d{11}$" required>
          <div class="invalid-feedback">
             Please enter a valid phone number.
          </div>
        </div>
      </div>
        <br>


          <div class="row">
       &nbsp  &nbsp
        <div class="col-md-5 mb-3">
      <input type="file" class="custom-file-input" id="profilepic" name="profilepic" onchange="return fileValidation()" required>
      <label class="custom-file-label" for="profilepic">Choose Profile picture</label>

             <img src="" id="profile-img-tagg" width="200px" />
          <div class="invalid-feedback">
            choose file in jpg or png format
          </div>
        </div>


              <script type="text/javascript">
            function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader1 = new FileReader();

                    reader1.onload = function (e) {
                        $('#profile-img-tagg').attr('src', e.target.result);
                    }
                    reader1.readAsDataURL(input.files[0]);
                }
            }
            $("#profilepic").change(function(){
                readURL1(this);
            });
        </script>

 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp
        <div class="col-md-5 mb-3">
          <input type="file" class="custom-file-input" id="studentidcard" name="studentidcard" onchange="return fileValidation1()" required>
          <label class="custom-file-label" for="studentidcard">Choose Student id card</label>
          <img src="" id="profile-img-tag" width="200px" />
          <div class="invalid-feedback">
            choose file in jpg or png format
          </div>
        </div>




      <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#studentidcard").change(function(){
        readURL(this);
    });
</script>

</div>




        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Division</label>
            <select class="custom-select d-block w-100" id="country" name="category" required>
              <option value="">Choose...</option>
              <option>Rajshahi</option>
              <option> Dhaka </option>
              <option>Chittagong</option>
              <option> Barishal</option>
              <option>Rangpur</option>
              <option> slyhet </option>
              <option>khulna</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>


            <div class="col-md-4 mb-3">
              <label for="District">District</label>
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

                              text: ['Choose','Bogura','Chapainawabganj','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajgonj'],
                              value: ['','Bogura','Chapainawabganj','Joypurhat','Naogaon','Natore','Pabna','Rajshahi','Sirajgonj']

                      },
                      Dhaka: {

                          text: ['Choose','Kishoreganj', 'Gazipur', 'Gopalganj', 'Jamalpur', 'Tangail','Dhaka','Narsingdi','Narayanganj','Netrakona','Faridpur','Mymensingh','Madaripur','Manikganj','Munshiganj','Rajbari','Shariatpur','Sherpur'],
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

            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>


          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="Zip" placeholder="Zip Code" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="institution">Institution</span></label>
            <input type="text" class="form-control" id="institution" name="Institution" required>
            <div class="invalid-feedback">
              Institution is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="department">Department</label>
            <input type="text" class="form-control" id="department" name="department" required>
            <div class="invalid-feedback">
              Department is required.
            </div>
          </div>
        </div>



        <div class="mb-3">
          <label for="address2">Address<span class="text-muted"> (In details)</span></label>
          <input type="text" class="form-control" id="address2" name="Address" required>
        </div>


        <div class="mb-3">
          <label for="Subject">Subject<span class="text-muted"> (Want to Teach)</span></label>
          <br>
&nbsp &nbsp &nbsp
          <input type="checkbox" class="form-check-input" id="subject" name="subject[]" value="physics">physics &nbsp &nbsp &nbsp &nbsp &nbsp
          <input type="checkbox" class="form-check-input" id="subject" name="subject[]" value="chemistry">chemistry &nbsp &nbsp &nbsp &nbsp &nbsp
          <input type="checkbox" class="form-check-input" id="subject" name="subject[]" value="math">math &nbsp &nbsp &nbsp &nbsp &nbsp
          <input type="checkbox" class="form-check-input" id="subject" name="subject[]" value="english"> english &nbsp &nbsp &nbsp &nbsp &nbsp
        </div>

<script>
function fileValidation(){
    var fileInput = document.getElementById('profilepic');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
    }
  }
</script>

<script>
function fileValidation1(){
    var fileInput1 = document.getElementById('studentidcard');
    var filePath1 = fileInput.value;
    var allowedExtensions1 = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath1)){
        alert('Please upload file having extensions .jpeg/.jpg/.png only.');
        fileInput.value = '';
        return false;
    }
  }
  </script>





        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="signup-submit">Signup</button>

      </form>
    </div>
  </div>

<br>
<br>
<br>
</div>

<?php include "footer.php" ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"></script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="form-validation.js"></script></body>


</html>
