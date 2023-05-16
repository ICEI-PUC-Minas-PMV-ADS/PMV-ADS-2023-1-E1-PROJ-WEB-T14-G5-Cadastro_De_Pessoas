
	function Pessoa(){
		
		this.verificarSeCPFCNPJEstaCadastrado = function(cpfcnpj_){

			var bdd = new Banco_De_Dados();
			
			var pessoa = {cpfcnpj: cpfcnpj_};

			bdd.selectTabela("PESSOA", pessoa, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);
						
			return true;
			
		}
		
	}
