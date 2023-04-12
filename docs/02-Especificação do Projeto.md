# 2. ESPECIFICAÇÃO DO PROJETO

A equipe identificou os desafios e requisitos para o projeto por meio de uma abordagem centrada no usuário. Pesquisas qualitativas foram realizadas para compreender as necessidades e comportamentos dos potenciais usuários. Com base nessas informações, personas e histórias de usuários foram criadas para guiar o desenvolvimento do produto. Essa abordagem ajudou a equipe a garantir uma experiência satisfatória para os usuários e fidelização dos clientes.

## 2.1 Personas
Agora serão apresentadas no quadro a seguir as personas levantadas durante o processo de entendimento do problema.

Quadro 1 – Personas

<TABLE>
	<TR>
		<TD rowspan='2'><img src='img/personas/Alessandra.png' style='height: 100px'></TD>
		<TD colspan='2'>ALESSANDRA</TD>
	</TR>
	<TR>
		<TD>Idade: 39<BR>
Ocupação: Empresária de empresa de festas</TD>
		<TD>Aplicativos:<BR>
• Instagram<BR>
• Facebook
</TD>
	</TR>
	<TR>
		<TD>Motivações<BR>
    • Quer organizar seus clientes e fornecedores</TD>
		<TD>Frustrações<BR>
    • Os sistemas atuais mantém os cadastros separados, tendo que cadastrar duas vezes a mesma pessoa em abas diferentes.</TD>
		<TD>Hobbies, História<BR>
    • Fotografia<BR>
    • Decoração<BR>
    • Mãe de gêmeos</TD>
	</TR>
	
</TABLE>


			
<TABLE>
	<TR>
		<TD rowspan='2'><img src='img/personas/Raquel.png'  style='height: 100px'></TD>
		<TD colspan='2'>RAQUEL</TD>
	</TR>
	<TR>
		<TD>Idade: 54<BR>
Ocupação: Empresária na área de RH</TD>
		<TD>Aplicativos:<BR>
    • Instagram<BR>
    • Facebook<BR></TD>
	</TR>
	<TR>
		<TD>Motivações<BR>
    • Quer organizar seus candidatos<BR>
    • Quer quantificar o número de processos seletivos</TD>
		<TD>Frustrações<BR>
    • Os sistemas atuais são engessados e caros
</TD>
		<TD>Hobbies, História<BR>
    • Leitura<BR>
    • Música<BR>
    • Especialista em RH</TD>
	</TR>
	
</TABLE>






<TABLE>
	<TR>
		<TD rowspan='2'><img src='img/personas/Linthea.png'  style='height: 100px'></TD>
		<TD colspan='2'>Linthéa</TD>
	</TR>
	<TR>
		<TD>Idade: 28<BR>
Ocupação: Funcionária em empresa de RH</TD>
		<TD>Aplicativos:<BR>
    • Instagram<BR>
    • Youtube<BR>
</TD>
	</TR>
	<TR>
		<TD>Motivações<BR>
    • Quer agilidade no trabalho<BR>
    • Precisa de um tempo hábil de resposta aos clientes</TD>
		<TD>Frustrações<BR>
    • Um volume muito grande de seleções, vinculadas a documentos e planilhas
</TD>
		<TD>Hobbies, História<BR>
    • Eventos Evangélicos<BR>
    • Graduada em Psicologia
</TD>
	</TR>
	
</TABLE>
			

<TABLE>
	<TR>
		<TD rowspan='2'><img src='img/personas/Marilia.png'  style='height: 100px'></TD>
		<TD colspan='2'>Marília</TD>
	</TR>
	<TR>
		<TD>Idade: 56<BR>
Ocupação: Psicoterapeuta</TD>
		<TD>Aplicativos:<BR>
    • Duolingo<BR>
    • Youtube</TD>
	</TR>
	<TR>
		<TD>Motivações:<BR>
    • Precisa agrupar os pacientes<BR>
    • Precisa melhorar o fluxo de pacientes, agrupando os da mesma psicopatia.<BR>
</TD>
		<TD>Frustrações:<BR>
    • Não tem tempo de mexer em cadastros complexos, tendo que anotar em agenda de papel.</TD>
		<TD>Hobbies, História<BR>
    • Cozinhar<BR>
    • Graduada em Psicologia</TD>
	</TR>
	
</TABLE>			
			
			
			
Fonte: Elaborado pelos autores com dados extraídos das entrevistas


## 2.2 História de Usuários

As seguintes histórias dos usuários foram registradas pelo entendimento do dia a dia das personas identificadas para o projeto.


