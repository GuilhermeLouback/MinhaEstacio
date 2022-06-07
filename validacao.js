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


function validateHorarioDS(){
    let diaS = document.getElementsByName("DiaS")[0].value;
    let timei = document.getElementsByName("timei")[0].value;
    let timet = document.getElementsByName("timet")[0].value;
    let type = document.getElementsByTagName("input");

    if(type[0].checked == false && type[1].checked == false && type[2].checked == false && type[3].checked == false && type[4].checked == false){
      alert("Ops, voce deixou e selecionar algo!");
      return false;
    }

	if (diaS == "") {
		alert("Nenhum dia foi selecionado");
		return false;
	}

	if (timei == "") {
		alert("Nenhum horario foi selecionado");
		return false;
	}

	if (timet == "") {
		alert("Nenhum horario foi selecionado");
		return false;
	}
  }


function validateHorarioD(){
	let disciplina = document.getElementsByTagName("input");
	if (disciplina[0].checked == false && disciplina[1].checked == false && disciplina[2].checked == false && disciplina[3].checked == false && disciplina[4].checked == false) {
		alert("Nenhuma disciplina foi selecionada");
		return false;
	}
}


function validateHorarioIF(){
	let horarioIN = document.getElementsByName("timei")[0].value 
	let horarioFN = document.getElementsByName("timet")[0].value

	if (horarioIN == "") {
		alert("Nenhum horario foi selecionado");
		return false;
	}

	if (horarioFN == "") {
		alert("Nenhum horario foi selecionado");
		return false;
	}

}

function validateHorarioProf(){
	let professor = document.getElementsByTagName("select");
	if (professor[0].selectedIndex == 0) {
		alert("Nenhum professor foi selecionado");
		return false;
	}
}

function validateHorarioSemestre(){
	let semestre = document.getElementsByTagName("input");
	if (semestre[0].checked == false && semestre[1].checked == false ) {
		alert("Nenhum semestre foi selecionado");
		return false;
	}
}

function validateNotaHorario(){
	let horario = document.getElementsByName("horario")[0].value;
	if (horario == "") {
		alert("Nenhum horario foi selecionado");
		return false;
	}
}

function validateNotaOrdem(){
	let ordem = document.getElementsByTagName("input");
	if (ordem[0].checked == false && ordem[1].checked == false ) {
		alert("Nenhum semestre foi selecionado");
		return false;
	}
}


function validateNotaValor(){
	let nota = document.getElementsByName("notaValor")[0].value;
	if (nota == "") {
		alert("Insira uma Nota");
		return false;
	}
}


function validateProfConhe(){
	let conhecimento = document.getElementsByName("conhecimento")[0].value;
	if (conhecimento == "") {
		alert("Nenhuma conhecimento foi selecionado");
		return false;
	}
}


function validateSemestreAno(){
	let semestre = document.getElementsByTagName("input");
	if (semestre[0].checked == false && semestre[1].checked == false ) {
		alert("Digite o ano");
		return false;
	}
}

function valitadeSemestreMI_MF(){
	let semestre = document.getElementsByTagName("input").value;
	if (semestre[0].checked == false && semestre[1].checked == false && semestre[2] ) {
		alert("Digite o semestre");
		return false;
	}
}



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

