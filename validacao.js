function validateFormCurso(){
	let curso = document.getElementsByName("curso")[0].value;
	if (curso == "") {
		alert("Nenhum curso foi selecionado");
		return false;
	}
}


function validateFormMatricula(){
	let matricula = document.getElementsByName("matricula")[0].value;
	if (matricula == "") {
		alert("Nenhuma matrícula foi selecionada");
		return false;
	}
}

function validateFormAluno(){
	let aluno = document.getElementsByName("aluno")[0].value;
	if (aluno == "") {
		alert("Insira um aluno");
		return false;
	}
}

function validateClassNota(){
	let nota = document.getElementsByName("nota")[0].value;
	if (nota == "") {
		alert("Insira Uma Nota");
		return false;
	}
}

function validateClassTime(){
	let time = document.getElementsByName("time")[0].value;
	if (time == "") {
		alert("Nenhum Horario foi selecionado");
		return false;
	}
}

--------------------------------------
continuar aqui


function validateFormNome() {
	let nomeDiscp = document.forms["form1"]["nome"].value;
	if (nomeDiscp == "") {
	  alert("Nenhum nome foi digitado");
	  return false;	
	}
}

function validateFormDescricao(){
	let descricao = document.getElementsByName("descricao")[0].value;
	if (descricao == "") {
	  alert("Nenhuma descrição foi digitada");
	  return false;	
	}
}

function validateCargaHoraria(){
	let cargaHoraria = document.getElementsByName("cargaHoraria")[0].value;
	if (cargaHoraria == "") {
		alert("Nenhuma carga horária foi selecionada");
		return false;
	}
}

function validateFormAvaliacao(){
	let avaliacao = document.getElementsByName("avaliacao")[0].value;
	if (avaliacao == "") {
		alert("Nenhuma avaliação foi selecionada");
		return false;
	}
}

