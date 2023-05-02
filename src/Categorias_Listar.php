<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>
		
	function buscar(){
			
		var bdd = new Banco_De_Dados();

		var busca = {nome: valor('busca')}

		var resposta = bdd.selectTabela("CATEGORIA", busca);

		if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
						
			$("#contenedor_busca").html("");
			
			for(i = 0; i < resposta.length; i++){
				
				var s = "";
				
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>Código: " + resposta[i].codigo + "</DIV>";
					s += "<DIV>Nome: " + resposta[i].nome + "</DIV>";
				s += "</DIV>";			
				
				// Ação deste registro
				s += "<DIV id='acaoRegistro'><a href='/Categorias_Editar.php?codigo=" + resposta[i].codigo + "'><img src='/Imagens/Editar.png'></a></DIV>";
				

				$("#contenedor_busca").append(s);

			}

			$("#contenedor_busca").append("</TABLE>");

		}else{
		
			$("#contenedor_busca").html("Nenhuma categoria encontrada para a busca informada.");
			
		}

	}	
	
</SCRIPT>


<DIV id='titulo_pagina'>Categorias :: Listagem</DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>

<DIV id='rodape'>
	<a href='Categorias_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
</SCRIPT>
