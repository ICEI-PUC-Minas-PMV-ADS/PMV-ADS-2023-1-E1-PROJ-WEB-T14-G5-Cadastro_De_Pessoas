<?php

	include "Cabecalho.php";

?>



<SCRIPT>
	
	function abrirUsuario(cpf){
		
		gotoURL("Usuarios_Editar.php?cpf=" + cpf);
		
	}

	function validar(){

		if(valor('senha') != valor('senha2')){
			alerta('As senhas devem ser iguais.');
			return false;
		}
		
		var u = new Usuario();
		if(u.verificarSeCPFExiste(valor('cpf'))){
			alerta("Um usuário com este CPF já se encontra cadastrado no sistema.");
			return false;
		}		
		
		return true;

	}

	
	function salvar(){
		
		if(!validar()){
			return;
		}
		
		
		var bdd = new Banco_De_Dados();
		var usuario = {nome: valor('nome'), cpf: valor('cpf'), senha: valor('senha')};
		
		bdd.insereTabela("USUARIO", usuario, "codigo");		
		
		
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Usuário cadastrado com sucesso.");
		p.adicionarBotao('Ok', 'abrirUsuario("' + usuario.cpf + '")');
		p.executar();
		
	}
	
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Usuários :: Inserir um novo usuário</DIV>

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
</DIV>

