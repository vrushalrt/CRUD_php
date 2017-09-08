<!DOCTYPE html>
<html>
<head>
	<title><?php echo $form_name." Details"; ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  	<script>
  	$(document).ready(function(){
  		$("form #submit").on('click',function(){
  			var data = $(":input").serialize();
  			$.ajax({
  				url: '<?php echo base_url();?>index.php/home/add',
  				type: 'POST',
  				data: data,
  				success:function(data){
  					$("#check").html(data);
  					//location.reload();
  				}
  			});
  			//return false;
  		});

  		$("form #update").on('click',function(){
  			var data = $(":input").serialize();
  			$.ajax({
  				url: '<?php echo base_url();?>index.php/home/update_data',
  				type: 'POST',
  				data: data,
  				success:function(data){
  					$("#check").html(data);
  					//location.reload();

  				}
  			});
  			//return false;
  		});
  	
  	});

  	
  	</script>
</head>
<body>
	<form method="POST" id="reply" enctype="multipart/form-data" action="" name="details_form">
		<label>Name :</label>
		<?php
		if(isset($row))
		{
		?>
		<input type="text" name="uid" id="uid" value="<?php echo $row->uid; ?>" hidden> 
		<label><input type="text" name="name" id="name" value="<?php echo $row->name; ?>"></label><br>
		<?php }else{ ?>
		<label><input type="text" name="name" id="name"></label><br>
		<?php } ?>
		<label>Contact :+91 </label>
		<?php 
		if(isset($row))
		{
		?>
		<label><input type="text" name="contact" id="contact" value="<?php echo $row->contact; ?>"></label><br>
		<?php }else{ ?>
		<label><input type="text" name="contact" id="contact" ></label><br>
		<?php } ?>
		<label>Gender :</label>
		<label>
		<?php 
		if(isset($row))
		{
		?>
			<input type="radio" name="gender" <?php if($row->gender == 'male'){ echo "checked";} ?> value="male" id="gender">Male
			<input type="radio" name="gender" <?php if($row->gender == 'female'){ echo "checked";} ?> value="female" id="gender">Female
		<?php } else{ ?>
			<input type="radio" name="gender" value="male" id="gender">Male
			<input type="radio" name="gender" value="female" id="gender">Female
		<?php } ?>
		</label><br>

		<label>Skills :</label>
		<?php 
			if(isset($row)){
			$chkbox = $row->skills;
		    $chkbox = explode(" ",$chkbox);
		    }
		    
			if(isset($row))
			{
		?>
			<input type="checkbox" name="skills[]" <?php if(in_array("php",$chkbox)){ echo "checked"; } ?> value="php" id="skills">PHP
			<input type="checkbox" name="skills[]" <?php if(in_array("php&mysql",$chkbox)){ echo "checked"; } ?> value="php&mysql" id="skills">PHP & mysql
			<input type="checkbox" name="skills[]" <?php if(in_array("jquery",$chkbox)){ echo "checked"; } ?> value="jquery" id="skills">jQuery
			<input type="checkbox" name="skills[]" <?php if(in_array("ajax",$chkbox)){ echo "checked"; } ?> value="ajax" id="skills">AJAX

		<?php } else{ ?>
			<input type="checkbox" name="skills[]" value="php" id="skills">PHP
			<input type="checkbox" name="skills[]" value="php&mysql" id="skills">PHP & mysql
			<input type="checkbox" name="skills[]" value="jquery" id="skills">jQuery
			<input type="checkbox" name="skills[]" value="ajax" id="skills">AJAX
		<?php } ?>
		<br>

		<label><input type="submit" name="<?php echo strtolower($submit_name); ?>" value="<?php echo $submit_name; ?>" id="<?php echo strtolower($submit_name); ?>"></label>
		<p id="check"></p>
	</form>
</body>
</html>