<!DOCTYPE html>
<html>
<head>
	<title>CONTACT LIST</title>
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
				</tr>
				<?php } 
				?>

			</tbody>
			
		</table>
</body>
</html>