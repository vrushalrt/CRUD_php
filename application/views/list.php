<?php 
	// print_r($row);
	// if(isset($row))
	// {
	// 	foreach($row as $rows)
	// 	{
	// 		echo $rows->name;
	// 	}
	// }else{ echo "No Records"; }

	// if(isset($search))
	// {
	// 	print_r($search);
	// }
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
	});
 	</script>
 	<style type="text/css">
 		.center{
 			text-align: center
 		}
 	</style>
 	<form>
 		<input type="text" name="search_text" id="search_text" class="search_text" cols="15" placeholder="Type to search">
 	</form><br>
 	<div id="search"></div>
