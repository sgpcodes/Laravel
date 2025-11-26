📄 README.md alinhado com os requisitos da avaliação
# 📦 Trabalho Avaliativo – Backend com PHP, Docker, Laravel e MySQL

Este projeto foi desenvolvido como parte do **Trabalho Avaliativo da disciplina de Backend**, cujo objetivo é criar um ambiente completo utilizando **Docker**, rodando uma aplicação **Laravel** conectada ao banco de dados **MySQL**, implementando um CRUD funcional sem alterar profundamente o front-end padrão do Laravel.

---

## 🎯 Objetivo do Projeto

O foco principal do trabalho é avaliar:

- Desenvolvimento backend com Laravel  
- Organização do projeto  
- Utilização correta do Docker  
- Integração com MySQL  
- Boas práticas em **Routes**, **Controllers**, **Migrations** e **Eloquent ORM**  
- Implementação completa das operações CRUD  

---

## 🐳 Tecnologias Utilizadas

- **Laravel 10**
- **PHP 8**
- **MySQL**
- **Docker + Docker Compose**
- **Nginx**
- **Blade Templates**

---

## 📂 Requisitos Entregues (Checklist)

✔ docker-compose.yml  
✔ Dockerfile  
✔ Projeto Laravel completo  
✔ Migration da tabela de categorias  
✔ Model Category  
✔ CategoryController  
✔ Rotas web configuradas  
✔ Views Blade (create, edit, index, show)  
✔ CRUD funcional de Categorias  

---

## 📁 Estrutura da Categoria

Cada categoria possui os seguintes campos:

- **id**
- **nome** (string)
- **descricao** (texto opcional)
- **created_at / updated_at**

---

## 🧩 Funcionalidades Implementadas

### ✔ Criar categoria  
Formulário Blade simples utilizando request padrão.

### ✔ Listar categorias  
Tabela com todas as categorias cadastradas.

### ✔ Editar categoria  
Formulário carregado com os dados existentes.

### ✔ Excluir categoria  
Confirmação de exclusão e remoção permanente.

---

## ⚙️ Como Rodar o Projeto com Docker

### 1. Subir os containers

```bash
docker-compose up -d

2. Acessar o container do Laravel
docker exec -it laravel_app bash


(nome pode variar dependendo do docker-compose)

3. Instalar dependências
composer install

4. Gerar a chave da aplicação
php artisan key:generate

5. Rodar as migrações
php artisan migrate

🌐 Acesso ao Sistema

O sistema estará disponível em:

http://localhost:8000/categories

