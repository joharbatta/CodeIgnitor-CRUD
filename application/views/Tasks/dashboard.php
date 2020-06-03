
<?php include('header.php'); ?>

<!-- <?php print_r($tasks); ?> -->
<div class="container">

<div class="mt-5">
<?=   anchor('AddTask','Add Tasks',['class'=>'btn btn-lg btn-success'])  ?>
</div>

<h1 class="mt-5 offset-lg-4"> MANAGE YOUR TASKS</h1>

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


<table class=" mt-5 table table-striped table-dark">
  <thead>
    <tr>
      <!-- <th>ID</th> -->
      <th>TITLE</th>
      <th>BODY</th>
      <th>DELETE</th>
      <th>EDIT</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tasks as $task) { ?>
        <tr>
        <!-- <th>1</th> -->
        <td><?php echo $task->task_title; ?></td>
        <td><?php echo $task->task_body; ?></td>
        <!-- <td><a href="#" class="btn btn-warning">EDIT </a></td> -->
        <td><?=  anchor("EditTask/index/{$task->id}",'Edit',['class'=>'btn btn-warning']);  ?></td>
        <!-- <td><a href="#" class="btn btn-light">DELETE </a></td> -->
        <td>
        <?=
        form_open('Dashboard/deletetask'),
        form_hidden('task_id',$task->id),
        form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
        form_close();
        ?>
      </td>
        </tr>
    <?php }?>
  </tbody>
</table>

</div>
<?php include('footer.php'); ?>