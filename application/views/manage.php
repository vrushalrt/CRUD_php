<!DOCTYPE html>
<html>  
       <head>  
           
          <title>RECORDS</title>  
       </head>  
       <table border="1" cellpadding=3 cellspcing=0>  
          <tbody>  
             <tr bgcolor="skyblue">  
                <th>ID</th>  
                <th>NAME</th>  
                <th>CONTACT</th>
                <th>EMAIL</th>
             </tr>  
             <?php  
           
             foreach ($h->result() as $row){  
                ?><tr>  
                <td><?php echo $row->c_id; ?></td> 
                <td><?php echo $row->first_name .' '.$row->last_name; ?></td> 
                <td><?php echo $row->phone_no; ?></td> 
                <td><?php echo $row->email; ?></td>     
                  
                </tr>  
             <?php }  
             ?>  
          </tbody>  
       </table>  
    <body>  
    </body>  
    </html> 