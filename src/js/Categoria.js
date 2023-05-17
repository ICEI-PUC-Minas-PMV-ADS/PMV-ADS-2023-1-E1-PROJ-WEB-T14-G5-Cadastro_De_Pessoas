
	/*
		Classe de categoria, contendo validações
	*/

	function Categoria(){		

		
		
		this.nomeEstaCadastrado = function(nome_){
			var bdd = new Banco_De_Dados();
			
			var categoria = {nome: nome_};

			bdd.selectTabela("CATEGORIA", categoria, "codigo", true);	
			
			return(bdd.numeroDeLinhasDaUltimaConsulta > 0);
	
		}

		
	}
