<?php

	include "Cabecalho.php";

?>
	

<SCRIPT>
	
	function recuperarSenha(){

		var bdd = new Banco_De_Dados();

	
		var usuario = {cpf: valor('cpf'), senha: '123'};
		bdd.updateTabela("USUARIO", usuario, "cpf");		

		alerta("Atualizamos sua senha para 123. ");	

			
		
	}
	
</SCRIPT>	

<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Recuperação de Senha</DIV>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>CPF</LABEL>
			<input type='text' id='cpf'>
		</DIV>

		<DIV class='contenedor_campo_botao'>
			<a class='botao' href='javascript:recuperarSenha()'>Recuperar Senha</a>
		</DIV>
				
		
	</DIV>

	<DIV style='text-align:left'><a href='/' class='cliqueaqui'>Voltar</a></DIV>					

	
</DIV>	