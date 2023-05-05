<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>

	/*
		Como essa porcaria não tem join, crio um conjunto de dados com as categorias e campos genericos de cada pessoa
	*/
	function criarPessoaCompleto(){

		var bdd = new Banco_De_Dados();

		var todosRegistros = localStorage.getItem("PESSOA");

		var v = JSON.parse(todosRegistros);

		for(var i = 0; i <= v.length; i++){

			if(v[i] != null){
				
				// Nome da categoria dessa pessoa 
				var vv = bdd.selectTabela("CATEGORIA", {"codigo" : v[i].categoria } );
				if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
					v[i].nomeCategoria = vv[0].nome;					
				}
				
				//Campos genéricos
				var vvv = bdd.selectTabela("PESSOA_TEM_CAMPO_GENERICO", {"codigoPessoa" : v[i].codigo } );
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
			
			for(i = 0; i < resposta.length; i++){

				var s = "";
			
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>Código: " + resposta[i].codigo + "</DIV>";
					s += "<DIV>Nome: " + resposta[i].nome + "</DIV>";
					s += "<DIV>Apelido: " + resposta[i].apelido + "</DIV>";
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


<DIV class='titulo_formulario' style="margin-top: 5%;">Pessoas :: Listagem</DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>

<DIV id='rodape'>
	<a href='Pessoas_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
</SCRIPT>
