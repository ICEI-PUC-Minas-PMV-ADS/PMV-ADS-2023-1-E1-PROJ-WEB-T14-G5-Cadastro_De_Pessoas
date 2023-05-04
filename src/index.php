<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->
<SCRIPT>
	
	
	
	/*
		Se veio para essa tela		
	*/	
	
	
	function entrarNoSistema(){
		
		
		var bdd = new Banco_De_Dados();
		
		var usuario = {cpf: "00000000000"};
		resposta = bdd.selectTabela("USUARIO", usuario);	
		
		if(bdd.numeroDeLinhasDaUltimaConsulta == 0){
			var usuario = {nome: "admin", cpf: '00000000000', senha: ''};
			bdd.insereTabela("USUARIO", usuario);			
			alerta("Nenhum usuário existia no sistema. Criamos um usuário administrativo, cpf 00000000000, senha vazia.");	
			return;
		}
		
		
		
		
		var u = new Usuario();
		
		if(u.verificarSeUsuarioExiste(valor('cpf'), valor('senha'))){
						
			localStorage.setItem("cpf", valor('cpf'));			
			
			gotoURL("Pessoas_Listar.php");
						
		}else{
			
			alerta('Par CPF/Senha inválidos!');
						
		}
		
	}
	
</SCRIPT>		


<!--
	Desenha o formulário de entrada
-->

<DIV class='formulario'>
	
	<DIV class='titulo_formulario'>Entrar no sistema</DIV>

	<DIV class='grupo_campos'>		
		
		<DIV class='contenedor_campo'>
			<LABEL>CPF</LABEL>
			<input type='text' id='cpf'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Senha</LABEL>
			<input type='password' id='senha'>
		</DIV>

		<DIV class='contenedor_campo_botao'>
		
			<button class='botao' href='javascript:entrarNoSistema()'><img src="imagens/user.png" style="width: 25%;">Entrar</button>
		</DIV>
		
	</DIV>

	<DIV style='text-align:right'><a href='Recuperacao_Senha.php' class='cliqueaqui'>Esqueci minha senha</a></DIV>	

	
</DIV>	