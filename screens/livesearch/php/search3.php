<?php


$servername="localhost";      
$username="root";	        
$password="";				
$db_name="rpp";             

$table_name="alldevice"; 


$search_columns=array(); 
$output_columns=array();
$output_columns_name=array();  
$use_sno=true;



	$conn_var = mysqli_connect($servername,$username,$password,$db_name); 

	$output = '';  

	$col_name_query="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='".$db_name."' AND `TABLE_NAME`='".$table_name."'";
	$col_name_query_result=$conn_var->query($col_name_query);
	$col_name_row_count = $col_name_query_result->num_rows;

	if(isset($_POST["query"]))
	{
		$search = mysqli_real_escape_string($conn_var, $_POST["query"]);
		$query="SELECT * FROM ".$table_name." WHERE ";
		$i=0;	
		if(count($search_columns)!=0)     
		{
			while($col_name_row = $col_name_query_result->fetch_assoc())
			{
				$i=$i+1;
				if(in_array($col_name_row['COLUMN_NAME'],$search_columns))
					$query .= $col_name_row['COLUMN_NAME']." LIKE '%".$search."%' OR ";
			}
			$query=substr($query, 0, -3);
		}
		else
		{
			while($col_name_row = $col_name_query_result->fetch_assoc())
			{
				$i=$i+1;
				$query .= $col_name_row['COLUMN_NAME']." LIKE '%".$search."%'";
				if($col_name_row_count!=$i)
					$query.=" OR ";
			}
		}
	}
	else
	{	
		$query = "SELECT * FROM ".$table_name;   
	}
	$user_query_result=$conn_var->query($query);
	$row_cnt = $user_query_result->num_rows;
	$j=0;
	$k=0;
	$col_name_query_result->data_seek(0);
	$op=array();
	
	
	
	if($row_cnt>0)  
	{
		
		
		$output.="<table id='ls_table' class='itemtable'><thead><tr>";
	
		if(count($output_columns)!=0)
		{
			while($col_name_row = $col_name_query_result->fetch_assoc())
			{
				if(in_array($col_name_row['COLUMN_NAME'],$output_columns))
				{
						
					$output .= "<th>device name</th>
								<th>entry date</th>
								<th>quantity</th>
								<th>Edit</th>
								<th>Delete</th>
								
								
								";
				}
			}
			$output.="</thead><tbody>";
		}
		else
		{
			
			$output .= "<th>device name</th>
								<th>entry date</th>
								<th>quantity</th>
								<th>Edit</th>
								<th>Delete</th>"
								
								;
			$output.="</thead><tbody>";
		}
		while($row = $user_query_result->fetch_assoc())
		{
			$output .= "<tr><td>".$row['devicen']."</td>
					            <td>".$row['q']."</td>
								<td>".$row['adddate']."</td>
								<td><a href=\"edit.php?si=$row[si]\">Edit</a></td>
								<td><a href=\"deleteitem.php?si=$row[si]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

								
		}
		echo $output;
	}
	else
	{
		echo '<b>No Datad Found</b>';
	}
?>
