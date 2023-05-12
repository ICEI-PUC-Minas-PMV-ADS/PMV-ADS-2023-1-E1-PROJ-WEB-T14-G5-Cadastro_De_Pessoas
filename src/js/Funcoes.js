

	/*
		Imita o print_r do PHP
	*/
	function print_r(obj){
		var out = '';
		for (var i in obj){
			out += i + ": " + obj[i] + "\n";
		}
		alert(out);
	} 
	

	function gotoURL(URL){
		document.location = URL;
	}

	
	
	
	/*
		O domínio do campo consiste no primeiro trecho da string, terminando com _.
		
		STR_PES: Dominio STR_, que pelo dicionário de dados representa String
		INT_PK : Domínio INT_, que pelo dicionário de dados representa INTEGER		
	*/
	
	function DominioDoCampo(NM_CMP){				
		return NM_CMP.substring(0, NM_CMP.indexOf("_")+1);		
	}
	
	function valor(o){

		if(document.getElementById(o) != null){
			var Tipo = document.getElementById(o).tagName;

			if(Tipo == "INPUT"){
				var SubTipo = document.getElementById(o).type;

				if(SubTipo == "checkbox"){
					return PegaValorCB(o);
				}
				if(SubTipo == "text"){
					return document.getElementById(o).value;			
				}
				if(SubTipo == "number"){
					return document.getElementById(o).value;			
				}

				if(SubTipo == "range"){
					return document.getElementById(o).value;			
				}

				if(SubTipo == "password"){
					return document.getElementById(o).value;			
				}

				if(SubTipo == "hidden"){
					if(document.getElementById(o).value == "_fw_botao_radio")
						return PegaValorRB(o);
					else	
						return document.getElementById(o).value;	
				}
			}

			if(Tipo == "SELECT"){
				return PegaValorDoListbox(o);
			}
			
			if(Tipo == "TEXTAREA"){
				return document.getElementById(o).value;
			}
			
			if(Tipo == "SPAN")
				return "";



			alert("Objeto " + o + " não encontrado!" + Tipo);

		}
	}	
	
	
	function PegaValorDoListbox(obj){
		try{
			var Item_Selecionado = document.getElementById(obj).selectedIndex;
			if(Item_Selecionado != -1)
				return document.getElementById(obj).options[Item_Selecionado].value;
			else
				return false;
		}catch(err){		
			alert("Erro ao pegar valor do objeto " + obj + ": " + err.message);
		}
		return false;	
	}
	

function SetaValorDoListbox(obj, sValor){
	for (var i=0; i < document.getElementById(obj).length; i++){
		var vvv = document.getElementById(obj).options[i].value.toUpperCase();
		if(vvv == sValor.toUpperCase())
			document.getElementById(obj).options[i].selected = true;
	}
}

function SetaValor(o, Valor){
	
	if(Valor == null)
		Valor = "";	
	
	Valor = Valor.toString();
	Valor = Valor.replace(/___FW_QUEBRA_DE_LINHA___/g, "\r\n");

	if(document.getElementById(o) != null){
		var Tipo = document.getElementById(o).tagName;
		var SubTipo = document.getElementById(o).type;

		if(Tipo == "INPUT"){
			if(SubTipo == "checkbox"){
				document.getElementById(o).value = "S";
				if(Valor == "S"){
					document.getElementById(o).checked = true;
				}else{
					document.getElementById(o).checked = false;
				}	
					
				$('#'+o).trigger("change"); 		
				return;
			}

			if(SubTipo == "text"){
				document.getElementById(o).value = Valor;			
				//$('#' + o).trigger("change");
				return;
			}

			if(SubTipo == "button"){
				document.getElementById(o).value = Valor;			
				return;
			}


			if(SubTipo == "number"){
				document.getElementById(o).value = Valor;			
				$('#'+o).trigger("change"); 			
				return;
			}

			if(SubTipo == "password"){
				document.getElementById(o).value = Valor;			
				$('#'+o).trigger("change"); 				
				return;
			}
			if(SubTipo == "hidden"){
				if(document.getElementById(o).getAttribute("_fw_classe2") == "_fw_botao_radio"){	
					SetaValorRB(o, Valor);
				}else{
					// Input type hidden simples
					document.getElementById(o).value = Valor;
				}				
				$('#'+o).trigger("change"); 		
				return;
			}
		}

		if(Tipo == "SELECT"){
			SetaValorDoListbox(o, Valor);
			$('#'+o).trigger("change"); 		
			return;
		}
		
		if(Tipo == "TEXTAREA"){
			document.getElementById(o).value = Valor;			
			$('#'+o).trigger("change"); 				
			return;			
		}

		if(Tipo == "SPAN"){
			/*
				Ignora o valor de SPAN. Provavelmente este campo é um DL_
			*/			
			return;
		}
				

		alert("Objeto " + o + " do tipo " + Tipo + " não encontrado!");
	}

}
	
