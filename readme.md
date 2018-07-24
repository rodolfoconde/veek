# Avaliação VEEK

Utilizado Laravel 5.4<br>
MYSQL

# Requisitos necessários
-PHP >= 7.0.0

-OpenSSL PHP Extension

-PDO PHP Extension

-Mbstring PHP Extension

-Tokenizer PHP Extension

-XML PHP Extension


## Como instalar?

Após clonar o projeto em seu ambiente, siga os seguintes passos:

Utilize o composer  
<pre>
composer install
</pre>

Depois:
<pre>
php artisan key:generate
</pre>


<p>Altere o arquivo .env do seu projeto, mudando as configuraçoes em negrito de acordo com seu banco de dados</p>


<pre>
    DB_CONNECTION=mysql
     DB_HOST=<b>host</b>
     DB_PORT=3306
     DB_DATABASE=<b>database</b>
     DB_USERNAME=<b>usersname</b>
     DB_PASSWORD=<b>password</b>
     </pre>

Após isso, rode o migrate
<pre>
php artisan migrate
</pre>

e Rode seu projeto
<pre>
php artisan serve
</pre>

## Testes API

via Postman
<pre>

<a href=https://www.getpostman.com/collections/d9105dc12b4e76c32451">https://documenter.getpostman.com/collection/view/3434102-a1c14ab5-4486-c023-f5ee-87744b931c72</a>

</pre>

## Comentários sobre o projeto

Prezados, 
Para acessar o projeto, utilize o <b>suaurl</b>/api/user.<br>
Segui o padrão do próprio laravel nas rotas utilizando o resource, a api segue o padrão rest com os códigos de HTTP e apliquei o repository pattern para o projeto.

<br><br>

Listar todos os usuários = [GET] /api/users<br>
Exibir um usuário        = [GET] /api/users/{id}<br>
Criar usuário            = [POST] /api/users<br>
Editar usuário           = [PUT] /api/users<br>
Deletar usuário          = [DELETE] /api/users/{id}<br>

Qualquer dúvida estou a disposição. 