<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
</script>
<script type="text/javascript">
function addRow(tableid)
{	

	  $(document).ready(function(){

      $("button").click(function(){
  	  var clonedRow = $("#" + tableid + " tr:last").clone(); //this will grab the lasttable row.
	  $("#" + tableid + " tr:last").append(clonedRow); //add the row back to the table
      });
    });
	
}
</script>
</head>

<form action="test.php" method="POST" >
<table id="bill">
<tr>
	<th>Quantity</th>
	<th>Rate</th>
	<th>Total</th>
</tr>
<tr>
	
	<td><input type="text" id="quantity" name="quantity"/></td>
	<td><input type="text" id="rate" name="rate"/></td>
	<td><input type="text" id="total" name="total"/></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="Save" ></td>
<td><button type="button" name="addrow" value="Add Row" onclick="addRow($('.bill'));">Add Row</button></td>
</tr>

</table>
</form>