<?php

$servername="localhost";      
$username="root";	        
$password="";				
$db_name="rpp";             

$table_name="devices"; 


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
		$output.="
		<div><table id='ls_table' class='tab3'><thead><tr>";
		
		
		if(count($output_columns)!=0)
		{
			while($col_name_row = $col_name_query_result->fetch_assoc())
			{
				if(in_array($col_name_row['COLUMN_NAME'],$output_columns))
				{
					
						$output .= "<th>si</th>
                        <th>employeeid</th>
                        <th>pc/laptop</th>
                        <th>pc name</th>
                        <th>processor</th>
                        <th>motherboard</th>
                        <th>ram</th>
                        <th>hdd</th>
                        <th>ssd</th>
                        <th>cdrom</th>
                        <th>os</th>
                        <th>pcip</th>
                        <th>pdate</th>
                        <th>warrenty</th>";
				}
			}
			$output.="</thead><tbody>";
		}
		else
		{
			
            $output .= "<th>si</th>
            <th>employeeid</th>
            <th>pc/laptop</th>
            <th>pc name</th>
            <th>processor</th>
            <th>motherboard</th>
            <th>ram</th>
            <th>hdd</th>
            <th>ssd</th>
            <th>cdrom</th>
            <th>os</th>
            <th>pcip</th>
            <th>pdate</th>
            <th>warrenty</th>";
				
		
			$output.="</thead><tbody>";
		}
		while($row = $user_query_result->fetch_assoc())
		{
		
				$output .= "<tr>
                <td>".$row['si']."</td>
                <td>".$row['employeeid']."</td>
                <td>".$row['pc/laptop']."</td>
			    <td>".$row['pcname']."</td>
				 <td>".$row['processor']."</td>
				 <td>".$row['motherboard']."</td>
				 <td>".$row['ram']."</td>
                 <td>".$row['hdd']."</td>
				 <td>".$row['ssd']."</td>
				 <td>".$row['cdrom']."</td>
				 <td>".$row['os']."</td>
                 <td>".$row['pcip']."</td>
				 <td>".$row['pdate']."</td>
				 <td>".$row['warrenty']."</td>

                 </tr>";
		}
		echo $output;
	}
	else
	{
		echo '<b>No Data Found</b>';
	}
?>