| Pessoa | gostaria de | para |
| --- | --- | --- |
| Alessandra | Poder separar quem é fornecedor de cliente | Poder mandar uma mala direta para os fornecedores |
| Alessandra | Poder classificar os bons dos maus fornecedores | Poder dar prioridade de compra aos bons fornecedores |
| Raquel | Poder cadastrar todos os seus clientes | Poder ter um banco de candidatos em um único lugar |
| Linthéa | Poder informar se já entrevistou um candidato da lista | Poder saber se precisa ligar e não ligar novamente |
| Linthéa | Saber a última vez que ligou para o contato | Manter um histórico constante de atendimentos, sem que ele fique esquecido |
| Marília | Saber quem faz aniversário nesse mês | Enviar felicitações da clínica de psicologia |
| Marília | Classificar com marcadores específicas cada paciente | Agrupar pessoas com mesma psicopatia para terapia em grupo |


## 2.3 Requisitos do Projeto

A definição do escopo funcional do projeto ocorre mediante a descrição dos requisitos funcionais, os quais especificam as formas de interação dos usuários, e dos requisitos não funcionais, que determinam os aspectos gerais a serem apresentados pelo sistema. A seguir, são apresentados tais requisitos.

* Fornecer recursos que permitam o cadastro de pessoas e seus dados;
* Permitir a categorização e agrupamento dos contatos;
* Possibilitar a filtragem e ordenação dos contatos, assim como definição de tempo de vida atendendo a Lei Geral de Proteção de Dados.

### 2.3.1 Requisitos Funcionais

A tabela a seguir apresenta os requisitos funcionais do projeto e sua prioridade.

| Código | Descrição | Prioridade |
| --- | --- | --- |
| RF-1 | O sistema deverá cadastrar pessoas físicas ou jurídicas, contendo todos os dados como nome completo, CPF ou CNPJ, telefones e endereço. | Alta |
| RF-2 | O sistema deverá cadastrar categorias para serem vinculadas às pessoas, podendo uma pessoa estar vinculada a mais de uma categoria. | Alta |
| RF-3 | O sistema deverá registrar o histórico de contatos realizados com as pessoas, informando por qual meio (e-mail, telefone, etc). | Baixa |
| RF-4 | O sistema deverá permitir ao usuário filtrar pessoas por filtros | Alta |
| RF-5 | O sistema deverá permitir a exportação da listagem para o Excel | Baixa | 
| RF-6 | O sistema deverá permitir criar campos adicionais no cadastro de pessoas. | Baixa |
| RF-7 | O sistema deverá permitir enviar mala direta para os grupos de pessoas selecionados. | Baixa |
| RF-8 | O sistema deverá ser responsivo, podendo ser utilizado em celular ou computador. | Alto |
| RF-9 | O sistema deverá ter a interface mais simples, para uso em computadores ou celulares antigos. | Baixo |



### 2.3.2 Requisitos Não Funcionais
A tabela a seguir apresenta os requisitos não funcionais que o projeto deverá atender.

| Código | Descrição |
| --- | --- | 
| RNF-1 | O sistema deverá permitir trabalhar de forma offline no celular. | 
| RNF-2 | O sistema deverá permitir que se cadastre um milhão de pessoas. | 
| RNF-3 | Garantir boas práticas de desenvolvimento evitando um SQL Injection. |
| RNF-4 | O sistema não poderá funcionar sem acesso autorizado. |
| RNF-5 | O sistema deverá estar em conformidade com a Lei Geral de Proteção de Dados. |
| RNF-6 | O banco de dados deverá estar situado em um servidor Linux não compartilhado. |
| RNF-7 | O banco de dados deverá estar em um HD SSD para melhor desempenho. |


### 2.3.3 Requisitos de negócios
A tabela a seguir apresenta os requisitos de negócios que o projeto deverá atender.

| Código | Descrição | Prioridade |
| --- | --- | --- | 
| RN-01 | Apenas os usuários administrativos podem criar campos genéricos. | Alta |
| RN-02 | Os campos adicionais criados pelos usuários não podem ter os nomes repetidos. | Baixa |
| RN-03 | Não se pode cadastrar mais de uma pessoa com o mesmo nome completo repetidamente. | Média |
| RN-04 | O sistema deve bloquear o IP do usuário que tentar entrar com login e senha errados por mais de 3 vezes. | Baixa |
| RN-05 | O nome da pessoa deve ser obrigatório. | Alta |
| RN-06 | O sistema deve possuir um histórico de alterações. | Média |
| RN-07 | Todos os CPFs e CNPJs das pessoas cadastradas devem ser validados.| Alta |
| RN-08 | Cada pessoa deverá ter um código incremental único. | Alta | 
| RN-09 | Cada usuário deverá ser uma pessoa pré-cadastrada no sistema.| Alta | 
	

### 2.3.4 Restrições 
As questões que limitam a execução do projeto são apresentadas na tabela a seguir.
			
| Código | Descrição | Prioridade |
| --- | --- | --- |
| RE-01 | A etapa inicial do projeto deverá cumprir o prazo de 31/03/2023. | Alta | 
| RE-02 | O sistema deverá ser desenvolvido utilizando-se linguagens de programação que não requeiram licença de software paga. | Baixa |
| RE-03 | O programa não pode ultrapassar 50 MB. | Média |
| RE-04 | O sistema não poderá utilizar trechos de programas já existentes. | Alta |

