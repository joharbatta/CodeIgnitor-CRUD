<?php include('header.php'); ?>

<div class="container mt-5">
<h1 class="">Edit Tasks</h1>

 <?php echo form_open("EditTask/updatetask/{$task->id} "); ?>
<!-- <?php echo form_hidden('task_id',$task->id); ?> -->
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="Title">Title:</label>
   <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Task Title','name'=>'task_title','value'=>set_value('task_title',$task->task_title)]);  ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('task_title');  ?>
  </div>
  </div>
 <div class="row">
 <div class="col-lg-6">
  <div class="form-group">
    <label for="body">Task Body</label>
  
   <?php  echo form_textarea(['class'=>'form-control','placeholder'=>'Task Body','name'=>'task_body','value'=>set_value('task_body',$task->task_body)]); ?>
   </div>
   </div>
   <div class="col-lg-6" style="margin-top:40px;">
   <?php  echo form_error('task_body');  ?>
  </div>
   </div>
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>

</div>

<?php include('footer.php'); ?>