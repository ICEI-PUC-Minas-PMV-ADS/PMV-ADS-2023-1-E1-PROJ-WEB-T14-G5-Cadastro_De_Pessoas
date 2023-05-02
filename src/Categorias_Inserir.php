<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->

<SCRIPT>
	
	function abrirCategoria(codigo){
		
		gotoURL("Categorias_Editar.php?codigo=" + codigo);
		
	}
	
	function salvar(){
		
		var bdd = new Banco_De_Dados();
		var categoria = {nome: valor('nome')};
		
		categoria = bdd.insereTabela("CATEGORIA", categoria, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Categoria cadastrada com sucesso.");
		p.adicionarBotao('Ok', 'abrirCategoria(' + categoria.codigo + ')');
		p.executar();
		
	}
	
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Categorias :: Inserir uma nova Categoria</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>
		<DIV class='contenedor_campo'>
			<LABEL>Nome</LABEL>
			<input type='text' id='nome'>
		</DIV>
	</DIV>
	
</DIV>	

<DIV id='rodape'>
	<a href='/Categorias_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
</DIV>

