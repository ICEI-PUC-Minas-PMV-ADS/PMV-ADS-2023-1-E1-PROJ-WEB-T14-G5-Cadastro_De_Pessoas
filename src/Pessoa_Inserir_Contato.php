<?php

	include "Cabecalho.php";


	$codigoPessoa = $_GET["codigoPessoa"];

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->

<SCRIPT>
	
	function abrirContato(codigo){
		
		gotoURL("Pessoa_Editar_Contato.php?codigo=" + codigo);
		
	}
	
	function salvar(){
		
		var bdd = new Banco_De_Dados();
		var PESSOA_CONTATO = {data: valor('data'), hora: valor('hora'), forma: valor('forma'), codigoPessoa: <?php echo $codigoPessoa; ?>};
		
		PESSOA_CONTATO = bdd.insereTabela("PESSOA_CONTATO", PESSOA_CONTATO, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("O Contato realizado foi cadastrado com sucesso.");
		p.adicionarBotao('Ok', 'abrirContato(' + PESSOA_CONTATO.codigo + ')');
		p.executar();
		
	}
	
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Pessoas :: Cadastrar contato realizado</DIV>

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
	<a href='/Pessoas_Listar_Contatos.php?codigoPessoa=<?php echo $codigoPessoa; ?>'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>

</DIV>

