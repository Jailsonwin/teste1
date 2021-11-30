# Como instalar e rodar o CRUD


Cria o projeto com o comando: `composer create-project codeigniter4/appstarter teste1`

Após criar o projeto roda o comando: `composer update`

Faz o clone do projeto com o comando: `git clone https://github.com/Jailsonwin/teste1.git`

Renomeia o arquivo env para `.env` e altera a linha # CI_ENVIRONMENT = production para CI_ENVIRONMENT = development

Configura o `.env` de acordo com o seu banco de dados.

Após Configurar o Banco de Dados, roda o comando: `php spark migrate`

Para Rodar o Projeto no Servidor e testar utilize o comando: `php spark serve`
