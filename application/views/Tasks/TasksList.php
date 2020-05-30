<?php include('header.php'); ?>

<div class="container">

  <h1>Login</h1>
  <?php echo form_open('tasks/index'); ?>

        <div class="form-group">
          <label for="Username">Username:</label>
        <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]);  ?>
        </div>
    
        <div class="form-group">
          <label for="pwd">Password:</label>
        <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>
        </div>
        <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit']);  ?>
        <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
        <?php echo anchor('register/signup', 'Sign up?', 'class="link-class"') ?>
</div>

<?php include('footer.php'); ?>