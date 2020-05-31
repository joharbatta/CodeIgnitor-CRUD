
<?php include('header.php'); ?>

<!-- <?php print_r($tasks); ?> -->
<div class="container">

<h1 class="mt-5 offset-lg-4"> MANAGE YOUR TASKS</h1>

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
        <td><a href="#" class="btn btn-primary">EDIT </a></td>
        <td><a href="#" class="btn btn-primary">DELETE </a></td>
        </tr>
    <?php }?>
  </tbody>
</table>

</div>
<?php include('footer.php'); ?>