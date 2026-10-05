---
name: blog-newsroom
description: Orquestrador da redação jornalística digital da ENSUC. Executa o ciclo completo desde a pesquisa investigativa, auditoria anti-duplicidade, criação da capa cinematográfica, redação executiva em PT e publicação multilíngue (EN/ES) com integridade de build.
---

# Skill: Redação Jornalística Digital ENSUC (`blog-newsroom`)

Esta skill é o **orquestrador mestre** da esteira editorial da ENSUC. Ela conduz de ponta a ponta a produção de uma matéria jornalística completa, ativando as skills especializadas e assegurando integridade conceitual, estética e de código.

---

## Fluxo da Esteira Editorial (Passo a Passo)

A execução da esteira jornalística divide-se em 6 fases encadeadas:

```
[1. Pauta & Radar] ➔ [2. Pesquisa & Anti-Duplicidade] ➔ [3. Direção de Arte / Capa]
         ↓
[4. Redação Jornalística PT] ➔ [5. Tradução Multilíngue EN/ES] ➔ [6. Build & Registro]
```

---

### Fase 1: Pauta e Radar Editorial
1. Consultar a data corrente e o calendário em `PLANEJAMENTO-EDITORIAL.md`:
   * **Segunda:** Cotação, Preços & Finanças Climáticas
   * **Quarta:** Regulação, SBCE, Políticas Públicas & Indústria
   * **Sexta:** Monetização de Terras, Biomas, Produtores Rurais & PAA
2. Definir o ângulo inédito da matéria do dia.

---

### Fase 2: Pesquisa Web & Auditoria Anti-Duplicidade (Skill `blog-research`)
1. **Auditoria de Integridade:**
   * Ler `src/content/blog/` e `PLANEJAMENTO-EDITORIAL.md`.
   * Assegurar que a palavra-chave primária e o slug `artigo-[slug].md` sejam 100% inéditos.
2. **Investigação Externa:**
   * Buscar na internet dados numéricos atualizados, referências a leis/normas recentes e 2 a 3 fontes externas conceituadas para citações com links.

---

### Fase 3: Direção de Arte e Capa Cinematográfica (Skill `blog-cover-image`)
1. Interpretar a tese central da matéria.
2. Formular o prompt conceitual focado em fotografia aérea/dossel realista, paleta `#060e09` / `#c9a84c`, luz solar quente matinal/vespertina e formato `16:9` sem qualquer texto na imagem.
3. Gerar a imagem e alocar em `public/images/blog/artigo-[slug].png` (ou `.webp`).

---

### Fase 4: Redação Jornalística em Português (`MANUAL-DE-REDACAO.md`)
1. Escrever o arquivo `src/content/blog/artigo-[slug].md` contendo:
   * **Frontmatter completo** (title, description, datePublished, author, image, badge, category, readTime, keywords).
   * **Lead jornalístico** forte e analítico.
   * **Box "Em Poucas Linhas":** 3 destaques executivos em bullet points (otimizado para síntese de IA/GEO).
   * **Diretriz GEO (Direct Answer):** Primeiras 2 linhas de cada seção respondendo de forma factual e citável a questão do subtítulo.
   * **Tabela de Dados:** Comparativo ou cronograma estruturado com números precisos.
   * **Links Internos ENSUC:** Mínimo de 3 links de conversão (`/simulador`, `/paa`, `/biomas`, `/marco`, `/mercado` ou `/#contato`).
   * **Links Externos:** 2 a 3 citações de fontes primárias de autoridade.

---

### Fase 5: Edição Internacional Multilíngue (Skill `blog-multilingual`)
1. Invocar a skill `blog-multilingual` para gerar os artigos irmãos:
   * `src/content/blog/artigo-[slug]-en.md` (Inglês técnico B2B).
   * `src/content/blog/artigo-[slug]-es.md` (Espanhol institucional).
2. Compartilhar a mesma imagem de capa, datas e estrutura de links internos para sincronia perfeita de navegação e hreflangs.

---

### Fase 6: Validação de Build e Registro Histórico
1. Executar `npm run build` para garantir que o compilador do Astro processa todas as rotas e schemas sem erro.
2. Atualizar a tabela de histórico de publicações em `PLANEJAMENTO-EDITORIAL.md`.
3. Notificar o usuário com o resumo da edição concluída.
