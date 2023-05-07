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

		var resposta = bdd.selectTabela("CAMPO_GENERICO", busca);

		if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
						
			$("#contenedor_busca").html("");
			
			for(i = 0; i < resposta.length; i++){
				
				var s = "";
				
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>Código: " + resposta[i].codigo + "</DIV>";
					s += "<DIV>Nome: " + resposta[i].nome + "</DIV>";
					s += "<DIV id='acaoRegistro'><a href='/Campos_Genericos_Editar.php?codigo=" + resposta[i].codigo + "'><img src='/Imagens/Editar.png'></a></DIV>";
				s += "</DIV>";			
				
				

				$("#contenedor_busca").append(s);

			}

			$("#contenedor_busca").append("</TABLE>");

		}else{
		
			$("#contenedor_busca").html("Nenhum campo genérico encontrado para a busca informada.");
			
		}

	}
	
</SCRIPT>

<DIV class='formulario'>	

<DIV class='titulo_formulario'>Campos Genéricos :: Listagem</DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>

</DIV>

<DIV id='rodape'>
	<a href='Campos_Genericos_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
</SCRIPT>
