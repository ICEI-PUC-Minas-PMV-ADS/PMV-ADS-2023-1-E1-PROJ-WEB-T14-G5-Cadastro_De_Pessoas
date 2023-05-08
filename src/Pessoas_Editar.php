<?php

	# Inclusão do cabeçalho
	include "Cabecalho.php";

	# Retorna na variável "codigo" o código da pessoa
	$codigo = @$_GET["codigo"];
	
?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>	
	
	function salvar(){
		var bdd = new Banco_De_Dados();
		var pessoa = {codigo: <?php echo $codigo; ?>, cpfcnpj: valor('cpfcnpj'), nome: valor('nome'), apelido: valor('apelido'), categoria: valor('categoria'), telefone: valor('telefone'), email: valor('email'), tipo_logradouro: valor('tipo_logradouro'), logradouro: valor('logradouro'), numero: valor('numero'), complemento: valor('complemento'), bairro: valor('bairro'), cidade: valor('cidade'),  uf: valor('uf'), cep: valor('cep')};		
		bdd.updateTabela("PESSOA", pessoa, "codigo");		
		
		// Salva os campos genéricos preenchidos
		
			//1 - Exclui os previamente preenchidos para esta pessoa
			var rg = {codigoPessoa: <?php echo $codigo; ?>}
			bdd.deleteTabela("PESSOA_TEM_CAMPO_GENERICO", rg);

			//2 - Reinsere os novos preenchimentos
			var r = bdd.selectTabela("CAMPO_GENERICO", {});
		
			for(i in r){			
				var rg = {codigoPessoa: <?php echo $codigo; ?>, codigoCampoGenerico: r[i].codigo, valorCampoGenerico: valor('campo_generico_' + r[i].codigo)}
				bdd.insereTabela("PESSOA_TEM_CAMPO_GENERICO", rg);
			}
			
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Pessoa editada com sucesso.");
		p.adicionarBotao('Ok', 'fecharPergunta()');
		p.executar();
		
	}


	function excluir(){
		var bdd = new Banco_De_Dados();
		var pessoa = {codigo: <?php echo $codigo; ?>};
		
		bdd.deleteTabela("PESSOA", pessoa, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Pessoa excluída com sucesso.");		
		p.setarMensagem("A pessoa foi excluída com sucesso.");
		p.adicionarBotao('Ok', 'gotoURL("/Pessoas_Listar.php")');
		p.executar();
		
	}
	


	/*
		Carrega os dados das pessoas
	*/	
	function carregarPessoa(){
		var bdd = new Banco_De_Dados();
		var pessoa = {codigo: '<?php echo @$_GET["codigo"]; ?>'};
		
		var r = bdd.selectTabela("PESSOA", pessoa, "codigo");

		// Joga direto nos inputs
		for (const [key, value] of Object.entries(r[0])) {			
			SetaValor(key, value);
		}		
		
		
		
		//Carrega os campos genéricos
		
		var r = bdd.selectTabela("PESSOA_TEM_CAMPO_GENERICO", {codigoPessoa: <?php echo $codigo; ?>}, 'codigo');
		
		
		for(i in r){
			
			SetaValor("campo_generico_" + r[i].codigoCampoGenerico, r[i].valorCampoGenerico);
		}				
		
	}

	
	function preencherCategoria(){
		
		var bdd = new Banco_De_Dados();
		
		var r = bdd.selectTabela("CATEGORIA", {});
		
		for(i in r){
			$("#categoria").append("<option value='" + r[i].codigo + "'>" + r[i].nome + "</option>");
		}
		
	}
	
	
	function preencherCamposGenericos(){

		var bdd = new Banco_De_Dados();
		
		var r = bdd.selectTabela("CAMPO_GENERICO", {});
		
		for(i in r){			
			var s = "<DIV class='contenedor_campo'><LABEL>" + r[i].nome + "</LABEL><input type='text' id='campo_generico_" + r[i].codigo + "'></DIV>";									
			$("#contenedor_campos_genericos").append(s);			
		}

	}
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Pessoas :: Editar uma pessoa existente</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Código</LABEL>
			<input type='text' id='codigo'>
		</DIV>		
		
		<DIV class='contenedor_campo'>
			<LABEL>CPF/CNPJ</LABEL>
			<input type='text' id='cpfcnpj'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Nome / Razão Social</LABEL>
			<input type='text' id='nome'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Apelido</LABEL>
			<input type='text' id='apelido'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Categoria</LABEL>
			<SELECT id='categoria'></SELECT>
		</DIV>

		
	</DIV>


	<LABEL>Contatos</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Telefone</LABEL>
			<input type='text' id='telefone'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>E-mail</LABEL>
			<input type='text' id='email'>
		</DIV>
	</DIV>


	<LABEL>Endereço</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Tipo de Logradouro</LABEL>
			<input type='text' id='tipo_logradouro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Logradouro</LABEL>
			<input type='text' id='logradouro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Número</LABEL>
			<input type='text' id='numero'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Complemento</LABEL>
			<input type='text' id='complemento'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Bairro</LABEL>
			<input type='text' id='bairro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Cidade</LABEL>
			<input type='text' id='cidade'>
		</DIV>
		
		<DIV class='contenedor_campo'>
			<LABEL>Estado</LABEL>
			<SELECT id='uf'></SELECT>
		</DIV>
		
		<DIV class='contenedor_campo'>
			<LABEL>CEP</LABEL>
			<input type='text' id='cep'>
		</DIV>				
	</DIV>



	<LABEL>Campos Genéricos</LABEL>

	<DIV class='grupo_campos' id='contenedor_campos_genericos'>
		<!--
		<DIV class='contenedor_campo'>
			<LABEL>Telefone</LABEL>
			<input type='text' id='telefone'>
		</DIV>
		-->

	</DIV>

</DIV>

<!-- Rodapé -->
<DIV id='rodape'>
	<a href='Pessoas_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='/Pessoas_Listar_Contatos.php?codigoPessoa=<?php echo $codigo; ?>'><img src='/Imagens/Telefone.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
	<a href='javascript:excluir()'><img src='/Imagens/Excluir.png'></a>	
	<a href='Pessoas_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>

<SCRIPT>
	
	// Preenche os vínculos
	preencherCategoria();
	preencherCamposGenericos();	
	
	// Preenche os dados
	carregarPessoa();
		
</SCRIPT>	
