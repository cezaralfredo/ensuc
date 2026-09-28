---
name: ensuc-design
description: Recreate the ENSUC design language (UI/UX) when building new pages or sections for the ENSUC carbon-market project. Use when creating new HTML pages, landing sections, components, or redesigning existing ones that must match the visual identity of ensuc.html. Contains design tokens, layout rules, interaction patterns, and code conventions.
---

# ENSUC Design Language — UI/UX Guide

This skill codifies the visual identity of `ensuc.html` (a B2B carbon-market
landing page, PT-BR). When building any new page for this project, replicate
this design language. Follow the tokens, layout rules, interaction patterns and
conventions below **exactly** — consistency is the product.

## 1. Visual Identity Summary

- **Vibe**: Premium / institucional / editorial-luxo. Floresta + ouro sobre
  fundo quase-preto. Seriedade de mercado financeiro aplicada a sustentabilidade.
- **Paleta**: verde-escuro profundo (fundo), verde floresta (camadas),
  dourado (destaque/CTA), off-white (texto), cinza-verde (texto secundário).
- **Contraste de voz**: títulos serifados (Playfair Display, peso 900, itálico
  dourado em palavras-chave) × corpo sem serifa leve (DM Sans 300).

## 2. Design Tokens (CSS Custom Properties)

Fonte canônica de tokens — `:root` em `ensuc.html:14-22`. Copie fielmente:

```css
:root{
  --deep:#060e09;  /* fundo geral (quase preto-verde) */
  --forest:#0d1f15;/* fundo de cards / camadas altas */
  --dark:#142a1d;  /* fundo de seções alternadas / forms */
  --green:#1e4d35; /* realce de hover / boxes de resultado */
  --mid:#2d6a4f;   /* sucesso / estados confirmados */
  --light:#52b788;
  --gold:#c9a84c;  /* CTA primário / destaques / ícones */
  --gold2:#e8c55a; /* hover de CTA */
  --gold3:#f2dfa0;
  --white:#f4f0e8; /* texto principal (off-white, NÃO branco puro) */
  --gray:#8a9e8f;  /* texto secundário */
  --border:rgba(201,168,76,0.18); /* bordas douradas translúcidas */
  --fd:'Playfair Display',Georgia,serif; /* títulos */
  --fa:'Oswald',sans-serif;              /* labels/nav/números/CTA */
  --fb:'DM Sans',system-ui,sans-serif;   /* corpo */
  --nav:72px;
  --tr:0.3s cubic-bezier(0.4,0,0.2,1);   /* transição padrão */
}
```

Regras do tema (ensuc.html:10-26):
- Reset: `*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}`.
- `html{scroll-behavior:smooth;font-size:16px}`.
- `body{background:var(--deep);color:var(--white);font-weight:300;line-height:1.6}`.
- Scrollbar fina (5px), trilho `--forest`, polegar `--gold`.

## 3. Tipografia — quando usar cada fonte

| Papel | Fonte | Uso |
|---|---|---|
| Títulos de seção | `--fd` Playfair, `font-weight:900`, itálico dourado | `.sh2`, `.hero-h1` |
| Labels / nav / CTAs / números | `--fa` Oswald, `uppercase`, `letter-spacing:.1em–.3em` | `.stag`, `.nav-links a`, `.btn-p`, `.impact-num` |
| Corpo | `--fb` DM Sans, peso 300, `color:var(--gray)` | parágrafos, cards |

Convenções recorrentes:
- Destaque dourado em palavras-chave: `<em style="font-style:italic;color:var(--gold)">` (ou classe `.sh2 em`).
- Tag de seção: `.stag` — Oswald .7rem, uppercase, `letter-spacing:.3em`, dourado, com linha decorativa `::before` (24px × 1px).
- Título de seção: `.sh2` — `font-size:clamp(2rem,4vw,3.2rem)`, `font-weight:900`, `line-height:1.1`, `letter-spacing:-.02em`.

## 4. Layout & Grid System

- **Espaçamento vertical de seções**: `padding:100px 5%` (padrão) ou `80px 5%` (seções menores).
- **Seções alternadas de fundo**: alternar `transparent` (--deep) ↔ `var(--dark)`,
  sempre com `border-top/bottom:1px solid var(--border)` nas transições.
- **Grids de cards com linhas divisórias**: `display:grid;grid-template-columns:...;gap:1px;background:var(--border);border:1px solid var(--border)`. Cada card tem `background:var(--forest)`. Isso cria a grade dourada fina característica.
  - servicos: `repeat(4,1fr)` → `2fr` @1100px → `1fr` @768px.
  - mkt: `repeat(3,1fr)` → `1fr` @768px.
  - blog: `2fr 1fr 1fr` → `1fr 1fr` @1100px → `1fr` @768px.
- **Split de colunas igualitárias** (2 lados): `#dois-lados{display:grid;grid-template-columns:1fr 1fr}`, colapsa p/ `1fr` @768px.
- **Formulários / conteúdo**: grids `1fr 1fr` com `gap:80px`, colapsam @768px `gap:40px`.
- **Barra de impacto (números)**: `repeat(4,1fr)`, itens com `border-right:1px solid var(--border)` (exceto último), @768px `repeat(2,1fr)`.

## 5. Componentes Padrão

