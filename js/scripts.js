function salva_requisicao(){
	var x = document.getElementById("nome").value;
	var y = document.getElementById("linha").value;
	var z = document.getElementById("descricao").value;
	const time = new Date();

	let html = `<div class="ordens">
			<p>ORDEM DE SERVIÇO</p>
			<div class="conteiner_os">
				<div class="a"><h4>Requisitante:</h4>
				<p id="recebe_nome">${x}</p></div>
				<div><h4>Horario:</h4>
				<p id="recebe_hora">${time.toDateString()}</p></div>
				<div><h4>Linha:</h4>
				<p id="recebe_linha">${y}</p></div>
				<div><h4>Observação:</h4>
				<p id="recebe_obs">${z}</p></div>
				<div><a href="manutencao.html">Abrir</a></div>
			</div><!--conteiner_OS-->
		</div>`;
	document.getElementById("conteiner-ordens").innerHTML += html;

}

function verifica_ok(){
	window.alert("Salvo com sucesso!");
}

function escreve(){
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function(){
		document.getElementById("text").innerHTML = this.responsiveText;
	}
	xhttp.open('GET','texto.html');
	xhttp.send();
}

$(function(){
	$('.registro-single').click(function(){
		$('.preenchimento-requisicao').slideToggle();
	});
});



