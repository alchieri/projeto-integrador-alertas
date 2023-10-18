<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Ferramentas necessárias

 - Docker [https://docker.com]
 - PHP [https://www.php.net/]
 - Composer [https://getcomposer.org/]
 - NPM - Node Package Manager [https://nodejs.org/en]

## Composer

Instalação NNF (Next, next, finish)

```composer --version```

deve aparecer informações sobre a versão instalado do composer.

Caso tenha aparecido msg de erro precisa configurar a variável de ambiente PATH

```SETX PATH "%USERPROFILE%\AppData\Roaming\Composer\vendor\bin;%PATH%"```

Para atualizar o composer utilize o comando a seguir:

```composer self-update```

## NPM

Instalação NNF

```npm --version```

A saída do comando deve ser algo com a informação de versão do npm.

Caso tenha aparecido msg de erro precisa configurar a variável de ambiente PATH e para achar a instalação do npm pode ser executado o seguinte comando:

```where npm```

Com o retorno do comando acima em mãos execute a atualização da variável de ambiente PATH:

```SETX PATH="C:\Program Files\nodejs;%PATH"```

Onde C:\Program Files\nodejs será a saída do comando anterior a atualização da variável.

Para atualizar o npm utilize o comando a seguir:

```npm update -g```

## Instalando o Laravel

Para instalar usando o composer:

```composer global require laravel/installer```

Verificando a versão instalada:

```laravel -v```

### Criando um projeto Laravel

execute o comando a seguir trocando [project_name] pelo nome do projeto a ser criado:

```laravel new [project_name]```

> Esse comando deve ser executado no diretório onde se quer criar o projeto.
> O prompt vai "pedindo" as configurações desejadas para o projeto que está sendo criado.

### Iniciando o projeto

Dentro da pasta do projeto execute:

```php artisan serve```

Ao navegar pelo endereço do projeto que por padrão é localhost:8000 irá aparecer a pagina inicial do Laravel.

### Configuração de Banco de Dados

Para utilizar o banco de dados devemos ajustar o arquivo de variáveis do projeto, o .env

Se utilizar PostgreSQL as configurações devem ser algo como o exemplo a seguir:

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=20001
DB_DATABASE=senac_alerta
DB_USERNAME=postgres
DB_PASSWORD=password
```

> Lembre-se de criar o banco de dados no servidor
 ```CREATE DATABASE senac_alerta;```

### Inspecionando rotas

Exibir todas as rotas:

```php artisan route:list```

Exibir somente as rotas GET

```php artisan route:list --method=GET```

Exibir somente as rotas POST

```php artisan route:list --method=POST```

### Criando controladores

Para criar um controlador sem ter ligação com um CRUD:

```php artisan make:controller <ControllerName>```

> Trocar <ControllerName> pelo nome do controlador.

Para criar um controlador de um CRUD:

```php artisan make:controller <ControllerName> --resource```

> Trocar <ControllerName> pelo nome do controlador.

### Criando Models e migrations

Para criar um model já com a migration associada, basta executar o comando a seguir:

```php artisan make:model <NomeDoModel> -m```

> Trocando <NomeDoModel> pelo nome do modelo a ser criado.

Para executar as migrations, utilize o comando a seguir:

```php artisan migrate```

Outros comandos úteis para as migrations:

```php artisan migrate:status```
> mostra quais migrations foram executadas.
```php artisan migrate:reset```
> executa os métodos down() de todos os migrations - zera o banco de dados.
```php artisan migrate:refresh```
> recria o banco de dados - down() e depois up()
```php artisan migrate:fresh```
> não chama o método down(): dropa as tabelas diretamente no banco de dados e cria tudo novamente.

### Instalar o Laravel Breeze

Utilizando o composer instalar o pacote Breeze através do comando a seguir:

```composer require laravel/breeze --dev```

Criar a estrutura de autenticação com as views, controllers e outros elementos, através do comando a seguir:

```php artisan breeze:install```

Para garantir as dependências de JS execute o comando a seguir:

```
npm install

npm run dev
```

O comando **npm run dev** irá iniciar um servidor NPM. Basta fechá-lo.

> [!IMPORTANT]
> Caso você tenha criado o login em um projeto existente, é possível que o Breeze tenha sobrescrito por completo o arquivo web.php. Assim, será necessário redefinir as rotas que já existiam antes do Breeze.