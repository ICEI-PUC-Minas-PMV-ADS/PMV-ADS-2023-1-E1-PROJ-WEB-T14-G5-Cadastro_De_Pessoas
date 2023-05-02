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
		
		var u = new Usuario();
		
		if(u.verificarSeUsuarioExiste()){
						
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
			<a class='botao' href='javascript:entrarNoSistema()'>Entrar</a>
		</DIV>
		
	</DIV>

	<DIV style='text-align:right'><a href='Recuperacao_Senha.php' class='cliqueaqui'>Esqueci minha senha</a></DIV>	

	
</DIV>	