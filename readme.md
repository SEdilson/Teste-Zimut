#Teste Zimut

## Stack

0 - Laravel 5.7
1 - Bootstrap 4
2 - MySQL

Para utilizar o MySQL eu instalei o [XAMPP](https://www.apachefriends.org/pt_br/index.html)

## Como Instalar

* Baixe ou clone esse repositório e instale as dependências

```sh
git clone https://github.com/SEdilson/Teste-Zimut.git
cd teste-zimut
npm install
npm run dev
``` 

## Configurando XAMPP

Ao instalar o XAMPP vá na aba config do serviço Apache e abra o arquivo httpd.conf, lá você vai mudar o caminho do DocumentRoot para o caminho do diretório baixado.

## Usando o XAMPP

Os serviços necessários para usar a aplicação serão o Apache e o MySQL, para saber se os serviços estão funcionando no navegador acesse localhost e localhost/phpmyadmin. O usuário e a senha para acesso ao banco se encontram no arquivo .env. É necessário que se crie uma base de dados dentro do MySQL com o nome 'usuarios'.

## Fazendo a migration para o banco de dados

Para que os dados sejam enviados ao banco de dados é necessário fazer a migration, para isso basta rodar o seguinte comando.

```sh
php artisan migrate:fresh
```
Ao rodar esse comando ele irá enviar a estrutura da tabela para a base de dados.

## Usando a aplicação

Ao usar a aplicação é necessário que vá ao link localhost/public, depois só é preencher os dados e ao finalizar cheque seu banco de dados e veja se os dados foram preenchidos da maneira correta.