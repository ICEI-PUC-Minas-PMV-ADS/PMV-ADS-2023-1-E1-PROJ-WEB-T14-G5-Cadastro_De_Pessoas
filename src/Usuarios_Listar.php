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

		var resposta = bdd.selectTabela("USUARIO", busca);

		if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
						
			$("#contenedor_busca").html("");
			
			for(i = 0; i < resposta.length; i++){
				
				var s = "";
				
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>CPF: " + resposta[i].cpf + "</DIV>";
					s += "<DIV>Nome: " + resposta[i].nome + "</DIV>";
					s += "<DIV id='acaoRegistro'><a href='/Usuarios_Editar.php?cpf=" + resposta[i].cpf + "'><img src='/Imagens/Editar.png'></a></DIV>";					
				s += "</DIV>";			
			
				$("#contenedor_busca").append(s);

			}

			$("#contenedor_busca").append("</TABLE>");

		}else{
		
			$("#contenedor_busca").html("Nenhum usuário encontrado para a busca informada. O que é engraçado, pois deveria ter o admin.");
			
		}

	}	
	
</SCRIPT>

<DIV class='formulario'>	
<DIV class='titulo_formulario'>Usuários :: Listagem</DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>
</DIV>
<DIV id='rodape'>
	<a href='Usuarios_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
</SCRIPT>
