function habilitar() {
    if (document.getElementById('checkUfsc').checked){
            document.getElementById('inputUfsc').removeAttribute("disabled");
            document.getElementById('inputUfsc').placeholder="Digite o patrimônio UFSC";
        console.log(document.getElementById('inputUfsc').value);
    }
    else {
        document.getElementById("inputUfsc").setAttribute('value','');
        //Evita que o usuário defina um texto e desabilite o campo após realiza-lo
        document.getElementById('inputUfsc').placeholder="Opção desmarcada";
        document.getElementById('inputUfsc').setAttribute("disabled", "disabled");
        console.log(document.getElementById('inputUfsc').value);
    }
}



function redirecionar() {

	var opcao = document.formInicial.selectInicial.value;
	

	if (opcao == "pc") {
	
	 window.location.replace('pcCadastro.php');
	}
    
else    

	if (opcao == "notebook") {
	
	 window.location.replace('noteCadastro.php');

	}

else
    	if (opcao == "impressora") {
			
	 window.location.replace('impreCadastro.php');

	}
    
    else {
		
	 window.location.replace('geralCadastro.php');

	}

}


