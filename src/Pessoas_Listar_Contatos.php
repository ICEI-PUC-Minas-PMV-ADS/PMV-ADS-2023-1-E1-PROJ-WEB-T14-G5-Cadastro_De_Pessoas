<?php

	include "Cabecalho.php";
	
	$codigoPessoa = $_GET["codigoPessoa"];


?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>

	var codigoPessoa = <?php echo $codigoPessoa; ?>;
		
	// Busca o nome da pessoa
	var bdd = new Banco_De_Dados();
	var resposta = bdd.selectTabela("PESSOA", {codigo: codigoPessoa}, "codigo");
	var nomePessoa = resposta[0].nome;
	

	
	function voltarParaLista(){
		gotoURL("/Pessoas_Listar_Contatos.php?codigoPessoa=" + codigoPessoa);
	}	
		
		
	function buscar(){
		
		// Instancio o banco de dados		
		var bdd = new Banco_De_Dados();
		
		
		//Trago um resultset só com os contatos dessa pessoa.
		var resposta = bdd.selectTabela("PESSOA_CONTATO", {codigoPessoa: <?php echo $codigoPessoa; ?>}, "codigoPessoa");
		
		
		// Especifico a busca dentro desse resultSet
		var busca = {'*': valor('busca')}
			
		//Faço a busca
		var resposta = bdd.selectTabela("PESSOA_CONTATO", busca, "codigo", false, JSON.stringify(resposta));

		if(bdd.numeroDeLinhasDaUltimaConsulta > 0){
			
			$("#contenedor_busca").html("");
			
			for(i = 0; i < resposta.length; i++){

				var s = "";
			
				// Dados desse registro
				s += "<DIV id='itemListaBusca'>";												
					s += "<DIV>Código: " + resposta[i].codigo + "</DIV>";
					s += "<DIV>Data: " + resposta[i].data + "</DIV>";
					s += "<DIV>Hora: " + resposta[i].hora + "</DIV>";
					s += "<DIV>Forma de contato: " + resposta[i].forma + "</DIV>";
					s += "<DIV id='acaoRegistro'><a href='/Pessoa_Editar_Contato.php?codigo=" + resposta[i].codigo + "'><img src='/Imagens/Editar.png'></a></DIV>";
				s += "</DIV>";			

				$("#contenedor_busca").append(s);

			}

			$("#contenedor_busca").append("</TABLE>");

		}else{

			$("#contenedor_busca").html("Nenhum contato encontrado para a busca informada.");

		}

	}	
	
</SCRIPT>


<DIV class='formulario'>	



<DIV class='titulo_formulario'>Pessoas :: Listagem de Contatos Realizados com <B><DIV id='nomePessoa'></DIV></B></DIV>

<DIV>
	<input type='text' id='busca' placeholder='Busca'>
</DIV>

<DIV id='contenedor_busca'></DIV>

</DIV>

<DIV id='rodape'>
	<a href='Pessoas_Editar.php?codigo=<?php echo $codigoPessoa; ?>'><img src='/Imagens/VoltarParaPessoa.png'></a>
	<a href='Pessoa_Inserir_Contato.php?codigoPessoa=<?php echo $codigoPessoa; ?>'><img src='/Imagens/Adicionar.png'></a>
</DIV>


<SCRIPT>
	
	$("#nomePessoa").html(nomePessoa);
	
	$("#busca").change(function(){ buscar(); });
	buscar();
	
	
	
</SCRIPT>
