<?php

	include "Cabecalho.php";

	$codigo = $_GET["codigo"];

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->

<SCRIPT>
	
	var codigoPessoa;
		
	function voltarParaLista(){
		gotoURL("/Pessoas_Listar_Contatos.php?codigoPessoa=" + codigoPessoa);
	}	
		
	function salvar(){
		
		var bdd = new Banco_De_Dados();
		var PESSOA_CONTATO = {data: valor('data'), hora: valor('hora'), forma: valor('forma'), codigo: <?php echo $codigo; ?>};
		
		bdd.updateTabela("PESSOA_CONTATO", PESSOA_CONTATO, "codigo");		
				
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("O Contato realizado foi salvo com sucesso.");
		p.adicionarBotao('Ok', 'fecharPergunta()');
		p.executar();
		
	}
	

	function excluir(){
		var bdd = new Banco_De_Dados();
		var PESSOA_CONTATO = {codigo: <?php echo $codigo; ?>};
		
		bdd.deleteTabela("PESSOA_CONTATO", PESSOA_CONTATO, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("O contato com a pessoa foi excluído com sucesso.");		
		p.setarMensagem("O contato com a pessoa foi excluído com sucesso.");
		p.adicionarBotao('Ok', 'gotoURL("/Pessoas_Listar_Contatos.php?codigoPessoa=' + codigoPessoa + '")');
		p.executar();
	}

	/*
		Carrega os dados da categoria
	*/	
	function carregarContato(){
		var bdd = new Banco_De_Dados();
		var PESSOA_CONTATO = {codigo: '<?php echo @$_GET["codigo"]; ?>'};
		
		var r = bdd.selectTabela("PESSOA_CONTATO", PESSOA_CONTATO, "codigo");

		// Joga direto nos inputs
		for (const [key, value] of Object.entries(r[0])) {	
			
			if(document.getElementById(key)){					
				SetaValor(key, value);
			}else{
				
				if(key == "codigoPessoa"){
					codigoPessoa = value;
				}
				
			}
		}
		
	}
	
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Pessoas :: Editar um contato realizado</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>
		<DIV class='contenedor_campo'>
			<LABEL>Data</LABEL>
			<input type='text' id='data'>
		</DIV>
		<DIV class='contenedor_campo'>
			<LABEL>Hora</LABEL>
			<input type='text' id='hora'>
		</DIV>
		<DIV class='contenedor_campo'>
			<LABEL>Forma de contato</LABEL>
			<SELECT id='forma'>
				<option>Telefone</option>	
				<option>E-mail</option>	
				<option>Pessoalmente</option>	
				<option>Whatsapp</option>	
				<option>Telegram</option>	
			</SELECT>
		</DIV>
	</DIV>
	
</DIV>	

<DIV id='rodape'>
	<a href='javascript:voltarParaLista()'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
	<a href='javascript:excluir()'><img src='/Imagens/Excluir.png'></a>	
</DIV>


<SCRIPT>
	carregarContato();
</SCRIPT>	
