	
	like = 0;

	function add_like(artical_id){
		if(like==0)
			$.ajax({
				url: base_url+'ajax/add_like', type: 'POST', data: { 'artical_id' : artical_id },
				success:function(result){
					$('#like').html('<i class="fas fa-2x fa-thumbs-up" title="liked"></i>');
					like = 1;
					console.log(result);
				}

			});

	}