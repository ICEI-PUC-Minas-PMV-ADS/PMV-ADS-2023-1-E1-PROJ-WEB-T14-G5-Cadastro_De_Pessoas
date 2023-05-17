

	function Usuario(){
		
		
		this.verificarSeCPFExiste = function(cpf_){

			var bdd = new Banco_De_Dados();
			
			var usuario = {cpf: cpf_};

			bdd.selectTabela("USUARIO", usuario, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);

			
		}		
		
		this.verificarSeUsuarioExiste = function(cpf_, senha_){

			var bdd = new Banco_De_Dados();
			
			var usuario = {cpf: cpf_, senha: senha_};

			bdd.selectTabela("USUARIO", usuario, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);

			
		}
		
	}
