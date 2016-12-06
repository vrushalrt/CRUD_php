<!DOCTYPE html>
<html>
<head>
	<title> CRUD </title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/stylesheets/cm_style2.css"); ?>"  />
    </head>
    <body>
          
      
          <div class='maindiv'>
          <div class='form_div'>
            <?php echo validation_errors(); ?>
            <?php  
              echo form_open('welcome/insert',array('name'=>'myform'));
            ?>
            <!--    <form method='post' action='submit'>-->
                  <div class='title'>
          <h2>Data Insertion</h2>
                </div>
                <label>FirstName</label><br>
                <input type='text' name='firstname' class='input'><br>

                <label>MiddleName</label><br>
                <input type='text' name='middlename' class='input'><br>
                
                <label>LastName</label><br>
                <input type='text' name='lastname' class='input'><br>

                <label>Contact</label><br>
                <input type='text' name='contact' class='input'><br>

                <label>Email</label><br>
                <input type='text' name='email' class='input'><br>

                <label>Address</label><br>
                <input type='text' name='address' class='input'><br>
                
                <input type='submit'value='Insert' name='submit' class='submit' >

            <!--</form>-->
            <?php 
              echo form_close(); 
            ?> 
            </div>
            </div>
            <br>
      
      	<?php 
            //require_once 'select_view.php';
            //include 'data_view';   
           // $this->load->view('welcome/data_view');
            //echo loadView('data_view');
          //$this->view('data_view');
         // global $h;
          //$this->load->view('select_view.php',$h,TRUE);
         ?>
      
        
    </body>
</html>
