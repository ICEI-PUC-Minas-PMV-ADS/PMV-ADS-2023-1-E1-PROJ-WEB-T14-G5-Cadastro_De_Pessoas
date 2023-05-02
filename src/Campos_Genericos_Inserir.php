<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->

<SCRIPT>
	
	function abrirCampoGenerico(codigo){
		gotoURL("Campos_Genericos_Editar.php?codigo=" + codigo);
	}
	

	function salvar(){
		var bdd = new Banco_De_Dados();
		var campo_generico = {nome: valor('nome')};
		
		campo_generico = bdd.insereTabela("CAMPO_GENERICO", campo_generico, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Campo genérico cadastrado com sucesso.");
		p.adicionarBotao('Ok', 'abrirCampoGenerico(' + campo_generico.codigo + ')');
		p.executar();
		
	}
	
	
</SCRIPT>


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Campos Genéricos :: Inserir uma novo campo genérico</DIV>

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

