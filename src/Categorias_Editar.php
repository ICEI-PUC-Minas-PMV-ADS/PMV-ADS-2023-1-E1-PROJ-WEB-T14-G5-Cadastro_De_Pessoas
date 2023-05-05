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
		var categoria = {codigo: <?php echo $codigo; ?>, nome: valor('nome')};
		
		bdd.updateTabela("CATEGORIA", categoria, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Categoria editada com sucesso.");
		p.adicionarBotao('Ok', 'fecharPergunta()');
		p.executar();
	}

	function excluir(){
		var bdd = new Banco_De_Dados();
		var pessoa = {codigo: <?php echo $codigo; ?>};
		
		bdd.deleteTabela("CATEGORIA", pessoa, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Categoria excluída com sucesso.");		
		p.setarMensagem("A categoria foi excluída com sucesso.");
		p.adicionarBotao('Ok', 'gotoURL("/Categorias_Listar.php")');
		p.executar();
	}

	/*
		Carrega os dados da categoria
	*/	
	function carregarCategoria(){
		var bdd = new Banco_De_Dados();
		var categoria = {codigo: '<?php echo @$_GET["codigo"]; ?>'};
		
		var r = bdd.selectTabela("CATEGORIA", categoria, "codigo");

		// Joga direto nos inputs
		for (const [key, value] of Object.entries(r[0])) {			
			SetaValor(key, value);
		}
		
	}

	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Categorias :: Editar uma categoria existente</DIV>

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
	<a href='Categorias_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
	<a href='javascript:excluir()'><img src='/Imagens/Excluir.png'></a>	
	<a href='Categorias_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>

<SCRIPT>
	carregarCategoria();
</SCRIPT>	
