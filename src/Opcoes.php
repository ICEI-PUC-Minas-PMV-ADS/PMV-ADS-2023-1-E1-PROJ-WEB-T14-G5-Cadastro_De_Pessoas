<?php

	include "Cabecalho.php";

?>

<SCRIPT>
	
	function sair(){
		localStorage.removeItem("cpf");
		gotoURL("/");
	}
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>MENU DE OPÇÕES</DIV>
	
	<TABLE onClick="javascript:gotoURL('Categorias_Listar.php')" class='botao_opcao'>
		<TR>
			<TD><img src='/Imagens/Opcoes.png'></TD>
			<TD><B>Categorias</B><BR>Permite editar as categorias das pessoas</TD>
		</TR>
	</TABLE>
	
	<TABLE onClick="javascript:gotoURL('Pessoas_Listar.php')" class='botao_opcao'>
		<TR>
			<TD><img src='/Imagens/Opcoes.png'></TD>
			<TD><B>Pessoas</B><BR>Permite editar as pessoas</TD>
		</TR>
	</TABLE>
		
	<TABLE onClick="javascript:gotoURL('Campos_Genericos_Listar.php')" class='botao_opcao'>
		<TR>
			<TD><img src='/Imagens/Opcoes.png'></TD>
			<TD><B>Campos Genéricos</B><BR>Permite editar os campos genéricos</TD>
		</TR>
	</TABLE>
	
	<TABLE onClick="javascript:gotoURL('Usuarios_Listar.php')" class='botao_opcao'>
		<TR>
			<TD><img src='/Imagens/Opcoes.png'></TD>
			<TD><B>Usuários</B><BR>Permite editar os usuários</TD>
		</TR>
	</TABLE>	
	
	<TABLE onClick="javascript:sair()" class='botao_opcao'>
		<TR>
			<TD><img src='/Imagens/Opcoes.png'></TD>
			<TD><B>Sair</B><BR>Finaliza a sessão e volta para tela de login</TD>
		</TR>
	</TABLE>	
	
</DIV>	