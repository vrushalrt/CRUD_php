<?php 

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  	<script>
  		$(document).ready(function() {
  			$(document).on('click','#btn_delete',function(){
  				var tr = $(this).closest("tr");
  				var uid = $(this).data("id1");
  				if(confirm('Are You Sure To Delete '+uid+' ?'))
  				{
  				$.ajax({
  					url: '<?php echo base_url('index.php/home/delete'); ?>',
  					type: 'POST',
  					data: 'uid='+uid,
  					dataType: 'text',
  					success:function(data){
  						//alert(data);
  						//window.location.href = 'http://localhost/oop/aphp/js/jquery/crud/';
  						//location.reload();
  						tr.remove();
  					}
  				});
  				}
  			});
  		});

  		$(document).ready(function(){
	 	load_data();
		function load_data(query)
		{
			$.ajax({
				url:'<?php echo base_url();?>index.php/home/search',
		   		method:"POST",
		   		data:{query:query},
		   		success:function(data)
		   		{
		   			$('#search').html(data);
		   		}
		  	});
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

		$('#limit').change(function(){
			
			var val = $(this).val();
			$.ajax({
				url: '<?php echo base_url(); ?>index.php/home/search',
				type: 'POST',
				data: 'limit='+val,
				success: function(data)
				{
					$('#search').html(data);
				}
			});

			});
		$(document).on('click','#page-link',function(){
			var val = $(this).data('page');
			//alert(val);
			$.ajax({
				url:'<?php echo base_url();?>index.php/home/search',
				type:'POST',
				data:'page='+val,
				success: function(data)
				{
					$('#search').html(data);
				}
			});
		});

		$(document).on('click','#page-link',function(){
			var prev = $(this).data('prev');
			var next = $(this).data('next');
				if(val == 'prev')
				{
				$.ajax({
					url:'<?php echo base_url() ?>index.php/home/search',
					type:'POST',
					data:'next='+val,
					success:function(data)
					{
						$('#search').html(data);
					}
				});	
				}
				if(val == 'next')
				{
					$.ajax({
					url:'<?php echo base_url() ?>index.php/home/search',
					type:'POST',
					data:'prev='+val,
					success:function(data)
					{
						$('#search').html(data);
					}
				});	
				}
		});
	});
 	</script>
 	<style type="text/css">
 		.center{
 			text-align: center
 		}
 	</style>
 	<form>
 		<input type="text" name="search_text" id="search_text" class="search_text" cols="15" placeholder="Type to search">
 		<select name="limit" id="limit" class="limit">
 		<?php
 		$row_no = array(5,10,20);
 		foreach($row_no as $row)
 			{?>
 			<option <?php if($row == 5){ echo "selected"; } ?> value="<?php echo $row; ?>"><?php echo $row; ?></option>
 			<?php }?>
 		</select>
 	</form><br>

 		<div id="search"></div>

