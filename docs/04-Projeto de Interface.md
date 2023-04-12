# 4. Projeto de Interface
Dentre as preocupações para a montagem da interface do sistema, estamos estabelecendo foco em questões como agilidade, acessibilidade e usabilidade. Desta forma, o projeto tem uma identidade visual padronizada em todas as telas que são projetadas para funcionamento em desktops e dispositivos móveis.

## 4.1 Fluxo do Usuário
O diagrama apresentado na Figura X mostra o fluxo de interação do usuário pelas telas do sistema. Cada uma das telas deste fluxo é detalhada na seção de Wireframes que se segue. Para visualizar o wireframe interativo, acesse o ambiente MarvelApp do projeto

## 4.2 Wireframes
Conforme os fluxos de telas do projeto, apresentado no item anterior, as telas do sistema são apresentadas em detalhes...

* Cabeçalho - Local onde ficam o logotipo do sistema e menu de acessibilidade (menu sanduíche);
* Conteúdo - Apresenta o conteúdo da tela acessada

<img src='img/interface/Estrutura_Padrao.png'>

Figura X – Estrutura padrão do sistema


### Tela – Inicial

A tela inicial é a tela de autenticação, que consiste no cabeçalho padrão (sem o menu sanduíche), e no contenedor de conteúdo contendo os seguintes elementos:

* Título “ENTRAR NO SISTEMA”;
* Campo para informar o CPF;
* Campo para informar a senha de acesso;
* Botão para entrar;
* Link para recuperação de senha.

Ao se preencher os campos CPF e Senha, e clicando o botão “Entrar”, o sistema irá, caso seja inserido as credenciais corretas de um usuário, realizar a autenticação e entrar no sistema.

Caso o atalho “Esqueci minha Senha” seja acionada, o sistema irá ser redirecionado para a tela de recuperação de senha.

<img src='img/interface/Tela_Inicial.png'>


### Tela – Recuperação de Senha

A tela de recuperação de senha consiste no cabeçalho padrão (sem o menu sanduíche), e no contenedor de conteúdo contendo os seguintes elementos:

    • Título “RECUPERAÇÃO DE SENHA”;
    • Campo para preenchimento do CPF da conta a ser recuperada;
    • Botão “Recuperar Senha”;
    • Atalho “Voltar”.

Ao se preencher o campo com o CPF da conta a ter sua senha recuperada, caso o CPF esteja corretamente cadastrado no cadastro de usuários, o sistema irá enviar um link para recuperação da senha.

Caso seja clicado no atalho “Voltar”, o sistema retornará para a tela inicial de autenticação.


<img src='img/interface/Tela_Recuperacao_Senha.png'>



### Tela – Listagem de pessoas

A tela de listagem de pessoas consiste no cabeçalho padrão contendo o menu sanduíche. Este menu irá aparecer em todas as telas, exceto nas telas de recuperação de senha e tela de entrada do sistema. Esta tela apresenta os seguintes elementos:
    • Cabeçalho com o menu sanduíche
    • Título “PESSOAS :: LISTAGEM”
    • Campo de texto para busca de informações
    • Uma grade com as informaçõe conforme a busca realizada.
    • Botão “Adicionar”.


Cada linha da grade de busca irá apresentar os seguintes elementos:
    • Dados da pessoa (detalhar?)
    • Botão de edição

Alterando-se o conteúdo da busca, automaticamente a grade é atualizada com os dados da busca.
Clicando-se no botão “Adicionar”, o sistema irá apresentar a tela de inserção de pessoas.
Clicando-se no menu sanduíche, o sistema irá apresentar a tela de menu.

<img src='img/interface/Tela_Listagem_Pessoas.png'>



### Tela – Edição de uma pessoa existente

A tela de edição de uma pessoa existente consiste no cabeçalho padrão contendo o menu sanduíche e os seguintes elementos:

    • Título “PESSOAS :: EDITAR UMA PESSOA EXISTENTE”;
    • Grupo “Dados Principais” contendo: 
        ◦ Código?
        ◦ CPF/CNPJ
        ◦ Nome / Razão Social
        ◦ Apelido
        ◦ Categoria.

    • Grupo “Contatos”
        ◦ Telefone
        ◦ E-mail

    • Grupo “Endereço”
        ◦ Tipo de logradouro  (Rua, Avenida, Travessa...)
        ◦ Logradouro
        ◦ Número
        ◦ Complemento
        ◦ Bairro
        ◦ Cidade
        ◦ Estado
        ◦ CEP

    • Grupo “Campos Genéricos” 
        ◦ Irá apresentar os campos criados na funcionalidade “Campos Genéricos”

    • Botão “Voltar para Lista”
    • Botão “Salvar”
    • Botão “Excluir”


Clicando-se no botão “Lista”, o sistema irá voltar para a tela de listagem de pessoas.
Clicando-se no botão “Salvar”, o sistema irá salvar os dados digitados da pessoa no banco de dados e apresentar a tela de confirmação de salvamento das informações.
Clicando-se no botão “Excluir”, o sistema irá apresentar uma pergunta. Caso seja confirmada, o registro referente a esta pessoa será excluído.





