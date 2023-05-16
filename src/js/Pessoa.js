
	function Pessoa(){
		
		this.CPFCNPJEstaCadastrado = function(cpfcnpj_){

			var bdd = new Banco_De_Dados();
			
			var pessoa = {cpfcnpj: cpfcnpj_};

			bdd.selectTabela("PESSOA", pessoa, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);
						

			
		}
		
		this.nomeEstaCadastrado = function(nome_){
			var bdd = new Banco_De_Dados();
			
			var pessoa = {nome: nome_};

			bdd.selectTabela("PESSOA", pessoa, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);
	
		}

		
	}
