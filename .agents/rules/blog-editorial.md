---
description: Regras obrigatórias de governança editorial, prevenção de duplicidade e SEO para criação de artigos no blog ENSUC.
globs: ["src/content/blog/**", "PLANEJAMENTO-EDITORIAL.md"]
---

# Regras Editoriais e Protocolo Anti-Duplicidade do Blog ENSUC

Sempre que o usuário solicitar a pesquisa, redação ou publicação de um novo artigo para o Blog da ENSUC, o agente DEVE seguir impreterivelmente o protocolo abaixo:

## 1. Verificação Prévia e Pesquisa Obrigatória (Skill `blog-research`)
Antes de iniciar qualquer redação, o agente DEVE acionar a skill `blog-research` para:
1. **Auditoria Anti-Duplicidade e Integridade:** Inspecionar todos os arquivos existentes na pasta `src/content/blog/` e consultar o arquivo `PLANEJAMENTO-EDITORIAL.md`. Se o tema ou a palavra-chave primária já foram abordados, refinar obrigatoriamente o ângulo para uma variação *long-tail* complementar, garantindo slug inédito e ausência de canibalização no Google Search Console.
2. **Pesquisa Externa em Tempo Real:** Realizar busca na web em fontes de autoridade (Agência Senado, DOU, EPBR, Valor ESG, Verra, etc.) para enriquecer o texto com métricas recentes, legislações atualizadas e links confiáveis.

## 2. Rigor Técnico e Alinhamento com a Marca
1. **Público-alvo:** B2B qualificado (proprietários rurais, diretores de sustentabilidade/ESG, investidores institucionais, indústrias).
2. **Tom:** Sério, técnico, institucional e fundamentado em dados regulatórios e de mercado (Lei nº 15.042/2024, SBCE, padrões Verra/Gold Standard, tCO₂e).
3. **Conversão e Link Building Interno:** Todo artigo deve conter pelo menos 3 links contextuais para páginas internas de conversão da ENSUC:
   - Cotação/Preços ➔ `/simulador`
   - Fazendas/Propriedades Rurais ➔ `/paa`
   - Biomas/Conservação ➔ `/biomas`
   - Regulação/Compliance ➔ `/marco` ou `/mercado`
   - Finalização/Diagnóstico ➔ `/#contato`

## 3. Padrão de Metadados e SEO On-Page
* `title`: Entre 50 e 65 caracteres, contendo a palavra-chave primária.
* `description`: Entre 140 e 160 caracteres, persuasiva e direta.
* `readTime`: Estimativa realista (ex: "5 min de leitura").
* `badge` e `category`: Alinhados com os clusters (Mercado, Guia Rural, ESG, Biomas, Financiamento).
* `image`: Sempre apontar para caminho semântico em `/images/blog/artigo-[slug].png` ou `.webp`.

## 4. Geração de Imagem Conceitual de Capa (Skill `blog-cover-image`)
Para cada nova publicação, o agente DEVE invocar a skill `blog-cover-image` para conceber e gerar uma imagem artística cinematográfica original:
1. Proporção 16:9, paleta florestal (#060e09 / #c9a84c) e sem textos/tipografia desenhados sobre a imagem.
2. Salvar o arquivo gerado em `public/images/blog/artigo-[slug].png` (ou `.webp`).
3. Compartilhar a mesma imagem semântica nos metadados das três versões (PT, EN e ES).

## 5. Publicação Multilíngue Obrigatória (Inglês e Espanhol)
Sempre que um artigo principal em português for gerado em `src/content/blog/artigo-[slug].md`, o agente DEVE invocar a skill `blog-multilingual` e gerar imediatamente as versões correspondentes:
1. **Inglês:** `src/content/blog/artigo-[slug]-en.md` com terminologia B2B e clima em inglês.
2. **Espanhol:** `src/content/blog/artigo-[slug]-es.md` com terminologia equivalente em espanhol.
3. As três versões devem compartilhar os mesmos links de conversão, dados de data e referências semânticas de imagem, permitindo que o seletor de idiomas do header e as tags `hreflang` funcionem de forma sincronizada e sem links quebrados.

## 6. Registro no Calendário
Ao finalizar a publicação (incluindo as versões PT, EN e ES), registrar imediatamente a data, slug, título e palavra-chave primária na tabela de histórico em `PLANEJAMENTO-EDITORIAL.md`.
