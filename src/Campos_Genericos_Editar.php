<?php

	# Inclusão do cabeçalho
	include "Cabecalho.php";

	# Retorna na variável "codigo" o código da categoria
	$codigo = @$_GET["codigo"];
	
?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>
	
	
	function salvar(){
		var bdd = new Banco_De_Dados();
		var campo_generico = {codigo: <?php echo $codigo; ?>, nome: valor('nome')};
		
		bdd.updateTabela("CAMPO_GENERICO", campo_generico, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Campo genérico editado com sucesso.");
		p.adicionarBotao('Ok', 'fecharPergunta()');
		p.executar();
	}

	function excluir(){
		var bdd = new Banco_De_Dados();
		var campo_generico = {codigo: <?php echo $codigo; ?>};
		
		bdd.deleteTabela("CAMPO_GENERICO", campo_generico, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Campo genérico excluído com sucesso.");		
		p.setarMensagem("O campo genérico foi excluído com sucesso.");
		p.adicionarBotao('Ok', 'gotoURL("/Campos_Genericos_Listar.php")');
		p.executar();
	}

	/*
		Carrega os dados do campo genérico
	*/	
	function carregarCampoGenerico(){
		var bdd = new Banco_De_Dados();
		var campo_generico = {codigo: '<?php echo @$_GET["codigo"]; ?>'};
		
		var r = bdd.selectTabela("CAMPO_GENERICO", campo_generico, "codigo");

		// Joga direto nos inputs
		for (const [key, value] of Object.entries(r[0])) {			
			SetaValor(key, value);
		}
		
	}

	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Campos Genéricos :: Editar um campo existente</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Código</LABEL>
			<input type='text' id='codigo'>
		</DIV>		
		
		<DIV class='contenedor_campo'>
			<LABEL>Nome</LABEL>
			<input type='text' id='nome'>
		</DIV>
	</DIV>
</DIV>	


<!-- Rodapé -->
<DIV id='rodape'>
	<a href='Campos_Genericos_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
	<a href='javascript:excluir()'><img src='/Imagens/Excluir.png'></a>	
</DIV>

<SCRIPT>
	carregarCampoGenerico();
</SCRIPT>	
