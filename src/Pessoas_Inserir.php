<?php

	include "Cabecalho.php";

?>

<!--
	As funcionalidades em javascript específicas desta página ficarão aqui
-->

<SCRIPT>
	
	function abrirPessoa(codigo){
		
		gotoURL("Pessoas_Editar.php?codigo=" + codigo);
		
	}
	
	
	/*
		Valida os campos
	*/
	function validar(){
		
		var p = new Pessoa();		
		
		if(valor('cpfcnpj') != ""){
			
			if(!CPFCNPJValido(valor('cpfcnpj'))){
				alert('O CPF/CNPJ informado não é valido.');
				return false;
			}
			
			if(p.CPFCNPJEstaCadastrado(valor('cpfcnpj'))){
				alerta('O CPF/CNPJ informado já está sendo utilizado por outra pessoa.');
				return false;   
			}
		}
	
		if(p.nomeEstaCadastrado(valor('nome'))){
		   	alerta('O nome informado já está sendo utilizado em outro registro.');
			return false;   
		}
		
		
		return true;
	}
	
	
	/*
		
	*/
	function salvar(){
		
		if(!validar())
			return;
		
		var bdd = new Banco_De_Dados();
		var pessoa = {cpfcnpj: valor('cpfcnpj'), nome: valor('nome'), apelido: valor('apelido'), categoria: valor('categoria'), telefone: valor('telefone'), email: valor('email'), tipo_logradouro: valor('tipo_logradouro'), logradouro: valor('logradouro'), numero: valor('numero'), complemento: valor('complemento'), bairro: valor('bairro'), cidade: valor('cidade'),  uf: valor('uf'), cep: valor('cep')};
		
		pessoa = bdd.insereTabela("PESSOA", pessoa, "codigo");		
		
		
		// Salva os campos genéricos preenchidos

			//1 - Não precisa aqui
			//2 - Reinsere os novos preenchimentos
			var r = bdd.selectTabela("CAMPO_GENERICO", {});
		
			for(i in r){			
				var rg = {codigoPessoa: pessoa.codigo, codigoCampoGenerico: r[i].codigo, valorCampoGenerico: valor('campo_generico_' + r[i].codigo)}
				bdd.insereTabela("PESSOA_TEM_CAMPO_GENERICO", rg);
			}
					
		
		var p = new Pergunta();
		p.setarTitulo("Mensagem");		
		p.setarMensagem("Pessoa cadastrada com sucesso.");
		p.adicionarBotao('Ok', 'abrirPessoa(' + pessoa.codigo + ')');
		p.executar();
		
			
	}
	
	
	function preencherCategoria(){
		
		var bdd = new Banco_De_Dados();
		
		var r = bdd.selectTabela("CATEGORIA", {});
		
		for(i in r){
			$("#categoria").append("<option value='" + r[i].codigo + "'>" + r[i].nome + "</option>");
		}
		
	}
	
	
	function preencherCamposGenericos(){

		var bdd = new Banco_De_Dados();
		
		var r = bdd.selectTabela("CAMPO_GENERICO", {});
		
		for(i in r){			
			var s = "<DIV class='contenedor_campo'><LABEL>" + r[i].nome + "</LABEL><input type='text' id='campo_generico_" + r[i].codigo + "'></DIV>";									
			$("#contenedor_campos_genericos").append(s);			
		}

	}
	
</SCRIPT>	


<DIV class='formulario'>	
	
	<DIV class='titulo_formulario'>Pessoas :: Inserir uma nova Pessoa</DIV>

	<LABEL>Dados Principais</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>CPF/CNPJ</LABEL>
			<input type='text' id='cpfcnpj'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Nome / Razão Social</LABEL>
			<input type='text' id='nome'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Apelido</LABEL>
			<input type='text' id='apelido'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Categoria</LABEL>
			<SELECT id='categoria'></SELECT>
		</DIV>

		
	</DIV>


	<LABEL>Contatos</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Telefone</LABEL>
			<input type='text' id='telefone'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>E-mail</LABEL>
			<input type='text' id='email'>
		</DIV>
	</DIV>


	<LABEL>Endereço</LABEL>

	<DIV class='grupo_campos'>
		
		<DIV class='contenedor_campo'>
			<LABEL>Tipo de Logradouro</LABEL>
			<input type='text' id='tipo_logradouro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Logradouro</LABEL>
			<input type='text' id='logradouro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Número</LABEL>
			<input type='text' id='numero'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Complemento</LABEL>
			<input type='text' id='complemento'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Bairro</LABEL>
			<input type='text' id='bairro'>
		</DIV>

		<DIV class='contenedor_campo'>
			<LABEL>Cidade</LABEL>
			<input type='text' id='cidade'>
		</DIV>
		
		<DIV class='contenedor_campo'>
			<LABEL>Estado</LABEL>
			<SELECT id='uf'></SELECT>
		</DIV>
		
		<DIV class='contenedor_campo'>
			<LABEL>CEP</LABEL>
			<input type='text' id='cep'>
		</DIV>				
	</DIV>



	<LABEL>Campos Genéricos</LABEL>

	<DIV class='grupo_campos' id='contenedor_campos_genericos'>
		<!--
		<DIV class='contenedor_campo'>
			<LABEL>Telefone</LABEL>
			<input type='text' id='telefone'>
		</DIV>
		-->

	</DIV>


	
</DIV>	

<DIV id='rodape'>
	<a href='/Pessoas_Listar.php'><img src='/Imagens/VoltarParaListagem.png'></a>
	<a href='javascript:salvar()'><img src='/Imagens/Salvar.png'></a>
</DIV>


<SCRIPT>
	
	preencherCategoria();
	preencherCamposGenericos();
	
</SCRIPT>	
