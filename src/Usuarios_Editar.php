<?php

	include "Cabecalho.php";
	
	# Retorna na variável "cpf" o cpf do usuário
	$cpf = @$_GET["cpf"];	

?>


<SCRIPT>
	
	
	function salvar(){
		
		// Validacoes
		if(valor('senha') != valor('senha2')){
			alerta('As senhas devem ser iguais.');
			return;
		}
				
		var bdd = new Banco_De_Dados();
		var usuario = {cpf: valor('cpf')};
		bdd.deleteTabela("USUARIO", usuario);		

		var usuario = {nome: valor('nome'), cpf: valor('cpf'), senha: valor('senha')};
				
		bdd.insereTabela("USUARIO", usuario, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Usuário editado com sucesso.");
		p.adicionarBotao('Ok', 'fecharPergunta()');
		p.executar();
	}

	function excluir(){
		var bdd = new Banco_De_Dados();
		var usuario = {cpf: <?php echo $cpf; ?>};
		
		bdd.deleteTabela("USUARIO", usuario, "codigo");		
		
		var p = new Pergunta();
		p.setarTitulo("Usuário excluído com sucesso.");		
		p.setarMensagem("O usuário foi excluído com sucesso.");
		p.adicionarBotao('Ok', 'gotoURL("/Usuarios_Listar.php")');
		p.executar();
	}

	/*
		Carrega os dados do usuário
	*/	
	function carregarUsuario(){
		var bdd = new Banco_De_Dados();
		var usuario = {cpf: '<?php echo @$_GET["cpf"]; ?>'};
		

		var r = bdd.selectTabela("USUARIO", usuario, "codigo");
	
		

		// Joga direto nos inputs
		for (const [key, value] of Object.entries(r[0])) {			
			SetaValor(key, value);
		}
		
	}

	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Usuários :: Editar um usuário existente</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>

		<DIV class='contenedor_campo'>
			<LABEL>CPF</LABEL>
			<input type='text' id='cpf'>
		</DIV>
		

		<DIV class='contenedor_campo'>
			<LABEL>Nome</LABEL>
			<input type='text' id='nome'>
		</DIV>		
				
		
		<DIV class='contenedor_campo'>
			<LABEL>Senha</LABEL>
			<input type='password' id='senha'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Confirme a senha</LABEL>
			<input type='password' id='senha2'>
		</DIV>
				
	</DIV>

</DIV>	

<DIV id='rodape'>
	<a href='/Usuarios_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
	<a href='javascript:excluir()'><img src='/Imagens/Excluir.png'></a>	
	<a href='Usuarios_Inserir.php'><img src='/Imagens/Adicionar.png'></a>
</DIV>

<SCRIPT>
	carregarUsuario();
</SCRIPT>	
