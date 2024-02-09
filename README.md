# Teste Prático Flip Saúde - Sistema de Gerenciamento de Tarefas em Laravel

Este é um sistema de gerenciamento de tarefas desenvolvido em Laravel, um framework PHP. Ele permite que os usuários criem, visualizem, atualizem e excluam tarefas. Além disso, o sistema garante a segurança das rotas usando autenticação e possui testes unitários para garantir a funcionalidade adequada.

## Requisitos

- PHP >= 7.3
- Composer
- Laravel CLI
- SQLite (para desenvolvimento e teste)

## Instalação

1. Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/rafalimao/flipsaude_teste


2. Acesse o diretório do projeto:

```bash
cd nome-do-projeto

3. Instale as dependências do Composer:

```bash
composer install

4. Copie o arquivo de ambiente:

```bash
cp .env.example .env

5. Gere a chave de aplicativo:

```bash
php artisan key:generate

6. Execute as migrações do banco de dados:

```bash
php artisan migrate

7. Inicie o servidor local:

```bash
Inicie o servidor local:


## Testes Unitários

Para executar os testes unitários, utilize o PHPUnit:

```bash
php artisan test

## Collection do Postman
Uma Collection do Postman está disponível para testar as APIs do sistema. Importe-a para o Postman e execute as requisições para testar todas as rotas.