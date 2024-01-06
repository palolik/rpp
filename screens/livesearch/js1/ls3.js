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
				$('#ls_result3').html(data);
			}
		});
	}
	
	$('#ls_search_text').keyup(function(){
		var search = $(this).val();
		
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
