<?php
        if($machine_list==null){
                echo "<h2>Sorry, you don't have any machine!</h2>";
        }
	else{
		$this->load->view('machine/add_task_form');
		echo "<table class='table table-striped'>
	        	<tr>
        	        	<th>Image</th>
                		<th>Machine Name</th>
	                	<th>Annotation</th>
	                	<th>Create Time</th>
	                	<th></th>
        		</tr>";
		foreach ($machine_list as $value){
                	echo "	<tr>
                	      		<td><a href='#'><img src= '".base_url()."assets/image/light.png' class='img-thumbnail machine-icon' /></a></td>
                        		<td>$value->name</td>
                        		<td>$value->annotation</td>
                        		<td>$value->created_time</td>
                        		<td>
						<a href='#'data-toggle='modal' data-target='#modal'>
						<img src= '".base_url()."assets/image/add.png' width='35' height='35'/>
						</a>
					</td>
                		</tr>";
		}
		echo"</table>";
	}
?>

