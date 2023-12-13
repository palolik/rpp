


<?php 
			  include '../../../config/database.php';
				if(isset($_GET['search']))
			{
				$filtervalues = $_GET['search'];
				$query = "SELECT * FROM employees WHERE CONCAT(employeecode,status,employeename,contactno,email,designation) LIKE '%$filtervalues%' ";
				$query_run = mysqli_query($conn, $query);

				if(mysqli_num_rows($query_run) > 0)
				{
					foreach($query_run as $res)
					{                                            
						echo "<tr>";
						echo "<td>".$res['id']."</td>";
						echo "<td>".$res['employeecode']."</td>";
						echo "<td><form action='query.php' method='post'><input class='trm' type='submit' value=' ".$res['employeename']." ' >
						<input type='hidden' name='ds' value=".$res['employeeid'].">                
					</form></td>";
						echo "<td>".$res['designation']."</td>";
						echo "<td>".$res['contactno']."</td>";
						echo "<td>".$res['email']."</td>";
						echo "<td>".$res['status']."</td>";
						echo "</tr>";
					}
						
					}else{
						echo "<tr>
						<td colspan='7'>No Record Found</td>
					</tr>" ;
					}
				}
				else if(empty($_GET['search']))
				{
					$result = mysqli_query($mysqli, "SELECT * FROM employees");
					while ($res = mysqli_fetch_assoc($result))
					{   
						echo "<tr>";
						echo "<td>".$res['id']."</td>";
						echo "<td>".$res['employeecode']."</td>";
						echo "<td><form action='query.php' method='post'><input class='trm' type='submit' value=' ".$res['employeename']." ' >
						<input type='hidden' name='ds' value=".$res['employeeid'].">                
					</form></td>";
						echo "<td>".$res['designation']."</td>";
						echo "<td>".$res['contactno']."</td>";
						echo "<td>".$res['email']."</td>";
						echo "<td>".$res['status']."</td>";
						echo "</tr>";
					   } 

				} else {
				   
				}
			
		?>


