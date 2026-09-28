# Guia Rápido: Como Publicar Artigos no Blog ENSUC

Com a migração para o **Astro**, você não precisa mais mexer em código HTML complexo, schemas JSON-LD ou sitemaps manuais. Tudo é gerado e publicado automaticamente a partir de arquivos **Markdown (`.md`)**.

---

## 1. Passo a Passo para Criar um Novo Artigo

1. Vá até a pasta `src/content/blog/`.
2. Crie um novo arquivo com o nome desejado usando hífens (ex: `artigo-novo-marco-carbono-2027.md`).
   > **Nota:** Começar o nome do arquivo com `artigo-` garante que a URL do seu post fique limpa e padronizada (ex: `ensuc.com.br/artigo-novo-marco-carbono-2027`).
3. Cole o cabeçalho obrigatório (frontmatter) no topo do arquivo:

```markdown
---
title: "Título do Artigo com Rigor Editorial"
description: "Resumo objetivo de 1 a 2 linhas que aparecerá no Google, no card do blog e nas redes sociais."
datePublished: 2026-10-15
author: "ENSUC Soluções Ambientais"
badge: "Mercado & Regulação"
category: "Mercado"
readTime: "5 min de leitura"
keywords: "mercado de carbono, SBCE, créditos florestais, ESG"
---

Escreva aqui a introdução do seu artigo.

## Primeiro Subtítulo

Texto explicativo com parágrafos bem espaçados. Você pode destacar termos em **negrito** e citar pontos importantes.

* Item com marcadores importantes
* Outro ponto técnico relevante

> Citações ou frases de impacto para destacar o compromisso climático.

## Conclusão e Oportunidades

Fechamento do tema e conexão com as soluções e serviços da ENSUC.
```

---

## 2. Como Fazer a Publicação Automática

Você pode publicar de **duas formas**:

### Opção A: Pelo Navegador (Direto no GitHub.com)
1. Acesse o seu repositório no GitHub.
2. Navegue até a pasta `src/content/blog/`.
3. Clique em **Add file** ➔ **Create new file**.
4. Digite o nome do arquivo (ex: `artigo-mercado-futuro.md`) e cole o texto em Markdown.
5. Clique no botão verde **Commit changes...** na branch `main`.
6. **Pronto!** O GitHub Actions compila o site e envia para o DirectAdmin em cerca de 1 a 2 minutos.

### Opção B: Pelo seu computador (VS Code / Git)
1. Crie ou edite o arquivo `.md` na pasta `src/content/blog/`.
2. Abra o terminal e envie:
   ```bash
   git add src/content/blog/
   git commit -m "feat: novo artigo sobre mercado futuro"
   git push origin main
   ```

---

## 3. Configuração dos Segredos FTP no Repositório do GitHub

Para o GitHub Actions conseguir enviar os arquivos para a sua hospedagem DirectAdmin, adicione os seguintes segredos no repositório:

1. No GitHub, abra seu repositório e vá em:  
   **Settings** ➔ **Secrets and variables** ➔ **Actions** ➔ **New repository secret**.
2. Cadastre as 4 chaves:

| Nome do Secret | O que colocar | Exemplo |
| :--- | :--- | :--- |
| `FTP_SERVER` | Endereço do servidor FTP | `ftp.ensuc.com.br` ou o IP do servidor |
| `FTP_USERNAME` | Usuário FTP do DirectAdmin | `contato@ensuc.com.br` ou usuário do painel |
| `FTP_PASSWORD` | Senha da conta FTP | `SuaSenhaForte123` |
| `FTP_SERVER_DIR` | Pasta do site no DirectAdmin | `public_html/` |

---

## 4. Testando o Site Localmente (Opcional)

Se quiser visualizar o blog ou qualquer página no seu computador antes de enviar:

```bash
# Iniciar servidor de desenvolvimento (acesso em http://localhost:4321)
npm run dev

# Testar o build estático final (gera a pasta dist/)
npm run build
```
