<!DOCTYPE html>
<html>
<head>
	<title>CONTACT LIST</title>

	<script type="text/javascript">
		// function show_confirm()
		// {
		// 	if(act == "edit")
		// 	{
		// 		var r = confirm("Do you really want to edit ?");
		// 	}
		// 	else
		// 	{
		// 		var r = confirm("Do you really want to Delete ?");
		// 	}

		// 	if (r == true) 
		// 		{
					
		// 		};
		// }
	</script>
</head>
<body>
		<table border="1" cellspacing="0" cellpadding="3">
			<tbody>
				<tr bgcolor="skyblue">
					<th>ID</th>
					<th>NAME</th>
					<th>CONTACT</th>
					<th>EMAIL</th>
					<th>ADDRESS</th>
					<th>ACTION</th>
				</tr>
				<?php //print_r($h); 
				//exit; ?>
				<?php 
					foreach ($h as $row){
				?>
				<tr>
					<td><?php echo $row->c_id; ?></td>
					<td><?php echo $row->first_name .' '.$row->middle_name .' '.$row->last_name; ?></td>
					<td><?php echo $row->phone_no; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->address; ?></td>
					<td>
						<a href="<?php echo $row->c_id; ?>" onClick = "show_confirm('edit' , <?php echo $row->c_id; ?>)" alt="<?php echo $row->c_id;  ?>">Edit</a> 
						
						<a href="<?php echo $row->c_id; ?>" onClick = "show_confirm('delete' , <?php echo $row->c_id; ?>)" alt="<?php echo $row->c_id;  ?>">Delete</a>
					</td>	
				</tr>
				<?php } 
				?>

			</tbody>
			
		</table>
</body>
</html>

