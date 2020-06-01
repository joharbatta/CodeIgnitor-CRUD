<?php include('header.php'); ?>

<div  class="container" >

<h1 class="mt-5 mb-3">Register Yourself?</h1>


<?php echo form_open('Register'); ?>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Username:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);  ?>
  </div>
  </div>
  <div class="col-lg-6 mb-2">
   <?php  echo form_error('username');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="pwd">Password:</label>
  
   <?php  echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]); ?>
   </div>
   </div>
   <div class="col-lg-6  mb-2" >
   <?php  echo form_error('password');  ?>
  </div>
   </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="First name">First Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter First Name','name'=>'firstname','value'=>set_value('firstname')]);  ?>
  </div>
  </div>
  <div class="col-lg-6  mb-2">
   <?php  echo form_error('firstname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="last name">Last Name:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Last Name','name'=>'  lastname','value'=>set_value('lastname')]);  ?>
  </div>
  </div>
  <div class="col-lg-6  mb-2">
   <?php  echo form_error('lastname');  ?>
  </div>
  </div>
   <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Username">Email:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]);  ?>
  </div>
  </div>
  <div class="col-lg-6  mb-2">
   <?php  echo form_error('email');  ?>
  </div>
  </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 
</div>


<?php include('footer.php'); ?>