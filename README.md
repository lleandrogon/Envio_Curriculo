# Sistema de Recebimento de Currículos

Sistema desenvolvido em Laravel para processo seletivo que permite aos candidatos enviarem seus currículos.

---

## Descrição

Sistema desenvolvido em Laravel para processo seletivo, que permite aos candidatos enviarem seus currículos. Os dados são recebidos pelo RH através de e-mail com todas as informações do candidato.

---

## Tecnologias Utilizadas

- Laravel 10+
- Vite
- Bootstrap 5
- MySQL

---

## Pré-requisitos

Antes de executar o projeto, certifique-se de ter instalado:

- PHP 8.1 ou superior
- Composer
- Node.js 16+ e npm
- Servidor de banco de dados MySQL
- Servidor de e-mail para envio (Gmail, Mailtrap, etc.)

---

## Instalação e Configuração

### Instalar Dependências

```bash
git clone <url-do-repositorio>
cd nome-do-projeto
composer install
npm install
```

### Configurar Ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o arquivo `.env` com suas configurações:

```
APP_NAME="Sistema de Currículos"
APP_URL=http://localhost:8000

DB_DATABASE=nome_do_banco
DB_USERNAME=usuario
DB_PASSWORD=senha

# Configurações de E-mail (para envio ao RH)
MAIL_MAILER=smtp
MAIL_HOST=seu_host_smtp
MAIL_PORT=587
MAIL_USERNAME=seu_email
MAIL_PASSWORD=sua_senha
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=seu_email
MAIL_FROM_NAME="${APP_NAME}"

# Email do RH que receberá os currículos
RH_EMAIL=rh@empresa.com
```

> **Importante:** Para Gmail, é necessário gerar uma senha de app em [https://myaccount.google.com/apppasswords](https://myaccount.google.com/apppasswords)

### Configurar Banco de Dados

```bash
php artisan migrate
```

### Criar Link Simbólico do Storage

> **Passo fundamental:** É necessário criar um link simbólico para que os arquivos armazenados sejam acessíveis publicamente.

```bash
php artisan storage:link
```

Este comando cria um link simbólico da pasta `storage/app/public` para `public/storage`, permitindo o acesso público aos arquivos enviados.

### Executar o Sistema

```bash
npm run dev
php artisan serve
```

Acesse o sistema em: [http://localhost:8000](http://localhost:8000)

---

## Comandos Úteis

```bash
# Executar migrations
php artisan migrate

# Limpar cache
php artisan optimize:clear

# Desenvolvimento com hot reload
npm run dev

```

---

Projeto desenvolvido para processo seletivo.