### Botões
```css
.btn-p{ /* primário dourado */
  background:var(--gold);color:var(--deep);
  font-family:var(--fa);font-size:.85rem;font-weight:600;
  letter-spacing:.1em;text-transform:uppercase;
  padding:16px 32px;border-radius:2px;border:none;
  transition:all var(--tr);cursor:pointer;
}
.btn-p:hover{background:var(--gold2);transform:translateY(-2px);box-shadow:0 12px 32px rgba(201,168,76,.35);}
```
```css
.btn-o{ /* outline */
  background:transparent;color:var(--white);border:1px solid rgba(244,240,232,.2);
  font-family:var(--fa);font-size:.85rem;font-weight:400;letter-spacing:.1em;text-transform:uppercase;
  padding:16px 32px;border-radius:2px;transition:all var(--tr);cursor:pointer;
}
.btn-o:hover{border-color:var(--gold);color:var(--gold);transform:translateY(-2px);}
```
Regras: `border-radius:2px` (sempre cantos levemente quadrados — NUNCA arredondados), `letter-spacing:.1em`, uppercase, seta `→` opcional.

### Card genérico
`background:var(--forest)`, `padding:40px 32px`, hover escurece (`--dark` ou `--green`),
borda-inferior dourada animada via `::before` (`transform:scaleX(0→1)`).

### Nav
- Fixa (`position:fixed;height:var(--nav);z-index:1000`), transparente → `.scrolled` (`rgba(6,14,9,.96)` + blur 20px).
- Links: Oswald uppercase, `--gray`, underline dourado `scaleX(0→1)` no hover.
- CTA gold à direita, seletor de idioma PT/EN/ES, hamburger @768px (menu dropdown em coluna).

### Números grandes (impact counters)
`.impact-num`: Oswald 700, `clamp(1.8rem,3.5vw,2.8rem)`, dourado, com animação de contagem no scroll.

### Seções com "big number" decorativo
`.lado-bignum`: Oswald 8rem, `color:rgba(201,168,76,.07)`, posicionado absoluto no canto superior direito (dica de fundo, sutil).

### Forms
- Container: `background:var(--dark);border:1px solid var(--border);padding:44px`.
- Labels: Oswald .7rem uppercase `--gray`; inputs `background:var(--forest)`, borda `--border`, foco muda borda p/ `--gold`.
- `border-radius:0` nos inputs; `-webkit-appearance:none`.

### Sliders (calculadora)
`input[type=range]`: trilha 2px `--border`, thumb circular 16px dourado com `box-shadow:0 0 8px rgba(201,168,76,.4)`.

### Badges / selos
`.pbadge`: `background:var(--forest);border:1px solid var(--border)`, Oswald uppercase, hover borda+texto dourados.

## 6. Interações & Micro-animações

| Padrão | Implementação |
|---|---|
| Reveal on scroll | Classe `.rv` (opacity:0;translateY(40px)) + `.rv.on` via `IntersectionObserver` (threshold:.1) |
| Contadores | Elementos `[data-t]` + observer, animação com `setInterval`, sufixo/prefixo via `data-sfx`/`data-pfx` |
| Particles hero | divs 2px douradas, `@keyframes flt` (sobe e desvanece), 28 elementos gerados por JS |
| Hover cards | fundo muda + linha dourada `scaleX` (card) ou `gap` aumenta (CTA de card) |
| Tabs | `.htab.active` = fundo gold/texto deep; conteúdo `.on` display grid |
| Pulse | `.logo-dot` 8px dourado `@keyframes pulse` (escala 1→1.6) |
| Scroll indicator | linha vertical com gradiente dourado, animação `sa` |
| Grid background hero | `linear-gradient` dourado 4% a cada 60px |
| Números decorativos | `8rem` com opacidade 7% (texto "fantasma") |

Regra de ouro de motion: **uma transição única global** `--tr:0.3s cubic-bezier(0.4,0,0.2,1)` — usar sempre, nunca introduzir easings divergentes.

## 7. Responsividade (Breakpoints)

- `@media(max-width:1100px)`: grids de 4→2 col, blog 3→2, footer 4→2.
- `@media(max-width:768px)`: TUDO colapsa p/ 1 col (exceto impacto→2 e steps→2);
  nav vira hamburger; `.frow` form → 1 col.

## 8. Convenções de Código (imprescindíveis)

1. **CSS em `<style>` no `<head>`**, JS em `<script>` no fim do `<body>` — página single-file.
2. **Mobile-first não é exigido, mas breakpoints fixos acima são obrigatórios.**
3. **CSS minificado em produção**: sem espaços extras, `{a:b;c:d;}` — estilo compacto.
4. **i18n obrigatória**: cada texto traduzível recebe `data-k="chave"`; dicionário `T={pt,en,es}`; `setLang()` troca conteúdo. Para páginas novas, manter o mesmo mecanismo.
5. **`clamp()` para tipografia fluida** em títulos e números.
6. **Sempre hover states** em qualquer elemento clicável; nenhum botão sem `cursor:pointer`.
7. **Nunca usar emojis fora do contexto de ícone** de seção (ex.: 📧 📍 🕐 🌳).

## 9. Checklist de UI/UX ao criar nova página

- [ ] Usa tokens `:root` exatos (copiar do ensuc.html:14-22).
- [ ] 3 fontes carregadas (Google Fonts): Playfair Display, Oswald, DM Sans.
- [ ] Título de seção = `.stag` (tag) + `.sh2` (título, com `<em>` dourado).
- [ ] Seções alternam `--deep`/`--dark` com bordas `--border`.
- [ ] Grids de cards usam o truque `gap:1px;background:var(--border)`.
- [ ] Botões são `.btn-p`/`.btn-o` (radius 2px, uppercase, letter-spacing .1em).
- [ ] Reveal `.rv` nos blocos abaixo da dobra.
- [ ] Contadores `[data-t]` quando houver métricas.
- [ ] Mobile @768px colapsa tudo p/ 1 col; hamburger no nav.
- [ ] Textos com `data-k` registrados no dicionário `T` p/ pt/en/es.
- [ ] Hover em todo elemento clicável; `cursor:pointer` sempre.
