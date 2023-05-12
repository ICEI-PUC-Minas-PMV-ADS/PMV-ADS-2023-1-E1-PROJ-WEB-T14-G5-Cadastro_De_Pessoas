
	
	
	function fecharPergunta(){
		$("#contenedor_pergunta").remove();
	}
	
	
	function alerta(Mensagem){
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem(Mensagem);
		p.adicionarBotao('Ok', 'javascript:fecharPergunta()');
		p.executar();
		
	}


	function Pergunta(){


		var vBotoes = [];
		var STR_TIT;
		var DESC_MSG;

		this.setarTitulo = function(STR_TIT){
			this.STR_TIT = STR_TIT;
		}
		
		this.setarMensagem = function(DESC_MSG){
			this.DESC_MSG = DESC_MSG;
		}
		
		this.adicionarBotao = function(STR_TXT, STR_JS, Tipo){
			
			if(Tipo == undefined)
				Tipo = "btn-primary";
			
			vBotoes.push({Texto: STR_TXT, JS: STR_JS, STR_TP:Tipo});
		}
		
		
		this.executar = function(){

			$(document.body).append("<DIV id='contenedor_pergunta'></DIV>");
			
			var id = new Date().getTime();		

			
			var HTML = "<DIV id='interior_pergunta'>";
			
			if(this.STR_TIT != undefined){
				HTML += "<div id='titulo_pergunta'>" + this.STR_TIT + "</div>";
			}
			
			if(this.DESC_MSG != undefined){
				HTML += "<div id='mensagem_pergunta'>" + this.DESC_MSG + "</div>";
			}
						
			// botoes			
			HTML += "<div id='contenedorbotoespergunta'>";
			
			var lb = vBotoes.length;
			
			
			for(i in vBotoes){
				HTML += "<button class='btn btn_tm" + lb + " " + vBotoes[i].STR_TP + "' id='perguntaBotao_" + i + "'>" + vBotoes[i].Texto + "</button>";
			}			

			HTML += "</div></DIV>";
			
			

			$("#contenedor_pergunta").html(HTML);
			$("#contenedor_pergunta").css("visibility", "visible");


			for(i in vBotoes){
				
				$("#perguntaBotao_" + i).click({index: i}, function(event){
															eval(vBotoes[event.data.index].JS);
														   });
								
			}
			
			
			
		}
		
		
		
	}

