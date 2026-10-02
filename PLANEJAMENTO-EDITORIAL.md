# Planejamento Editorial & Protocolo do Blog ENSUC

Este documento governa a esteira de pesquisa, redação, geração de imagens e publicação do Blog da ENSUC, garantindo rigor técnico, otimização para o Google Search Console (GSC) e **proteção ativa contra duplicidade e canibalização de conteúdo**.

---

## 1. Calendário e Frequência (Modo Assistido — 3x por semana)

| Dia da Semana | Macro-Tema | Clusters do GSC Alvo | Página de Conversão no Site |
| :--- | :--- | :--- | :--- |
| **🗓️ Segunda-feira** | **Cotação, Preços & Mercado Financeiro** | `cotação credito de carbono`, `quanto vale um credito de carbono`, `crédito de carbono valor`, `mercado de carbono no mundo` | [Simulador de Carbono](/simulador) |
| **🗓️ Quarta-feira** | **Regulação, SBCE & Políticas Públicas** | `mercado regulado de carbono`, `mercado de carbono no brasil`, `mercados de carbono`, Lei 15.042, decretos | [Mercado](/mercado) e [Marco Legal](/marco) |
| **🗓️ Sexta-feira** | **Monetização de Terras & Biomas** | `venda de carbono`, `+venda +carbono`, `bioma brasil`, `bioma brasileiro`, `compensar emissões de carbono` | [PAA - Projetos Ambientais](/paa) e [Biomas](/biomas) |

---

## 2. Protocolo Anti-Duplicidade e Anti-Canibalização (Obrigatório)

Para evitar conteúdo repetido e penalizações de SEO no Google:

1. **Varredura Prévia Obrigatória:** Antes de criar qualquer novo artigo, o agente DEVE listar e ler os títulos, palavras-chave e slugs já existentes em `src/content/blog/` e consultar a tabela de histórico abaixo.
2. **Palavra-Chave Primária Única:** Não podem existir dois artigos disputando a mesma palavra-chave exata como foco principal. Se a palavra principal já foi usada, o novo artigo deve obrigatoriamente focar em uma variação *long-tail* ou ângulo derivado.
3. **Diferenciação de Ângulo Editorial:**
   * Se já existe um post sobre regulação geral, o próximo deve focar em um setor específico (ex: agronegócio, siderurgia) ou numa data/marco temporal novo.
   * Se já existe um post sobre cotação, o próximo deve comparar valores entre biomas ou metodologias (reflorestamento vs. conservação).
4. **Proteção de Slug:** O arquivo `.md` em `src/content/blog/` deve ter slug inédito (ex: `artigo-[tema-especifico]-[ano-ou-foco].md`).
5. **Atualização do Registro:** Assim que um artigo for publicado, ele deve ser imediatamente registrado na tabela abaixo.

---

## 3. Histórico de Publicações Realizadas

| Data | Slug | Palavra-Chave Primária | Título do Artigo | Categoria / Foco |
| :--- | :--- | :--- | :--- | :--- |
| 2026-06-30 | `artigo-redd-panorama-biomas` | `REDD+ biomas brasileiros` | REDD+ e o potencial dos biomas brasileiros | Biomas / Conservação |
| 2026-07-14 | `artigo-esg-e-creditos-de-carbono-na-pratica` | `ESG e créditos de carbono` | ESG e créditos de carbono na prática: do inventário ao relatório | ESG / Empresas |
| 2026-07-28 | `artigo-mercado-de-carbono-brasil-2026` | `mercado de carbono brasil 2026` | Mercado de carbono no Brasil em 2026: o que mudou e o que esperar | Mercado / SBCE |
| 2026-08-27 | `artigo-guia-mercado-credito-carbono-brasil` | `guia crédito de carbono propriedades rurais` | Mercado de Crédito de Carbono: Guia para Propriedades Rurais | Produtores / PAA |
| 2026-09-30 | `artigo-cotacao-credito-carbono-2026`<br>*(+ versões `-en` e `-es`)* | `cotação credito de carbono` / `carbon credit price` / `cotización` | Cotação do Crédito de Carbono: Quanto Vale 1 tCO₂e em 2026? *(Trilíngue PT/EN/ES)* | Mercado / Cotação Global |
| 2026-10-02 | `artigo-venda-de-carbono-propriedades-rurais-florestas`<br>*(+ versões `-en` e `-es`)* | `venda de carbono` / `crédito de carbono propriedades rurais` | Venda de Carbono em Áreas Rurais: Guia de Monetização Florestal *(Trilíngue PT/EN/ES)* | Produtores & Terras / PAA |

---

## 4. Fila de Próximas Pautas (Sem Duplicidade / Foco no GSC)

| Data Prevista | Dia | Palavra-Chave GSC Alvo | Pauta Proposta & Ângulo Inédito | CTA de Conversão |
| :--- | :--- | :--- | :--- | :--- |
| **Próxima** | **Segunda** | `bioma brasil` / `bioma brasileiro` | **Biomas Brasileiros e a Geração de Créditos: Por Que a Caatinga e o Cerrado Estão Ganhando Espaço**<br>*(Ângulo: além da Amazônia — o potencial inexplorado dos biomas secos e savânicos).* | `/biomas` |
| **Seguinte** | **Quarta** | `mercado regulado de carbono` | **Mercado Regulado de Carbono (SBCE): Prazos de Transição e Impacto para Empresas Acima de 25k tCO₂e**<br>*(Ângulo: governança corporativa, penalidades de descumprimento e estratégias de antecipação).* | `/mercado` e `/marco` |

---

## 5. Portfólio de Fontes para Pesquisa

* **Regulação & Política:** Agência Senado, Agência Câmara, Diário Oficial da União, Ministério da Fazenda, Ministério do Meio Ambiente.
* **Mercado Nacional & Agro:** EPBR, Valor Econômico (ESG), Notícias Agrícolas, Canal Rural, CEBDS, FGVces, B3.
* **Padrões Globais & Preços:** Ecosystem Marketplace, Carbon Pulse, Verra (VCS), Gold Standard, BloombergNEF, S&P Global Platts.

---

## 6. Padrão Visual das Capas (Imagens)

* **Proporção:** 1200x630 pixels.
* **Armazenamento:** `public/images/blog/` com nome semântico (ex.: `cotacao-credito-carbono-2026.png`).
* **Estilo:** Imagem conceitual cinematográfica (dossel de florestas brasileiras em vista aérea, tons de verde escuro floresta `#060e09` e dourado `#c9a84c`, névoa matinal sutil, sem tipografia desenhada na imagem).
