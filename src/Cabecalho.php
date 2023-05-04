<!DOCTYPE html>

	<HEAD>		
		<TITLE>Cadastro de Pessoas</TITLE>				
		
		<!-- Carrega as funções -->		
		<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/js/Funcoes.js"></script>
		
		<!-- Carrega as funções específicas deste módulo -->
		<script type="text/javascript" src="/js/Banco_De_Dados.js"></script>		
		<script type="text/javascript" src="/js/Usuario.js"></script>		
		<script type="text/javascript" src="/js/Pergunta.js"></script>		
		
		<!-- Carrega a folha de estilos -->
		<LINK REL='stylesheet' href='/css/Padrao.css'>
		<LINK REL='stylesheet' href='/css/Pergunta.css'>
		
	</HEAD>


	<TABLE id='cabecalho'>
		
		<TR>
			<TD style='width:1px'><img src='/Imagens/Logotipo.png'></TD>
			<TD style="font-size: 1.5em;">Cadastro de Pessoas</TD>
			<TD style='width:1px' id='contenedorMenuTopo'></TD>
		</TR>
		
	</TABLE>
	
<SCRIPT>	


	var cpf = localStorage.getItem("cpf");
	
	if("cpf" in localStorage){
		$("#contenedorMenuTopo").append("<a href='/Opcoes.php'><img src='/Imagens/Menu.png'></a>");
	}

</SCRIPT>	