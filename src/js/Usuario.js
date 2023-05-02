

	function Usuario(){
		
		this.verificarSeUsuarioExiste = function(cpf_, senha_){

			var bdd = new Banco_De_Dados();
			
			var usuario = {cpf: cpf_, senha: senha_};

			bdd.selectTabela("USUARIO", usuario, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);
						
			return true;
			
		}
		
	}