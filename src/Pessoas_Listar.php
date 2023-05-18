<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>

	//Variável que armazena o excel
	var csv = "";

	// Converte a listagem em excel (CSV)
	function excel(){

		const conteudoBinario = new Blob([csv], { type: 'text/csv' });
		const url = window.URL.createObjectURL(conteudoBinario);
		const a = document.createElement('a');
		a.setAttribute('href', url);
		a.setAttribute('download', 'Pessoas.csv');
		a.click();
		
	}
	

	/*
		Crio um conjunto de dados com as categorias e campos genéricos de cada pessoa
	*/
	function criarPessoaCompleto(){

		var bdd = new Banco_De_Dados();

		var todosRegistros = localStorage.getItem("PESSOA");

		var v = JSON.parse(todosRegistros);

		for(var i = 0; i <= v.length; i++){

			if(v[i] != null){
				
				// Nome da categoria dessa pessoa 
				var vv = bdd.selectTabela("CATEGORIA", {"codigo" : v[i].categoria }, 'codigo', true);
				if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
					v[i].nomeCategoria = vv[0].nome;					
				}
				
				//Campos genéricos
				var vvv = bdd.selectTabela("PESSOA_TEM_CAMPO_GENERICO", {"codigoPessoa" : v[i].codigo }, 'codigo', true );
				if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
					
					for(ii = 0; ii < vvv.length; ii++){
						v[i]["codigoCampoGenerico_" + ii] = vvv[ii].valorCampoGenerico;
					}
	
				}

			}

		}

		
		return JSON.stringify(v);

	}
	
		
	function buscar(){
		
		// Crio o dataset
		var completo = criarPessoaCompleto();
		
		// Instancio o banco de dados		
		var bdd = new Banco_De_Dados();
		
		// Especifico a busca
		var busca = {'*': valor('busca')}
			
		//Faço a busca, mas ao inves de buscar na pessoa, busco no meu set de dados "completo"	
		var resposta = bdd.selectTabela("PESSOA", busca, "codigo", false, completo);

		if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
			
			$("#contenedor_busca").html("");
			
			// Cabeçalho do CSV
			csv = '"Codigo";"Nome";"Apelido";';
			
			var rg = bdd.selectTabela("CAMPO_GENERICO", {});				
			for(ii in rg){		
				csv += '"' + rg[ii].nome + '";';
			}
			
			csv += '\n';
			
	
			for(i = 0; i < resposta.length; i++){

				var s = "";
			
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>Código: " + resposta[i].codigo + "</DIV>";
					s += "<DIV>Nome: "    + resposta[i].nome + "</DIV>";
					s += "<DIV>CPF/CNPJ: "    + resposta[i].cpfcnpj + "</DIV>";
					s += "<DIV>Apelido: " + resposta[i].apelido + "</DIV>";
				
				//Excel
				csv += '"' + resposta[i].codigo + '"; "' + resposta[i].nome + '";"' + resposta[i].apelido + '";';
					
				//Campos genéricos dessa pessoa				
				var rg = bdd.selectTabela("CAMPO_GENERICO", {});				
				for(ii in rg){		
					
					// Display label do campo genérico
					s += "<DIV>" + rg[ii].nome + ": ";
									
					var rrr = bdd.selectTabela("PESSOA_TEM_CAMPO_GENERICO", {"codigoPessoa": resposta[i].codigo, "codigoCampoGenerico": rg[ii].codigo}, 'codigo', true);

					for(iii in rrr){						
						s += rrr[iii].valorCampoGenerico;						
						csv += '"' + rrr[iii].valorCampoGenerico + '";'						
					}								
					
					s += "</DIV>";		
							
				}
				
				csv += '\n';	
					
									
				// Ferramentas			
				s += "<DIV id='acaoRegistro'><a href='/Pessoas_Editar.php?codigo=" + resposta[i].codigo + "'><img src='/Imagens/Editar.png'></a></DIV>";
				s += "</DIV>";			

				$("#contenedor_busca").append(s);


			}
			

			$("#contenedor_busca").append("</TABLE>");

		}else{

			$("#contenedor_busca").html("Nenhuma pessoa encontrada para a busca informada.");

		}

	}	
	
</SCRIPT>


<DIV class='formulario'>	

<DIV class='titulo_formulario'>Pessoas :: Listagem</DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>

</DIV>

<DIV id='rodape'>
	<a href='javascript:excel()'><img src='/Imagens/Excel.png'></a>
	<a href='Pessoas_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
</SCRIPT>
