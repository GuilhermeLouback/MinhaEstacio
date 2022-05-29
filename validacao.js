function validateForm() {
	let nomeDiscp = document.forms["form1"]["nome"].value;
	
	
	
	if (nomeDiscp == "") {
	  alert("Nenhum nome foi digitado");
	  return false;	
	}

}