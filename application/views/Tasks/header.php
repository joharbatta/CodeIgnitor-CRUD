<html>
    <head>
    <title>Tasks List</title>
    <link href="<?= base_url("Assets/css/tasks.css")?>" rel="stylesheet" >
    <link href="<?= base_url("Assets/bootstrap.min.css")?>" rel="stylesheet" >
   
    <!-- <?= link_tag("Assets/css/bootstrap.min.css") ?> --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    </head>

<body class="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
  <a class="navbar-brand" href="#">Tasks List</a>

  <?php
   if($this->session->userdata('id'))
   {
   	?>
        <a href="<?=  base_url('dashboard/logout'); ?>" class="btn btn-danger" style="">Logout</a>
    <?php
    }
      ?>

  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 

  <div class="navbar-collapse collapse" id="navbarColor01">
    <!-- <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul> -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>