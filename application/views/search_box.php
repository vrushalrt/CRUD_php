<div id="search">
<?php
 	if(isset($_POST['query']))
 	{
 		$header = '<h4 align="center">Search Result</h4>';
 	}
 	else
 	{
 		$header	=	'';
 	}
 	$output = '';
 	
 	$output .= $header;
 	$output .= '<div class="table-responsive" >
						<table border="1" cellpadding="5" cellspacing="0">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Gender</th>
								<th>Contact</th>
								<th>Skills</th>
								<th>Edit</th>
							</tr>';	
	
						 foreach ($row as $rows) 
						{
							$gender = ucfirst($rows->gender);
							$output .= '
									<tr class="center">
										<td>'.$rows->uid.'</td>
										<td>'.$rows->name.'</td>
										<td>'.$gender[0].'</td>
										<td>'.$rows->contact.'</td>
										<td>'.$rows->skills.'</td>
										<td id="edit">
											<button calss="delete_btn" type="submit" id="btn_delete" name="delete" value="DELETE" data-id1='.$rows->uid.'>DELETE</button>
											<a href='.base_url().'index.php/home/update/'.$rows->uid.' value='.$rows->uid.' alt="UPDATE">Update</a>
										</td>
									</tr>
							';	
						}
				$output .= '</table> </div>';	
				echo $output;
				$pagination = '';
					
				$pagination .= '
								<nav aria-label="Page navigation">
									  <ul class="pagination">
									    <li class="page-item"><a class="page-link" id="page-link" href="#" data-prev="prev">Previous</a></li>';
									   for($i=1; $i <= $page_section; $i++)  
											{
				$pagination .= '<li class="page-item"><a class="page-link" id="page-link"  href="#" data-page="'.$i.'" value="'.$i.'">'.$i.'</a></li>';
									    	}
				$pagination .= '<li class="page-item"><a class="page-link" id="page-link" href="#" data-next="next">Next</a></li>
									  </ul>
									</nav>
								' ;
				echo $pagination;
?>
</div>