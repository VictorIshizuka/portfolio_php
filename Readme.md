# 💼 Portfólio - Victor Rosário Ishizuka
<img width="1859" height="601" alt="image" src="https://github.com/user-attachments/assets/86053095-4a0c-4c95-a0b8-d4aefd8fadf6" />
Site: https://portfolio-victor-ishizuka.wuaze.com

Portfólio pessoal simples e profissional desenvolvido com PHP puro e Tailwind CSS, showcasing projetos e experiências como Desenvolvedor Full Stack.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)

## 🎯 Sobre o Projeto

Este é um portfólio minimalista focado em apresentar minhas experiências profissionais e projetos de forma clara e objetiva. O projeto foi desenvolvido com foco em simplicidade, performance e facilidade de manutenção.

**Versão Atual:** 1.0.0 - MVP

**Status:** ✅ Funcional e pronto para uso

## 🚀 Tecnologias Utilizadas

### Stack Atual

* **PHP** - Linguagem principal
* **Tailwind CSS** - Framework CSS via CDN
* **HTML5** - Estruturação semântica
* **Google Fonts** - Tipografia (Asap, Inconsolata, Maven Pro)

### Estrutura do Projeto

```
portfolio/
├── index.php                 # Página principal
├── components/
│   ├── header.php           # Cabeçalho com foto e apresentação
│   ├── projetos.php         # Seção de projetos (profissionais + pessoais)
│   ├── footer.php           # Rodapé com contatos
│   └── data/
│       └── projects-data.php # Dados dos projetos e cores das tecnologias
├── assets/
│   └── images/              # Imagens (foto de perfil, screenshots)
└── README.md                # Este arquivo
```

## 📋 Funcionalidades Atuais

### ✅ Implementado

* [X] Header responsivo com foto de perfil circular
* [X] Apresentação pessoal com cargo e descrição
* [X] Tags de tecnologias com cores personalizadas
* [X] Seção de Experiências Profissionais (timeline vertical)
* [X] Seção de Projetos Pessoais (grid responsivo)
* [X] Footer com links de contato (LinkedIn, Email, WhatsApp, GitHub)
* [X] Totalmente responsivo (mobile-first)
* [X] Efeitos hover e transições suaves
* [X] Separação de dados em arquivos externos

## 🛠️ Como Executar

### Requisitos

* PHP 7.4 ou superior
* Servidor web (Apache, Nginx) ou PHP built-in server

### Instalação

1. Clone o repositório

```bash
git clone https://github.com/VictorIshizuka/portfolio_php.git
cd portfolio_php
```

2. Configure suas informações pessoais:

**`components/header.php`**

```php
$photo_url = "/assets/images/sua-foto.jpg";
$subtitle_name = 'Sua apresentação aqui';
```

**`components/footer.php`**

```php
$contact_info = [
  "email" => "seu-email@exemplo.com",
  "whatsapp" => "5541999887766", // DDI + DDD + número
];
```

**`components/data/projects-data.php`**

* Adicione/edite seus projetos profissionais e pessoais

3. Execute o servidor local:

```bash
php -S localhost:8000
```

4. Acesse no navegador:

```
http://localhost:8000
```

## 🎨 Personalização

### Cores das Tecnologias

Edite o array `$tech_colors` em `components/data/projects-data.php`:

```php
$tech_colors = [
  "PHP" => "bg-indigo-600 text-white",
  "Laravel" => "bg-red-600 text-white",
  // ... adicione mais tecnologias
];
```

### Fontes

O projeto usa Google Fonts. Para alterar, edite as importações no header:

* **Asap** - Títulos (bold)
* **Inconsolata** - Código/Tags (monospace)
* **Maven Pro** - Textos descritivos

### Paleta de Cores

```css
Background principal: bg-slate-900
Cards: bg-slate-800
Bordas: border-slate-700
Texto primário: text-white
Texto secundário: text-gray-300 / text-gray-400
Acentos: blue-500, green-400, purple-500
```

## 🗺️ Roadmap - Funcionalidades Futuras

### 📊 Fase 2 - Analytics & Tracking

* [ ] Dashboard administrativo
* [ ] Contador de visitas
* [ ] Estatísticas de visualizações por projeto
* [ ] Rastreamento de cliques nos botões de contato
* [ ] Gráficos de acessos (diário, semanal, mensal)
* [ ] Geolocalização de visitantes
* [ ] Dispositivos e navegadores mais usados

**Tecnologias para analise:**

* MySQL/PostgreSQL para armazenar dados
* Chart.js ou Recharts para gráficos
* Google Analytics ou Plausible (privacidade)

### 🔐 Fase 3 - Sistema de Autenticação

* [ ] Painel de administração
* [ ] Login seguro (sessões PHP ou JWT)
* [ ] Autenticação com OAuth (GitHub/LinkedIn)
* [ ] Sistema de permissões (admin/visitor)
* [ ] Proteção contra força bruta

