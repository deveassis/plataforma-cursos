# Plataforma de Cursos
# PROJETO DE ESTUDO (Criei este projeto baseado nos aprendizados da faculdade, o objetivo é praticar arquitetura e cloud.

Uma aplicação web de gerenciamento de cursos desenvolvida com **Laravel**, utilizando **Docker** para containerização e **MySQL** como banco de dados.

---

## 🔹 Tecnologias

- **Backend:** Laravel 10
- **Banco de Dados:** MySQL 8
- **Containerização:** Docker & Docker Compose
- **Outros:** PHP 8, Composer, NPM (opcional para frontend)

---

## 🚀 Requisitos

Antes de começar, certifique-se de ter instalado:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Composer](https://getcomposer.org/)
- PHP >= 8.1 (opcional para rodar Laravel fora do container)

---

## 🏗️ Estrutura do Projeto


---

## 🐳 Configuração do Docker

O `docker-compose.yml` contém três serviços principais:

1. **app** - Servidor PHP/Laravel
2. **db** - Banco de dados MySQL
3. **nginx** - Servidor web (opcional, caso queira separar do PHP)

Exemplo básico de `docker-compose.yml`:

```yaml
version: '3.8'

services:
  app:
    build:
      context: .
      dockerfile: docker/php/Dockerfile
    container_name: laravel-app
    volumes:
      - ./app:/var/www/html
    ports:
      - "8000:8000"
    depends_on:
      - db

  db:
    image: mysql:8
    container_name: laravel-mysql
    environment:
      MYSQL_DATABASE: cursos
      MYSQL_ROOT_PASSWORD: root123
      MYSQL_USER: user
      MYSQL_PASSWORD: user123
    ports:
      - "3306:3306"
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:

⚙️ Configuração do Laravel

Copie o arquivo .env.example para .env:

cp .env.example .env


Atualize as credenciais do banco no .env:

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=cursos
DB_USERNAME=user
DB_PASSWORD=user123


Instale dependências:

docker run --rm -v $(pwd)/app:/app composer install


Gere a chave da aplicação:

docker exec -it laravel-app php artisan key:generate


Rode as migrations:

docker exec -it laravel-app php artisan migrate

🚀 Executando a Aplicação

Inicie os containers:

docker-compose up -d


Acesse a aplicação no navegador:

http://localhost:8000

🧪 Comandos Úteis

Entrar no container Laravel:

docker exec -it laravel-app bash


Parar os containers:

docker-compose down


Visualizar logs do Laravel:

docker logs -f laravel-app


Rodar migrations ou seeders:

docker exec -it laravel-app php artisan migrate --seed

📚 Funcionalidades

Gerenciamento de cursos (CRUD)

Gerenciamento de alunos e matrículas

Dashboard administrativo

Autenticação de usuários (Laravel Breeze ou Jetstream opcional)

💡 Observações

Os dados do MySQL são persistidos via volume db_data do Docker.

Caso precise resetar o banco, basta remover o volume:

docker-compose down -v

👨‍💻 Autor

Gabriel Assis
Estudante e desenvolvedor full-stack
