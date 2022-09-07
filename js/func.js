$(function(){
	//executa as funções
	apareceElemento('#sim_t', '#campoTerceiros');
	escondeElemento('#nao_t', '#campoTerceiros');

	apareceElemento('#sim_p', '#tempo_parada');
	escondeElemento('#nao_p', '#tempo_parada');

	function alerta (campo){//da um alerta caso o campo esteja vazio
		alert("O campo " + campo +" precisa ser preenchido!!!");
	}

	function apareceElemento(elemento, aparece){//faz o elemento aparecer
		$(elemento).click(()=>{
			$(aparece).show();
		})
	}

	function escondeElemento(elemento, esconde){//faz o elemento sumir
		$(elemento).click(()=>{
			$(esconde).hide();
		})

		if($(elemento).is(":checked")){
			$(esconde).hide()
		}
	}

	function apareceLinha(selectprimario, afetado){
		if($(selectprimario).val() == 'Produção'){
			$(afetado).show();
		}else{
			$(afetado).hide();
		}
	}

	$('#filtro').click(()=>{//faz o elemento aparecer somente se o usuario for da produção
		apareceLinha('#setorFiltro','#linhaProd');
	})

	$('#requisitanteForm').click(()=>{//faz o elemento aparecer somente se o usuario for da produção
		apareceLinha('#setorReq','#linhaReq');
	})


    $('#relatorio').submit(()=>{		
		if($('#sim_t').is(":checked")){
			if($('#terceiros').val() == ""){
				alerta('terceiros');
				return false;
			}
		}

		if($('#sim_p').is(":checked")){
			if($('#tempo_parada').val() == "00:00"){
				alerta('tempo de parada');
				return false;
			}
		}

		if($('#tManutencao').val() == ""){
				alerta('tipo de manutenção');
				return false;
		}

		return true;
	})
});
    