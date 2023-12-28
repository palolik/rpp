$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"livesearch/php/search3.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#ls_result2').html(data);
			}
		});
	}
	
	$('#ls_search_text2').keyup(function(){
		var search2 = $(this).val();
		
		if(search2 != '')
		{
			load_data(search2);
		}
		else
		{
			load_data();			
		}
	});
});
