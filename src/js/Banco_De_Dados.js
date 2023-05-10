	/*
		Classe Banco_De_Dados
		
		Simula um banco de dados para local storage
		
		--- Versionamento ---
		13/04/2023 - Andrey - Primeira Versão
		02/05/2023 - Andrey - Corrigi um bug no update que me matou de raiva na parte de recuperar senha
		04/05/2023 - Andrey - select *
		10/05/2023 - Andrey - Consertei a exclusão
		--- Fim Versionamento ---
		
		
		Exemplos de uso
		
		var bdd = new Banco_De_Dados();
		
		INSERT:
		
			var nome = {nome: "Karine"};
			nome = bdd.insereTabela("PESSOA", nome);


		SELECT:
		
			var busca = {nome: "a"}; // Busca todos os registros em PESSOA onde "nome" contenha "a"
			resposta = bdd.selectTabela("PESSOA", busca);	

			for(i = 0; i < resposta.length; i++){
				print_r(resposta[i]);
			}		
			
		
		DELETE:

			var busca = {nome: "a"}; // DELETA todos os registros em PESSOA onde "nome" contenha "a"
			bdd.deleteTabela("PESSOA", busca);
		
			var busca = {INT_PK: 15}; // DELETA todos o registros onde a chave primaria autoincrement é "15"
			bdd.deleteTabela("PESSOA", busca);
		
		
		
	*/


	function Banco_De_Dados(){

		var numeroDeLinhasDaUltimaConsulta = 0;

		this.ultimoCodigo = function (nm_tbl, pk){		
			
			var INT_PK = 0;
			
			var todosRegistros = localStorage.getItem(nm_tbl);
			
			if(todosRegistros != null){
			
				v = JSON.parse(todosRegistros);
				
				for(var i = 0; i <= v.length; i++){
					
					if(v[i] != null){
						if(v[i][pk] > INT_PK){
							INT_PK = v[i][pk];
						}
						
					}
				}				
			}
			
			return INT_PK;

		}
		
		
		
		
		
		this.proximoCodigo = function(nm_tbl){
			
			var pc = localStorage.getItem("INT_PK_" + nm_tbl);
			if(pc == null){
				pc = 1;
			}else{
				pc++;
			}

			localStorage.setItem("INT_PK_" + nm_tbl, pc);		
			
			return pc;
			
		}


		this.insereTabela = function(nm_tbl, objeto, pk){	
			
			if(pk === undefined){
				pk = "codigo";
			}

			var todosRegistros = localStorage.getItem(nm_tbl);
			
			if(todosRegistros != null){

				var v = JSON.parse(todosRegistros);			
				
			}else{
				
				var v = [];
				
			}
			
			// Informo o próximo código para esta tabela
			objeto[pk] = this.proximoCodigo(nm_tbl);
			
			//Gravo no vetor
			v[objeto[pk]] = objeto;
			
			//Gravo no storage
			localStorage.setItem(nm_tbl, JSON.stringify(v));
			
			return objeto;

		}

		/*
			
		*/
		this.numeroLinhas = function(nm_tbl, objeto, pk){


			if(pk === undefined){
				pk = "codigo";
			}
			
			var r = this.selectTabela(nm_tbl, objeto, pk);
			
			var INT_MAX = 0;
			for(i in r){
				
				INT_MAX++;
			}
			
			return INT_MAX;
			
		}

		/*
			Busca um ou mais registros baseados nos atributos de objeto
		*/
		this.selectTabela = function(nm_tbl, objeto, pk, buscaExata, dataSet){
							
			if(buscaExata === undefined){
				buscaExata = false;
			}

			if(pk === undefined){
				pk = "codigo";
			}

						
			this.numeroDeLinhasDaUltimaConsulta = 0;
						
			
			var resposta = [];
			if(this.ultimoCodigo(nm_tbl, pk) == 0){
				return resposta;
			}
			
			if(dataSet === undefined){
				var todosRegistros = localStorage.getItem(nm_tbl);				
			}else{
				var todosRegistros = dataSet;
			}
			var v = JSON.parse(todosRegistros);
			
			
			for(var i = 0; i <= v.length; i++){
				
				if(v[i] != null){
					
					var lg_algum = false;
					var qtde = 0;
					
					// Se meu objeto de busca estiver vazio, é select sem where
					if(Object.keys(objeto).length === 0){
						var lg_algum = true;
					}

					//Para cada campo da busca
					for (const [key, value] of Object.entries(objeto)) {
					
						// Se for chave primária, tem que ser exatamente igual
						if(key == pk){
							if(value == v[i][pk]){
								lg_algum = true;
							}
						
						}else{
							
							//Se não for chave primária, é like % X %							
							if(key in v[i]){ //Se existe campo key no resultset
																
								let t = v[i][key] + ""; //Cast implicito para string
														
								if(buscaExata){
									if( t === value ){
										lg_algum = true;
										qtde++;
									}
								
								}else{
																
									if( t.indexOf(value) >= 0 ){
										lg_algum = true;
									}
								
								}
										
							}else{
								
								// Não existe campo key no result set. Se for *, pega todos
								if(key == "*"){
									
									// Para cada campo do resultset
									for (const [key2, value2] of Object.entries(v[i])) {

										var value3 = value2 + "";
					
										if( value3.indexOf(value) >= 0 ){
											lg_algum = true;
										}

									}
									
								}else{								
									alert('Nem tem esse campo!');
								}
							}
						}
					}						
					
					if(lg_algum){
						
						if(buscaExata){
							if(qtde == Object.keys(objeto).length){
								resposta.push(v[i]);
								this.numeroDeLinhasDaUltimaConsulta++;
							}
						}else{
							resposta.push(v[i]);
							this.numeroDeLinhasDaUltimaConsulta++;
						}
						
					}
					
				}
				
			}				
			
			return resposta;		

		}


		/*
			Exclui um ou mais registros baseado na busca
		*/
		this.deleteTabela = function (nm_tbl, objeto, pk){
			
			// Retorna todos os registros com essa busca	
			var d = this.selectTabela(nm_tbl, objeto, pk, true);
			
			for(i in d){
				print_r(d[i]);
			}	
				

			// Para cada registro				
			for(var i = 0; i < d.length; i++){

				// Excluo diretamente pelo PK
				this.deleteTabelaPK(nm_tbl, d[i][pk], pk);

			}

		}
		
		
		/*
			Exclui um registro baseado no INT_PK
		*/		
		this.deleteTabelaPK = function (nm_tbl, INT_PK, pk){
				
			var todosRegistros = localStorage.getItem(nm_tbl);
			
			if(todosRegistros != null){
				
				novo = [];
			
				v = JSON.parse(todosRegistros);
				
				for(var i = 0; i <= v.length; i++){
					
					if(v[i] != null){				
						if(v[i][pk] != INT_PK){
							novo.push(v[i]);
						}else{
							alert("Excluindo INT_PK " + INT_PK);
						}
					}
				}
				
				localStorage.setItem(nm_tbl, JSON.stringify(novo));
				
			}

		}
		
		
		/*
			Atualiza um registro, sendo obrigatório o objeto possuir a chave primária INT_PK
		*/
		this.updateTabela = function (nm_tbl, objeto, pk){
			
			if(pk === undefined){
				pk = "codigo";
			}			
				
			var todosRegistros = localStorage.getItem(nm_tbl);
			
			
			if(todosRegistros != null){
				
				novo = [];
			
				v = JSON.parse(todosRegistros);
				
				for(var i = 0; i <= v.length; i++){
					
					if(v[i] != null){				
						if(v[i][pk] != objeto[pk]){
							// Mantém o antigo
							novo.push(v[i]);
						}else{
							
							// Insere o objeto atualizado
							
							for (const [key, value] of Object.entries(objeto)) {
								v[i][key] = value;
							}
							
							novo.push(v[i]);
							
						}
					}
				}
				
				localStorage.setItem(nm_tbl, JSON.stringify(novo));
				
			}

		}		
		

		
	
	} // Classe
	
