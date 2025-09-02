<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>README - Sistema de Recebimento de Currículos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            padding: 20px;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        header {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .description {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .content {
            padding: 30px;
        }
        
        section {
            margin-bottom: 30px;
        }
        
        h2 {
            color: #4361ee;
            border-bottom: 2px solid #f0f0f0;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        
        h3 {
            color: #3a0ca3;
            margin: 15px 0 10px;
            font-size: 1.3rem;
        }
        
        .tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 15px 0;
        }
        
        .tech-item {
            background: #f0f4ff;
            padding: 10px 15px;
            border-radius: 8px;
            font-weight: 600;
            color: #4361ee;
            box-shadow: 0 4px 6px rgba(67, 97, 238, 0.1);
        }
        
        .prereq-list {
            list-style-type: none;
        }
        
        .prereq-list li {
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%234361ee" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg>') no-repeat left center;
            padding-left: 30px;
            margin-bottom: 10px;
            line-height: 1.8;
        }
        
        .code-block {
            background: #2d3748;
            color: #e2e8f0;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            margin: 15px 0;
            font-family: 'Fira Code', monospace;
        }
        
        .env-vars {
            background: #f8fafc;
            border-left: 4px solid #4361ee;
            padding: 15px 20px;
            margin: 15px 0;
        }
        
        .env-vars code {
            background: #edf2f7;
            padding: 2px 6px;
            border-radius: 4px;
            font-family: 'Fira Code', monospace;
        }
        
        .note {
            background: #fffbeb;
            border-left: 4px solid #f59e0b;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .warning {
            background: #fef2f2;
            border-left: 4px solid #ef4444;
            padding: 15px 20px;
            margin: 15px 0;
            border-radius: 0 8px 8px 0;
        }
        
        .steps {
            counter-reset: step-counter;
            list-style-type: none;
        }
        
        .steps li {
            counter-increment: step-counter;
            margin-bottom: 20px;
            padding-left: 50px;
            position: relative;
        }
        
        .steps li:before {
            content: counter(step-counter);
            position: absolute;
            left: 0;
            top: 0;
            background: #4361ee;
            color: white;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        
        footer {
            text-align: center;
            padding: 20px;
            background: #f8fafc;
            color: #64748b;
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .container {
                border-radius: 0;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>README - Sistema de Recebimento de Currículos</h1>
            <p class="description">Sistema desenvolvido em Laravel para processo seletivo que permite aos candidatos enviarem seus currículos.</p>
        </header>
        
        <div class="content">
            <section>
                <h2>Descrição</h2>
                <p>Sistema desenvolvido em Laravel para processo seletivo, que permite aos candidatos enviarem seus currículos. Os dados são recebidos pelo RH através de e-mail com todas as informações do candidato.</p>
            </section>
            
            <section>
                <h2>Tecnologias Utilizadas</h2>
                <div class="tech-list">
                    <div class="tech-item">Laravel 10+</div>
                    <div class="tech-item">Vite</div>
                    <div class="tech-item">Bootstrap 5</div>
                    <div class="tech-item">MySQL</div>
                </div>
            </section>
            
            <section>
                <h2>Pré-requisitos</h2>
                <p>Antes de executar o projeto, certifique-se de ter instalado:</p>
                <ul class="prereq-list">
                    <li>PHP 8.1 ou superior</li>
                    <li>Composer</li>
                    <li>Node.js 16+ e npm</li>
                    <li>Servidor de banco de dados MySQL</li>
                    <li>Servidor de e-mail para envio (Gmail, Mailtrap, etc.)</li>
                </ul>
            </section>
            
            <section>
                <h2>Instalação e Configuração</h2>
                
                <h3>Instalar Dependências</h3>
                <div class="code-block">
git clone &lt;url-do-repositorio&gt;
cd nome-do-projeto
composer install
npm install
                </div>
                
                <h3>Configurar Ambiente</h3>
                <div class="code-block">
cp .env.example .env
php artisan key:generate
                </div>
                
                <p>Edite o arquivo <code>.env</code> com suas configurações:</p>
                <div class="env-vars">
APP_NAME="Sistema de Currículos"<br>
APP_URL=http://localhost:8000<br><br>
DB_DATABASE=nome_do_banco<br>
DB_USERNAME=usuario<br>
DB_PASSWORD=senha<br><br>
# Configurações de E-mail (para envio ao RH)<br>
MAIL_MAILER=smtp<br>
MAIL_HOST=seu_host_smtp<br>
MAIL_PORT=587<br>
MAIL_USERNAME=seu_email<br>
MAIL_PASSWORD=sua_senha<br>
MAIL_ENCRYPTION=tls<br>
MAIL_FROM_ADDRESS=seu_email<br>
MAIL_FROM_NAME="${APP_NAME}"<br>
# Email do RH que receberá os currículos<br>
RH_EMAIL=rh@empresa.com
                </div>
                
                <div class="note">
                    <strong>Importante:</strong> Para Gmail, é necessário gerar uma senha de app em https://myaccount.google.com/apppasswords
                </div>
                
                <h3>Configurar Banco de Dados</h3>
                <div class="code-block">
php artisan migrate
                </div>
                
                <h3>Criar Link Simbólico do Storage</h3>
                <div class="warning">
                    <strong>Passo fundamental:</strong> É necessário criar um link simbólico para que os arquivos armazenados sejam acessíveis publicamente.
                </div>
                <div class="code-block">
php artisan storage:link
                </div>
                <p>Este comando cria um link simbólico da pasta <code>storage/app/public</code> para <code>public/storage</code>, permitindo o acesso público aos arquivos enviados.</p>
                
                <h3>Executar o Sistema</h3>
                <div class="code-block">
npm run dev
php artisan serve
                </div>
                
                <p>Acesse o sistema em: <a href="http://localhost:8000" target="_blank">http://localhost:8000</a></p>
            </section>
            
            <section>
                <h2>Configuração de E-mail</h2>
                <p>O sistema envia um e-mail para o RH com todos os dados do candidato e o currículo anexado. Configure as variáveis de e-mail no arquivo <code>.env</code> conforme mostrado acima.</p>
                
                <h3>Para testes com Mailpit (ambiente local):</h3>
                <div class="code-block">
# Instalar e executar Mailpit
mailpit
                </div>
                
                <p>Configurar o <code>.env</code>:</p>
                <div class="env-vars">
MAIL_MAILER=smtp<br>
MAIL_HOST=127.0.0.1<br>
MAIL_PORT=1025<br>
MAIL_USERNAME=null<br>
MAIL_PASSWORD=null<br>
MAIL_ENCRYPTION=null<br>
RH_EMAIL=rh@empresa.com
                </div>
                
                <p>Acesse o Mailpit em: <a href="http://localhost:8025" target="_blank">http://localhost:8025</a> para visualizar os e-mails enviados.</p>
            </section>
            
            <section>
                <h2>Comandos Úteis</h2>
                <div class="code-block">
# Executar migrations
php artisan migrate

# Limpar cache
php artisan optimize:clear

# Desenvolvimento com hot reload
npm run dev

# Build para produção
npm run build
                </div>
            </section>
        </div>
        
        <footer>
            <p>Projeto desenvolvido para processo seletivo</p>
        </footer>
    </div>
</body>
</html>