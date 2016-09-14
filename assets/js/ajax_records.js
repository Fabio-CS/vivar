function _delete(url,element_id){
	var loader = '<img class="loader" src="'+url_base+'assets/admin/images/table_loader.gif">';
	var acao = $('#'+element_id+' td.acao').html();
	$('#'+element_id+' td.acao').html(loader);
	var r = confirm('Tem certeza que deseja excluir este registro?');
	if(r == true){
		$.ajax({
			'url' 		: url,
			'type' 		: 'GET',
			'success' 	: function(data){ 
				var r = JSON.parse( data );     
			    if('sucess' == r._return){
					$('#'+element_id+',.'+element_id).css('background-color','#fbb6b6').delay(500).fadeOut(800);
				}else if('err' == r._return){
					$('#'+element_id+' .acao').html(acao);
				}else{
					$('#'+element_id+' .acao').html(acao);
				} 
				alert(r.msg);
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert('Não foi possível excluir o registro | Error: '+xhr.statusText+' - '+xhr.status);
				$('#'+element_id+' td.acao').html(acao);
			}
		}); 
	}else{
		$('#'+element_id+' td.acao').html(acao);
	}
	return false;
}

function _enable(url,element_id){
	$.ajax({
		'url' 		: url,
		'type' 		: 'GET',
		'success' 	: function(data){ 
			var r = JSON.parse( data );     
			if('sucess' == r._return){
				$('#'+element_id).html(r._html);
			}else if('err' == r._return){}else{}  	                        
		}
	}); 
	return false;
}