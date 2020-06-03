
<?php include('header.php'); ?>

<!-- <?php print_r($tasks); ?> -->
<div class="container">

<div class="mt-5">
<?=   anchor('AddTask','Add Tasks',['class'=>'btn btn-lg btn-success'])  ?>
</div>

<h1 class="mt-5 offset-lg-4 text-responsive"> MANAGE YOUR TASKS</h1>

<div class="" style="margin-top:15px;">
<?php if($msg=$this->session->flashdata('msg')): 
$msg_class=$this->session->flashdata('msg_class')
 ?>
<div class="row">
<div class="col-lg-6">
<div class="alert <?= $msg_class ?>">
<?= $msg; ?>
</div>
</div>
</div>
<?php endif; ?>

<div class="cards">
<?php foreach($tasks as $task) { ?>
  
  <!-- <div class=""> -->

        <div class="card col-lg-4 col-sm-6" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $task->task_title; ?></h5>
          <p class="card-text"><?php echo $task->task_body; ?></p>
            <div class="row">
            <?=  anchor("EditTask/index/{$task->id}",'Edit',['class'=>'btn btn-warning']);  ?>
              <?=
            form_open('Dashboard/deletetask'),
            form_hidden('task_id',$task->id),
            form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
            form_close();
            ?>
            </div>
        </div>
      </div>
  
  <!-- </div> -->

    <?php }?>
    </div>

</div>
<?php include('footer.php'); ?>




