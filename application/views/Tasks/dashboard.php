
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

				<div class="input-group">
					<!-- <span class="input-group-addon">Search</span> -->
					<input type="text" name="search_text" id="search_text" placeholder="Search" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>

</div>

<?php include('footer.php'); ?>

<script>
$(document).ready(function(){

	load_data();

	function load_data(x)
	{
		console.log(x);
		$.ajax({
			url:"<?php echo base_url(); ?>Dashboard/search",
			method:"POST",
			data:{query:x},
			success:function(data){
        console.log(JSON.parse(data))
        var ndata=JSON.parse(data);
        console.log(ndata);
        var html = '';
					var i;
					for(i=0; i<ndata.length; i++){
						html +='<tr>'+
									'<td>'+ndata[i].id+'</td>'+
									'<td>'+ndata[i].task_title+'</td>'+
									'<td>'+ndata[i].task_body+'</td>'+
									'<td>'+data[i].created_at+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}

				$('#result').html(html);
			}
		})
	}

	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
	});
});
</script>






