<?php

	# Inclusão do cabeçalho
	include "Cabecalho.php";

	
?>


<SCRIPT>
	
	var bdd = new Banco_De_Dados();
	
	var rrr = bdd.selectTabela("PESSOA_TEM_CAMPO_GENERICO", {"codigoPessoa": 1, "codigoCampoGenerico": 1}, 'codigo', true);
	
	print_r(rrr);
	
</SCRIPT>
	
	