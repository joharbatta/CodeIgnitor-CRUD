<?php include('header.php'); ?>


<div class="container mt-5">
<h1 class="">Add Tasks</h1>

 <?php echo form_open('AddTask'); ?>
 <?php echo form_hidden('user_id',$this->session->userdata('id')); ?>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Title:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Task Title','name'=>'task_title','value'=>set_value('task_title')]);  ?>
  </div>
  </div>
  <div class="col-lg-6">
   <?php  echo form_error('task_title');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Task Body</label>
  
   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Meeting at 9','name'=>'task_body','value'=>set_value('task_body')]); ?>
   </div>
   </div>
   <div class="col-lg-6">
   <?php  echo form_error('task_body');  ?>
  </div>
   </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
 <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>

</div>



<?php include('footer.php'); ?>