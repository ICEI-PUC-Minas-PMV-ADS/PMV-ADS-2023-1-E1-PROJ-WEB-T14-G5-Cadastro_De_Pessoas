# Plano de Testes de Software

Apresente os cenários de testes utilizados na realização dos testes da sua aplicação. Escolha cenários de testes que demonstrem os requisitos sendo satisfeitos.

## Requisitos para realização dos testes

Os requisitos para realização dos testes de software são:
    - Computador ou smartphone com acesso a um navegador de internet.    
    - Conectividade de Internet para acesso ao sistema
    
## Casos de teste


### CT-1 - Entrada no sistema sem usuário previamente cadastrado

- Requisitos associados:
    RF-13

- Objetivos:
    Garantir que o sistema vai criar um usuário para acesso ao sistema quando não houver nenhum cadastrado

- Passos:
    1) Abrir o sistema 
    2) Clicar no botão entrar

- Critério de êxito:     
    O sistema deverá mostrar uma mensagem dizendo que o usuário 00000000000 foi criado, com senha em branco
    

### CT-2 - Recuperação de senha de um usuário cadastrado anteriormente

- Requisitos associados:
    RF-5

- Objetivos:
    Garantir que o sistema vai restaurar a senha de um usuário já cadastrado.

- Passos:
    1) Abrir o sistema 
    2) Clicar no link "Esqueci minha senha"
    3) Preencher o CPF do usuário
    4) Clicar no botão "Recuperar Senha"

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que alterou a senha do usuário.
    

### CT-3 - Usuários não cadastrados não podem se autenticar no sistema

- Requisitos associados:
    RF-4

- Objetivos:
    Garantir que apenas usuários cadastrados podem entrar no sistema
    
- Passos:
    1) Abrir o sistema 
    2) Informar um CPF e senha aleatórios
    3) Clicar no botão "Entrar"

- Critério de êxito:     
    O sistema deverá exibir uma mensagem "Par CPF/Senha inválidos!"
    

### CT-4 - Apenas usuários cadastrados podem se autenticar no sistema

- Requisitos associados:
    RF-4

- Objetivos:
    Garantir que apenas usuários cadastrados podem entrar no sistema
    
- Passos:
    1) Abrir o sistema 
    2) Informar um CPF e senha de um usuário já cadastrado anteriormente
    3) Clicar no botão "Entrar"

- Critério de êxito:     
    O sistema deverá exibir a tela de listagem de pessoas.
    
    
### CT-5 - Cadastro de categorias - Inclusão
- Requisitos associados:
    RF-2

- Objetivos:
    Garantir que o sistema vai permitir a inclusão de uma nova categoria.

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Categorias"
    4) Na listagem de categorias, clicar no botão de adicionar
    5) Preencher um nome de categoria, por exemplo, "Medico" (sic)
    6) Clica no botão de salvar

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que a categoria foi cadastrada com sucesso. Esta categoria deverá constar na listagem inicial.
    
    
### CT-6 - Cadastro de categorias - Edição
- Requisitos associados:
    RF-2

- Objetivos:
    Garantir que o sistema vai permitir editar uma categoria já existente.

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Categorias"
    4) Na listagem de categorias, selecionar a categoria a ser alterada. Por exemplo, "Medico" (sic)
    5) Alterar o nome da categoria para "Médico" (sic)
    6) Clica no botão de salvar

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que a categoria foi editada com sucesso. Esta categoria deverá constar na listagem inicial com o nome alterado.
    

### CT-7 - Cadastro de categorias - Exclusão
- Requisitos associados:
    RF-2

- Objetivos:
    Garantir que o sistema vai permitir excluir uma categoria existente

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Categorias"
    4) Na listagem de categorias, selecionar a categoria a ser alterada. Por exemplo, "Médico" (sic)
    5) Clicar no botão de exclusão.

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que a categoria foi excluída com sucesso. Esta categoria não deverá constar na listagem inicial nem na inclusão ou ediç
        
    
### CT-8 - Campos adicionais - Inclusão
- Requisitos associados:
    RF-10

- Objetivos:
    Garantir que o sistema vai permitir a inclusão de campos adicionais (campos genéricos) no cadastro de pessoas

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Campos Genéricos"
    4) Na listagem de campos genéricos, clicar no botão de adicionar
    5) Preencher um nome de campo, por exemplo, "Cor de Cabelo" (sic)
    6) Clica no botão de salvar

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que o campo genérico foi adicionado no sistema. Este campo deverá aparecer na listagem inicial da área de campos genéricos.
    
    
### CT-9 - Campos adicionais - Edição
- Requisitos associados:
    RF-10

- Objetivos:
    Garantir que o sistema vai permitir editar um campo genérico cadastrado anteriormente.

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Campos Genéricos"
    4) Na listagem de campos genéricos, selecionar um campo genérico a ser alterado. Por exemplo, "Cor de cabelo" (sic)
    5) Alterar o nome do campo genérico para "Cor do cabelo" (sic)
    6) Clica no botão de salvar

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que o campo genérico foi editado com sucesso. Este campo deverá constar na listagem inicial da área de campos genéricos.
    

### CT-10 - Campos adicionais - Exclusão
- Requisitos associados:
    RF-10

- Objetivos:
    Garantir que o sistema vai permitir excluir um campo genérico cadastrado anteriormente

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Campos Genéricos"
    4) Na listagem de campos genéricos, selecionar o campo a ser excluído.
    5) Na tela de edição, clicar no botão de exclusão.

- Critério de êxito:     
    O sistema deverá exibir uma mensagem informando que o campo genérico foi excluído com sucesso. Este campo não deverá constar na listagem inicial, nem na tela de inclusão ou edição de pessoas. 
        
    

### CT-11 - Pessoas - Inclusão
 
### CT-12 - Pessoas - Edição

### CT-13 - Pessoas - Excluir

### CT-14 - Busca de pessoas por campos genéricos ou categorias
- Requisitos associados:
    RF-14

- Objetivos:
    Garantir que o sistema vai permitir buscar por pessoas através da busca de categorias ou campos genéricos

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Pessoas"
    4) Na listagem de pessoas, informar no campo de busca o nome de uma categoria já vinculada a uma pessoa ou valor preenchido do campo genérico.

- Critério de êxito:     
    O sistema deverá exibir as pessoas vinculadas à categoria digitada ou valor do campo genérico.
 
### CT-15 - Exportação para excel
- Requisitos associados:
    RF-9

- Objetivos:
    Garantir que o sistema vai gerar um documento compatível com excel ou libreoffice, formato csv, contendo alguns dados as pessoas cadastradas e filtradas na listagem.

- Passos:
    1) Realizar o login no sistema
    2) Clicar no menu sanduíche
    3) Clicar no botão "Pessoas"
    4) Na listagem de pessoas, informar uma busca, seja por nome, categoria ou valor de campo genérico.
    5) Clicar no botão de exportação para Excel.

- Critério de êxito:     
    O navegador de internet irá apresentar o download com o CSV contendo os dados das pessoas filtradas.
 




