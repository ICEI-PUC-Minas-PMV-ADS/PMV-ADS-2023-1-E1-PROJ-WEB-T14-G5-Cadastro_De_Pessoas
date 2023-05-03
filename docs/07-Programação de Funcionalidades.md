
## 7. Funcionalidades do sistema
Nesta seção são apresentadas as telas desenvolvidas para cada uma das funcionalidades do sistema. O endereço para acesso ao sistema é https://cp.multiaccess.com.br. Outras orientações de acesso serão apresentadas na sequência.

Todas as telas utilizam alguns artefatos compartilhados, aqui descrito os artefatos comuns em forma hierárquica.

- Cabecalho.php
	- /js/jquery-3.3.1.min.js
	- /js/Funcoes.js
	- /js/Banco_De_Dados.js
	- /js/Usuario.js
	- /js/Pergunta.js
	
	- /css/Padrao.css
	- /css/Pergunta.css
	
	- /Imagens/Logotipo.png
	- /Imagens/Menu.png

### 7.1 Login
Esta é a tela inicial do sistema. Permite que os usuários possam se autenticar e entrar no sistema. Fornece também um link para recuperação de senha perdida.

<p align='center'>
<img src='img/07/Login.png'><BR>
Figura X – Tela inicial
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - index.php

### 7.2 Recuperação de senha

É a tela que permite a recuperação do login em caso de senha perdida. Como o sistema não fornece as tecnologias backend, irá inserir ou editar um usuário "admin" com senha "admin".

<p align='center'>
<img src='img/07/Recuperar_Senha.png'><BR>
Figura X – Tela de recuperação de senha
</p>


| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Recuperacao_Senha.php

### 7.3 Menu de Opções

Acessado a partir do menu sanduíche, permite acessar as principais áreas do sistema: Cadastro de pessoas, categorias, usuários e campos genéricos.

<p align='center'>
<img src='img/07/Opcoes.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA | 

Artefatos específicos:
 - Opcoes.php

### 7.4 Categorias :: Listagem

Permite listar a categorias já cadastradas, com opção de busca, e acesso às ferramentas de edição e inserção de uma nova categoria.

<p align='center'>
<img src='img/07/Categorias_Listar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Categorias_Listar.php

### 7.5 Categorias :: Inserção

Permite inserir uma nova categoria.

<p align='center'>
<img src='img/07/Categorias_Inserir.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Categorias_Inserir.php


### 7.6 Categorias :: Edição

Permite editar uma categoria já cadastrada, com opção de exclusão.

<p align='center'>
<img src='img/07/Categorias_Editar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Categorias_Editar.php


### 7.4 Pessoas :: Listagem

Permite listar a pessoass já cadastradas, com opção de busca, e acesso às ferramentas de edição e inserção de uma nova pessoa.

[TELA_RECUPERAR_SENHA.png]

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |



### 7.5 Pessoas :: Inserção

Permite inserir uma nova pessoa.

<p align='center'>
<img src='img/07/Pessoas_Inserir.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Pessoas_Inserir.php


### 7.6 Pessoas :: Edição

Permite editar uma pessoa já cadastrada, com opção de exclusão.

[TELA_RECUPERAR_SENHA.png]

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Pessoas_Editar.php



### 7.4 Cadastro Genérico :: Listagem

Permite listar os campos genéricos já cadastrados, com opção de busca, e acesso às ferramentas de edição e inserção de um novo campo genérico.

<p align='center'>
<img src='img/07/Cadastro_Generico_Listar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Campos_Genericos_Listar.php



### 7.5 Cadastro Genérico :: Inserção

Permite inserir um novo campo genérico.

<p align='center'>
<img src='img/07/Cadastro_Generico_Inserir.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Campos_Genericos_Inserir.php

### 7.6 Cadastro Genérico :: Edição

Permite editar um campo genérico já cadastrado, com opção de exclusão.

<p align='center'>
<img src='img/07/Cadastro_Generico_Editar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-8 | O sistema deverá cadastrar usuários, e utilizar estes usuários para autenticação do sistema |
| RNF-4 | O sistema não poderá funcionar sem acesso autorizado. |

Artefatos específicos:
 - Campos_Genericos_Editar.php

### 7.4 Usuários :: Listagem

Permite listar os usuários já cadastrados, com opção de busca, e acesso às ferramentas de edição e inserção de uma novo usuário.

<p align='center'>
<img src='img/07/Usuarios_Listar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Usuarios_Listar.php

### 7.5 Usuários :: Inserção

Permite listar os usuários já cadastrados, com opção de busca, e acesso às ferramentas de edição e inserção de uma novo usuário.

<p align='center'>
<img src='img/07/Usuarios_Inserir.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Usuarios_Inserir.php

### 7.6 Usuários :: Edição

Permite editar um usuário já cadastrado, com opção de exclusão.

<p align='center'>
<img src='img/07/Usuarios_Editar.png'><BR>
Figura X – Tela de opções
</p>

| Requisitos atendidos | Cópia do Requisito |
| --- | --- |
| RF-01 | BLA BLA BLA |
| RF-02 | BLA BLA BLA |

Artefatos específicos:
 - Usuarios_Editar.php


### 7.7 Estrutura de dados

Todas as informações são gravadas em JSON no localstorage através do objeto de persistência Banco_De_Dados, que simula uma inserção, exclusão, consulta e atualização como em um SGDB.

| Área do sistema | Exemplo em JSON|
| --- | --- | 
| Usuários / Login | [{"nome":"admin","cpf":"00000000000","senha":"123","codigo":1}] |
| Categorias | [{"nome":"Pacientes","codigo":1},{"nome":"Médicos","codigo":2}] |
| Campos Genéricos | [{"nome":"Doença","codigo":1},{"nome":"Medicamentos em Uso","codigo":2}]
| Pessoas  | [{"cpfcnpj":"12345678909","nome":"Andrey Bibiano Jardim","apelido":"Dedey","categoria":"1","telefone":"(32) 98812-9751","email":"andreyjardim@yahoo.com","tipo_logradouro":"","logradouro":"","numero":"","complemento":"","bairro":"","cidade":"","uf":false,"cep":"","codigo":1}]
| Pessoas / Campos genéricos preenchidos | [{"codigoPessoa":1,"codigoCampoGenerico":1,"valorCampoGenerico":"Autismo","codigo":3},{"codigoPessoa":1,"codigoCampoGenerico":2,"valorCampoGenerico":"Fenoxazolina","codigo":4}] |

### 7.8 Instruções de acesso ao sistema

1. Abra um navegador de Internet e informe a seguinte URL: https://cp.multiaccess.com.br
2. Caso seja seu primeiro acesso, clique em "Entrar". O sistema irá automaticamente criar um usuário 00000000000 e senha "123".
3. Preencha o campo com suas credenciais e clique em entrar.
4. Navegue no sistema através dos botões de ação da tela ativa, ou busque novas telas através do menu sanduíche, conforme diagrama constante em "4.1 Fluxo do Usuário"
