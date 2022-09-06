$(function(){
	function alerta (campo){
		alert("O campo ",campo," precisa ser preenchido!!!");
	}


    $('form').submit(()=>{
		if($('#sim_t').is(":checked")){
			alerta('terceiros');
		}
		return false;
	})
});
    