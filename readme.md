# Teste Zimut

## Stack

0 - Laravel 5.7
>
1 - Bootstrap 4
>
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

* Instale o [Composer](https://getcomposer.org/download/) também.

## Configurando XAMPP

Ao instalar o XAMPP vá na aba config do serviço Apache e abra o arquivo httpd.conf, lá você vai mudar o caminho do "DocumentRoot" e "Directory" para o caminho do diretório baixado. Nesse mesmo arquivo cheque se a porta que o serviço está escutando é a 80, para isso procure por "Port" dentro do arquivo.

## Usando o XAMPP

Os serviços necessários para usar a aplicação serão o Apache e o MySQL, para saber se os serviços estão funcionando no navegador acesse localhost e localhost/phpmyadmin. O usuário e a senha para acesso ao banco se encontram no arquivo .env. É necessário que se crie uma base de dados dentro do MySQL com o nome 'usuarios'.

### Arquivo config.inc

No diretório onde foi baixado o XAMPP, na pasta phpMyAdmin existe um arquivo chamado config.inc, caso no primeiro acesso dê algum erro certifique-se que os campos a seguir estejam preenchidos da seguinte forma.

```sh
$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'root';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['controluser'] = 'root';
$cfg['Servers'][$i]['controlpass'] = 'pma';
```

## Fazendo a migration para o banco de dados

Para que os dados sejam enviados ao banco de dados é necessário fazer a migration, para isso basta rodar o seguinte comando.

```sh
php artisan migrate:fresh
```
Ao rodar esse comando ele irá enviar a estrutura da tabela para a base de dados.

* Caso ao rodar o comando o mesmo retorne um erro vá ao console do mysql e na sessão Contas de usuário selecione o usuário root com hostname 'localhost' e na parte de ações edite seus privilégios, nessa aba existe a opção alterar palavra-passe, nela você irá colocar a senha root e confirmá-la, depois basta finalizar no botão executar.

## Usando a aplicação

Ao usar a aplicação é necessário que vá ao link localhost/public, depois só é preencher os dados e ao finalizar cheque seu banco de dados e veja se os dados foram preenchidos da maneira correta.

* Para rodar os comandos eu utilizei o bash do git, então recomendo que quem for utilizar a aplicação que utilize este mesmo terminal.
