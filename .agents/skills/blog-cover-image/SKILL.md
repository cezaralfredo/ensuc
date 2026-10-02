---
name: blog-cover-image
description: Protocolo de geração e curadoria de imagens conceituais de capa para os artigos do Blog ENSUC, alinhadas ao tema textual e à identidade visual da marca.
---

# Skill: Geração de Capas Visuais para o Blog ENSUC

Esta skill define as diretrizes estéticas, técnicas e de engenharia de prompt para gerar imagens de capa originais e de alto impacto para cada publicação do Blog da ENSUC, utilizando a ferramenta nativa de geração visual.

---

## Quando Executar Esta Skill

Sempre que:
1. Um novo artigo for planejado ou redigido para `src/content/blog/`.
2. Um artigo existente estiver sem imagem ou com imagem genérica (`/og-image.png`).
3. For necessário atualizar a identidade visual do acervo de artigos.

---

## 1. Diretrizes de Composição e Identidade Visual (Branding ENSUC)

Para manter a consistência visual em todo o portal, cada imagem gerada DEVE obedecer aos seguintes pilares:

* **Proporção:** `16:9` (otimizada para OpenGraph, Google Discover, LinkedIn e Twitter Cards).
* **Paleta de Cores:**
  * Verde-floresta escuro profundo (`#060e09` a `#0f2b17`).
  * Luz dourada quente natural do amanhecer ou entardecer (*golden hour*, `#c9a84c`).
  * Atmosfera orgânica, neblina sutil matinal ou raios solares (*god rays*) filtrados pelas árvores.
* **Estilo Artístico:** Fotografia cinematográfica realista em ultra-alta definição (8k, câmera profissional Hasselblad ou drone aéreo comercial de alta fidelidade).
* **Sem Tipografia ou Letras:** **NUNCA** incluir textos, títulos, slogans, logos ou marcas d'água desenhados sobre a imagem. Isso garante visual limpo e permite que a mesma imagem seja compartilhada de forma elegante entre as versões em Português, Inglês e Espanhol.

---

## 2. Leitura Semântica do Artigo & Construção do Conceito

A imagem deve representar conceitualmente o assunto central do artigo:

| Eixo Temático | Conceito Visual Recomendado |
| :--- | :--- |
| **Monetização de Terras / Fazendas / PAA** | Vista aérea panorâmica conectando uma lavoura sustentável ou pastagem com uma densa e intocada Reserva Legal nativa, com luz de fim de tarde. |
| **Biomas Específicos (Cerrado, Caatinga, etc.)** | Paisagem cinematográfica representativa do bioma com árvores retorcidas típicas, vegetação resiliente ou cânions sob luz dourada suave. |
| **Cotação, Preços & Mercado Regulado (SBCE)** | Visual conceitual de alta tecnologia verde: florestas tropicais densas integradas com feixes sutis de luz solar ou representação orgânica de valor e preservação. |
| **Transição Energética, SAF & Indústria Limpa** | Infraestrutura moderna verde (ex: turbina de avião elegante ou porto limpo ao longe) integrada harmonicamente com a natureza intocada. |

---

## 3. Protocolo de Execução com a Ferramenta

1. **Definir o Nome Semântico:**
   * Utilizar a convenção: `artigo-[slug-do-post].png`
2. **Executar a Geração:**
   * Chamar `generate_image` com:
     * `AspectRatio: '16:9'`
     * `ImageName: 'artigo-[slug]'` (ou formato suportado)
     * `Prompt`: Prompt descritivo detalhado em inglês (para maior precisão dos modelos de difusão), descrevendo o ângulo, iluminação, paleta `#060e09` / `#c9a84c` e atmosfera sem textos.
3. **Mover para o Diretório do Blog:**
   * Salvar a imagem gerada em `public/images/blog/artigo-[slug].png` (ou `.webp`).
4. **Vinculação no Frontmatter:**
   * Garantir que no arquivo `src/content/blog/artigo-[slug].md` (e nos irmãos `-en.md` e `-es.md`) conste:
     ```yaml
     image: "/images/blog/artigo-[slug].png"
     ```
