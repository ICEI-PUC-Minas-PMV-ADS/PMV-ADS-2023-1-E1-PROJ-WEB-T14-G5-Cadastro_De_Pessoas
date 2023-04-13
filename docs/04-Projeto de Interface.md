# 4. Projeto de Interface
Dentre as preocupações para a montagem da interface do sistema, estamos estabelecendo foco em questões como agilidade, acessibilidade e usabilidade. Desta forma, o projeto tem uma identidade visual padronizada em todas as telas que são projetadas para funcionamento em desktops e dispositivos móveis.

## 4.1 Fluxo do Usuário
O diagrama apresentado na Figura X mostra o fluxo de interação do usuário pelas telas do sistema. Cada uma das telas deste fluxo é detalhada na seção de Wireframes que se segue. Para visualizar o wireframe interativo, acesse o ambiente MarvelApp do projeto no endereço https://marvelapp.com/prototype/6ad1204/screen/91220260.


<CENTER>
<img src='img/telas/Fluxo1.png'>
Figura X – Fluxo 1
</CENTER>


## 4.2 Wireframes
Conforme os fluxos de telas do projeto, apresentado no item anterior, as telas do sistema são apresentadas em detalhes...

* Cabeçalho - Local onde ficam o logotipo do sistema e menu de acessibilidade (menu sanduíche);
* Conteúdo - Apresenta o conteúdo da tela acessada

<CENTER>
<img src='img/telas/Estrutura.png'>
Figura X – Estrutura padrão do sistema
</CENTER>

### Tela – Inicial

A tela inicial é a tela de autenticação, que consiste no cabeçalho padrão (sem o menu sanduíche), e no contenedor de conteúdo contendo os seguintes elementos:

* Título “ENTRAR NO SISTEMA”;
* Campo para informar o CPF;
* Campo para informar a senha de acesso;
* Botão para entrar;
* Link para recuperação de senha.

Ao se preencher os campos CPF e Senha, e clicando o botão “Entrar”, o sistema irá, caso seja inserido as credenciais corretas de um usuário, realizar a autenticação e entrar no sistema.

Caso o atalho “Esqueci minha Senha” seja acionada, o sistema irá ser redirecionado para a tela de recuperação de senha.

<img src='img/telas/Tela_Inicial.png' style='text-align:center'>
Figura X – Tela Inicial


### Tela – Recuperação de Senha

A tela de recuperação de senha consiste no cabeçalho padrão (sem o menu sanduíche), e no contenedor de conteúdo contendo os seguintes elementos:

* Título “RECUPERAÇÃO DE SENHA”;
* Campo para preenchimento do CPF da conta a ser recuperada;
* Botão “Recuperar Senha”;
* Atalho “Voltar”.

Ao se preencher o campo com o CPF da conta a ter sua senha recuperada, caso o CPF esteja corretamente cadastrado no cadastro de usuários, o sistema irá enviar um link para recuperação da senha.

Caso seja clicado no atalho “Voltar”, o sistema retornará para a tela inicial de autenticação.

<CENTER><img src='img/telas/Recuperacao_Senha.png'></CENTER>
<CENTER>Figura X – Tela Recuperacao de Senha</CENTER>


### Tela – Menu de Opções

A tela de menu de opções apresentará o cabeçalho sem o menu sanduíche (que aponta para este mesma tela), juntamente com os seguintes elementos:

* Título “MENU DE OPÇÕES”;
* Botão “Categorias”;
* Botão “Pessoas”;
* Botão “Campos Genéricos”;
* Botão “Usuários”
* Botão “Sair”.

Clicando-se no botão “Categorias”, o sistema será redirecionado para a listagem de categorias. O mesmo comportamento se repete nos botões “Pessoas”, “Campos genéricos”, “Usuários”. A única exceção é o botão “Sair”, que finaliza a sessão e o sistema retorna para a tela de autenticação.

<CENTER>
<img src='img/telas/Opcoes.png'>
Figura X - Tela de opções
</CENTER>

### Pessoas

#### Tela - Listagem de pessoas

A tela de listagem de pessoas consiste no cabeçalho padrão contendo o menu sanduíche. Este menu irá aparecer em todas as telas, exceto nas telas de recuperação de senha e tela de entrada do sistema. Esta tela apresenta os seguintes elementos:
* Cabeçalho com o menu sanduíche
* Título “PESSOAS :: LISTAGEM”
* Campo de texto para busca de informações
* Uma grade com as informaçõe conforme a busca realizada.
* Botão “Adicionar”.


Cada linha da grade de busca irá apresentar os seguintes elementos:
* Dados da pessoa (detalhar?)
* Botão de edição

Alterando-se o conteúdo da busca, automaticamente a grade é atualizada com os dados da busca.
Clicando-se no botão “Adicionar”, o sistema irá apresentar a tela de inserção de pessoas.
Clicando-se no menu sanduíche, o sistema irá apresentar a tela de menu.

<CENTER>
<img src='img/telas/Tela_Listagem_Pessoas.png'>
Figura X – Tela de listagem de pessoas
</CENTER>


#### Tela - Inserir uma nova pessoa

A tela de edição de uma pessoa existente consiste no cabeçalho padrão contendo o menu sanduíche e os seguintes elementos:
* Título “INSERIR UMA NOVA PESSOA”;
* Grupo “Endereço”
    * Tipo de logradouro  (Rua, Avenida, Travessa...)
    * Logradouro