**Tecnologias para analise:**

* PHP Sessions ou JWT
* bcrypt
* OAuth 2.0 (GitHub/LinkedIn API)

### 📝 Fase 4 - CMS para Projetos

* [ ] CRUD de projetos via painel admin
* [ ] Upload de imagens de projetos
* [ ] Editor de markdown para descrições
* [ ] Categorias e tags dinâmicas
* [ ] Ordenação drag-and-drop de projetos
* [ ] Publicação agendada
* [ ] Preview antes de publicar

**Tecnologias para analise:**

* Laravel (migração de PHP puro)
* TinyMCE ou SimpleMDE (editor markdown)
* Intervention Image (processamento de imagens)

### 🔗 Fase 5 - Integrações Externas

* [ ] Integração com GitHub API
  * [ ] Importar repositórios automaticamente
  * [ ] Exibir linguagens e stars
  * [ ] Sync de READMEs
  * [ ] Contribuições no último ano
* [ ] Integração com LinkedIn API
  * [ ] Importar experiências profissionais
  * [ ] Sincronizar certificações
  * [ ] Publicações e artigos
* [ ] RSS Feed do blog (se houver)
* [ ] Newsletter com Mailchimp/SendGrid

**Tecnologias para analise:**

* GitHub GraphQL API
* LinkedIn API v2
* Guzzle HTTP Client (PHP)

### 🎯 Fase 6 - Funcionalidades Avançadas

* [ ] Sistema de comentários ( sobre algum projeto o experiencia)
* [ ] Modo claro/escuro toggle
* [ ] Múltiplos idiomas (PT/EN)
* [ ] PWA (Progressive Web App)
* [ ] SEO otimizado
* [ ] Open Graph tags
* [ ] Sitemap.xml automático
* [ ] Cache de páginas
* [ ] CDN para assets

### 🧪 Fase 7 - Qualidade & DevOps

* [ ] Testes automatizados
  * [ ] PHPUnit para backend
  * [ ] Testes E2E com Cypress
* [ ] CI/CD com GitHub Actions
* [ ] Docker compose para desenvolvimento
* [ ] Linting e code style (PSR-12)
* [ ] Monitoramento de erros (Sentry)
* [ ] Backup automático do banco

### 📱 Fase 8 - Features Extras

* [ ] Formulário de contato com validação
* [ ] Captcha anti-spam
* [ ] Download de CV em PDF
* [ ] Timeline de carreira interativa
* [ ] Skills com nível de proficiência
* [ ] Depoimentos de clientes/colegas
* [ ] Certificações e cursos
* [ ] Calculadora de orçamento para projetos

## 💡  Tecnologias

### Backend

* **Laravel** - Framework PHP completo
* **Livewire** - Componentes dinâmicos sem JS
* **API REST** - Para futuro app mobile

### Frontend

* **Alpine.js** - Interatividade leve
* **React** - Para features mais complexas

### Banco de Dados

* **MySQL** - Relacional tradicional
* **PostgreSQL** - Mais recursos e performance
* **Redis** - Cache e sessões
* **MongoDB** - Para logs e analytics

### DevOps

* **Docker** - Containerização
* **GitHub Actions** - CI/CD
* **Vercel/Netlify** - Deploy fácil
* **DigitalOcean** - VPS para hospedar

## 📝 Boas Práticas a Implementar

### Código

* [ ] Padrão PSR-12 (PHP-FIG)
* [ ] Separação de responsabilidades (MVC)
* [ ] Validação de dados do usuário
* [ ] Sanitização de outputs (XSS)
* [ ] Prepared statements (SQL Injection)
* [ ] CSRF tokens em formulários

### Performance

* [ ] Lazy loading de imagens
* [ ] Minificação de CSS/JS
* [ ] Compressão Gzip
* [ ] Cache de queries
* [ ] CDN para assets estáticos

### Segurança

* [ ] HTTPS obrigatório
* [ ] Headers de segurança (CSP, HSTS)
* [ ] Rate limiting em formulários
* [ ] Logs de acesso e erros
* [ ] Backup regular do banco

## 📄 Licença

Este projeto está sob a licença MIT. Veja o arquivo "falta incluir license"para mais detalhes. ( verificar)

## 👤 Autor

**Victor Rosário Ishizuka**

* LinkedIn: [@victor-rosario-ishizuka](https://linkedin.com/in/victor-rosario-ishizuka)
* GitHub: [@VictorIshizuka](https://github.com/VictorIshizuka)
* Email: victorishizuka@outlook.com

---

⭐ **Versão Atual (MVP):** Este portfólio já está funcional e atende seu propósito! As funcionalidades futuras são ideias para praticar e evoluir o projeto ao longo do tempo.

💪 Desenvolvido com dedicação e café ☕
