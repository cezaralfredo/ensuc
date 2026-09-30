---
name: blog-multilingual
description: Protocolo e automação para tradução e criação de versões multilíngues (Inglês e Espanhol) para artigos do Blog ENSUC.
---

# Skill: Publicação Multilíngue do Blog ENSUC (PT, EN, ES)

Esta skill estabelece o fluxo obrigatório e automatizado para transformar cada postagem do Blog da ENSUC em um ativo trilíngue de alcance global, com indexação técnica e SEO internacional (hreflang).

## Quando Executar Esta Skill
Sempre que:
1. Um novo artigo for redigido e salvo em `src/content/blog/artigo-[slug].md`.
2. Um artigo existente em português precisar de suas versões traduzidas correspondentes em inglês e espanhol.
3. For solicitado auditar ou sincronizar as versões internacionais do blog.

---

## 1. Padrão de Nomenclatura e Roteamento

Para qualquer artigo base `artigo-[slug].md` (Português):
- **Português (Padrão):** `src/content/blog/artigo-[slug].md` ➔ URL canônica `/artigo-[slug]`
- **Inglês:** `src/content/blog/artigo-[slug]-en.md` ➔ URL canônica `/artigo-[slug]-en`
- **Espanhol:** `src/content/blog/artigo-[slug]-es.md` ➔ URL canônica `/artigo-[slug]-es`

O roteamento dinâmico em `src/pages/[slug].astro` e `src/layouts/ArticleLayout.astro` detecta o sufixo automaticamente e injeta:
- Atributo `<html lang="en">` ou `<html lang="es">`.
- Tags `hreflang` recíprocas (pt-BR, en, es, x-default).
- Schema.org Article com `inLanguage`.
- Header de navegação com alternador PT / EN / ES apontando para os artigos irmãos.

---

## 2. Regras de Tradução Técnica

### Terminologia Padrão B2B e Clima:
| Português | English | Español |
| :--- | :--- | :--- |
| Crédito de carbono | Carbon credit | Crédito de carbono |
| Cotação / Preço | Carbon price / pricing | Cotización / Precio de carbono |
| tCO₂e | tCO₂e | tCO₂e |
| Mercado Voluntário | Voluntary Carbon Market (VCM) | Mercado Voluntario de Carbono |
| Mercado Regulado | Compliance / Regulated Market | Mercado Regulado de Carbono |
| SBCE | SBCE (Brazilian Emissions Trading System) | SBCE (Sistema Brasileño de Comercio de Emisiones) |
| REDD+ | REDD+ (Reducing Emissions from Deforestation...) | REDD+ (Reducción de Emisiones por Deforestación...) |
| Restauração Florestal (ARR) | Afforestation, Reforestation & Revegetation (ARR) | Reforestación y Restauración Ecológica (ARR) |
| Biomassa e Sensoriamento Remoto | Biomass & Remote Sensing (LiDAR) | Biomasa y Sensores Remotos (LiDAR) |
| Propriedade Rural / Fazenda | Rural property / Landowner estate | Propiedad rural / Finca |
| Reserva Legal | Legal Reserve (Brazilian Forest Code) | Reserva Legal |
| CAR | Rural Environmental Registry (CAR) | Registro Ambiental Rural (CAR) |

### Preservação de Links Internos:
Mantenha os links para as páginas de conversão da ENSUC:
- Cotação/Preço ➔ `/simulador`
- Metodologia de Fazendas ➔ `/paa`
- Biomas Brasileiros ➔ `/biomas`
- Legislação/SBCE ➔ `/marco` ou `/mercado`
- Contato Comercial ➔ `/#contato`

---

## 3. Estrutura do Frontmatter

### Exemplo em Inglês (`artigo-[slug]-en.md`):
```yaml
---
title: "Carbon Credit Pricing: How Much is 1 tCO₂e Worth in 2026?"
description: "Understand carbon credit prices in Brazil and globally in 2026. Price ranges in voluntary and regulated (SBCE) markets and valuation drivers."
datePublished: 2026-09-30
author: "ENSUC Soluções Ambientais"
badge: "Pricing & Market"
category: "Market"
image: "/images/blog/artigo-[slug].jpg"
readTime: "6 min read"
keywords: "carbon credit price, how much is a carbon credit, carbon credit value 2026, tCO2e price, SBCE, voluntary carbon market, ENSUC"
---
```

### Exemplo em Espanhol (`artigo-[slug]-es.md`):
```yaml
---
title: "Cotización del Crédito de Carbono: ¿Cuánto Vale 1 tCO₂e en 2026?"
description: "Conozca el valor del crédito de carbono en Brasil y el mundo en 2026. Precios por tonelada en el mercado voluntario y regulado (SBCE) y factores clave."
datePublished: 2026-09-30
author: "ENSUC Soluções Ambientais"
badge: "Cotización y Mercado"
category: "Mercado"
image: "/images/blog/artigo-[slug].jpg"
readTime: "6 min de lectura"
keywords: "cotización crédito de carbono, cuánto vale un crédito de carbono, valor crédito de carbono 2026, precio tCO2e, SBCE, mercado voluntario, ENSUC"
---
```

---

## 4. Passo a Passo de Execução

1. **Leitura do Post Fonte:** Carregar o arquivo `src/content/blog/artigo-[slug].md`.
2. **Geração do Post em Inglês:** Criar `src/content/blog/artigo-[slug]-en.md` com tradução humana e técnica de alto nível.
3. **Geração do Post em Espanhol:** Criar `src/content/blog/artigo-[slug]-es.md` com tradução de rigor institucional.
4. **Verificação da Compilação:** Executar `npm run build` e confirmar a geração de:
   - `dist/artigo-[slug].html`
   - `dist/artigo-[slug]-en.html`
   - `dist/artigo-[slug]-es.html`
5. **Registro:** Atualizar o arquivo `PLANEJAMENTO-EDITORIAL.md` indicando as versões PT, EN e ES geradas.