* Botão “Voltar para Lista”
* Botão “Salvar”.

Clicando-se no botão “Voltar para Lista”, o sistema irá ser direcionado para a listagem de pessoas já cadastradas.
Clicando-se no botão “Salvar”, o sistema irá inserir as novas informações no banco de dados e exibir a mensagem de confirmação.

<CENTER>
<img src='img/telas/Inserir_Pessoa.png'>
Figura X - Tela de inserção de pessoas
</CENTER>



#### Tela - Edição de uma pessoa existente

A tela de edição de uma pessoa existente consiste no cabeçalho padrão contendo o menu sanduíche e os seguintes elementos:

* Título “PESSOAS :: EDITAR UMA PESSOA EXISTENTE”;
* Grupo “Dados Principais” contendo: 
    * Código?
    * CPF/CNPJ
    * Nome / Razão Social
    * Apelido
    * Categoria

* Grupo “Contatos”
    * Telefone
    * E-mail

* Grupo “Endereço”
    * Tipo de logradouro  (Rua, Avenida, Travessa...)
    * Logradouro
    * Número
    * Complemento
    * Bairro
    * Cidade
    * Estado
    * CEP

* Grupo “Campos Genéricos” 
    * Irá apresentar os campos criados na funcionalidade “Campos Genéricos”

* Botão “Voltar para Lista”
* Botão “Salvar”
* Botão “Excluir”

Clicando-se no botão “Lista”, o sistema irá voltar para a tela de listagem de pessoas.
Clicando-se no botão “Salvar”, o sistema irá salvar os dados digitados da pessoa no banco de dados e apresentar a tela de confirmação de salvamento das informações.
Clicando-se no botão “Excluir”, o sistema irá apresentar uma pergunta. Caso seja confirmada, o registro referente a esta pessoa será excluído.

<CENTER>
<img src='img/telas/Editar_Pessoa.png'>
Figura X - Tela de edição de uma pessoa já cadastrada
</CENTER>


### Categorias

#### Tela - Listagem de Categorias

A tela de listagem de categorias consiste no cabeçalho padrão contendo o menu sanduíche além dos seguintes elementos:
* Título “CATEGORIAS :: LISTAGEM”
* Campo de texto para busca de informações
* Uma grade com as informações conforme a busca realizada.
* Botão “Adicionar”.

Ao se clicar no botão “Adicionar”, o sistema irá apresentar a tela de inserção de uma nova categoria.


#### Tela - Inserir uma nova categoria

A tela de inserção de uma nova categoria a consiste no cabeçalho padrão contendo o menu sanduíche além dos seguintes elementos:

* Título “CATEGORIAS :: INSERIR UMA NOVA CATEGORIA”
* Grupo “Dados Principais” com os seguintes campos:
    * Código
    * Descrição

* Botão “Voltar para lista”;
* Botão “Salvar”.


O campo código será automático e preenchido após salvar.

Ao se clicar no botão “Salvar”, o sistema irá gravar a nova categoria no banco de dados e exibir a mensagem de confirmação.

Ao se clicar no botão “Voltar para listagem”, o sistema irá voltar para a listagem de categorias sem salvar os dados preenchidos.

#### Tela – Editar uma categoria existente

A tela de edição de uma categoria já existente consiste no cabeçalho padrão contendo o menu sanduíche além dos seguintes elementos:

* Título “CATEGORIAS :: EDITAR UMA CATEGORIA EXISTENTE”
* Grupo “Dados Principais” com os seguintes campos:
    * Código
    * Descrição

* Botão “Voltar para lista”;
* Botão “Salvar”;
* Botão “Excluir”.


O campo código será automático e preenchido após salvar.

Ao se clicar no botão “Salvar”, o sistema irá atualizar categoria no banco de dados e exibir a mensagem de confirmação.
Ao se clicar no botão “Voltar para listagem”, o sistema irá voltar para a listagem de categorias sem salvar os dados preenchidos.
Ao se clicar no botão “Excluir”, o sistema irá, após confirmação, excluir esta categoria do banco de dados.

### Usuários
#### Tela - Listagem de usuários
A tela de listagem de usuários consiste no cabeçalho padrão contendo o menu sanduíche além dos seguintes elementos:
* Título “USUÁRIOS :: LISTAGEM”
* Campo de texto para busca de informações
* Uma grade com as informações conforme a busca realizada.
* Botão “Adicionar”.

Ao clicar no botão “Adicionar”, o sistema irá apresentar a tela de inserção de um novo usuário.

#### Tela - Inserir um novo usuários
#### Tela - Editar um usuário existente

### Campos genéricos

#### Tela - Listagem de campos genéricos

A tela de listagem de campos genéricos permiti listar os campos adicionais no cadastro de pessoas. 

<img src='img/telas/tela-cadastro-genericos.png'>

Figura X - Tela de listagem de campos genérico


#### Tela - Inserir um novo campo genérico

A tela de adição possibilita a inclusão de novos campos genéricos no cadastro de pessoas.

<img src='img/telas/tela-campo-generico-inserir.png'>  

Figura X - Tela de inserir um novo campo genérico

#### Tela - Editar um campo genérico existente

A tela de edição permite a modificação dos campos genéricos já existentes no cadastro de pessoas.

<img src='img/telas/tela-campo-generico-editar.png'>

Figura X - Tela de editar um campo genérico existente
