---
description: Regras obrigatórias de governança editorial, prevenção de duplicidade e SEO para criação de artigos no blog ENSUC.
globs: ["src/content/blog/**", "PLANEJAMENTO-EDITORIAL.md"]
---

# Regras Editoriais e Protocolo Anti-Duplicidade do Blog ENSUC

Sempre que o usuário solicitar a pesquisa, redação ou publicação de um novo artigo para o Blog da ENSUC, o agente DEVE seguir impreterivelmente o protocolo abaixo:

## 1. Verificação Prévia Obrigatória (Prevenção de Duplicidade)
1. Inspecionar todos os arquivos existentes na pasta `src/content/blog/` e consultar o arquivo `PLANEJAMENTO-EDITORIAL.md`.
2. Verificar se o tema ou a palavra-chave primária pretendida já foram abordados em publicações anteriores.
3. Se o tema já foi coberto, o agente DEVE refinar o ângulo ou derivar para uma variação *long-tail* complementar, garantindo que não haja canibalização de palavras-chave no Google Search Console.
4. Garantir que o slug e o nome do arquivo sejam estritamente inéditos.

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

## 4. Registro no Calendário
Ao finalizar a publicação, registrar imediatamente a data, slug, título e palavra-chave primária na tabela de histórico em `PLANEJAMENTO-EDITORIAL.md`.
